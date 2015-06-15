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
        <div class="uifm-set-section-helpblock-text">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">


                    <label class="control-label" for="">
                        <?php echo __('Help block text','FRocket_admin'); ?>
                    </label>
                    <div class="controls form-group">
                        <?php
                        /*pending add this tinymce*/
                        $settings = array( 'media_buttons' => true,'textarea_rows'=>5);
                            wp_editor('', 'uifm_fld_msc_text',$settings );
                        ?>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        
        
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Show help block','FRocket_admin'); ?></label>
                    <div class="controls form-group">
                        <input class="switch-field"
                                   data-field-store="help_block-show_st"
                                   id="uifm_fld_hblock_st"
                                   name="uifm_fld_hblock_st"
                                   type="checkbox"/>
                        
                        
                    </div>
                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Text Font','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="input-group uifm-custom-font">
                        <input type="hidden" value="" name="uifm_fld_lbl_font">
                        <?php 
                        $attributes = array(
                            'name' => 'uifm_fld_hblock_font',
                            'id' => 'uifm_fld_hblock_font',
                            'data-field-store'=>'help_block-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="help_block-font_st"
                            id="uifm_fld_hblock_font_st"
                            name="uifm_fld_hblock_font_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                        </span>
                    </div>

                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Help block position','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label 
                        data-field-store="help_block-pos"
                        data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning uifm-f-setoption-btn" >
                        <input type="radio"  
                           id="uifm_fld_hblock_pos_1" 
                           name="uifm_fld_hblock_pos"   
                           value="0"> <i class="fa fa-hand-o-down"></i> <?php echo __('At bottom','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="help_block-pos"
                        data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_hblock_pos_2" 
                           name="uifm_fld_hblock_pos"   
                           value="1"> <i class="fa fa-hand-o-up"></i> <?php echo __('At Top','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="help_block-pos"
                        data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_hblock_pos_3" 
                           name="uifm_fld_hblock_pos"   
                           value="2"> <i class="fa fa-question-circle"></i> <?php echo __('Tooltip','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="help_block-pos"
                        data-toggle-enable="btn-warning"
                        data-toggle-disable="btn-warning"
                        data-settings-option="group-radiobutton"
                        class="btn btn-warning uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_hblock_pos_4" 
                           name="uifm_fld_hblock_pos"   
                           value="3"><i class="fa fa-question-circle"></i> <?php echo __('Pop up','FRocket_admin'); ?>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
</div>