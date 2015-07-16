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
<div class="uiform-set-field-wrap" id="uiform-set-form-main">
   
     <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Submit mode','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_main_title"><?php echo __('Ajax mode when submitting form','FRocket_admin'); ?></label>
                     <input class="switch-field"
                                   id="uifm_frm_main_ajaxmode"
                                   name="uifm_frm_main_ajaxmode"
                                   type="checkbox"/>
                     <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('You can switch the submit mode between POST and AJAX','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Import','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label for=""><?php echo __('Import form','FRocket_admin'); ?></label>
        </div>
        <div class="col-sm-9">
            <a href="javascript:void(0);"
               onclick="javascript:rocketform.importForm_openModal();"
               class="btn btn-warning"
               ><?php echo __('Import form','FRocket_admin'); ?></a>
            <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('Import the backuped form','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Custom css','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for=""><?php echo __('Additional css','FRocket_admin'); ?></label>
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('This is not required. You can add extra css to your form. this will be added to css file ','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                        <textarea 
                               id="uifm_frm_main_addcss"
                               name="uifm_frm_main_addcss"
                              
                               style="width:100%;"
                               class="form-control autogrow"></textarea>
                               <p class="help-block"><?php echo __('Just put the selectors. e.g. #id_form .control-label {color:red} ','FRocket_admin'); ?></p>      
                   
                </div>
            </div>
    </div>
    <div class="space10"></div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for=""><?php echo __('Additional javascript','FRocket_admin'); ?></label>
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('This is not required. You can add extra javascript code or some script to your form.','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                        <textarea 
                               id="uifm_frm_main_addjs"
                               name="uifm_frm_main_addjs"
                              
                               style="width:100%;"
                               class="form-control autogrow"></textarea>
                         <p class="help-block"><?php echo __('proceed with caution. if you put a wrong javascript code, the form will not work properly e.g. ','FRocket_admin'); ?>
                         <code>
                             <?php ob_start();?>
                        <script type="text/javascript">
                        window.onload = function () {
                            document.getElementsByClassName('uiform-step-content')[0].style.background = "red";
                        };
                        </script>
                            <?php 
                            $cntACmp = ob_get_contents();
                        ob_end_clean();
                        echo htmlentities($cntACmp);
                            ?>
                         </code>
                         </p>      
                   
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('More options','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-sm-6">
            <label for=""><?php echo __('Refresh preview editor panel','FRocket_admin'); ?></label>
        </div>
        <div class="col-sm-6">
            <a href="javascript:void(0);"
               onclick="javascript:rocketform.refreshPreviewSection();"
               class="btn btn-success"
               ><?php echo __('Refresh','FRocket_admin'); ?></a>
            <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="top" 
                       data-original-title="<?php echo __('this is used in order to fix if something is not showing fine on the preview editor panel','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-sm-6">
            <label for=""><?php echo __('Regenerate form','FRocket_admin'); ?></label>
        </div>
        <div class="col-sm-6">
            <a href="javascript:void(0);"
               onclick="javascript:rocketform.regenerateform();"
               class="btn btn-success"
               ><?php echo __('Regenerate','FRocket_admin'); ?></a>
            <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="top" 
                       data-original-title="<?php echo __('Regenerate form','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
        </div>
    </div>
</div>