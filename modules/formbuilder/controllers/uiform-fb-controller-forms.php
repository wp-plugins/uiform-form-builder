<?php
/**
 * Intranet
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
if (class_exists('Uiform_Fb_Controller_Forms')) {
    return;
}

/**
 * Controller Form class
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   Release: 1.00
 * @link      http://www.uiform.com/wordpress-form-builder
 */
class Uiform_Fb_Controller_Forms extends Uiform_Base_Module {

    const VERSION = '0.1';

    private $formsmodel = "";
    private $model_fields = "";
    private $field_contr = "";
    private $pagination = "";
    var $per_page = 10;
    private $wpdb = "";
    protected $modules;
    private $current_data_form = array();
    private $current_data_steps = array();
    private $current_data_skin = array();
    private $current_data_wizard = array();
    private $current_data_onsubm = array();
    private $current_data_main = array();
    private $saveform_clogic = array();

    /*
     * Magic methods
     */

    /**
     * Constructor
     *
     * @mvc Controller
     */
    protected function __construct() {

        /* require_once( UIFORM_FORMS_DIR . '/modules/formbuilder/models/uiform-model-form.php');
          $this->modules = array(
          'formbuilder'    => array('contr'=>array('fields'=>Uiform_Fb_Controller_Fields::get_instance()),
          'model'=>array('form'=>new Uiform_Model_Form()))
          ); */
        $this->formsmodel = self::$_models['formbuilder']['form'];
        $this->model_fields = self::$_models['formbuilder']['fields'];

        // $uibootstrap=new Uiform_Bootstrap();
        //$this->fields_contr=$uibootstrap->modules['formbuilder']['fields'];

        global $wpdb;
        $this->wpdb = $wpdb;
        
        // ajax for saving form
        add_action('wp_ajax_rocket_fbuilder_save_form', array(&$this, 'ajax_save_form'));
        // ajax for saving form
        add_action('wp_ajax_rocket_fbuilder_save_form_updopts', array(&$this, 'ajax_save_form_updateopts'));
        // refreshing duplication
        add_action('wp_ajax_rocket_fbuilder_refreshpreviewpanel', array(&$this, 'ajax_refresh_previewpanel'));
        //load form
        add_action('wp_ajax_rocket_fbuilder_load_form', array(&$this, 'ajax_load_form'));
        //load form
        add_action('wp_ajax_rocket_fbuilder_loadtemplate', array(&$this, 'ajax_load_templateform'));
        //load preview form
        add_action('wp_ajax_rocket_fbuilder_load_preview_form', array(&$this, 'ajax_load_preview_form'));
        //delete form
        add_action('wp_ajax_rocket_fbuilder_delete_form', array(&$this, 'ajax_delete_form_byid'));
        //list form update status
        add_action('wp_ajax_rocket_fbuilder_listform_updatest', array(&$this, 'ajax_listform_updatest'));
        //dupicate form
        add_action('wp_ajax_rocket_fbuilder_listform_duplicate', array(&$this, 'ajax_listform_duplicate'));
        //export form
        add_action('wp_ajax_rocket_fbuilder_export_form', array(&$this, 'ajax_load_export_form'));
        //import form
        add_action('wp_ajax_rocket_fbuilder_import_form', array(&$this, 'ajax_load_import_form'));
    }

    public function ajax_load_templateform() {
        $number = ($_POST['number']) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['number'])) : '';
        $fallback_file = file_get_contents(UIFORM_FORMS_DIR . '/assets/backend/json/template_' . $number . '.json');
        header('Content-Type: application/json');
        echo $fallback_file;
        wp_die();
    }

    public function ajax_load_import_form() {
        $imp_form = (isset($_POST['importcode']) && $_POST['importcode']) ? Uiform_Form_Helper::sanitizeInput($_POST['importcode']) : '';
        $dump_form = unserialize(Uiform_Form_Helper::base64url_decode($imp_form));
        $data_form = array();
        $data_form['fmb_data'] = json_decode($dump_form['fmb_data']);
        $data_form['fmb_html_backend'] = $dump_form['fmb_html_backend'];
        $data_form['fmb_name'] = $dump_form['fmb_name'];
        $json = array();
        $json['data'] = $data_form;
        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }

    public function ajax_listform_duplicate() {
        $list_ids = (isset($_POST['id']) && $_POST['id']) ? array_map(array('Uiform_Form_Helper', 'sanitizeRecursive'), $_POST['id']) : array();

        if ($list_ids) {
            foreach ($list_ids as $value) {
                $data_form = $this->formsmodel->getFormById($value);
                $data = array();
                $data['fmb_data'] = $data_form->fmb_data;
                $data['fmb_data2'] = $data_form->fmb_data2;
                $data['fmb_name'] = $data_form->fmb_name . ' - copy';
                $data['fmb_html_backend'] = $data_form->fmb_html_backend;
                $data['created_ip'] = $_SERVER['REMOTE_ADDR'];
                $data['created_by'] = 1;
                $data['created_date'] = date('Y-m-d h:i:s');


                $this->wpdb->insert($this->formsmodel->table, $data);
            }
        }
    }

    public function ajax_listform_updatest() {
        $list_ids = (isset($_POST['id']) && $_POST['id']) ? array_map(array('Uiform_Form_Helper', 'sanitizeRecursive'), $_POST['id']) : array();
        $form_st = (isset($_POST['form_st']) && $_POST['form_st']) ? Uiform_Form_Helper::sanitizeInput($_POST['form_st']) : '';
        if ($list_ids) {
            foreach ($list_ids as $value) {
                $where = array(
                    'fmb_id' => $value
                );
                $data = array(
                    'flag_status' => intval($form_st)
                );
                $this->wpdb->update($this->formsmodel->table, $data, $where);
            }
        }
    }

    public function ajax_delete_form_byid() {
        $form_id = (isset($_POST['form_id']) && $_POST['form_id']) ? Uiform_Form_Helper::sanitizeInput($_POST['form_id']) : 0;
        $where = array(
            'fmb_id' => $form_id
        );
        $data = array(
            'flag_status' => 0
        );
        $this->wpdb->update($this->formsmodel->table, $data, $where);
    }

    public function ajax_load_preview_form() {

        $form_id = (isset($_POST['form_id'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['form_id'])) : '';
        header('Content-type: text/html');
        ob_start();
        ?>

        <link media="all" type="text/css" href="<?php echo UIFORM_FORMS_URL . '/assets/frontend/css/rockfm_form' . $form_id . '.css?' . date("Ymdgis"); ?>"
              id="<?php echo 'rockfm_form' . $form_id ?>"
              rel="stylesheet">
        <?php
        echo do_shortcode('[uiform id="' . $form_id . '"]');
        ?>

        <?php
        $output = ob_get_clean();
        echo $output;
        wp_die();
    }
    
    public function ajax_refresh_previewpanel() {
        $data = array();
        $fmb_data = (!empty($_POST['form_data'])) ? Uiform_Form_Helper::sanitizeInput_html($_POST['form_data']) : '';
        $fmb_data = urldecode($fmb_data);
        $fmb_data = str_replace("\'", "'", $fmb_data);
        $fmb_data = (!empty($fmb_data))?array_map(array('Uiform_Form_Helper', 'sanitizeRecursive_html'), json_decode($fmb_data, true)):array();
        
        $data['fmb_data'] = $fmb_data;
        $data['fmb_name'] = (!empty($_POST['uifm_frm_main_title'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['uifm_frm_main_title'])) : '';
        
        $json = array();
        $tmp_html=$this->generate_previewpanel_html($data);
        $data['fmb_html_backend']=Uiform_Form_Helper::encodeHex($tmp_html['output_html']);
        $json['data'] =$data;
        //return data to ajax callback
        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }
    public function ajax_save_form_updateopts() {
        $data = array();
        $fmb_id = ($_POST['uifm_frm_main_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['uifm_frm_main_id'])) : 0;
        $data['fmb_html_backend'] = ($_POST['form_html_backend']) ? Uiform_Form_Helper::sanitizeInput_html($_POST['form_html_backend']) : '';
        $json = array();
        if (intval($fmb_id) > 0) {
            $where = array(
                'fmb_id' => $fmb_id
            );
            $this->wpdb->update($this->formsmodel->table, $data, $where);
            $json['status'] = 'updated';
            $json['id'] = $fmb_id;
        } 
        //return data to ajax callback
        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }
    
    public function ajax_save_form() {
        $data = array();
        $fmb_data = (isset($_POST['form_data']))?urldecode(Uiform_Form_Helper::sanitizeInput_html($_POST['form_data'])):'';
        $fmb_data = str_replace("\'", "'",$fmb_data);
        $fmb_data = (isset($fmb_data) && $fmb_data) ? array_map(array('Uiform_Form_Helper', 'sanitizeRecursive_html'), json_decode($fmb_data, true)) : array();
        $data['fmb_data'] = json_encode($fmb_data);
        $data['fmb_data2'] = isset($fmb_data['onsubm']) ? json_encode($fmb_data['onsubm']) : '';
        $data['fmb_name'] = (!empty($_POST['uifm_frm_main_title'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['uifm_frm_main_title'])) : '';
        $data['created_ip'] = $_SERVER['REMOTE_ADDR'];
        $data['created_by'] = 1;
        $data['created_date'] = date('Y-m-d h:i:s');
        $fmb_id = (isset($_POST['uifm_frm_main_id'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['uifm_frm_main_id'])) : 0;

        $json = array();
        if (intval($fmb_id) > 0) {
            $where = array(
                'fmb_id' => $fmb_id
            );
            $this->wpdb->update($this->formsmodel->table, $data, $where);
            $json['status'] = 'updated';
            $json['id'] = $fmb_id;
        } else {
            $this->wpdb->insert($this->formsmodel->table, $data);
            $idActivate = $this->wpdb->insert_id;
            $json['status'] = 'created';
            $json['id'] = $idActivate;
        }

        if (intval($json['id']) > 0) {
            $where = array(
                'fmb_id' => $json['id']
            );
            //save fields to table
            $this->save_data_fields($json['id']);
            //save fields to table
            $this->save_form_clogic();
            //generate form html
            $gen_return = $this->generate_form_html($json['id']);

            $data = array();
            $data['fmb_html'] = $gen_return['output_html'];
            $data['fmb_html_css'] = $gen_return['output_css'];

            //get global style
            $data2 = array();
            $data2['idform'] = $json['id'];
            $data2['addition_css'] = $this->current_data_main['add_css'];
            $data2['skin'] = $this->current_data_skin;
            $gen_return['output_css'].=self::render_template('formbuilder/views/forms/formhtml_css_global.php', $data2);
            $this->wpdb->update($this->formsmodel->table, $data, $where);
            //generate form css
            ob_start();
            $pathCssFile = UIFORM_FORMS_DIR . '/assets/frontend/css/rockfm_form' . $json['id'] . '.css';
            $f = fopen($pathCssFile, "w");
            fwrite($f, $gen_return['output_css']);
            fclose($f);
            ob_end_clean();
        }
        
        //return data to ajax callback
        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }

    protected function generate_form_getField($child_field) {
        $str_output = '';
        $str_output_3 = '';

        $data = array();
        $data = $this->current_data_form[intval($child_field['num_tab'])][$child_field['id']];

        switch (intval($child_field['type'])) {
            case 6:
                //textbox
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_textbox($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_textbox_css($data);
                break;
            case 7:
                //textarea
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_textarea($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_textarea_css($data);
                break;
            case 8:
                //radio button
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_radiobtn($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_radiobtn_css($data);
                break;
            case 9:
                //checkbox
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_checkbox($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_checkbox_css($data);
                break;
            case 10:
                //select
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_select($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_select_css($data);
                break;
            case 11:
                //multiselect
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_multiselect($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_multiselect_css($data);
                break;
            case 12:
                //fileupload
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_fileupload($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_fileupload_css($data);
                break;
            case 13:
                //imageupload
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_imageupload($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_imageupload_css($data);
                break;
            case 14:
                //custom html
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_customhtml($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_customhtml_css($data);
                break;
            case 15:
                //password
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_password($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_password_css($data);
                break;
            case 16:
                //slider
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_slider($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_slider_css($data);
                break;
            case 17:
                //range
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_range($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_range_css($data);
                break;
            case 18:
                //spinner
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_spinner($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_spinner_css($data);
                break;
            case 19:
                //captcha
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_captcha($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_captcha_css($data);
                break;
            case 20:
                
                //submit button
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_submitbtn($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_submitbtn_css($data);
                break;
            case 21:
                //hidden field
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_hiddeninput($data, $child_field['num_tab']);
                break;
            case 22:
                //star rating
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_ratingstar($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_ratingstar_css($data);
                break;
            case 23:
                //color picker
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_colorpicker($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_colorpicker_css($data);
                break;
            case 24:
                //date picker
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_datepicker($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_datepicker_css($data);
                break;
            case 25:
                //time picker
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_timepicker($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_timepicker_css($data);
                break;
            case 26:
                //date time
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_datetime($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_datetime_css($data);
                break;
            case 27:
                //recaptcha
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_recaptcha($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_recaptcha_css($data);
                break;
            case 28:
                //prepended text
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_preptext($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_preptext_css($data);
                break;
            case 29:
                //appended text
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_appetext($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_appetext_css($data);
                break;
            case 30:
                //prep app text
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_prepapptext($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_prepapptext_css($data);
                break;
            case 32:
                //divider
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_divider($data, $child_field['num_tab']);
                $data['form_skin'] = $this->current_data_skin;
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_divider_css($data);
                break;
            case 33:
            case 34:
            case 35:
            case 36:
            case 37:
            case 38:
                //heading
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_heading($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_heading_css($data);
                break;
            case 39:
                //wizard buttons
                $data['form_wizard'] = $this->current_data_wizard;
                $str_output.=self::$_modules['formbuilder']['fields']->formhtml_wizardbtn($data, $child_field['num_tab']);
                $str_output_3.=self::$_modules['formbuilder']['fields']->formhtml_wizardbtn_css($data);
                break;
            default:
                break;
        }

        $return = array();
        $return['output_html'] = $str_output;
        $return['output_css'] = $str_output_3;

        return $return;
    }
    
    protected function generate_previewpanel_getField($child_field) {
        $str_output = '';
        
        $data = array();
        $data = $this->current_data_form[intval($child_field['num_tab'])][$child_field['id']];
        $data['quick_options'] = self::render_template('formbuilder/views/fields/templates/prevpanel_quickopts.php', $data, 'always');
        switch (intval($child_field['type'])) {
            case 2:
                //grid two
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_gridsystem_two.php', $data, 'always');
                break;
            case 6:
                //textbox
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_textbox.php', $data, 'always');
                break;
            case 7:
                //textarea
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_textarea.php', $data, 'always');
                break;
            case 8:
                //radio button
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_radiobtn.php', $data, 'always');
                break;
            case 9:
                //checkbox
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_checkbox.php', $data, 'always');
                break;
            case 10:
                //select
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_select.php', $data, 'always');
                break;
            case 11:
                //multiselect
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_multiselect.php', $data, 'always');
                break;
            case 12:
                //fileupload
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_fileupload.php', $data, 'always');
                break;
            case 13:
                //imageupload
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_imageupload.php', $data, 'always');
                break;
            case 14:
                //custom html
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_customhtml.php', $data, 'always');
                break;
            case 15:
                //password
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_password.php', $data, 'always');
                break;
            case 16:
                //slider
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_slider.php', $data, 'always');
                break;
            case 17:
                //range
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_range.php', $data, 'always');
                break;
            case 18:
                //spinner
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_spinner.php', $data, 'always');
                break;
            case 19:
                //captcha
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_captcha.php', $data, 'always');
                break;
            case 20:
                
                //submit button
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_submitbtn.php', $data, 'always');
                break;
            case 21:
                //hidden field
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_hiddeninput.php', $data, 'always');
                break;
            case 22:
                //star rating
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_ratingstar.php', $data, 'always');
                break;
            case 23:
                //color picker
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_colorpicker.php', $data, 'always');
                break;
            case 24:
                //date picker
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_datepicker.php', $data, 'always');
                break;
            case 25:
                //time picker
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_timepicker.php', $data, 'always');
                break;
            case 26:
                //date time
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_datetime.php', $data, 'always');
                break;
            case 27:
                //recaptcha
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_recaptcha.php', $data, 'always');
                break;
            case 28:
                //prepended text
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_preptext.php', $data, 'always');
                break;
            case 29:
                //appended text
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_appetext.php', $data, 'always');
                break;
            case 30:
                //prep app text
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_prepapptext.php', $data, 'always');
                break;
            case 32:
                //divider
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_divider.php', $data, 'always');
                break;
            case 33:
                //heading 1
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading1.php', $data, 'always');
                break;
            case 34:
                //heading 2
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading2.php', $data, 'always');
                break;
            case 35:
                //heading 3
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading3.php', $data, 'always');
                break;
            case 36:
                //heading 4
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading4.php', $data, 'always');
                break;
            case 37:
                //heading 5
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading5.php', $data, 'always');
                break;
            case 38:
                //heading 6
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_heading6.php', $data, 'always');
                break;
            case 39:
                //wizard buttons
                $str_output.=self::render_template('formbuilder/views/fields/templates/prevpanel_wizardbtn.php', $data, 'always');
                break;
            default:
                break;
        }

        $return = array();
        $return['output_html'] = $str_output;
        return $return;
    }
    protected function getChildren_innerGrid($type) {
       
        $str_output='';
        switch (intval($type)) {
                            case 1:
                                ob_start();
                                ?>
                                <td  data-maxpercent="100" data-blocks="12" width="100%">
                                        <div class="uiform-items-container uiform-grid-inner-col">
                                        </div>
                                    </td> 
                                <?php
                                $str_output.=ob_get_contents();
                                ob_end_clean();
                                break;
                            case 2:
                                ob_start();
                                ?>
                                <td  data-maxpercent="50" data-blocks="6" width="50%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="100" data-blocks="6" width="50%">
                                    <div class="uiform-items-container uiform-grid-inner-col">

                                    </div>
                                </td>
                                <?php
                                $str_output.=ob_get_contents();
                                ob_end_clean();
                                break;
                            case 3:
                                ob_start();
                                ?>
                                <td  data-maxpercent="33.3" data-blocks="4" width="33.3%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="66.6" data-blocks="4" width="33.3%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="100" data-blocks="4" width="33.3%">
                                    <div class="uiform-items-container uiform-grid-inner-col">

                                    </div>
                                </td>
                                <?php
                                $str_output.=ob_get_contents();
                                ob_end_clean();
                                break;
                            case 4:
                                ob_start();
                                ?>
                                <td data-maxpercent="25" data-blocks="3" width="25%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="50" data-blocks="3" width="25%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td data-maxpercent="75" data-blocks="3" width="25%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="100" data-blocks="3" width="25%">
                                    <div class="uiform-items-container uiform-grid-inner-col">

                                    </div>
                                </td>
                                <?php
                                $str_output.=ob_get_contents();
                                ob_end_clean();
                                break;
                            case 5:
                                ob_start();
                                ?>
                                <td  data-maxpercent="16.6" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="33.3" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="50" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="66.6" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="83.3" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">

                                    </div>
                                </td>
                                <td  data-maxpercent="100" data-blocks="2" width="16.6%">
                                    <div class="uiform-items-container uiform-grid-inner-col">

                                    </div>
                                </td>
                                <?php
                                $str_output.=ob_get_contents();
                                ob_end_clean();
                                break;
                        }
                return $str_output;        
    }
    
    protected function getChildren_genCol($type,$key,$cols) {
        $content='';
        /*grid type*/
        switch (intval($type)) {
            case 1:
                switch (intval($key)){
                    case 0:
                        $grid_maxpercent='100';
                        $grid_blocks='12';
                        $grid_width='100%';
                    break;
                }
                break;
            case 2:
                switch (intval($key)){
                    case 0:
                        $grid_maxpercent='50';
                        $grid_blocks='6';
                        $grid_width='50%';
                    break;
                    case 1:
                        $grid_maxpercent='100';
                        $grid_blocks='6';
                        $grid_width='50%';
                    break;
                }
                break;
            case 3:
                switch (intval($key)){
                    case 0:
                        $grid_maxpercent='33.3';
                        $grid_blocks='4';
                        $grid_width='33.3%';
                    break;
                    case 1:
                        $grid_maxpercent='66.6';
                        $grid_blocks='4';
                        $grid_width='33.3%';
                    break;
                    case 2:
                        $grid_maxpercent='100';
                        $grid_blocks='4';
                        $grid_width='33.3%';
                    break;
                }
                break;
            case 4:
                switch (intval($key)){
                    case 0:
                        $grid_maxpercent='25';
                        $grid_blocks='3';
                        $grid_width='25%';
                    break;
                    case 1:
                        $grid_maxpercent='50';
                        $grid_blocks='3';
                        $grid_width='25%';
                    break;
                    case 2:
                        $grid_maxpercent='75';
                        $grid_blocks='3';
                        $grid_width='25%';
                    break;
                    case 3:
                        $grid_maxpercent='100';
                        $grid_blocks='3';
                        $grid_width='25%';
                    break;
                }
                break;
            case 5:
                switch (intval($key)){
                    case 0:
                        $grid_maxpercent='16.6';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                    case 1:
                        $grid_maxpercent='33.3';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                    case 2:
                        $grid_maxpercent='50';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                    case 3:
                        $grid_maxpercent='66.6';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                    case 4:
                        $grid_maxpercent='83.3';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                    case 5:
                        $grid_maxpercent='100';
                        $grid_blocks='2';
                        $grid_width='16.6%';
                    break;
                }
                break;
        }
        
        ob_start();
        ?>
        <td  data-maxpercent="<?php echo $grid_maxpercent;?>" data-blocks="<?php echo $grid_blocks;?>" width="<?php echo $grid_width;?>">
        <?php
        $content.=ob_get_contents();
        ob_end_clean();
        
        return $content;
    }
    
    protected function generate_previewpanel_getChildren($child_field) {
        $str_output = '';
        $grid_order=array(1=>'one',2=>'two',3=>'three',4=>'four',5=>'six');
        switch (intval($child_field['type'])) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                //if (intval($child_field['count_children']) > 0) {
                    ob_start();
                    ?>
                    <div id="<?php echo $child_field['id'];?>"
                         data-typefield="<?php echo intval($child_field['type']);?>" 
                         data-iscontainer="1" 
                         class="uiform-gridsytem-table uiform-gridsystem-<?php echo $grid_order[intval($child_field['type'])];?> uiform-field">
                    <div class="uiform-field-wrap uiform-field-move">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                    <?php
                    $str_output.=ob_get_contents();
                    ob_end_clean();
                    if(isset($child_field['inner'])){
                    $count_str=0;
                    $count_total=count($child_field['inner']);
                    
                    foreach ($child_field['inner'] as $key => $value) {
                    $str_output.=$this->getChildren_genCol($child_field['type'],$key,$value['cols']);
                     if($count_str===$count_total){
                            $fcontainer_class='';    
                        }else{
                            $fcontainer_class='rkfm-bend-fcontainer-wrap';    
                        }   
                        ob_start();
                    ?>
                            <div class="uiform-items-container uiform-grid-inner-col <?php echo $fcontainer_class;?>">
                             
                    <?php
                    $str_output.=ob_get_contents();
                    ob_end_clean();
                        
                        if (!empty($value['children'])) {
                            foreach ($value['children'] as $key2 => $value2) {
                                //get field
                                $get_data = array();
                               // $str_output.='<div class="">';
                                if (isset($value2['iscontainer']) && intval($value2['iscontainer']) === 1) {
                                    $get_data = $this->generate_previewpanel_getChildren($value2);
                                    $str_output.=$get_data['output_html'];
                                   
                                } else {
                                    $get_data = $this->generate_previewpanel_getField($value2);
                                    $str_output.=$get_data['output_html'];
                                    
                                }
                               // $str_output.='</div>';
                            }
                        }
                        $str_output.='</div>';
                        $str_output.='</div>';
                        $count_str++;
                    }
                    
                    }else{
                        $str_output.=$this->getChildren_innerGrid($child_field['type']);
                    }
                    ob_start();
                    ?>
                     
                            </tr>
                            </table>
                            <?php echo self::render_template('formbuilder/views/fields/templates/prevpanel_quickopts2.php',array(), 'always');;?>
                    </div>
                    </div>
                    <?php
                    $str_output.=ob_get_contents();
                    ob_end_clean();
               // }
                break;
            default:
                break;
        }
        $return = array();
        $return['output_html'] = $str_output;
       
        return $return;
    }
    
    protected function generate_form_getChildren($child_field) {
        $str_output = '';
        $str_output_2 = '';
        switch (intval($child_field['type'])) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                if (intval($child_field['count_children']) > 0) {
                    $str_output.='<div id="'.$child_field['id'].'" class="rockfm-gridsystem-cont">';
                    $str_output.='<div class="rkfm-row">';
                    $count_str=0;
                    foreach ($child_field['inner'] as $key => $value) {
                        $str_output.='<div class="rkfm-col-sm-' . $value['cols'] . '">';
                        if($count_str===$key){
                            $str_output.='<div class="">';    
                        }else{
                            $str_output.='<div class="rkfm-fcontainer-wrap">';    
                        }
                        if (!empty($value['children'])) {
                            foreach ($value['children'] as $key2 => $value2) {
                                //get field
                                $get_data = array();
                                $str_output.='<div class="">';
                                if (isset($value2['iscontainer']) && intval($value2['iscontainer']) === 1) {
                                    $get_data = $this->generate_form_getChildren($value2);
                                    $str_output.=$get_data['output_html'];
                                    $str_output_2.=$get_data['output_css'];
                                } else {
                                    $get_data = $this->generate_form_getField($value2);
                                    $str_output.=$get_data['output_html'];
                                    $str_output_2.=$get_data['output_css'];
                                }
                                $str_output.='</div>';
                            }
                        }
                        $str_output.='</div>';
                        $str_output.='</div>';
                    }
                    $str_output.='</div>';
                    $str_output.='</div>';
                }
                break;
            default:
                break;
        }
        $return = array();
        $return['output_html'] = $str_output;
        $return['output_css'] = $str_output_2;

        return $return;
    }

    public function generate_form_container($id, $numtab, $str_output) {
        $data = array();
        if (intval($numtab) > 1) {
            $data1 = array();
            $data1['tab_title'] = $this->current_data_steps['tab_title'];
            $data1['tab_theme'] = $this->current_data_wizard;
            $data['form_tab_head'] = self::render_template('formbuilder/views/forms/formhtml_tabheader.php', $data1);
            $data2 = array();
            $data['form_tab_footer'] = self::render_template('formbuilder/views/forms/formhtml_tabfooter.php', $data2);
        }

        $data['tab_count'] = $numtab;
        $data['form_content'] = $str_output;
        $data['form_id'] = $id;
        $data['wizard'] = $this->current_data_wizard;
        $data['onsubm'] = $this->current_data_onsubm;
        $data['main'] = $this->current_data_main;
        $data['clogic'] = $this->saveform_clogic;
        return self::render_template('formbuilder/views/forms/formhtml_form.php', $data);
    }
    
    public function generate_previewpanel_container($numtab, $str_output) {
        $data = array();
        //if (intval($numtab) > 1) {
            $data1 = array();
            $data1['tab_title'] = $this->current_data_steps['tab_title'];
            $data1['tab_theme'] = $this->current_data_wizard;
            $data['form_tab_head'] = self::render_template('formbuilder/views/forms/previewpanel_tabheader.php', $data1);
            $data2 = array();
            $data['form_tab_footer'] = self::render_template('formbuilder/views/forms/previewpanel_tabfooter.php', $data2);
        //}
        $data['tab_count'] = $numtab;
        $data['form_content'] = $str_output;
        $data['wizard'] = $this->current_data_wizard;
        $data['onsubm'] = $this->current_data_onsubm;
        $data['main'] = $this->current_data_main;
        $data['clogic'] = $this->saveform_clogic;
        return self::render_template('formbuilder/views/forms/previewpanel_form.php', $data);
    }
    
    public function generate_previewpanel_tabContent($tab_cont_num, $tabindex, $str_output) {
        $output = '';
        $data = array();
        $data['tabindex'] = $tabindex;
        $data['tab_html_fields'] = $str_output;
        //if (intval($tab_cont_num) > 1) {
            //apply function
            $output.=self::render_template('formbuilder/views/forms/previewpanel_tabcontainer.php', $data, 'always');
       /* } else {
            $output.=$str_output;
        }*/
        return $output;
    }
    
    public function generate_form_tabContent($tab_cont_num, $tabindex, $str_output) {
        $output = '';
        $data = array();
        $data['tabindex'] = $tabindex;
        $data['tab_html_fields'] = $str_output;
        if (intval($tab_cont_num) > 1) {
            //apply function
            $output.=self::render_template('formbuilder/views/forms/formhtml_tabcontainer.php', $data, 'always');
        } else {
            $output.=$str_output;
        }
        return $output;
    }

    public function save_form_clogic() {
        $clogic_src = $this->saveform_clogic;
        if (!empty($clogic_src)) {
            //get fires
            $fields_fire = array();
            foreach ($clogic_src['cond'] as $key => $value) {
                foreach ($value['list'] as $key2 => $value2) {
                    if (!empty($value2)) {
                        if (!isset($fields_fire[$value2['field_fire']]['list'][$value['field_cond']])) {
                            $fields_fire[$value2['field_fire']]['list'][] = $value['field_cond'];
                        }
                    } else {
                        unset($clogic_src['cond'][$key]['list'][$key2]);
                    }
                }
            }
            $this->saveform_clogic = $clogic_src;
            // field fires
            $logic_field_fire = array();
            foreach ($fields_fire as $key => $value) {
                $temp_logic = array();
                $temp_logic['field_fire'] = $key;
                $tmp_list = array();
                foreach ($value['list'] as $value2) {
                    $tmp_list[] = array('field_cond' => $value2);
                }
                $temp_logic['list'] = $tmp_list;
                $logic_field_fire[$key] = $temp_logic;
            }

            $clogic_src['fire'] = $logic_field_fire;
            $this->saveform_clogic = $clogic_src;
        }
    }

    public function save_data_fields($form_id = null) {

        /* check for enabled field for reports */
        $check_rec_querys = $this->model_fields->queryGetQtyFieldsEnabled($form_id);
        if (intval($check_rec_querys) === 1) {
            $tmp_query_list = array();
            $rec_querys_list = $this->model_fields->queryGetListFieldsEnabled($form_id);

            foreach ($rec_querys_list as $value) {
                $tmp_query_list[] = $value->fmf_uniqueid;
            }
        }

        //deleting form
        $where = array(
            'form_fmb_id' => $form_id
        );
        $this->wpdb->delete($this->model_fields->table, $where);
        //creating again
        $data_form = $this->formsmodel->getFormById($form_id);
        $fmb_data = json_decode($data_form->fmb_data, true);
        //$tab_cont=$fmb_data['steps']['tab_cont'];
        $steps_src = $fmb_data['steps_src'];


        $set_rec_querys = 0;
        if (!empty($steps_src)) {
            foreach ($steps_src as $tabindex => $fields) {
                if (!empty($fields)) {
                    foreach ($fields as $key => $value) {
                        $data = array();
                        $data['fmf_uniqueid'] = $value['id'];
                        switch (intval($value['type'])) {
                            case 6:
                            case 7:
                            case 8:
                            case 9:
                            case 10:
                            case 11:
                            case 12:
                            case 13:
                            case 15:
                            case 16:case 17:case 18:
                            case 21:case 22:case 23:case 26:
                            case 28:case 29:case 30:
                                //assign selected fields to the report
                                if (intval($check_rec_querys) === 0 && $set_rec_querys < 5) {
                                    $data['fmf_status_qu'] = 1;
                                    $set_rec_querys++;
                                } elseif (intval($check_rec_querys) === 1) {
                                    if (in_array($value['id'], $tmp_query_list)) {
                                        $data['fmf_status_qu'] = 1;
                                    }
                                }
                                $data['fmf_fieldname'] = $value['field_name'];
                                break;
                        }


                        $data['fmf_data'] = json_encode($value);
                        $data['type_fby_id'] = $value['type'];
                        $data['form_fmb_id'] = $form_id;
                        $this->wpdb->insert($this->model_fields->table, $data);

                        if (isset($value['clogic']) && intval($value['clogic']['show_st']) === 1) {
                            $tmp_clogic = array();
                            $tmp_clogic['field_cond'] = $value['id'];
                            $tmp_clogic['action'] = $value['clogic']['f_show'];

                            foreach ($value['clogic']['list'] as $key2 => $value2) {
                                if (empty($value2)) {
                                    unset($value['clogic']['list'][$key2]);
                                }
                            }
                            $tmp_clogic['list'] = array_filter($value['clogic']['list']);
                            $tmp_clogic['req_match'] = (intval($value['clogic']['f_all']) === 1) ? count($value['clogic']['list']) : 1;
                            $this->saveform_clogic['cond'][] = $tmp_clogic;
                        }
                    }
                }
            }
        }
    }

    public function generate_form_html($form_id = null) {
        $data_form = $this->formsmodel->getFormById($form_id);
        $fmb_data = json_decode($data_form->fmb_data, true);
        //all fields position
        $tab_cont = $fmb_data['steps']['tab_cont'];
        // all data fields
        $steps_src = $fmb_data['steps_src'];
        $this->current_data_form = $steps_src;
        $this->current_data_steps = $fmb_data['steps'];
        $this->current_data_skin = $fmb_data['skin'];
        $this->current_data_wizard = ($fmb_data['wizard']) ? $fmb_data['wizard'] : array();
        $this->current_data_onsubm = ($fmb_data['onsubm']) ? $fmb_data['onsubm'] : array();
        $this->current_data_main = ($fmb_data['main']) ? $fmb_data['main'] : array();
        //generating

        $str_output_2 = '';
        $str_output_tab = '';
        $tab_cont_num = $fmb_data['num_tabs'];
        foreach ($tab_cont as $key => $value) {
            //tabs
            $str_output = '';
            if (!empty($value['content'])) {
                foreach ($value['content'] as $key2 => $value2) {
                    $get_data = array();

                    //fields
                    if (isset($value2['iscontainer']) && intval($value2['iscontainer']) === 1) {
                        $get_data = $this->generate_form_getChildren($value2);
                        $str_output.=$get_data['output_html'];
                        $str_output_2.=$get_data['output_css'];
                    } else {
                        $get_data = $this->generate_form_getField($value2);
                        $str_output.=$get_data['output_html'];
                        $str_output_2.=$get_data['output_css'];
                    }
                }
            }

            //set tab container
            $str_output_tab.=$this->generate_form_tabContent($tab_cont_num, $key, $str_output);
            //jump if it is one
            if (intval($tab_cont_num) === 1) {
                break 1;
            }
        }

        //generate form css
        $str_output_2.=$this->generate_form_css($form_id);
        if ($tab_cont_num > 1) {
            $str_output_2.=$this->generate_form_tab_css($form_id);
        }

        $return = array();
        $return['output_html'] = $this->generate_form_container($form_id, $tab_cont_num, $str_output_tab);
        $return['output_css'] = $str_output_2;

        return $return;
    }
    
    public function generate_previewpanel_html($data) {
        $fmb_data = $data['fmb_data'];
        //all fields position
        $tab_cont = $fmb_data['steps']['tab_cont'];
        // all data fields
        $steps_src = $fmb_data['steps_src'];
        $this->current_data_form = $steps_src;
        $this->current_data_steps = $fmb_data['steps'];
        $this->current_data_skin = $fmb_data['skin'];
        $this->current_data_wizard = ($fmb_data['wizard']) ? $fmb_data['wizard'] : array();
        $this->current_data_onsubm = ($fmb_data['onsubm']) ? $fmb_data['onsubm'] : array();
        $this->current_data_main = ($fmb_data['main']) ? $fmb_data['main'] : array();
        //generating
       
        $str_output_tab = '';
        $tab_cont_num = $fmb_data['num_tabs'];
        foreach ($tab_cont as $key => $value) {
            //tabs
            $str_output = '';
            if (!empty($value['content'])) {
                foreach ($value['content'] as $key2 => $value2) {
                    $get_data = array();
                    //fields
                    if (isset($value2['iscontainer']) && intval($value2['iscontainer']) === 1) {
                        $get_data = $this->generate_previewpanel_getChildren($value2);
                        $str_output.=$get_data['output_html'];
                    } else {
                        $get_data = $this->generate_previewpanel_getField($value2);
                        $str_output.=$get_data['output_html'];
                        
                    }
                }
            }

            //set tab container
            $str_output_tab.=$this->generate_previewpanel_tabContent($tab_cont_num, $key, $str_output);
            //jump if it is one
            if (intval($tab_cont_num) === 1) {
                break 1;
            }
        }
        $return = array();
        $return['output_html'] = $this->generate_previewpanel_container($tab_cont_num, $str_output_tab);
       

        return $return;
    }
    
    public function export_form() {
        $data = array();
        $data['list_forms'] = $this->formsmodel->getListForms();
        echo self::loadPartial('layout.php', 'formbuilder/views/forms/export_form.php', $data);
    }

    public function ajax_load_export_form() {
        $form_id = (isset($_POST['form_id']) && $_POST['form_id']) ? Uiform_Form_Helper::sanitizeInput($_POST['form_id']) : 0;
        $data_form = $this->formsmodel->getFormById($form_id);
        $data_exp = array();
        $data_exp['fmb_data'] = $data_form->fmb_data;
        $data_exp['fmb_html_backend'] = $data_form->fmb_html_backend;
        $data_exp['fmb_name'] = $data_form->fmb_name;
        $code_export = Uiform_Form_Helper::base64url_encode(serialize($data_exp));
        echo $code_export;
        wp_die();
    }

    public function generate_form_css($form_id = null) {
        $data = array();
        $data['idform'] = $form_id;
        $data['skin'] = $this->current_data_skin;
        return self::render_template('formbuilder/views/forms/formhtml_css_form.php', $data);
    }

    public function generate_form_tab_css($form_id = null) {
        $data = array();
        $data['idform'] = $form_id;
        $data['wizard'] = $this->current_data_wizard;
        return self::render_template('formbuilder/views/forms/formhtml_css_wizard.php', $data);
    }

    public function ajax_load_form() {
        $json = array();
        $form_id = (isset($_POST['form_id'])) ? Uiform_Form_Helper::sanitizeInput(trim($_POST['form_id'])) : '';

        $data_form = $this->formsmodel->getFormById($form_id);
        $data_form->fmb_data = json_decode($data_form->fmb_data);
        $json['data'] = $data_form;
        header('Content-Type: application/json');
        echo json_encode($json);
        wp_die();
    }

    public function list_uiforms() {

        require_once( UIFORM_FORMS_DIR . '/classes/Pagination.php');
        $this->pagination = new CI_Pagination();
        $offset = (isset($_GET['offset'])) ? Uiform_Form_Helper::sanitizeInput($_GET['offset']) : 0;
        //list all forms
        $data = $config = array();
        $config['base_url'] = admin_url() . '?page=uiform_form_builder&mod=formbuilder&controller=forms&action=list_uiforms';
        $config['total_rows'] = $this->formsmodel->CountForms();
        $config['per_page'] = $this->per_page;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'offset';

        $this->pagination->initialize($config);
        // If the pagination library doesn't recognize the current page add:
        $this->pagination->cur_page = $offset;
        $data['query'] = $this->formsmodel->getListForms($this->per_page, $offset);
        $data['pagination'] = $this->pagination->create_links();

        echo self::loadPartial('layout.php', 'formbuilder/views/forms/list_forms.php', $data);
    }

    public function edit_uiform() {
        $data = array();
        echo self::render_template('formbuilder/views/forms/edit_form.php', $data);
    }

    public function create_uiform() {

        $data = array();
        $data['form_id'] = (isset($_GET['form_id']) && $_GET['form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_GET['form_id'])) : 0;
        echo self::loadPartial('layout_editform.php', 'formbuilder/views/forms/create_form.php', $data);
    }

    public function preview_fields() {
        $data = array();
        echo self::render_template('formbuilder/views/forms/preview_fields.php', $data);
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
