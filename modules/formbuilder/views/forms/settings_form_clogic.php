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
<div class="uiform-set-field-wrap" id="uiform-set-form-clogic">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Enable Conditional logic','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="">
                        <div class="col-md-6">
                            <input 
                                   class="switch-field"
                                   data-field-store="clogic-show_st"
                                   id="uifm_frm_clogic_st"
                                   type="checkbox"/>
                        </div>
                       
                    </div>
                </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <div id="uifm-show-conditional-logic" style="display:none;">
    <div class="form-group">
        
        <div class="col-md-12">
            <div class="conditional-logic-box form-inline">
                <div class="row">
                    <div class="form-group">
                        <select id="uifm_frm_clogic_show" 
                                style="width:73px;" 
                                data-field-store="clogic-f_show"
                                class="form-control uifm-f-setoption">
                            <option selected="selected" value="1"><?php echo __('Show','FRocket_admin'); ?></option>
                            <option value="2"><?php echo __('Hide','FRocket_admin'); ?></option>
                        </select>
                        <label> <?php echo __('this field if','FRocket_admin'); ?></label>
                        <select id="uifm_frm_clogic_all" 
                                style="width:57px;" 
                                data-field-store="clogic-f_all"
                                class="form-control uifm-f-setoption">
                            <option value="1"><?php echo __('All','FRocket_admin'); ?></option>
                            <option selected="selected" value="2"><?php echo __('Any','FRocket_admin'); ?></option>
                        </select>
                        <label><?php echo __('of the following rule match','FRocket_admin'); ?>:</label>
                    </div>
                </div>
                <div class="space20">

                </div>
                <div class="row">
                    <div class="form-group">
                        <button onclick="javascript:rocketform.clogic_addNewConditional();" 
                                class="btn btn-primary" type="button">
                            <?php echo __('Add new conditional Logic','FRocket_admin'); ?>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="javascript:rocketform.clogic_removeAll();">
             <i class="fa fa-trash-o"></i> <?php echo __('Remove all','FRocket_admin'); ?></button>
                    </div>


                </div>
                <div id="uifm-conditional-logic-list"></div>
<script type="text/javascript">
                        /*jQuery(document).ready(function($) {
                            $('.chosen-select').chosen();
                        });*/
                    </script>
            </div>
        </div>
    </div>
<div class="clear"></div>
</div>
        </div>
    </div>
</div>
<div id="uiform-set-clogic-tmpl" style="display:none;">
    <select 
                class="uifm_clogic_fieldsel" 
                onchange="javascript:rocketform.clogic_changeField(this);" >
        </select>
    
    <input 
        onchange="javascript:rocketform.clogic_changeMinput(this);"
        class="uifm_clogic_minput_2" type="text">
    <select 
                class="uifm_clogic_minput_1" 
                onchange="javascript:rocketform.clogic_changeMinput(this);" >
        </select>
    <select 
        onchange="javascript:rocketform.clogic_changeMtype(this);"
        class="form-control uifm_clogic_mtypeinp uifm_clogic_mtypeinp_1">
        <option selected="selected" value="1"><?php echo __('is','FRocket_admin'); ?></option>
        <option value="2"><?php echo __('is not','FRocket_admin'); ?></option>
    </select>
    <select 
        onchange="javascript:rocketform.clogic_changeMtype(this);"
        class="form-control uifm_clogic_mtypeinp uifm_clogic_mtypeinp_2">
        <option selected="selected" value="1"><?php echo __('is','FRocket_admin'); ?></option>
        <option value="2"><?php echo __('is not','FRocket_admin'); ?></option>
        <option value="3"><?php echo __('greater than','FRocket_admin'); ?></option>
        <option value="4"><?php echo __('less than','FRocket_admin'); ?></option>
    </select>
    
    <div data-row-index="0"
                        class="uifm-conditional-row">
                        <div class="row">
                            <div  class="uifm_clogic_deloption">
                                
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                               onclick="javascript:rocketform.clogic_deleteConditional(this);" >
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                            <div  class="uifm_clogic_field">
                                
                            </div>
                            
                            <div class="uifm_clogic_mtype">
                                
                            </div>

                            <div  class="uifm_clogic_minput">
                                
                            </div>
                        
                    </div>
                    </div>
</div>
