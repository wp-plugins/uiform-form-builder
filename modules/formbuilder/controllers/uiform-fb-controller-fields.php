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
if (class_exists('Uiform_Fb_Controller_Fields')) {
    return;
}

/**
 * Controller fields class
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   Release: 1.00
 * @link      http://www.uiform.com/wordpress-form-builder
 */
class Uiform_Fb_Controller_Fields extends Uiform_Base_Module {

    const VERSION = '0.1';

    private $fieldsmodel = "";
    private $pagination = "";
    var $per_page = 5;
    private $wpdb = "";

    /*
     * Magic methods
     */

    /**
     * Constructor
     *
     * @mvc Controller
     */
    protected function __construct() {
        global $wpdb;
        $this->wpdb = $wpdb;
        if (isset($_GET['action']) && Uiform_Form_Helper::sanitizeInput($_GET['action']) === 'formhtml_preview_textbox') {
            add_action('admin_enqueue_scripts', array(&$this, 'load_css_textbox'));
        }
        // refresh captcha
        add_action('wp_ajax_rocket_backend_refreshcaptcha', array(&$this, 'ajax_refresh_captcha'));
    }

    public function ajax_refresh_captcha() {

        $length = 5;
        $charset = 'abcdefghijklmnpqrstuvwxyz123456789';
        $phrase = '';
        $chars = str_split($charset);

        for ($i = 0; $i < $length; $i++) {
            $phrase .= $chars[array_rand($chars)];
        }

        $resp = $resp2 = array();
        $resp['txt_color_st'] = (isset($_POST['txt_color_st'])) ? Uiform_Form_Helper::sanitizeInput($_POST['txt_color_st']) : '';
        $resp['txt_color'] = (isset($_POST['txt_color'])) ? Uiform_Form_Helper::sanitizeInput($_POST['txt_color']) : '';
        $resp['background_st'] = (isset($_POST['background_st'])) ? Uiform_Form_Helper::sanitizeInput($_POST['background_st']) : '';
        $resp['background_color'] = (isset($_POST['txt_color_st'])) ? Uiform_Form_Helper::sanitizeInput($_POST['background_color']) : '';
        $resp['distortion'] = (isset($_POST['distortion'])) ? Uiform_Form_Helper::sanitizeInput($_POST['distortion']) : '';
        $resp['behind_lines_st'] = (isset($_POST['behind_lines_st'])) ? Uiform_Form_Helper::sanitizeInput($_POST['behind_lines_st']) : '';
        $resp['behind_lines'] = (isset($_POST['behind_lines'])) ? Uiform_Form_Helper::sanitizeInput($_POST['behind_lines']) : '';
        $resp['front_lines_st'] = (isset($_POST['front_lines_st'])) ? Uiform_Form_Helper::sanitizeInput($_POST['front_lines_st']) : '';
        $resp['front_lines'] = (isset($_POST['front_lines'])) ? Uiform_Form_Helper::sanitizeInput($_POST['front_lines']) : '';
        $resp['ca_txt_gen'] = $phrase;

        $captcha_options = Uiform_Form_Helper::base64url_encode(json_encode($resp));
        $resp2 = array();
        $resp2['rkver'] = $captcha_options;
        //return data to ajax callback
        header('Content-Type: application/json');
        echo json_encode($resp2);
        wp_die();
    }

    public function edit_uiform() {
        $data = array();
        echo self::render_template('formbuilder/views/forms/edit_form.php', $data);
    }

    public function formhtml_textbox($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        // $data['form_id'] = (isset($_GET['form_id']) && $_GET['form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_GET['form_id'])) : 0;
        return self::render_template('formbuilder/views/fields/formhtml_textbox.php', $data, 'always');
    }

    public function formhtml_textbox_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_textbox_css.php', $data, 'always');
    }

    public function formhtml_textarea($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        // $data['form_id'] = (isset($_GET['form_id']) && $_GET['form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_GET['form_id'])) : 0;
        return self::render_template('formbuilder/views/fields/formhtml_textarea.php', $data, 'always');
    }

    public function formhtml_textarea_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_textarea_css.php', $data, 'always');
    }

    public function formhtml_radiobtn($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        // $data['form_id'] = (isset($_GET['form_id']) && $_GET['form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_GET['form_id'])) : 0;
        return self::render_template('formbuilder/views/fields/formhtml_radiobtn.php', $data, 'always');
    }

    public function formhtml_radiobtn_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_radiobtn_css.php', $data, 'always');
    }

    public function formhtml_checkbox($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        // $data['form_id'] = (isset($_GET['form_id']) && $_GET['form_id']) ? Uiform_Form_Helper::sanitizeInput(trim($_GET['form_id'])) : 0;
        return self::render_template('formbuilder/views/fields/formhtml_checkbox.php', $data, 'always');
    }

    public function formhtml_checkbox_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_checkbox_css.php', $data, 'always');
    }

    public function formhtml_select($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_select.php', $data, 'always');
    }

    public function formhtml_select_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_select_css.php', $data, 'always');
    }

    public function formhtml_multiselect($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_multiselect.php', $data, 'always');
    }

    public function formhtml_multiselect_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_multiselect_css.php', $data, 'always');
    }

    public function formhtml_fileupload($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_fileupload.php', $data, 'always');
    }

    public function formhtml_fileupload_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_fileupload_css.php', $data, 'always');
    }

    public function formhtml_imageupload($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_imageupload.php', $data, 'always');
    }

    public function formhtml_imageupload_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_imageupload_css.php', $data, 'always');
    }

    public function formhtml_customhtml($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_customhtml.php', $data, 'always');
    }

    public function formhtml_customhtml_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_customhtml_css.php', $data, 'always');
    }

    public function formhtml_password($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_password.php', $data, 'always');
    }

    public function formhtml_password_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_password_css.php', $data, 'always');
    }

    public function formhtml_preptext($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_preptext.php', $data, 'always');
    }

    public function formhtml_preptext_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_textbox_css.php', $data, 'always');
    }

    public function formhtml_appetext($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_appetext.php', $data, 'always');
    }

    public function formhtml_appetext_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_textbox_css.php', $data, 'always');
    }

    public function formhtml_prepapptext($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_prepapptext.php', $data, 'always');
    }

    public function formhtml_prepapptext_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_textbox_css.php', $data, 'always');
    }

    public function formhtml_slider($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_slider.php', $data, 'always');
    }

    public function formhtml_slider_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_slider_css.php', $data, 'always');
    }

    public function formhtml_range($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_range.php', $data, 'always');
    }

    public function formhtml_range_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_range_css.php', $data, 'always');
    }

    public function formhtml_spinner($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_spinner.php', $data, 'always');
    }

    public function formhtml_spinner_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_spinner_css.php', $data, 'always');
    }

    public function formhtml_captcha($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_captcha.php', $data, 'always');
    }

    public function formhtml_captcha_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_captcha_css.php', $data, 'always');
    }

    public function formhtml_recaptcha($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_recaptcha.php', $data, 'always');
    }

    public function formhtml_recaptcha_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_recaptcha_css.php', $data, 'always');
    }

    public function formhtml_datepicker($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_datepicker.php', $data, 'always');
    }

    public function formhtml_datepicker_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_datepicker_css.php', $data, 'always');
    }

    public function formhtml_timepicker($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_timepicker.php', $data, 'always');
    }

    public function formhtml_timepicker_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_timepicker_css.php', $data, 'always');
    }

    public function formhtml_datetime($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_datetime.php', $data, 'always');
    }

    public function formhtml_datetime_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_datetime_css.php', $data, 'always');
    }

    public function formhtml_submitbtn($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_submitbtn.php', $data, 'always');
    }

    public function formhtml_submitbtn_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_submitbtn_css.php', $data, 'always');
    }

    public function formhtml_hiddeninput($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_hiddeninput.php', $data, 'always');
    }

    public function formhtml_hiddeninput_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_hiddeninput_css.php', $data, 'always');
    }

    public function formhtml_ratingstar($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_ratingstar.php', $data, 'always');
    }

    public function formhtml_ratingstar_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_ratingstar_css.php', $data, 'always');
    }

    public function formhtml_colorpicker($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_colorpicker.php', $data, 'always');
    }

    public function formhtml_colorpicker_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_colorpicker_css.php', $data, 'always');
    }

    public function formhtml_divider($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_divider.php', $data, 'always');
    }

    public function formhtml_divider_css($data) {

        return self::render_template('formbuilder/views/fields/formhtml_divider_css.php', $data, 'always');
    }
    
    public function formhtml_wizardbtn($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_wizardbtn.php', $data, 'always');
    }

    public function formhtml_wizardbtn_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_wizardbtn_css.php', $data, 'always');
    }
    
    public function formhtml_heading($value, $num_tab) {
        $data = array();
        $data['tab_num'] = $num_tab;
        $data = array_merge($data, $value);
        return self::render_template('formbuilder/views/fields/formhtml_heading.php', $data, 'always');
    }

    public function formhtml_heading_css($data) {
        return self::render_template('formbuilder/views/fields/formhtml_heading_css.php', $data, 'always');
    }

    public function preview_fields() {
        $data = array();
        echo self::render_template('formbuilder/views/forms/preview_fields.php', $data);
    }
    
    public function generate_templates_fields() {
        $data = array();
        $data['id_field'] = '';
        $data['quick_options'] = self::render_template('formbuilder/views/fields/templates/prevpanel_quickopts.php', $data, 'always');
        $data['uiform_grid_two'] = self::render_template('formbuilder/views/fields/templates/prevpanel_textbox.php', $data, 'always');
        $data['uiform_textbox'] = self::render_template('formbuilder/views/fields/templates/prevpanel_textbox.php', $data, 'always');
        $content= self::render_template('formbuilder/views/fields/templates/prevpanel_main.php', $data);
        
        $pathfile=UIFORM_FORMS_DIR.'/modules/formbuilder/views/fields/templates/testing_file.php';
        $fh = fopen($pathfile, "w");
        
        if (fwrite($fh, $content)) {
            return true;
        }
        fclose($fh);
        
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
