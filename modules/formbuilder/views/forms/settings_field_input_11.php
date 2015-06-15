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

<div class="uifm-set-section-input11">
    <div class="space10"></div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label ><?php echo __('Text','FRocket_admin'); ?></label>
                    <div class="input-group">
                        <input type="text"
                               data-field-store="input11-text_val"
                               id="uifm_fld_input11_textval"
                               class="form-control uifm-f-setoption">
                        
                            <div class="input-group-btn">
                            <select data-field-store="input11-text_size"
                                    id="uifm_fld_input11_size"
                                    data-live-search="true"
                                    data-style="btn-primary"
                                    class="selectpicker">
                                <optgroup label="Font size" data-max-options="2">
                                    <?php 
                                    for ($i = 8; $i <= 48; $i++) {
                                    ?>
                                        <option value="<?php echo $i;?>"><?php echo $i.' px';?></option>
                                    <?php    
                                    }
                                    ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <button data-field-store="input11-bold"
                                class="btn btn-warning uifm-f-setoption-btn"
                                type="button">
                                <i class="fa fa-bold"></i>
                                <input type="hidden" id="uifm_fld_input11_textbold"  value="0">
                            </button>
                            <button  data-field-store="input11-italic"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-italic"></i>
                                <input type="hidden" id="uifm_fld_input11_textitalic" value="0">
                            </button>
                            <button  data-field-store="input11-underline"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-underline"></i>
                                <input type="hidden" id="uifm_fld_input11_textu"  value="0">
                            </button>
                        </div>
                        
                        
                        
                    </div>

                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Color','FRocket_admin'); ?></label>
                    <div 
                        data-field-store="input11-text_color"
                        class="input-group uifm-custom-color">
                        <input type="text" value="" 
                               id="uifm_fld_input11_textcolor"
                                 class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Font family','FRocket_admin'); ?></label>
                    <div class="input-group uifm-custom-font">
                        <?php 
                        $attributes = array(
                            'name' => 'uifm_fld_input11_font',
                            'id' => 'uifm_fld_input11_font',
                            'data-field-store'=>'input11-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="input11-font_st"
                            id="uifm_fld_input11_font_st"
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
               <div class="form-group">
                    <label ><?php echo __('Divider bar Color','FRocket_admin'); ?></label>
                    <div data-field-store="input11-div_color" class="input-group uifm-custom-color">
                        <span class="input-group-addon"><i></i></span>
                        <input 
                            type="text" 
                            value="" 
                            id="uifm_fld_input11_barcolor"
                            class="form-control" />
                         <span class="input-group-addon">
                        <input 
                            data-field-store="input11-div_col_st"
                            id="uifm_fld_input11_divcol_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                         </span>
                    </div>
                    
                </div>
            </div>
    </div>
    <div class="space10"></div>
   
</div>
