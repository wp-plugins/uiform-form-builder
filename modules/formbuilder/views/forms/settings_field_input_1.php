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

<div class="uifm-set-section-inputprepend">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Prepend','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text"
                               id="uifm_fld_input_prep_ed"
                               placeholder="Text"
                               class="form-control">
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_prep_ed"
                                data-option="1"
                                data-pos="1"
                                data-field-store="input-prepe_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="col-md-4">
             <div class="form-group">
                    
                    <div class="input-group">
                       <button class="btn btn-default" 
                    data-iconset="glyphicon"
                    data-placement="left"
                    data-icon="glyphicon-asterisk"
                    id="uifm_fld_input_prep_icon1"
                    role="iconpicker">
                </button>
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_prep_icon1"
                                data-option="2"
                                data-pos="1"
                                data-field-store="input-prepe_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-4">
             <div class="form-group">
                    
                    <div class="input-group">
                       <button class="btn btn-default"
                    data-placement="left"
                    data-iconset="fontawesome"
                    id="uifm_fld_input_prep_icon2"
                    role="iconpicker">
                </button>
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_prep_icon2"
                                data-option="3"
                                data-pos="1"
                                data-field-store="input-prepe_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <div id="uifm_fld_input_prep_preview">@</div>
            <button 
                data-source-txt="uifm_fld_input_prep_preview"
                                data-option="4"
                                data-pos="1"
                                data-field-store="input-prepe_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i> <?php echo __('Clean','FRocket_admin'); ?></button>
                
            </center>
            
            <input type="hidden" id="uifm_fld_input_prep" value="">
        </div>
    </div>
</div>

<div class="uifm-set-section-inputappend">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Append','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text"
                               id="uifm_fld_input_appe_ed"
                               placeholder="Text"
                               class="form-control">
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_appe_ed"
                                data-option="1"
                                data-pos="2"
                                data-field-store="input-append_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="col-md-4">
             <div class="form-group">
                    
                    <div class="input-group">
                       <button class="btn btn-default" 
                    data-iconset="glyphicon"
                    data-placement="left"
                    data-icon="glyphicon-asterisk"
                    id="uifm_fld_input_appe_icon1"
                    role="iconpicker">
                </button>
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_appe_icon1"
                                data-option="2"
                                data-pos="2"
                                data-field-store="input-append_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-4">
             <div class="form-group">
                    
                    <div class="input-group">
                       <button class="btn btn-default"
                    data-placement="left"
                    data-iconset="fontawesome"
                    id="uifm_fld_input_appe_icon2"
                    role="iconpicker">
                </button>
                        <div class="input-group-btn">
                            <button  
                                data-source-txt="uifm_fld_input_appe_icon2"
                                data-option="3"
                                data-pos="2"
                                data-field-store="input-append_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                                class="btn btn-warning"
                                    type="button"><i class="fa fa-plus-square"></i> <?php echo __('Add','FRocket_admin'); ?>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <div id="uifm_fld_input_appe_preview">@</div>
            <button 
                data-source-txt="uifm_fld_input_appe_preview"
                                data-option="4"
                                data-pos="2"
                                data-field-store="input-append_txt"
                                onclick="rocketform.inputsettings_addingPrepAppe(this);"
                class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i> <?php echo __('Clean','FRocket_admin'); ?></button>
                
            </center>
            
            <input type="hidden" id="uifm_fld_input_prep" value="">
        </div>
    </div>
</div>

    <div class="uifm-set-section-inputtextbox">
        <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Input','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
       <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="uifm_fld_lbl_txt"><?php echo __('Text','FRocket_admin'); ?></label>
                    <div class="input-group">
                        <div class="uifm-set-section-input1-txtvalue">
                             <input type="text"
                               data-field-store="input-value"
                               id="uifm_fld_input_value"
                               name="uifm_fld_inp_value"
                               class="form-control uifm-f-setoption">   
                        </div>
                            <div class="input-group-btn">
                            <select data-field-store="input-size"
                                    id="uifm_fld_inp_size"
                                    name="uifm_fld_inp_size"
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
                            <button data-field-store="input-bold"
                                class="btn btn-warning uifm-f-setoption-btn"
                                type="button">
                                <i class="fa fa-bold"></i>
                                <input type="hidden" id="uifm_fld_inp_bold" name="uifm_fld_inp_bold" value="0">
                            </button>
                            <button  data-field-store="input-italic"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-italic"></i>
                                <input type="hidden" id="uifm_fld_inp_italic" name="uifm_fld_inp_italic"  value="0">
                            </button>
                            <button  data-field-store="input-underline"
                                class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-underline"></i>
                                <input type="hidden" id="uifm_fld_inp_u" name="uifm_fld_inp_u" value="0">
                            </button>
                        </div>
                        
                        
                        
                    </div>

                </div>
            </div>
        </div>
    <div class="uifm-set-section-input-placeh">
        <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_fld_inp_pholdr"><?php echo __('Place holder','FRocket_admin'); ?></label>
                     <input 
                            data-field-store="input-placeholder"
                            type="text" 
                            id="uifm_fld_inp_pholdr" 
                            name="uifm_fld_inp_pholdr"  
                            placeholder=""
                            class="form-control uifm-f-setoption">   
            </div>
        </div>
    </div>
    </div>    
    
        
    <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Color','FRocket_admin'); ?></label>
                    <div 
                        data-field-store="input-color"
                        class="input-group uifm-custom-color">
                        <input type="text" value="" 
                               id="uifm_fld_inp_color" 
                               name="uifm_fld_inp_color" class="form-control" />
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
                            'name' => 'uifm_fld_inp_font',
                            'id' => 'uifm_fld_inp_font',
                            'data-field-store'=>'input-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="input-font_st"
                            id="uifm_fld_inp_font_st"
                            name="uifm_fld_inp_font_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                        </span>
                        
                    </div>

                </div>
            </div>
        </div>
        
        <div class="uifm-set-section-input-valign">
            <div class="row">
                    <div class="col-md-12">
                        <label ><?php echo __('Input value alignment','FRocket_admin'); ?></label>
                        <div class="controls form-group">
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label 
                                    data-field-store="input-val_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_align_1"
                                    name="uifm_fld_inp_align_1"   value="0"> <i class="fa fa-align-left"></i> <?php echo __('Left','FRocket_admin'); ?>
                                </label>
                                <label 
                                    data-field-store="input-val_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_align_2"
                                    name="uifm_fld_inp_align_2" value="1"> <i class="fa fa-align-center"></i> <?php echo __('Center','FRocket_admin'); ?>
                                </label>
                                <label 
                                    data-field-store="input-val_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_align_3" 
                                    name="uifm_fld_inp_align_3" value="2"> <i class="fa fa-align-right"></i> <?php echo __('Right','FRocket_admin'); ?>
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
        </div>    
    <div class="uifm-set-section-input-objalign">
            <div class="row">
                    <div class="col-md-12">
                        <label ><?php echo __('Button alignment','FRocket_admin'); ?></label>
                        <div class="controls form-group">
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label 
                                    data-field-store="input-obj_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_objalign_1"
                                    name="uifm_fld_inp_objalign_1"   value="0"> <i class="fa fa-align-left"></i> <?php echo __('Left','FRocket_admin'); ?>
                                </label>
                                <label 
                                    data-field-store="input-obj_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_objalign_2"
                                    name="uifm_fld_inp_objalign_2" value="1"> <i class="fa fa-align-center"></i> <?php echo __('Center','FRocket_admin'); ?>
                                </label>
                                <label 
                                    data-field-store="input-obj_align"
                                    data-toggle-enable="btn-success"
                                    data-toggle-disable="btn-success"
                                    data-settings-option="group-radiobutton"
                                    class="btn btn-success uifm-f-setoption-btn" >
                                <input type="radio" 
                                    id="uifm_fld_inp_objalign_3" 
                                    name="uifm_fld_inp_objalign_3" value="2"> <i class="fa fa-align-right"></i> <?php echo __('Right','FRocket_admin'); ?>
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>
    <div class="uifm-set-section-inputboxbg">
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
                                   data-field-store="el_background-show_st"
                                   id="uifm_fld_elbg_st"
                                   name="uifm_fld_elbg_st"
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
                                                 data-toggle="buttons">
                                                <label 
                                                    data-field-store="el_background-type"
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    id="uifm_fld_elbg_type_1"
                                                    class="btn btn-warning uifm-f-setoption-btn" >
                                                <input type="radio"  value="1">  <?php echo __('Solid','FRocket_admin'); ?>
                                                </label>
                                                <label 
                                                    data-field-store="el_background-type"
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    id="uifm_fld_elbg_type_2"
                                                    class="btn btn-warning uifm-f-setoption-btn" >
                                                <input type="radio"  value="2" checked> <?php echo __('Gradient','FRocket_admin'); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="form-group">
                                            <div data-field-store="el_background-solid_color"
                                                 class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                        id="uifm_fld_elbg_color_1"
                                                        type="text" 
                                                        value="" 
                                                        name="" 
                                                        class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Start color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="form-group">
                                            <div 
                                                data-field-store="el_background-start_color"
                                                class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                        type="text" value=""
                                                        id="uifm_fld_elbg_color_2"
                                                        name="" class="form-control" />
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
                                                data-field-store="el_background-end_color"
                                                class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>" 
                                                        id="uifm_fld_elbg_color_3"
                                                        type="text" value="" name="" class="form-control" />
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
    <div class="uifm-set-section-inputboxborder">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Border','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Border radius','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="">
                        <div class="col-md-3">
                            <input 
                                   data-field-store="el_border_radius-show_st"
                                   class="switch-field"
                                   disabled="disabled"
                                   name="uifm_fld_elbora_st"
                                   id="uifm_fld_elbora_st"
                                   type="checkbox"/>
                        </div>
                        <div class="col-md-9">
                            <input type="text" style="width:100%;"
                                   data-field-store="el_border_radius-size"
                                   data-slider-value="14"
                                   data-slider-step="1"
                                   data-slider-max="60"
                                   data-slider-min="0" 
                                   data-slider-id="" 
                                   id="uifm_fld_elbora_size" 
                                   class="uiform-opt-slider">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="space10"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Border','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="">
                        <div class="col-md-3">
                            <input 
                                   data-field-store="el_border-show_st"
                                   class="switch-field"
                                   disabled="disabled"
                                   name="uifm_fld_elbor_st"
                                   id="uifm_fld_elbor_st"
                                   type="checkbox"/>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Color','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="form-group">
                                            <div data-field-store="el_border-color" 
                                                 class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>" 
                                                        type="text" 
                                                        value="" 
                                                        name="uifm_fld_elbor_color"
                                                        id="uifm_fld_elbor_color"
                                                        class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Color (focus)','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="form-group">
                                            <div data-field-store="el_border-color_focus" 
                                                 class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>" 
                                                        type="text" value="" 
                                                        name="uifm_fld_elbor_colorfocus"
                                                        id="uifm_fld_elbor_colorfocus"
                                                        class="form-control" />
                                                <span class="input-group-addon tooltip-option-enable">
                                                <input 
                                                data-field-store="el_border-color_focus_st"
                                                id="uifm_fld_elbor_colorfocus_st"
                                                name="uifm_fld_elbor_colorfocus_st"
                                                class="uifm-f-setoption-st"
                                                value="1"
                                                type="checkbox">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('border style','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-9">
                                        <div class="controls form-group">
                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                <label 
                                                    data-field-store="el_border-style"
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    id="uifm_fld_elbor_style_1"
                                                    class="btn btn-warning uifm-f-setoption-btn" >
                                                <input type="radio"  value="1" checked><?php echo __('Solid','FRocket_admin'); ?>
                                                </label>
                                                <label 
                                                    data-field-store="el_border-style"
                                                    data-toggle-enable="btn-warning"
                                                    data-toggle-disable="btn-warning"
                                                    data-settings-option="group-radiobutton"
                                                    id="uifm_fld_elbor_style_2"
                                                    class="btn btn-warning uifm-f-setoption-btn" >
                                                <input type="radio"  value="2">  <?php echo __('Dotted','FRocket_admin'); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <label ><?php echo __('Border width','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-9">
                                      <input 
                                        data-field-store="el_border-width"  
                                        type="text" style="width:100%;"
                                        data-slider-value="14"
                                        data-slider-step="1"
                                        data-slider-max="20"
                                        data-slider-min="0"
                                        data-slider-id="" 
                                        id="uifm_fld_elbor_width"
                                        class="uiform-opt-slider">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
