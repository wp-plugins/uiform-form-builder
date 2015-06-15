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

<div class="uifm-set-section-input2">
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for=""><?php echo __('Settings label option','FRocket_admin'); ?></label>
                    <div class="input-group">
                        <div class="input-group-btn">
                            <select data-field-store="input2-size"
                                    id="uifm_fld_inp2_size"
                                    name="uifm_fld_inp2_size"
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
                            <button data-field-store="input2-bold"
                                class="btn btn-warning uifm-f-setoption-btn"
                                type="button">
                                <i class="fa fa-bold"></i>
                                <input type="hidden" id="uifm_fld_inp2_bold" name="uifm_fld_inp2_bold" value="0">
                            </button>
                            <button  data-field-store="input2-italic"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-italic"></i>
                                <input type="hidden" id="uifm_fld_inp2_italic" name="uifm_fld_inp2_italic"  value="0">
                            </button>
                            <button  data-field-store="input2-underline"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-underline"></i>
                                <input type="hidden" id="uifm_fld_inp2_u" name="uifm_fld_inp2_u" value="0">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Color','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div 
                        data-field-store="input2-color"
                        class="input-group uifm-custom-color">
                        <input type="text" value="" 
                               id="uifm_fld_inp2_color" 
                               name="uifm_fld_inp2_color" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Font family','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="input-group uifm-custom-font">
                        <?php 
                        $attributes = array(
                            'name' => 'uifm_fld_inp2_font',
                            'id' => 'uifm_fld_inp2_font',
                            'data-field-store'=>'input2-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="input2-font_st"
                            id="uifm_fld_inp2_font_st"
                            name="uifm_fld_inp2_font_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                        </span>
                        
                    </div>

                </div>
            </div>
        </div>
    <div class="space20"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Options','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
   <div class="uifm-set-section-input2-optbox">
       <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0);"
               onclick="javascript:rocketform.input2settings_addNewRdoOption();"
               class="btn btn-sm btn-success"
               ><?php echo __('Add new option','FRocket_admin'); ?></a>
            <button onclick="javascript:rocketform.input2settings_deleteAllOptions();" 
                    class="btn btn-sm btn-danger">
             <i class="fa fa-trash-o"></i> <?php echo __('Remove all options','FRocket_admin'); ?></button>
        </div>
        </div>
       <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    <label ><?php echo __('Selected','FRocket_admin'); ?></label>   
                </div>
                <div class="col-md-10">
                    <label ><?php echo __('Label','FRocket_admin'); ?></label>   
                </div>
                <div id="uifm-fld-inp2-options-container">

                </div>

            </div>
        </div>
      
   </div> 
    <div id="uifm-fld-inp2-block-align-box">
        <div class="row">
            <div class="col-md-12">
                <label ><?php echo __('Block alignment','FRocket_admin'); ?></label>
                <div class="controls form-group">
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label 
                            data-field-store="input2-block_align"
                            data-toggle-enable="btn-success"
                            data-toggle-disable="btn-success"
                            data-settings-option="group-radiobutton"
                            class="btn btn-success uifm-f-setoption-btn" >
                        <input type="radio"  
                            id="uifm_fld_inp2_blo_align_1"
                            value="0"> <i class="fa fa-align-left"></i> <?php echo __('Block','FRocket_admin'); ?>
                        </label>
                        <label 
                            data-field-store="input2-block_align"
                            data-toggle-enable="btn-success"
                            data-toggle-disable="btn-success"
                            data-settings-option="group-radiobutton"
                            class="btn btn-success uifm-f-setoption-btn" >
                        <input type="radio"  
                            id="uifm_fld_inp2_blo_align_2"
                            value="1"> <i class="fa fa-align-center"></i> <?php echo __('Inline','FRocket_admin'); ?>
                        </label>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
<!--  template option--->
<div id="uifm_frm_inp2_templates" style="display:none;">
    <div data-opt-index="0" class="uifm-fld-inp2-options-row">
        <div class="col-md-2">
            <input type="checkbox" 
                class="uifm_frm_inp2_opt_checked"   
                value="1"
                onclick="javascript:rocketform.input2settings_statusRdoOption(this);"
                id="uifm_frm_inp2_opt0_rdo">
        </div>
        <div class="col-md-8">
            <div class="form-group">
                    <input type="text" 
                            id="uifm_frm_inp2_opt0_label"
                            onkeyup="rocketform.input2settings_labelOption(this);"
                            onfocus="rocketform.input2settings_labelOption(this);"
                            onchange="rocketform.input2settings_labelOption(this);"
                            class="uifm_frm_inp2_opt_label_evt col-md-12"
                            placeholder="<?php echo __('Type label','FRocket_admin'); ?>"  class="form-control">   
            </div>
        </div>
        <div class="col-md-2">
            <a href="javascript:void(0);"
            class="btn btn-sm btn-danger"
            onclick="javascript:rocketform.inpu2settings_deleteOption(this);"
            >
                <i class="fa fa-trash-o"></i> 
            </a>
        </div>
    </div>
    <div class="radio" data-inp2-opt-index="0">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="radio" 
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 3</span>
                                    </label>
                                 </div>
    <div class="checkbox" data-inp2-opt-index="0">
                                    <label>
                                        <input class="uifm-inp2-chk" type="checkbox" 
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 3</span>
                                    </label>
                                 </div>
</div>
<!--/ template option--> 