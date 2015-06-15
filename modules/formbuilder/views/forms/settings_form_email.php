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
$default_template='';
ob_start();
?>
<div align="center">
  <table width="600" cellspacing="5" cellpadding="5" border="0" style="background: #daf1f8; border: 1px solid #000000;">
    <tbody>
      <tr>
        <th style="background-color: #91c5f2;"><?php echo __('New form request','FRocket_admin'); ?><br />
          </th>
      </tr>
      <tr>
        <td valign="top" style="text-align: left;"><?php echo __('You are receiving a new form request','FRocket_admin'); ?>:<br />
          <br />
          [CONTENT]<br />
          <br />
          </td>
      </tr>
      <tr>
        <td style="text-align: left;">
          <?php echo __('Form information','FRocket_admin'); ?>:<br/>
          <?php echo __('URL','FRocket_admin'); ?>:[URL_CLIENT]<br />
          <?php echo __('Form','FRocket_admin'); ?>: [FORM_NAME]<br />
          </td>
      </tr>
    </tbody>
  </table></div>
<?php
$default_template = ob_get_clean();
?>
<div class="uiform-set-field-wrap" id="uiform-set-form-email">
   <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_email_subject"><?php echo __('Subject mail','FRocket_admin'); ?>
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" data-original-title="<?php echo __('it is the title of the message. do not leave blank','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                    </label>
                     <input type="text" 
                            id="uifm_frm_email_subject"
                            value="<?php echo __('Here goes your subject mail','FRocket_admin'); ?>"
                            name="uifm_frm_email_subject" 
                            placeholder="<?php echo __('Type subject','FRocket_admin'); ?>"  class="form-control">   
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_email_recipient"><?php echo __('Recipient mail','FRocket_admin'); ?>
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" data-original-title="<?php echo __('This is the recipient mail. if you leave it blank, admin mail will be taken','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                    </label>
                     <input type="text" 
                            id="uifm_frm_email_recipient"
                            name="uifm_frm_email_recipient" 
                            value="<?php echo get_option( 'admin_email' );?>"
                            placeholder="<?php echo __('Type email address','FRocket_admin'); ?>"  class="form-control">   
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_email_cc">CC (carbon copy)
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" data-original-title="<?php echo __('this mail will receive a copy of the email','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                    </label>
                     <input type="text" 
                            id="uifm_frm_email_cc"
                            name="uifm_frm_email_cc" 
                            placeholder="<?php echo __('Type CC mail','FRocket_admin'); ?>"  class="form-control">   
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label for="uifm_frm_email_bcc">BCC (Blind Carbon Copy)
                    <a href="javascript:void(0);"
                       data-toggle="tooltip" data-placement="right" data-original-title="<?php echo __('this mail will receive a copy of the email without letting the others notice it','FRocket_admin'); ?>"
                       ><span class="fa fa-question-circle"></span></a>
                    </label>
                     <input type="text" 
                            id="uifm_frm_email_bcc"
                            name="uifm_frm_email_bcc" 
                            placeholder="<?php echo __('Type BCC mail','FRocket_admin'); ?>"  class="form-control">   
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label class="control-label" for="">
                    <?php echo __('Email Template','FRocket_admin'); ?>
                </label>
                <div class="controls form-group">
                    <?php
                    /*pending add this tinymce*/
                    $settings = array( 'media_buttons' => true,
                                        'editor_height' => 325,
                                        'textarea_rows'=>20);
			wp_editor($default_template, 'uifm_frm_email_tmpl',$settings );
                    ?>
                </div>
                                  
                </div>
            </div>
    </div>
    
</div>

