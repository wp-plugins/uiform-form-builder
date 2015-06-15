<?php
/**
 * Frontend
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2015 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://www.uiform.com/wordpress-form-builder
 */
if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}
if (class_exists('Uiform_Fb_Controller_Frontend')) {
    return;
}

/**
 * Controller Frontend class
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   Release: 1.00
 * @link      http://www.uiform.com/wordpress-form-builder
 */
class Uiform_Fb_Controller_Frontend extends Uiform_Base_Module {

    const VERSION = '1.2';

    private $formsmodel = "";
    private $model_formrecords = "";
    private $model_fields = "";
    private $wpdb = "";
    protected $modules;

    const PREFIX = 'wprofmr_';

    /**
     * Constructor
     *
     * @mvc Controller
     */
    protected function __construct() {

        $this->formsmodel = self::$_models['formbuilder']['form'];
        $this->model_formrecords = self::$_models['formbuilder']['form_records'];
        $this->model_fields = self::$_models['formbuilder']['fields'];
        global $wpdb;
        $this->wpdb = $wpdb;
        //Shortcodes
        add_shortcode('uiform', array(&$this, 'get_form_shortcode'));
        // ajax for verify recaptcha
        add_action('wp_ajax_rocket_front_checkrecaptcha', array(&$this, 'ajax_check_recaptcha'));
        add_action('wp_ajax_nopriv_rocket_front_checkrecaptcha', array(&$this, 'ajax_check_recaptcha'));
        // ajax refresh captcha
        add_action('wp_ajax_rocket_front_refreshcaptcha', array(&$this, 'ajax_refresh_captcha'));
        add_action('wp_ajax_nopriv_rocket_front_refreshcaptcha', array(&$this, 'ajax_refresh_captcha'));
        // ajax refresh captcha
        add_action('wp_ajax_rocket_front_valcaptcha', array(&$this, 'ajax_validate_captcha'));
        add_action('wp_ajax_nopriv_rocket_front_valcaptcha', array(&$this, 'ajax_validate_captcha'));
        // submit ajax mode
        add_action('wp_ajax_rocket_front_submitajaxmode', array(&$this, 'ajax_submit_ajaxmode'));
        add_action('wp_ajax_nopriv_rocket_front_submitajaxmode', array(&$this, 'ajax_submit_ajaxmode'));
    }

    public function ajax_submit_ajaxmode() {
        $resp = array();
        $this->process_form();



        if (!empty($_POST['_rockfm_submitted']) && intval($_POST['_rockfm_submitted']) > 0) {
            $resp['success'] = 1;
            $resp['show_message'] = (isset($_POST['_rockfm_onsubm_smsg'])) ? Uiform_Form_Helper::base64url_decode(Uiform_Form_Helper::sanitizeInput_html($_POST['_rockfm_onsubm_smsg'])) :
                    '<div class="rockfm-alert rockfm-alert-danger"><i class="fa fa-exclamation-triangle"></i> ' . __('Success! your form was submitted', 'frocket_front') . '</div>';
        } else {
            $resp['success'] = 0;
            $resp['show_message'] = '<div class="rockfm-alert rockfm-alert-danger"><i class="fa fa-exclamation-triangle"></i> ' . __('warning! Form was not submitted', 'frocket_front') . '</div>';
        }

        $resp['show_message'] = Uiform_Form_Helper::encodeHex($resp['show_message']);

        //return data to ajax callback
        header('Content-Type: text/html; charset=UTF-8');
        echo json_encode($resp);
        wp_die();
    }

    public function ajax_validate_captcha() {
        $rockfm_code = (isset($_POST['rockfm-code'])) ? Uiform_Form_Helper::sanitizeInput($_POST['rockfm-code']) : '';
        $rockfm_inpcode = (isset($_POST['rockfm-inpcode'])) ? Uiform_Form_Helper::sanitizeInput($_POST['rockfm-inpcode']) : '';
        $resp = array();
        $resp['code'] = $rockfm_code;
        $resp['inpcode'] = $rockfm_inpcode;

        if (!empty($rockfm_code)) {
            $captcha_key = 'Rocketform-' . $_SERVER['HTTP_HOST'];
            $captcha_resp = Uiform_Form_Helper::data_decrypt($rockfm_code, $captcha_key);
            $resp['resp'] = $captcha_resp;
            if ((string) $captcha_resp === (string) ($rockfm_inpcode)) {
                $resp['success'] = true;
            } else {
                $resp['success'] = false;
            }
        } else {
            $resp['success'] = false;
        }

        //return data to ajax callback
        header('Content-Type: text/html; charset=UTF-8');
        echo json_encode($resp);
        wp_die();
    }

    public function ajax_refresh_captcha() {
        $rkver = (isset($_POST['rkver'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['rkver'])) : 0;
        if ($rkver) {
            $rkver = Uiform_Form_Helper::base64url_decode(json_decode($rkver));
            $rkver_arr = json_decode($rkver, true);

            $length = 5;
            $charset = 'abcdefghijklmnpqrstuvwxyz123456789';
            $phrase = '';
            $chars = str_split($charset);

            for ($i = 0; $i < $length; $i++) {
                $phrase .= $chars[array_rand($chars)];
            }
            $captcha_data = array();

            if (isset($rkver_arr['ca_txt_gen'])) {
                $rkver_arr['ca_txt_gen'] = $phrase;
                $captcha_data = $rkver_arr;
            } else {
                $captcha_data['ca_txt_gen'] = $phrase;
            }
            $captcha_options = Uiform_Form_Helper::base64url_encode(json_encode($captcha_data));
            $resp = array();
            $resp['rkver'] = $captcha_options;

            /* generate check code */
            $captcha_key = 'Rocketform-' . $_SERVER['HTTP_HOST'];
            $resp['code'] = Uiform_Form_Helper::data_encrypt($phrase, $captcha_key);

            //return data to ajax callback
            header('Content-Type: text/html; charset=UTF-8');
            echo json_encode($resp);
            wp_die();
        }
    }

    public function ajax_check_recaptcha() {
        
    }

    public function process_form() {

        $form_id = ($_POST['_rockfm_form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['_rockfm_form_id'])) : 0;
        $form_fields = (isset($_POST['uiform_fields']) && $_POST['uiform_fields']) ? array_map(array('Uiform_Form_Helper', 'sanitizeRecursive'), $_POST['uiform_fields']) : array();
        $form_f_tmp = array();
        $attachments = array();  // initialize attachment array 
        $upload_dir = wp_upload_dir();  // look for this function in wordpress documentation at codex 
        $upload_dir = $upload_dir['path'];
        if(!empty($form_fields)){
           foreach ($form_fields as $key => $value) {
                if (is_array($value)) {
                    $tmp_options = array();
                    foreach ($value as $value2) {
                        $tmp_options[] = $value2;
                    }
                    $form_f_tmp[$key] = implode('^,^', $tmp_options);
                } else {

                    if ((string) $value === 'uifm_fileinput') {
                        if (isset($_FILES['uiform_fields']['name'][$key])
                                && !empty($_FILES['uiform_fields']['name'][$key])) {
                            $rename = "file_" . md5(uniqid($_FILES['uiform_fields']['name'][$key], true));
                            $ext = substr($_FILES['uiform_fields']['name'][$key], strrpos($_FILES['uiform_fields']['name'][$key], '.') + 1);
                            $_FILES['uiform_fields']['name'][$key] = $rename . "." . strtolower($ext);

                            $form_f_tmp[$key] = $_FILES['uiform_fields']['name'][$key];
                            $form_fields[$key] = $_FILES['uiform_fields']['name'][$key];

                            //attachment

                            if ($_FILES['uiform_fields']['error'][$key] == UPLOAD_ERR_OK) {

                                $tmp_name = $_FILES['uiform_fields']['tmp_name'][$key]; // Get temp name of uploaded file
                                $name = $_FILES['uiform_fields']['name'][$key];  // rename it to whatever
                                move_uploaded_file($tmp_name, "$upload_dir/$name"); // move file to new location 
                                $attachments[] = "$upload_dir/$name";  //  push the new uploaded file in attachment array
                            }
                        } else {
                            unset($form_fields[$key]);
                        }
                    } else {
                        $form_f_tmp[$key] = $value;
                    }
                }
            } 
        }
        
       
        //save to form records
        $agent = isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : '';
        $referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';

        $data = array();
        $data['fbh_data'] = json_encode($form_f_tmp);
        $data['created_ip'] = $_SERVER['REMOTE_ADDR'];
        $data['form_fmb_id'] = $form_id;
        $data['fbh_data_xml'] = Uiform_Form_Helper::array2xml($form_f_tmp);
        $data['fbh_user_agent'] = $agent;
        $data['fbh_page'] = $_SERVER['REQUEST_URI'];
        $data['fbh_referer'] = $referer;
        $this->wpdb->insert($this->model_formrecords->table, $data);
        $idActivate = $this->wpdb->insert_id;
        $json['status'] = 'created';
        $json['id'] = $idActivate;
        //store id record
        $_POST['_rockfm_submitted'] = $idActivate;

        //get data from form
        $form_data = $this->formsmodel->getFormById_2($form_id);
        $form_data_onsubm = json_decode($form_data->fmb_data2, true);
        $form_data_name = $form_data->fmb_name;

        $contact_errors = false;

        // get the posted data
        $email_recipient = ($form_data_onsubm['mail_recipient']) ? $form_data_onsubm['mail_recipient'] : get_option('admin_email');
        $email_cc = ($form_data_onsubm['mail_cc']) ? $form_data_onsubm['mail_cc'] : '';
        $email_bcc = ($form_data_onsubm['mail_bcc']) ? $form_data_onsubm['mail_bcc'] : '';
        //prepare message
        $tmp_template_msg = ($form_data_onsubm['mail_template_msg']) ? urldecode($form_data_onsubm['mail_template_msg']) : '';
        $message = $tmp_template_msg;
        //process fields
        $message_fields = '';
        $mail_replyto='';
        foreach ($form_fields as $key => $value) {
            $tmp_field_name = $this->model_fields->getFieldNameByUniqueId($key, $form_id);
            if (is_array($value)) {
                $message_fields.='</br>' . $tmp_field_name->fieldname . ' : </br>';
                $message_fields.='<table cellspacing="0" cellpadding="0">';
                foreach ($value as $value2) {
                    $message_fields.='<tr>';
                    $message_fields.='<td width="20" align="center" valign="top">&bull;</td>';
                    $message_fields.='<td width="200" align="left" valign="top">' . $value2 . '</td>';
                    $message_fields.='</tr>';
                }
                $message_fields.='</table>';
            } else {
                $message_fields.='<table cellspacing="0" cellpadding="0">';
                $message_fields.='<tr>';
                    $message_fields.='<td align="center" valign="top">' . $tmp_field_name->fieldname . '</td>';
                    $message_fields.='<td width="20" align="center" valign="top">:</td>';
                    $message_fields.='<td width="200" align="left" valign="top"> ' . $value . '</td>';
                $message_fields.='</tr>';
                $message_fields.='</table>';
            }
           
            switch (intval($tmp_field_name->type)){
                case 6:
                    /*textbox*/
                case 28:    
                case 29:    
                case 30:    
                    $tmp_fdata= json_decode($tmp_field_name->data,true);
                    if(isset($tmp_fdata['validate']) && isset($tmp_fdata['validate']['typ_val']) && intval($tmp_fdata['validate']['typ_val'])===4){
                      $mail_replyto=$value;  
                    }
                 break;
            }
            
        }
         
        $subject = ($form_data_onsubm['mail_subject']) ? $form_data_onsubm['mail_subject'] : __('New form request', 'FRocket_front');
        $message = str_replace("[CONTENT]", $message_fields, $message);
        $message = str_replace("[FORM_NAME]", $form_data_name, $message);
        $referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
        $message = str_replace("[URL_CLIENT]", $referer, $message);
        // write the email content
        $header1 = "MIME-Version: 1.0\r\n";
        $header1 .= "Content-Type: text/html; charset=utf-8\r\n";

        if (!empty($mail_replyto)) {
            $header1 .="From: ".substr($mail_replyto, 0, strrpos($mail_replyto, '@'))." <".$mail_replyto.">\r\n";
            $header1 .="Reply-To: ".$mail_replyto."\r\n";
            $subject .=" - ".$mail_replyto;
        }else{
            $header1 .="From: " . $email_recipient."\r\n";
        }
        if (!empty($email_cc)) {
            $header1 .="Cc: " . $email_cc."\r\n";
        }

        if (!empty($email_bcc)) {
            $header1 .= "Bcc: " . $email_bcc."\r\n";
        }
        
        
        $to = $email_recipient;

        // send the email using wp_mail()
        add_filter('wp_mail_content_type', 'set_html_content_type');

        function set_html_content_type() {
            return 'text/html';
        }

        if (!wp_mail($to, $subject, $message, $header1, $attachments)) {
            $contact_errors = true;
        }


        //pending option to delete attachment
        if (false && !empty($attachments)) {
            foreach ($attachments as $attachment) {
                @unlink($attachment); // delete files after sending them
            }
        }
    }

    public function get_form_shortcode($attributes, $content = null) {

        extract(shortcode_atts(array(
                    'id' => 1,
                    'ajax' => false
                        ), $attributes));
        $shortcode_string = "";

        $data_form = $this->formsmodel->getAvailableFormById($id);
        if (empty($data_form)) {
            return;
        }
        $shortcode_string = stripslashes($data_form->fmb_html);
        //load resources
        $this->load_form_resources($id);
        ob_start();
        // check for external shortcodes
        $shortcode_string = do_shortcode($shortcode_string);
        //adding alert message
        if (isset($_POST['_rockfm_type_submit'])
                && absint($_POST['_rockfm_type_submit']) === 0
                && absint($_POST['_rockfm_form_id']) === intval($id)
        ) {

            if (!empty($_POST['_rockfm_submitted']) && intval($_POST['_rockfm_submitted']) > 0) {
                echo (isset($_POST['_rockfm_onsubm_smsg'])) ? Uiform_Form_Helper::base64url_decode(Uiform_Form_Helper::sanitizeInput_html($_POST['_rockfm_onsubm_smsg'])) : __('Success! your form was submitted', 'frocket_front');
            } else {
                echo __('warning! Form was not submitted', 'frocket_front');
            }
        }
        if (!file_exists(UIFORM_FORMS_DIR . '/assets/frontend/css/rockfm_form' . $id . '.css')) {
            ob_start();
            ?>
            <style type="text/css">
            <?php echo $data_form->fmb_html_css; ?>
            </style> 
            <?php
            $css_string = ob_get_clean();
            ob_end_clean();
            echo $css_string;
        }
        echo $shortcode_string;

        $output = ob_get_clean();

        return $output;
    }

    public function load_form_resources($id) {
        wp_register_style(self::PREFIX . 'rockfm_global', UIFORM_FORMS_URL . '/assets/frontend/css/css.css', array(), UIFORM_VERSION, 'all'
        );

        /* load css */
        //loas ui
        wp_enqueue_style('jquery-ui');
        //bootstrap
        wp_enqueue_style('rockfm-bootstrap-def', UIFORM_FORMS_URL . '/assets/frontend/css/bootstrapdef.css');
        wp_enqueue_style('rockfm-bootstrap', UIFORM_FORMS_URL . '/assets/common/css/bootstrap-widget.css');
        wp_enqueue_style('rockfm-bootstrap-theme', UIFORM_FORMS_URL . '/assets/common/css/bootstrap-theme-widget.css');
        wp_enqueue_style('rockfm-fontawesome', UIFORM_FORMS_URL . '/assets/common/css/font-awesome.min.css');
        //jasny bootstrap
        wp_enqueue_style('rockfm-jasny-bootstrap', UIFORM_FORMS_URL . '/assets/common/js/bjasny/jasny-bootstrap.css');
        // bootstrap slider
        wp_enqueue_style('rockfm-bootstrap-slider', UIFORM_FORMS_URL . '/assets/backend/js/bslider/bootstrap-slider.css');
        // bootstrap touchspin
        wp_enqueue_style('rockfm-bootstrap-touchspin', UIFORM_FORMS_URL . '/assets/backend/js/btouchspin/jquery.bootstrap-touchspin.css');
        // bootstrap datetimepicker
        wp_enqueue_style('rockfm-bootstrap-datetimepicker', UIFORM_FORMS_URL . '/assets/backend/js/bdatetime/bootstrap-datetimepicker.css');
        //color picker
        wp_enqueue_style('rockefm-bootstrap-colorpicker', UIFORM_FORMS_URL . '/assets/backend/js/colorpicker/bootstrap-colorpicker.css');
        // star rating
        wp_enqueue_style('rockfm-star-rating', UIFORM_FORMS_URL . '/assets/backend/js/bratestar/star-rating.css');

        wp_enqueue_style(self::PREFIX . 'rockfm_global');

        if (file_exists(UIFORM_FORMS_DIR . '/assets/frontend/css/rockfm_form' . $id . '.css')) {
            wp_register_style(self::PREFIX . 'rockfm_form' . $id, UIFORM_FORMS_URL . '/assets/frontend/css/rockfm_form' . $id . '.css?'. date("Ymdgis"), array(), UIFORM_VERSION, 'all'
            );
            wp_enqueue_style(self::PREFIX . 'rockfm_form' . $id);
        }

        /* load js */
        wp_register_script(
                self::PREFIX . 'rockfm_js_global', UIFORM_FORMS_URL . '/assets/frontend/js/js.js',array(),UIFORM_VERSION, true
        );

        //load jquery
        wp_enqueue_script('jquery');

        // load jquery ui
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-widget');
        wp_enqueue_script('jquery-ui-mouse');
        wp_enqueue_script('jquery-ui-resizable');
        wp_enqueue_script('jquery-ui-position');
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_script('jquery-ui-draggable');
        wp_enqueue_script('jquery-ui-droppable');
        wp_enqueue_script('jquery-ui-accordion');
        wp_enqueue_script('jquery-ui-autocomplete');
        wp_enqueue_script('jquery-ui-menu');
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_script('jquery-ui-slider');
        wp_enqueue_script('jquery-ui-spinner');
        wp_enqueue_script('jquery-ui-button');
        wp_enqueue_script('jquery-ui-tooltip');

        //bootstrap
        wp_enqueue_script('rockfm-bootstrap', UIFORM_FORMS_URL . '/assets/common/js/bootstrap/3.2.0/bootstrap.min.js');
        //jasny bootstrap
        wp_enqueue_script('rockfm-jasny-bootstrap', UIFORM_FORMS_URL . '/assets/common/js/bjasny/jasny-bootstrap.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //bootstrap slider
        wp_enqueue_script('rockfm-bootstrap-slider', UIFORM_FORMS_URL . '/assets/backend/js/bslider/bootstrap-slider.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //bootstrap touchspin
        wp_enqueue_script('rockfm-bootstrap-touchspin', UIFORM_FORMS_URL . '/assets/backend/js/btouchspin/jquery.bootstrap-touchspin.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //bootstrap datetimepicker
        wp_enqueue_script('rockfm-bootstrap-dtpicker-locales', UIFORM_FORMS_URL . '/assets/backend/js/bdatetime/moment-with-locales.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        wp_enqueue_script('rockfm-bootstrap-datetimepicker', UIFORM_FORMS_URL . '/assets/backend/js/bdatetime/bootstrap-datetimepicker.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //star rating
        wp_enqueue_script('rockfm-star-rating', UIFORM_FORMS_URL . '/assets/backend/js/bratestar/star-rating.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //color picker
        wp_enqueue_script('rockfm-bootstrap-colorpicker', UIFORM_FORMS_URL . '/assets/backend/js/colorpicker/bootstrap-colorpicker.min.js', array('jquery', 'rockfm-bootstrap'), '1.0', true);
        //form
        wp_enqueue_script('rockfm-jform', UIFORM_FORMS_URL . '/assets/frontend/js/jquery.form.js');
        //load rocket form
        wp_enqueue_script(self::PREFIX . 'rockfm_js_global');
        wp_localize_script(self::PREFIX . 'rockfm_js_global', 'rockfm_vars', array('ajaxurl' => admin_url('admin-ajax.php'), 'imagesurl' => UIFORM_FORMS_URL . "/assets/frontend/images"));
    }

    /**
     * Register callbacks for actions and filters
     *
     * @mvc Controller
     */
    public function register_hook_callbacks() {
        
    }

    /**
     * Initializes variables
     *
     * @mvc Controller
     */
    public function init() {

        try {
            //$instance_example = new WPPS_Instance_Class( 'Instance example', '42' );
            //add_notice('ba');
        } catch (Exception $exception) {
            add_notice(__METHOD__ . ' error: ' . $exception->getMessage(), 'error');
        }
    }

    /*
     * Instance methods
     */

    /**
     * Prepares sites to use the plugin during single or network-wide activation
     *
     * @mvc Controller
     *
     * @param bool $network_wide
     */
    public function activate($network_wide) {

        return true;
    }

    /**
     * Rolls back activation procedures when de-activating the plugin
     *
     * @mvc Controller
     */
    public function deactivate() {
        return true;
    }

    /**
     * Checks if the plugin was recently updated and upgrades if necessary
     *
     * @mvc Controller
     *
     * @param string $db_version
     */
    public function upgrade($db_version = 0) {
        return true;
    }

    /**
     * Checks that the object is in a correct state
     *
     * @mvc Model
     *
     * @param string $property An individual property to check, or 'all' to check all of them
     * @return bool
     */
    protected function is_valid($property = 'all') {
        return true;
    }

}
?>
