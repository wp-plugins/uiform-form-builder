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
 * @link      http://rocket-form.softdiscover.com
 */
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<div id="uiform-container" data-uiform-page="" class="uiform-wrap">
        <div class="col-md-12">
            <div class="space20"></div>
            <div id="uifm-backup-response"></div>
           
            <div class="uiform-settings-inner-box">
                <div class="row">
        <div class="col-lg-12">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="fa fa-list-alt"></i>
                <h5>
                <?php echo __('Backup','FRocket_admin');?>
                </h5>
               
            </div>  
            <div class="widget-body">
               <div class="widget-forms clearfix">
                  
                   <div class="form-group">
                       <label class="col-md-2 control-label"><?php echo __('Name backup','FRocket_admin');?></label>
                       <div class="col-md-10">
                           <input type="text" id="_uifm_backup_namebkp" name="_uifm_backup_namebkp" style="max-width: 200px;display:inline;" class="form-control"> 
                           <a class="uifm-global-tooltip" href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="top" 
                       data-original-title="<?php echo __('Enter a backup name or leave blank, current date will be assigned to backup name','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                           <button type="button"
                                   onclick="javascript:rocketform.showFeatureLocked();"
                                   class="btn btn-primary"><?php echo __('Create backup','FRocket_admin');?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></button>
                       </div>
                   </div>
                   <div class="space20"></div>
                   <div class="form-group">
                       
                       <div class="table-responsive">
                    <table class="table table-striped table-bordered dataTable" id="form_list">
                    <thead>
                        <tr>
                            <th style="max-width: 50px;"></th>
                            <th><?php echo __('Name','FRocket_admin')?></th>
                            <th><?php echo __('Date','FRocket_admin')?></th>
                            <th><?php echo __('Options','FRocket_admin')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($files)){?>
<?php foreach ($files as $value): ?>
                        <tr>
                            <td> <i class="fa fa-database"></i></td>
                            <td><?php echo $value['file_name'];?></td>
                            <td><?php echo $value['file_date'];?></td>
                            <td>
                                <div class="btn-group">
                                    <ul class="unstyled">
                                    <li><a 
                                            class="btn btn-sm btn-info"
                                            href="<?php echo $value['file_url'];?>"  download>
                                            <i class="fa fa-cloud-download"></i> <?php echo __('Download','FRocket_admin')?></a></li>
                                     <li><a 
                                           class="btn btn-sm btn-warning"
                                            data-uifm-file="<?php echo $value['file_name'];?>"
                                            onclick="javascript:rocketform.showFeatureLocked();"
                                           href="javascript:void(0);"><i class="fa fa-database"></i> <?php echo __('Restore Backup','FRocket_admin')?></a></li>
                                    <li><a 
                                           class="btn btn-sm btn-danger"
                                            data-uifm-file="<?php echo $value['file_name'];?>"
                                            onclick="javascript:rocketform.showFeatureLocked();"
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
                            <td colspan="4">
                            <div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> <?php echo __('there is not backup stored. Create new one','FRocket_admin')?></div>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
                </table> 
                  
                </div>
                       
                     
                   </div> 
                    
                   <div class="row">
                       <div class="col-md-6">
                           <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new"><?php echo __('Select file','FRocket_admin'); ?></span>
                                    <span class="fileinput-exists"><?php echo __('Change','FRocket_admin'); ?></span>
                                    <input name="uifm_bkp_fileupload" type="file" name="..."></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" 
                                    data-dismiss="fileinput"><?php echo __('Remove','FRocket_admin'); ?></a>
                            </div>
                       </div>
                       <div class="col-md-6">
                            <button class="btn btn-primary" onclick="javascript:rocketform.showFeatureLocked();" value="Submit"><i class="fa fa-upload"></i> <?php echo __('Upload Backup','FRocket_admin'); ?> 
                                <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></button>
       
                       </div>
                   </div>
              

                         
                         
               </div>
                
                <div class="clear"></div>
            </div>
            <div class="widget-footer">
                <a class="btn btn-sm btn-primary" 
                            href="javascript:void(0);"
                            onclick="rocketform.globalsettings_saveOptions();"
                            >
                            <i class="fa fa-floppy-o"></i>
                        <?php echo __('Save changes','FRocket_admin')?>
                        </a>
        </div>
        </div> 
    </div>
    </div>
            </div>
        </div>
    
</div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function () {
    rocketform();
});
//]]>
</script>
<div style="display:none;">
    <input type="hidden" id="uifm_bkp_msg_success_restore" value="<?php echo __('Database backup success','FRocket_admin'); ?>" >
    <input type="hidden" id="uifm_bkp_del_box_title" value="<?php echo __('Delete File selected','FRocket_admin'); ?>" >
    <input type="hidden" id="uifm_bkp_restore_box_title" value="<?php echo __('Restore Backup','FRocket_admin'); ?>" >
</div>