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
ob_start();
?>
<div class="rockfm-form-container uiform-wrap">
<div class="rockfm-alert-container" style="display:none;"></div>
<form class="rockfm-form" 
      action="" 
      name="" 
      method="post" 
      enctype="multipart/form-data" 
      id="rockfm_form_<?php echo $form_id;?>">

    
    <input type="hidden" value="<?php echo $form_id;?>" class="_rockfm_form_id" name="_rockfm_form_id">
    <?php if(isset($wizard['enable_st']) 
            && intval($wizard['enable_st'])===1
            && count($wizard['tabs'])>1
            ){?>
        <input type="hidden" value="1" class="_rockfm_wizard_st" >
    <?php } else {?>
        <input type="hidden" value="0" class="_rockfm_wizard_st" >
    <?php } ?>
    <input type="hidden" value="<?php echo Uiform_Form_Helper::base64url_encode(urldecode($onsubm['sm_successtext']));?>" name="_rockfm_onsubm_smsg" class="_rockfm_onsubm_smsg" >
    <!--- ajax or post --->
    <?php if(isset($main['submit_ajax']) && intval($main['submit_ajax'])===1){?>
        <input type="hidden" value="1" class="_rockfm_type_submit" name="_rockfm_type_submit">
        <input type="hidden" value="rocket_front_submitajaxmode" name="action">
    <?php }else{?>
        <input type="hidden" value="0" class="_rockfm_type_submit" name="_rockfm_type_submit">
    <?php } ?>
    
    <div class="uiform-main-form">
        <?php if(intval($tab_count)>1){
            echo $form_tab_head;
            }
          ?>
            <div class="uiform-step-content" >
                <?php  echo $form_content;?>
                <div class="clear"></div>
            </div>
            <?php 
            if(intval($tab_count)>1){
            ?>
            <?php    
            echo $form_tab_footer;
            }
            ?>
        
       
    </div>
    <?php if(!empty($clogic)){?>
    <input type="hidden" class="rockfm_clogic_data" value="<?php echo htmlentities(json_encode($clogic)); ?>">
    <?php }?>
    <div class="space10"></div>
</form>
 <?php if(isset($main['add_js']) && !empty($main['add_js'])){?>
  <!-- Additional javascript -->
<?php echo stripslashes(urldecode($main['add_js']));?>
    <!-- adittional javascript -->
<?php } ?>
    
</div>
<?php
$cntACmp = ob_get_contents();
$cntACmp = str_replace("\n", '', $cntACmp);
$cntACmp = str_replace("\t", '', $cntACmp);
$cntACmp = str_replace("\r", '', $cntACmp);
$cntACmp = str_replace("//-->", ' ', $cntACmp);
$cntACmp = str_replace("//<!--", ' ', $cntACmp);
@$cntACmp = eregi_replace("[[:space:]]+", " ", $cntACmp);
ob_end_clean();
echo $cntACmp;
?>