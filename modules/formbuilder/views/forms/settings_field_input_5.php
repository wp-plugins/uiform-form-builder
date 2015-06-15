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

<div class="uifm-set-section-input5">
   
    <div class="space10"></div>
    <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                    <label ><?php echo __('Public key','FRocket_admin'); ?></label>
                    <input type="text"
                               data-field-store="input5-g_key_public"
                               id="uifm_fld_inp5_kpublic"
                               class="form-control uifm-f-setoption">
                </div>
            </div>
         <div class="col-sm-6">
                <div class="form-group">
                    <label ><?php echo __('Secret key','FRocket_admin'); ?></label>
                    <input type="text"
                               data-field-store="input5-g_key_secret"
                               id="uifm_fld_inp5_ksecret"
                               
                               class="form-control uifm-f-setoption">

                </div>
            </div>
        </div>
    <div class="space10"></div>
    <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                    <label ><?php echo __('Theme','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label 
                        data-field-store="input5-g_theme"
                        data-toggle-enable="btn-default"
                        data-toggle-disable="btn-default"
                        data-settings-option="group-radiobutton"
                        id="uifm_fld_inp5_theme_1" 
                        class="btn btn-default uifm-f-setoption-btn" >
                    <input type="radio"  value="0">   <?php echo __('Light','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="input5-g_theme"
                        data-toggle-enable="btn-default"
                        data-toggle-disable="btn-default"
                        data-settings-option="group-radiobutton"
                       id="uifm_fld_inp5_theme_2" 
                        class="btn btn-default uifm-f-setoption-btn" >
                    <input type="radio"  value="1">  <span class="uifm_fld_inp5_theme_2_lbl"><?php echo __('Dark','FRocket_admin'); ?></span>
                    </label>
                </div>
                    </div>
                </div>
            </div>
    </div>
   
 
</div>
