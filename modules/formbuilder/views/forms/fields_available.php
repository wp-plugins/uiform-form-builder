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
 * @link      http://www.rocket-form.com
 */
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#uiform-fields-tab-1" data-toggle="tab"><?php echo __('Main fields','FRocket_admin'); ?></a></li>
  <li><a href="#uiform-fields-tab-2" data-toggle="tab" class="last-child"><?php echo __('More fields','FRocket_admin'); ?></a></li>
  
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane in active" id="uiform-fields-tab-1">
      <div class="uiform-tab-content">
          <!-- Standard fields -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Standard Fields','FRocket_admin'); ?> </legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-textbox" 
                                       data-type="6" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,6);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-textarea"></span> <?php echo __('Text Box','FRocket_admin'); ?>
                                    </a> 
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-textarea" 
                                       data-type="7" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,7);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-outdent"></i> <?php echo __('Text Area','FRocket_admin'); ?>
                                    </a> 
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-radiobutton" 
                                       data-type="8" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,8);"
                                       href="javascript:void(0);">
                                       <i class=" glyphicon glyphicon-ok-circle"></i> <?php echo __('Radio Button','FRocket_admin'); ?>
                                    </a> 
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-checkbox" 
                                       data-type="9" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,9);"
                                       href="javascript:void(0);">
                                       <i class=" glyphicon glyphicon-check"></i> <?php echo __('Check Box','FRocket_admin'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-selectlist" 
                                       data-type="10" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,10);"
                                       href="javascript:void(0);">
                                      <i class="fa fa-list"></i>  <?php echo __('Select List','FRocket_admin'); ?>
                                    </a>
                                </li>
                                
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-submitbtn" 
                                       data-type="20" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,20);"
                                       href="javascript:void(0);">
                                       <?php echo __('Submit Button','FRocket_admin'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-multipleselect" 
                                       data-type="11" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,11);"
                                       href="javascript:void(0);">
                                      <?php echo __('Select Mult','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-spinner" 
                                       data-type="18" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,18);"
                                       href="javascript:void(0);">
                                      <span class="icon-uifm-field-icon-spinner"></span>  <?php echo __('Spinner','FRocket_admin'); ?>
                                      <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-slider" 
                                       data-type="16" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,16);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-slider"></span> <?php echo __('Slider','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-range" 
                                       data-type="17" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,17);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-sliders"></i> <?php echo __('Range','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Grid System -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Grid System','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-column1" 
                                       data-type="1" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,1);"
                                       href="javascript:void(0);">
                                       <span class="icon-fields-column1"></span> <?php echo __('1 Col','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-column2" 
                                       data-type="2" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,2);"
                                       href="javascript:void(0);">
                                       <span class="icon-fields-column2"></span> <?php echo __('2 Cols','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-column3" 
                                       data-type="3" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,3);"
                                       href="javascript:void(0);">
                                       <span class="icon-fields-column3"></span> <?php echo __('3 Cols','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-column4" 
                                       data-type="4" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,4);"
                                       href="javascript:void(0);">
                                       <span class="icon-fields-column4"></span> <?php echo __('4 Cols','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-column6" 
                                       data-type="5" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,5);"
                                       href="javascript:void(0);">
                                       <span class="icon-fields-column6"></span> <?php echo __('6 Cols','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Aditional Fields -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Additional Fields','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-ratingstar" 
                                       data-type="22" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,22);"
                                       href="javascript:void(0);">
                                      <i class=" glyphicon glyphicon-star"></i>  <?php echo __('Star rating','FRocket_admin'); ?>
                                      <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>  
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-recaptcha" 
                                       data-type="27" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,27);"
                                       href="javascript:void(0);">
                                       <?php echo __('ReCaptcha','FRocket_admin'); ?>
                                        <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-customhtml" 
                                       data-type="14" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,14);"
                                       href="javascript:void(0);">
                                        <?php echo __('Custom Html','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-hiddeninput" 
                                       data-type="21" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,21);"
                                       href="javascript:void(0);">
                                       <?php echo __('Hidden Input','FRocket_admin'); ?>
                                        <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-password" 
                                       data-type="15" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,15);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-pass"></span> <?php echo __('Password','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-catpcha" 
                                       data-type="19" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,19);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-refresh"></i> <?php echo __('Captcha','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-datepicker" 
                                       data-type="24" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,24);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-calendar"></i> <?php echo __('Date Picker','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-customhtml" 
                                       data-type="28" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,28);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-prepend"></span>  <?php echo __('Prepend','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Layout Elements -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Layout Elements','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <!--<li>
                                  <a class="uiform-draggable-field uiform-button1" href="javascript:addFieldToForm(1);">
                                    Group
                                </a>  
                                </li>-->
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-divider" 
                                       data-type="32" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,32);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-minus"></i> <?php echo __('Divider','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-divider" 
                                       data-type="33" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,33);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H1','FRocket_admin'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Uploads Fields -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Upload Fields','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-fileupload" 
                                       data-type="12" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,12);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-upload"></i> <?php echo __('File Upload','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-imageupload" 
                                       data-type="13" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,13);"
                                       href="javascript:void(0);">
                                      <?php echo __('Image Upload','FRocket_admin'); ?>
                                      <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          
      </div>
  </div>
  <div class="tab-pane " id="uiform-fields-tab-2">
      <div class="uiform-tab-content">
          
          <!-- Picker Fields -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Picker Fields','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-datepicker" 
                                       data-type="24" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,24);"
                                       href="javascript:void(0);">
                                       <i class="fa fa-calendar"></i> <?php echo __('Date Picker','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-colorpicker" 
                                       data-type="23" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,23);"
                                       href="javascript:void(0);">
                                         <?php echo __('Color Picker','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-timepicker" 
                                       data-type="25" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,25);"
                                       href="javascript:void(0);">
                                        <?php echo __('Time Picker','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-datetime" 
                                       data-type="26" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,26);"
                                       href="javascript:void(0);">
                                       <?php echo __('Date & Time','FRocket_admin'); ?>
                                        <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>

                </fieldset>
          </div>
          <!-- Prepend/Append Fields -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Prepend/Append Fields - Text Box','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-customhtml" 
                                       data-type="28" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,28);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-prepend"></span>  <?php echo __('Prepend','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-customhtml" 
                                       data-type="29" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,29);"
                                       href="javascript:void(0);">
                                       <span class="icon-uifm-field-icon-append"></span> <?php echo __('Append','FRocket_admin'); ?>
                                       <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-customhtml" 
                                       data-type="30" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,30);"
                                       href="javascript:void(0);">
                                       <?php echo __('Prepend/App','FRocket_admin'); ?>
                                        <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Headings -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Headings','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading1" 
                                       data-type="33" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,33);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H1','FRocket_admin'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading2" 
                                       data-type="34" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,34);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H2','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading3" 
                                       data-type="35" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,35);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H3','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading3" 
                                       data-type="36" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,36);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H4','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading3" 
                                       data-type="37" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,37);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H5','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-heading3" 
                                       data-type="38" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,38);"
                                       href="javascript:void(0);">
                                       <?php echo __('Heading H6','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
          <!-- Wizard elements -->
          <div class="uiform-fields-group uiform-enable-fieldset">
              <fieldset>
                    <legend><?php echo __('Wizard elements','FRocket_admin'); ?></legend>
                    <div class="uiform-fieldset-inner">
                        <div class="row">
                            <ul class="uiform-list-fields">
                                <li>
                                    <a class="uiform-draggable-field uiform-button1 uiform-wizardbtn" 
                                       data-type="39" 
                                       onclick="javascript:rocketform.mainfields_addFieldToForm(this,39);"
                                       href="javascript:void(0);">
                                       <?php echo __('Wizard buttons','FRocket_admin'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </fieldset>
          </div>
      </div> 
      
  </div>
</div>
                         
