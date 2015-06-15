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
<div id="uiform-container" data-uiform-page="form_list" class="uiform-wrap">
    <div class="space20"></div>
    <div class="row">
        <div class="col-lg-12">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="fa fa-list-alt"></i>
                <h5>
                <?php echo __('List forms.','FRocket_admin')?>
                </h5>
                <div class="widget-buttons">
                   
                    
                </div>
            </div>  
            <div class="widget-body">
                <div id="uiform-listform-options">
                    <div class="uiform-listform-options-col">
                         <a class="btn btn-sm btn-primary" 
                       href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=create_uiform';?>">
                        <i class="fa fa-plus">
                        </i>
                        <?php echo __('Add new form','FRocket_admin')?>
                        </a>
                    </div>
                    <div class="uiform-listform-options-col">
                         <a class="btn btn-sm btn-warning" 
                            onclick="rocketform.listform_updateStatus(2);"
                        href="javascript:void(0);">
                          
                        <?php echo __('Disable','FRocket_admin')?>
                        </a>
                    </div>
                    <div class="uiform-listform-options-col">
                         <a class="btn btn-sm btn-info" 
                            onclick="rocketform.listform_updateStatus(1);"
                        href="javascript:void(0);">
                           
                        <?php echo __('Enable','FRocket_admin')?>
                        </a>
                    </div>
                    <div class="uiform-listform-options-col">
                        <a class="btn btn-sm btn-danger" 
                            onclick="rocketform.listform_updateStatus(0);"
                        href="javascript:void(0);">
                            <i class="fa fa-trash-o"></i>
                        <?php echo __('Delete','FRocket_admin')?>
                        </a>
                    </div>
                    <div class="uiform-listform-options-col">
                        <a class="btn btn-sm btn-success" 
                            onclick="rocketform.listform_duplicate();"
                        href="javascript:void(0);">
                         <i class="fa fa-files-o"></i>   
                        <?php echo __('Duplicate','FRocket_admin')?>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <form id="uiform-form-listform"
                          name="uiform-form-listform"
                          enctype="multipart/form-data"
                          method="post"
                          >
                        
                   
                    <table class="table table-striped table-bordered dataTable" id="form_list">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox"
                                      
                                       onchange="rocketform.listform_selectallforms(this);"
                                       >
                            </th>
                            <th><?php echo __('Name Form','FRocket_admin')?></th>
                            <th 
                                id="guidetour-flist-shortcode"
                                data-intro="<?php echo __('Copy and paste the shortcode to your desired page','FRocket_admin');?>"
                                ><?php echo __('Shortcode','FRocket_admin');?></th>
                            <th><?php echo __('Created','FRocket_admin')?></th>
                            <th><?php echo __('Status','FRocket_admin')?></th>
                            <th><?php echo __('Options','FRocket_admin')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($query)){?>
<?php foreach ($query as $row): ?>
                        <tr>
                            <th>
                                <input type="checkbox"
                                        class="uiform-listform-chk-id"
                                       value="<?php echo $row->fmb_id;?>"
                                       name="id[]"
                                       >
                            </th>
                            <td><?php echo $row->fmb_name; ?></td>
                            <td>
                             <code> [uiform id="<?php echo $row->fmb_id;?>"]</code>
                            </td>
                            <td><?php echo $row->created_date; ?></td>
                            <td>
    <?php 
    if (intval($row->flag_status)===1) {
        ?>
                                    <span class="label label-success">
                                       <?php echo __('Active','FRocket_admin'); ?> 
                                    </span>
    <?php    
    } elseif(intval($row->flag_status)===2) {
        ?>
                                    <span class="label label-warning">

                                        <?php echo __('Inactive','FRocket_admin'); ?>
                                    </span>
    <?php
        }
    ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <ul class="unstyled">
                                    <li><a 
                                            class="guidetour-flist-edit btn btn-sm btn-info"
                                            data-intro="<?php echo __('Edit and load your custom form','FRocket_admin');?>"
                                            href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=create_uiform&form_id='.$row->fmb_id;?>">
                                            <i class="fa fa-pencil-square-o"></i> <?php echo __('Edit','FRocket_admin')?></a></li>
                                    <li><a 
                                           class="guidetour-flist-del btn btn-sm btn-danger"
                                            data-intro="<?php echo __('Delete form','FRocket_admin');?>"
                                            onclick="javascript:rocketform.listform_deleteFormById(this,<?php echo $row->fmb_id;?>);"
                                           href="javascript:void(0);"><i class="fa fa-trash-o"></i> <?php echo __('Delete','FRocket_admin')?></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
    <?php 
endforeach; 
    ?>
                        <?php }else{?>
                        <tr>
                            <td colspan="6">
                            <div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> <?php echo __('there is not forms. Add new one','FRocket_admin')?></div>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
                </table> 
                    </form>
                </div>
                
                <center>
                    <div  class="pagination-wrap"><?php echo $pagination; ?></div></center>
            </div> 
        </div> 
    </div>
    </div>
</div>
<div style="display:none;">
    <input type="hidden" id="uifm_listform_popup_title" value="<?php echo __('List form information','FRocket_admin')?>" >
    <input type="hidden" id="uifm_listform_popup_notforms" value="<?php echo __('there is no forms selected. select one at least','FRocket_admin')?>" >
</div>