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
<div id="uiform-container" class="uiform-wrap uiform-page_records">
    <input type="hidden" id="rec_id" value="<?php echo $record_id;?>">
    <input type="hidden" id="uiform-inforecord-container-pdf"  
           value="<?php echo $info_export;?>">
    <div id="uiform-inforecord-container">
         <div class="space20"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="uifm-inforecord-box-info">
                <h3><?php echo __('Submitted form data','FRocket_admin');?></h3>
                <ul>
              <?php foreach ($record_info as $value) {
               ?>
                 <li><b><?php echo $value['field'];?></b> : <?php echo $value['value'];?></li>
              <?php  
                }?>
                </ul>    
            </div>
        </div>
        <div class="col-md-6">
            <div class="uifm-inforecord-box-info2">
                <h3><?php echo __('Additional info','FRocket_admin');?></h3>
                <ul >
                    <li>
                        <b><?php echo __('Date','FRocket_admin');?></b>:
                        <span><?php echo $info_date;?></span>
                    </li>
                    <li>
                        <b><?php echo __('IP','FRocket_admin');?></b>:
                        <span><?php echo $info_ip;?></span>
                    </li>
                    <li>
                        <b><?php echo __('Client PC info','FRocket_admin');?></b>:
                        <span ><?php echo $info_useragent;?></span>
                    </li>
                    <li>
                        <b><?php echo __('URL page','FRocket_admin');?></b>:
                        <span><?php echo $info_referer;?></span>
                    </li>
                    <li>
                        <b><?php echo __('Form name','FRocket_admin');?></b>:
                        <span><?php echo $form_name;?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="space10"></div>
   <div class="row">
       <div class="col-md-12">
<a 
    href="javascript:void(0);"
    onclick="javascript:rocketform.inforecord_genpdf();"
    class="btn btn-warning"><i class="fa fa-file-pdf-o"></i> <?php echo __('Export to PDF','FRocket_admin');?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
       </div>
   </div>
</div>