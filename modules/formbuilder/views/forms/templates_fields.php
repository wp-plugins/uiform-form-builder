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

<!--\ Fields templates -->
<div id="uiform-fields-templates" style="display:none;">
<?php ob_start();?>
<div class="uiform-fields-quick-options">
                <div class="uiform-fields-quick-options-wrap">
                    <a href="javascript:void(0);"
                       title="<?php echo __('Multiple select','FRocket_admin'); ?>"
                       class="uiform-fields-qopt-select">
                        <span class="uiform-field-qopt-block"><input type="checkbox" value="1"></span></a>
                    <a href="javascript:void(0);" title="<?php echo __('Move field block','FRocket_admin'); ?>" class="uiform-fields-qopt-move">
                        <span class="uiform-field-qopt-block"><i class="fa fa-arrows"></i><span><?php echo __('Block','FRocket_admin'); ?></span></span></a>
                    <a href="javascript:void(0);" onclick="javascript:rocketform.fieldQuickOptions_EditField(this);" title="<?php echo __('Edit','FRocket_admin'); ?>" class="uiform-fields-qopt-move">
                        <span class="uiform-field-qopt-block"><i class="fa fa-pencil"></i></span></a>    
                     <a href="javascript:void(0);" onclick="javascript:rocketform.fieldQuickOptions_DuplicateField(this);" title="<?php echo __('Duplicate','FRocket_admin'); ?>" class="uiform-fields-qopt-copy">
                        <span class="uiform-field-qopt-block"><i class="fa fa-files-o"></i></span></a>   
                    <a href="javascript:void(0);" onclick="javascript:rocketform.fieldsetting_deleteFieldFromPreview(this);" title="<?php echo __('Remove','FRocket_admin'); ?>" class="uiform-fields-qopt-remove">
                        <span class="uiform-field-qopt-block"><i class="fa fa-trash-o"></i></span></a>    
                </div>
        </div>
<?php $tmp_fields_quick_opts = ob_get_contents();
ob_end_clean();?>
<?php ob_start();?>
<div class="uiform-fields-quick-options2">
                <div class="uiform-fields-quick-options-wrap">

                    <a href="javascript:void(0);" title="<?php echo __('Move field block','FRocket_admin'); ?>" class="uiform-fields-qopt-move">
                        <span class="uiform-field-qopt-block"><i class="fa fa-arrows"></i><span><?php echo __('Block','FRocket_admin'); ?></span></span></a> 
                    <a href="javascript:void(0);" onclick="javascript:rocketform.fieldsetting_deleteFieldFromPreview(this);" title="<?php echo __('Remove','FRocket_admin'); ?>" class="uiform-fields-qopt-remove">
                        <span class="uiform-field-qopt-block"><i class="fa fa-trash-o"></i></span></a>    
                </div>
        </div>
<?php $tmp_fields_quick_opts2 = ob_get_contents();
ob_end_clean();?>   
    <!--\ Grid System -->
     <!--\ ONE -->
    <div id="" data-typefield="1" data-iscontainer="1" class="uiform-gridsytem-table uiform-gridsystem-one uiform-field">
        <div class="uiform-field-wrap uiform-field-move">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td  data-maxpercent="100" data-blocks="12" width="100%">
                            <div class="uiform-items-container uiform-grid-inner-col">
                                
                            </div>
                        </td>   
                    </tr>
            </table>
            
           <?php echo $tmp_fields_quick_opts2;?>
       </div>
    </div>
    <!--\ TWO -->
    <div id="" data-typefield="2" data-iscontainer="1" class="uiform-gridsytem-table uiform-gridsystem-two uiform-field">
        <div class="uiform-field-wrap uiform-field-move">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td  data-maxpercent="50" data-blocks="6" width="50%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="100" data-blocks="6" width="50%">
                            <div class="uiform-items-container uiform-grid-inner-col">
                                
                            </div>
                        </td>    
                    </tr>
            </table>
            <?php echo $tmp_fields_quick_opts2;?>
       </div>
    </div>
    <!--\ THREE -->
    <div id="" data-typefield="3" data-iscontainer="1" class="uiform-gridsytem-table uiform-gridsystem-three uiform-field">
        <div class="uiform-field-wrap uiform-field-move">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td  data-maxpercent="33.3" data-blocks="4" width="33.3%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="66.6" data-blocks="4" width="33.3%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="100" data-blocks="4" width="33.3%">
                            <div class="uiform-items-container uiform-grid-inner-col">
                                
                            </div>
                        </td>
                    </tr>
            </table>
            <?php echo $tmp_fields_quick_opts2;?>
       </div>
    </div>
   
    <!--\ FOUR -->
    <div id="" data-typefield="4" data-iscontainer="1" class="uiform-gridsytem-table uiform-gridsystem-four uiform-field">
        <div class="uiform-field-wrap uiform-field-move">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td data-maxpercent="25" data-blocks="3" width="25%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="50" data-blocks="3" width="25%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td data-maxpercent="75" data-blocks="3" width="25%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="100" data-blocks="3" width="25%">
                            <div class="uiform-items-container uiform-grid-inner-col">
                                
                            </div>
                        </td>    
                    </tr>
            </table>
            <?php echo $tmp_fields_quick_opts2;?>
       </div>
    </div>
     <!--\ SIX -->
    <div id="" data-typefield="5" data-iscontainer="1" class="uiform-gridsytem-table uiform-gridsystem-six uiform-field">
        <div class="uiform-field-wrap uiform-field-move">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td  data-maxpercent="16.6" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="33.3" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="50" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="66.6" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="83.3" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col rkfm-bend-fcontainer-wrap">
                                
                            </div>
                        </td>
                        <td  data-maxpercent="100" data-blocks="2" width="16.6%">
                            <div class="uiform-items-container uiform-grid-inner-col">
                                
                            </div>
                        </td>
                    </tr>
            </table>
            <?php echo $tmp_fields_quick_opts2;?>
       </div>
    </div>
    
    <!--\ Standard Fields -->
    <!--\ textbox -->
        <div id=""  data-typefield="6" class="uiform-textbox uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <input data-field-store="input-value"
                                   data-field-option="uifm-txtbox-inp-val"
                                   class="uifm-txtbox-inp-val form-control uifm-f-option"
                                   type="text" value="">
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
    <!--\ Textarea -->
        <div id=""  data-typefield="7" class="uiform-textarea uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textarea label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textarea sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <textarea data-field-store="input-value"
                                   data-field-option="uifm-txtbox-inp-val"
                                   class="uifm-txtbox-inp-val form-control uifm-f-option"
                                   ></textarea>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!--\ radio button -->
        <div id=""  data-typefield="8" class="uiform-radiobtn uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input2-wrap">
                                <div class="radio" data-inp2-opt-index="0">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="radio"
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 1</span>
                                    </label>
                                 </div>
                                <div class="radio" data-inp2-opt-index="1">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="radio"
                                            value="" 
                                            name="" 
                                            >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 2</span>
                                    </label>
                                 </div>
                                <div class="radio" data-inp2-opt-index="2">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="radio" 
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 3</span>
                                    </label>
                                 </div>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- checkbox -->
     <div id=""  data-typefield="9" class="uiform-checkbox uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input2-wrap">
                                <div class="checkbox" data-inp2-opt-index="0">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="checkbox"
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 1</span>
                                    </label>
                                 </div>
                                <div class="checkbox" data-inp2-opt-index="1">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="checkbox"
                                            value="" 
                                            name="" 
                                            >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 2</span>
                                    </label>
                                 </div>
                                <div class="checkbox" data-inp2-opt-index="2">
                                    <label>
                                        <input class="uifm-inp2-rdo" type="checkbox" 
                                            value="" 
                                            name="" 
                                             >
                                        <span class="uifm-inp2-label  uifm-input2-opt-main"><?php echo __('option','FRocket_admin'); ?> 3</span>
                                    </label>
                                 </div>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- select -->
     <div id=""  data-typefield="10" class="uiform-select uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input2-wrap">
                                <select class="form-control uifm-input2-opt-main" >
                                    <option data-inp2-opt-index="0" > <?php echo __('option','FRocket_admin'); ?> 1 </option> 
                                    <option data-inp2-opt-index="1"> <?php echo __('option','FRocket_admin'); ?> 2 </option> 
                                    <option data-inp2-opt-index="2"> <?php echo __('option','FRocket_admin'); ?> 3 </option> 
                                </select>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- multiselect -->
     <div id=""  data-typefield="11" class="uiform-multiselect uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input2-wrap">
                                <select class="form-control uifm-input2-opt-main" multiple >
                                    <option data-inp2-opt-index="0" > 
                                        <?php echo __('option','FRocket_admin'); ?> 1 
                                    </option> 
                                    <option data-inp2-opt-index="1"> <?php echo __('option','FRocket_admin'); ?> 2 </option> 
                                    <option data-inp2-opt-index="2"> <?php echo __('option','FRocket_admin'); ?> 3 </option> 
                                </select>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- File upload -->
     <div id=""  data-typefield="12" class="uiform-fileupload uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-fileinput-wrap">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new"><?php echo __('Select file','FRocket_admin'); ?></span>
                                    <span class="fileinput-exists"><?php echo __('Change','FRocket_admin'); ?></span><input type="file" name="..."></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" 
                                   data-dismiss="fileinput"><?php echo __('Remove','FRocket_admin'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- Image upload -->
     <div id=""  data-typefield="13" class="uiform-imageupload uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-fileinput-wrap">
                               <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new"><?php echo __('Select image','FRocket_admin'); ?></span>
                                        <span class="fileinput-exists"><?php echo __('Change','FRocket_admin'); ?></span>
                                        <input type="file" name="..."></span>
                                    <a href="#" class="btn btn-default fileinput-exists" 
                                       data-dismiss="fileinput"><?php echo __('Remove','FRocket_admin'); ?></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- Custom html -->
     <div id=""  data-typefield="14" class="uiform-customhtml uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input3-customhtml">
                                
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
      <!-- Password -->
     <div id=""  data-typefield="15" class="uiform-password uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <input data-field-store="input-value"
                                   data-field-option="uifm-txtbox-inp-val"
                                   class="uifm-txtbox-inp-val form-control uifm-f-option"
                                   type="password" value="">
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- Prepended text -->
     <div id=""  data-typefield="28" class="uiform-preptext uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="input-group">
                                <div class="input-group-addon uifm-inp-preptxt">@</div>
                                <input data-field-store="input-value"
                                   data-field-option="uifm-txtbox-inp-val"
                                   class="uifm-txtbox-inp-val form-control uifm-f-option"
                                   type="text" value="">
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- Appended text -->
     <div id=""  data-typefield="29" class="uiform-appetext uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="input-group">
                                <input data-field-store="input-value"
                                   data-field-option="uifm-txtbox-inp-val"
                                   class="uifm-txtbox-inp-val form-control uifm-f-option"
                                   type="text" value="">
                                <div class="input-group-addon uifm-inp-apptxt">@</div>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- Prepended and Appended text -->
     <div id=""  data-typefield="30" class="uiform-prepapptext uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="input-group">
                                    <div class="input-group-addon uifm-inp-preptxt">@</div>
                                    <input data-field-store="input-value"
                                    data-field-option="uifm-txtbox-inp-val"
                                    class="uifm-txtbox-inp-val form-control uifm-f-option"
                                    type="text" value="">
                                    <div class="input-group-addon uifm-inp-apptxt">@</div>
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- slider -->
     <div id=""  data-typefield="16" class="uiform-slider uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input4-wrap">
                                    <div class="uifm-inp4-number"></div>
                                    <input class="uifm-inp4-fld" 
                                           type="text"
                                           data-check-hash=""
                                           />
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- range -->
     <div id=""  data-typefield="17" class="uiform-range uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input4-wrap">
                                    <input 
                                           type="text" 
                                           class="uifm-inp4-fld" 
                                           data-check-hash=""
                                           />
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- spinner -->
     <div id=""  data-typefield="18" class="uiform-spinner uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input4-wrap">
                                   <input class="uifm-inp4-fld"
                                          type="text"
                                          data-check-hash="">
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
    <!-- captcha -->
     
    <!-- Re captcha -->
    
  <!-- Date picker -->
     <div id=""  data-typefield="24" class="uiform-datepicker uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input7-wrap">
                                     <div class="form-group">
                                        <div class="uifm-input7-datepic input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
  <!-- Time picker -->
     <div id=""  data-typefield="25" class="uiform-timepicker uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                             
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input7-wrap">
                                    <div class="form-group">
                                        <div class="uifm-input7-timepic input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
   <!-- Date Time picker -->
     <div id=""  data-typefield="26" class="uiform-datetime uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                                <div class="uifm-input7-wrap">
                                    <div class="form-group">
                                        <div class="uifm-input7-datetimepic input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
   <!-- Submit button -->
     <div id=""  data-typefield="20" class="uiform-submitbtn uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            
                               <input 
                                   class="btn uifm-txtbox-inp-val"
                                   type="submit" 
                                   value="Submit button">
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
   <!-- hidden input -->
     <div id=""  data-typefield="21" class="uiform-hiddeninput uiform-field  uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-12">
                        <input type="text" value="" class="uifm-txtbox-inp8-val form-control" readonly>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
    <!-- Star rating -->
     <div id=""  data-typefield="22" class="uiform-ratingstar uiform-field  uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                              <input class="uifm-input-ratingstar"
                                     data-min="1" 
                                     data-max="5" 
                                     data-step="1">
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
    <!-- Color picker -->
     <div id=""  data-typefield="23" class="uiform-colorpicker uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                              <div class="input-group uiform-colorpicker-wrap">
                                <input type="text" value="" 
                                         class="form-control" />
                                <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
    <!-- Divider -->
     <div id=""  data-typefield="32" class="uiform-divider uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-12">
                        <div class="uiform-divider-bar">
                            <span class="uiform-divider-text"></span>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
   <!-- heading 1 -->
     <div id=""  data-typefield="33" class="uiform-heading1 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-10">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h1 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H1 here','FRocket_admin'); ?></h1>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <!-- heading 2 -->
     <div id=""  data-typefield="34" class="uiform-heading2 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h2 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H2 here','FRocket_admin'); ?></h2>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <div id=""  data-typefield="35" class="uiform-heading3 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h3 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H3 here','FRocket_admin'); ?></h3>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <div id=""  data-typefield="36" class="uiform-heading4 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h4 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H4 here','FRocket_admin'); ?></h4>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <div id=""  data-typefield="37" class="uiform-heading5 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h5 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H5 here','FRocket_admin'); ?></h5>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
     <div id=""  data-typefield="38" class="uiform-heading6 uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-2" style="display: none;">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                <span 
                                   data-field-option="uifm-help-block"
                                    class="uifm-label-helpblock uifm-f-option">
                                    <span class="fa fa-question-circle"></span>
                                </span> 
                               <span  data-field-store="label-text"
                                      data-field-option="uifm-label"
                                      class="uifm-label uifm-f-option"><?php echo __('Textbox label','FRocket_admin'); ?></span>
                               <span data-field-store="sublabel-text"
                                      data-field-option="uifm-sublabel"
                                      class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">
                            <div class="uifm-input-heading-wrap">
                                <h6 class="uifm-txtbox-inp-val"><?php echo __('Type your heading H6 here','FRocket_admin'); ?></h6>
                            </div>
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>
   <!-- wizard button -->
     <div id=""  data-typefield="39" class="uiform-wizardbtn uiform-field uiform-field-childs">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="rkfm-row">
                    <div class="rkfm-col-sm-12">
                        <div class="uifm-input-container">                               
                            <button class="btn uiform-btn-wizprev uifm-txtbox-inp13-val">
                                    <i class="fa fa-arrow-left"></i>
                                    <div class="uifm-inp-lbl"><?php echo __('Prev','FRocket_admin'); ?></div>
                            </button>
                            <button class="btn uiform-btn-wiznext uifm-txtbox-inp12-val">
                                   <div class="uifm-inp-lbl"><?php echo __('Next','FRocket_admin'); ?></div>
                                    <i class="fa fa-arrow-right"></i>
                            </button>								
                        </div>
                        <div data-field-option="uifm-help-block"  style="display: none;" class="uifm-help-block uifm-f-option">
                            <?php echo __('Help block text','FRocket_admin'); ?>
                        </div>
                    </div>
                </div>
                <?php echo $tmp_fields_quick_opts;?>
            </div>
        </div>  
   <!-- Modal -->
<div class="modal fade" id="modaltemplate" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              <span class="fa fa-question-circle"></span>
            </h4>
         </div>
         <div class="modal-body">
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal"><?php echo __('Close','FRocket_admin'); ?>
            </button>
           
         </div>
      </div><!-- /.modal-content -->
</div>
</div><!-- /.modal --> 

</div><!--\ Fields templates -->
   
   