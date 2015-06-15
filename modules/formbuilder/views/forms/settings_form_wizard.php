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
<div class="uiform-set-field-wrap" id="uiform-set-form-wizard">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_wiz_st"><?php echo __('Enable wizard forms','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                     <input class="uifm_frm_wiz_st_event switch-field"
                                   id="uifm_frm_wiz_st"
                                   disabled="disabled"
                                   name="uifm_frm_wiz_st"
                                   type="checkbox"/>
            </div>
        </div>
    </div>
    <div class="uiform_frm_wiz_main_content" style="display:display;position: relative;">
     <div class="uiform-frm-wiz-express-overlay"></div>
     <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label class="control-label col-sm-12" for="">
                    <div class="uifm_frm_skin_tabs_options">
                        <div class="row">
                            <div class="col-sm-6 no-padding-left">
                                <?php echo __('Tabs management','FRocket_admin'); ?>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group  ">
                                    <button href="#" 
                                                    onclick="javascript:rocketform.wizardtab_cleanTabs();"
                                                    class="btn btn-sm btn-primary">
                                                 <?php echo __('Clean Tabs','FRocket_admin'); ?></button>
                                            <button href="#" 
                                                    onclick="javascript:rocketform.wizardtab_addNewTab();"
                                                    class="btn btn-sm btn-success">
                                                <i class="fa fa-plus"></i> <?php echo __('Add new','FRocket_admin'); ?></button>
                                        </div>
                            </div>
                        </div>
                    </div>
                </label>
                    <div class="clear"></div>
                <div class="controls">
                   <div id="uifm_frm_skin_tabs_box">
                       <div data-tab-nro="0" class="uifm_frm_skin_tab_content">
                           <div class="row">
                               <div class="col-sm-8">
                                   <div class="form-group">
                                            <label ><?php echo __('Tab','FRocket_admin'); ?> <span>1</span>: </label>
                                            <input type="text" 
                                                    id="uifm_frm_skin_tab0_title"
                                                    class="form-control uifm_frm_skin_tab_title_evt"
                                                    onfocus="rocketform.wizardtab_tabManualEvt(this,true);"
                                                    placeholder="<?php echo __('Type tab title','FRocket_admin'); ?>"  class="form-control">   
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                   <div class="btn-group  ">
                                        <button onclick="javascript:rocketform.wizardtab_deleteTab(this);"
                                                class="btn btn-sm btn-danger"
                                                ><i class="fa fa-trash-o"></i> <?php echo __('Delete','FRocket_admin'); ?></button>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
                                  
                </div>
            </div>
    </div>
    <div class="space20"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Skin tab','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <select id="uifm_frm_wiz_theme_typ"
                        class="form-control">
                    <option value="0"><?php echo __('Theme 1','FRocket_admin'); ?></option>
                    <option value="1"><?php echo __('Theme 2','FRocket_admin'); ?></option>
                </select>
            </div>
        </div> 
    </div>
    <div class="row" id="uifm_frm_wiz_tab_inactive_wrap">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Inactive mode','FRocket_admin'); ?></label>
                    <div class="">
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-11">
                             <div class="row" id="uifm_frm_wiz_tab_inactive_bgcolor_wrap">
                                <div class="col-md-5">
                                   <label ><?php echo __('Background color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                       <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_inactive_bgcolor" 
                                            name="uifm_frm_wiz_tab_inactive_bgcolor"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                           <div class="row" id="uifm_frm_wiz_tab_inactive_txtcolor_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Text color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_inactive_txtcolor" 
                                            name="uifm_frm_wiz_tab_inactive_txtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                           
                           <div class="row" id="uifm_frm_wiz_tab_inactive_numtxtcolor_wrap">
                                <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Number text color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_inactive_numtxtcolor" 
                                            name="uifm_frm_wiz_tab_inactive_numtxtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    <div class="row" id="uifm_frm_wiz_tab_active_wrap">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Active Mode','FRocket_admin'); ?></label>
                    <div class="">
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-11">
                             <div class="row" id="uifm_frm_wiz_tab_active_bgcolor_wrap">
                                <div class="col-md-5">
                                   <label ><?php echo __('Background color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                       <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_active_bgcolor" 
                                            name="uifm_frm_wiz_tab_active_bgcolor"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                           <div class="row" id="uifm_frm_wiz_tab_active_txtcolor_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Title color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                           
                                            id="uifm_frm_wiz_tab_active_txtcolor" 
                                            name="uifm_frm_wiz_tab_active_txtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                           <div class="row" id="uifm_frm_wiz_tab_active_numtxtcolor_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Number text color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_active_numtxtcolor" 
                                            name="uifm_frm_wiz_tab_active_numtxtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="uifm_frm_wiz_tab_active_bg_numtxt_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Background for number container','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_active_bg_numtxt" 
                                            name="uifm_frm_wiz_tab_active_bg_numtxt"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    <div class="row" id="uifm_frm_wiz_tab_done_wrap">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Done mode','FRocket_admin'); ?>
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('this when the tab is completed. this will be shown on frontend','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                    </label>
                    <div class="">
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-11">
                             <div class="row" id="uifm_frm_wiz_tab_done_bgcolor_wrap">
                                <div class="col-md-5">
                                   <label ><?php echo __('Background color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                       <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_done_bgcolor" 
                                            name="uifm_frm_wiz_tab_done_bgcolor"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                           <div class="row" id="uifm_frm_wiz_tab_done_txtcolor_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Title color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                           
                                            id="uifm_frm_wiz_tab_done_txtcolor" 
                                            name="uifm_frm_wiz_tab_done_txtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                           <div class="row" id="uifm_frm_wiz_tab_done_numtxtcolor_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Number text color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_done_numtxtcolor" 
                                            name="uifm_frm_wiz_tab_done_numtxtcolor"
                                            class="form-control" />
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    <div class="row" id="uifm_frm_wiz_tab_cont_wrap">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Tab container ','FRocket_admin'); ?></label>
                    <div class="">
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-11">
                             <div class="row" id="uifm_frm_wiz_tab_cont_bgcolor_wrap">
                                <div class="col-md-5">
                                   <label ><?php echo __('Background color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                       <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_cont_bgcolor" 
                                            name="uifm_frm_wiz_tab_cont_bgcolor"
                                            class="form-control" />
                                        
                                    </div>
                                </div>
                            </div>
                            
                           <div class="row" id="uifm_frm_wiz_tab_cont_borcol_wrap">
                               <div class="space10"></div>
                                <div class="col-md-5">
                                   <label ><?php echo __('Text color','FRocket_admin'); ?></label>
                                </div>
                                <div class="col-sm-7">
                                     <div class="input-group uifm-custom-color">
                                         <span class="input-group-addon"><i></i></span>
                                         <input 
                                            type="text" 
                                            value="" 
                                            id="uifm_frm_wiz_tab_cont_borcol" 
                                            name="uifm_frm_wiz_tab_cont_borcol"
                                            class="form-control" />
                                       
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
<div id="uifm_frm_wiz_templates" style="display:none;">
    <div data-tab-nro="" class="uifm_frm_skin_tab_content">
                           <div class="row">
                               <div class="col-sm-8">
                                   <div class="form-group">
                                            <label ><?php echo __('Tab','FRocket_admin'); ?> <span>0</span> : </label>
                                            <input type="text" 
                                                    id="uifm_frm_skin_tab0_title"
                                                    class="form-control uifm_frm_skin_tab_title_evt"
                                                    onfocus="rocketform.wizardtab_tabManualEvt(this,true);"
                                                    placeholder="<?php echo __('Type tab title','FRocket_admin'); ?>"  class="form-control">   
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                   <div class="btn-group  ">
                                        <button onclick="javascript:rocketform.wizardtab_deleteTab(this);"
                                                class="btn btn-sm btn-danger"
                                                ><i class="fa fa-trash-o"></i> <?php echo __('Delete','FRocket_admin'); ?></button>
                                    </div>
                               </div>
                           </div>
                       </div>
</div>