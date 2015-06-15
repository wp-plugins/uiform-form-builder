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
<div class="uiform-set-field-wrap" id="uiform-set-field-lbl-panel">
    <div class="space20"></div>
    <div class="uifm-set-section-helpblock">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Help block','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
   <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                 
                
                <label class="control-label" for="">
                    <?php echo __('Help block text','FRocket_admin'); ?>
                </label>
                <div class="controls form-group">
                    <?php 
                    $settings = array( 'media_buttons' => true,'textarea_rows'=>5);
			wp_editor('', 'uifm_fld_msc_text',$settings );
                    ?>
                </div>
                                  
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Show help block','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <input class="switch-field" name="uifm_fld_lbl_block" type="checkbox" checked/>
                    </div>
                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Text Font','FRocket_admin'); ?></label>
                    <div class="input-group uifm-custom-font">
                        <input type="hidden" value="" name="uifm_fld_lbl_font">
                        <?php do_action( 'styles_font_menu' ); ?>
                        <span class="input-group-addon">
                        <input type="checkbox">
                        </span>
                    </div>

                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Help block alignment (temp - delete)','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-align-left"></i> Left
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-align-center"></i> Middle
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-align-right"></i> Right
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Help block position','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning" >
                    <input type="radio"  value="0"> <i class="fa fa-hand-o-up"></i> At Top
                    </label>
                    <label data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning" >
                    <input type="radio"  value="0"> <i class="fa fa-hand-o-down"></i> At bottom
                    </label>
                    <label data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning" >
                    <input type="radio"  value="0"> <i class="fa fa-question-circle"></i> Tooltip
                    </label>
                    <label data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning" >
                    <input type="radio"  value="0"> <i class="fa fa-question-circle"></i> Pop up
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="uifm-set-section-validator">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Validators','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                    <label ><?php echo __('Required','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <input class="switch-field" name="uifm_fld_lbl_block" type="checkbox" checked/>
                    </div>
                </div>
            </div>
         <div class="col-sm-6">
                <div class="form-group">
                    <label ><?php echo __('Allow whitespace','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <input class="switch-field" name="uifm_fld_lbl_block" type="checkbox"/>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label><?php echo __('Add validator','FRocket_admin'); ?></label>
            <div class="controls form-group tooltip-val-container">
                
                <!-- checkbox group buttons -->
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary tooltip-val-demo"  >
                            <input type="checkbox"  value="0"> Alphabet
                            </label>
                            
                            
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                            <input type="checkbox"  value="0"> Alpha numeric
                            </label>
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                            <input type="checkbox"  value="0"> Only numbers
                            </label>
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                            <input type="checkbox"  value="0"> Email
                            </label>
                        </div>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">    
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                            <input type="checkbox"  value="0"> Greater than
                            </label>
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                            <input type="checkbox"  value="0"> Identical
                            </label>
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                                <input type="checkbox"  value="0"> Less than
                            </label>
                            <label data-toggle-enable="btn-primary"
                                data-toggle-disable="btn-primary"
                                data-settings-option="group-checkboxes"
                                class="btn btn-primary" >
                                <input type="checkbox"  value="0"> Length
                            </label>
                       </div>
            </div>
        </div>
    </div>
    <div class="uifm-custom-validator">
        <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Validator configuration: ','FRocket_admin'); ?> <?php echo __('Less than','FRocket_admin'); ?></label>
                    <div class="">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label ><?php echo __('Default Message','FRocket_admin'); ?></label>
                                   <div>
                                       here goes the default error message
                                   </div>
                                    </div>
                        </div>
                        <div class="col-md-6">
                                    <div class="form-group">
                                    <label ><?php echo __('Custom Error Message','FRocket_admin'); ?></label>
                                    <input type="text" value="" name="uifm_fld_inp_color" class="form-control" />
                                    </div>
                        </div>
                    </div>
        </div>
        
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Alert position','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-hand-o-up"></i> Top
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-hand-o-right"></i> Right
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-hand-o-down"></i> Bottom
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                        <input type="radio"  value="0"> <i class="fa fa-hand-o-left"></i> Left
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Set required icon','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <input class="switch-field" name="uifm_fld_lbl_block" type="checkbox" checked/>
                    </div>
                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Choose required icon','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <button class="btn btn-default" data-iconset="glyphicon" role="iconpicker"></button>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                    <label ><?php echo __('Required icon position','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"> <i class="fa fa-asterisk"></i> <?php echo __('Before label','FRocket_admin'); ?>
                    </label>
                    <label data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success" >
                    <input type="radio"  value="0"><i class="fa fa-asterisk"></i> <?php echo __('After label','FRocket_admin'); ?>
                    </label>
                </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    
</div>