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
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<?php
$default_template='';
ob_start();
?>
<div class="rockfm-alert rockfm-alert-success" role="alert"><?php echo __('Success! Form was sent successfully.','FRocket_admin'); ?></div>
<?php
$default_template = ob_get_clean();
?>
<div class="uiform-set-field-wrap" id="uiform-set-form-submission">
   <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label" for="">
                        <?php echo __('Success Message','FRocket_admin'); ?>
                    </label>
                    <div class="controls form-group">
                        <?php
                        /*pending add this tinymce*/
                        $settings = array( 'media_buttons' => true,'textarea_rows'=>5);
                            wp_editor($default_template, 'uifm_frm_subm_msg',$settings );
                        ?>
                    </div>               
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Background','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Background color','FRocket_admin'); ?></label>
                    <div class="">
                        <div class="col-md-3">
                            <input class="switch-field"
                                   id="uifm_frm_subm_bgst"
                                   name="uifm_frm_subm_bgst"
                                   type="checkbox"/>
                        </div>
                        <div class="col-md-9">
                             <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Type','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="controls form-group">
                                            <div class="btn-group btn-group-justified"
                                                 id="uifm_frm_subm_bgst_handle"
                                                 data-toggle="buttons">
                                                <label 
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    onclick="javascript:rocketform.loadForm_tab_subm_msgbg1();"
                                                    id="uifm_frm_subm_bgst_typ1"
                                                    class="btn btn-warning active" >
                                                <input type="radio"  value="1" checked>  <?php echo __('Solid','FRocket_admin'); ?>
                                                </label>
                                                <label 
                                                    onclick="javascript:rocketform.loadForm_tab_subm_msgbg2();"
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    id="uifm_frm_subm_bgst_typ2"
                                                    class="btn btn-warning" >
                                                <input type="radio"  value="2" > <?php echo __('Gradient','FRocket_admin'); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div id="uifm_frm_subm_bgst_typ1_handle" class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                        id="uifm_frm_subm_bgst_typ1_col"
                                                        type="text" 
                                                        value="" 
                                                        name="uifm_frm_subm_bgst_typ1_col"
                                                        class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div id="uifm_frm_subm_bgst_typ2_handle">
                                <div class="row">
                                    <div class="col-md-3">
                                    <label ><?php echo __('Start color','FRocket_admin'); ?></label>
                                    </div>
                                    <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="input-group uifm-custom-color">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                            type="text" value=""
                                                            id="uifm_frm_subm_bgst_typ2_col1"
                                                            name="uifm_frm_subm_bgst_typ2_col1"
                                                            class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    <label ><?php echo __('End color','FRocket_admin'); ?></label>
                                    </div>
                                    <div class="col-sm-9">
                                            <div class="form-group">
                                                <div 
                                                    class="input-group uifm-custom-color">
                                                    <span class="input-group-addon"><i></i></span>
                                                    <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>" 
                                                            id="uifm_frm_subm_bgst_typ2_col2"
                                                            name="uifm_frm_subm_bgst_typ2_col2"
                                                            type="text" value="" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function () {
    rocketform();
    rocketform.loadForm_tab_subm();
});
//]]>
</script>
