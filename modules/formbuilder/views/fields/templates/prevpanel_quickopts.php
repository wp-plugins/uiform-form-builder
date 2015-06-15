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
                     <a href="javascript:void(0);" onclick="javascript:rocketform.fieldQuickOptions_DuplicateField(this);" title="<?php echo __('Copy','FRocket_admin'); ?>" class="uiform-fields-qopt-copy">
                        <span class="uiform-field-qopt-block"><i class="fa fa-files-o"></i></span></a>   
                    <a href="javascript:void(0);" onclick="javascript:rocketform.fieldsetting_deleteFieldFromPreview(this);" title="<?php echo __('Remove','FRocket_admin'); ?>" class="uiform-fields-qopt-remove">
                        <span class="uiform-field-qopt-block"><i class="fa fa-trash-o"></i></span></a>    
                </div>
        </div>
<?php
$cntACmp = ob_get_contents();
/*$cntACmp = str_replace("\n", '', $cntACmp);
$cntACmp = str_replace("\t", '', $cntACmp);
$cntACmp = str_replace("\r", '', $cntACmp);
$cntACmp = str_replace("//-->", ' ', $cntACmp);
$cntACmp = str_replace("//<!--", ' ', $cntACmp);
@$cntACmp = eregi_replace("[[:space:]]+", " ", $cntACmp);*/
ob_end_clean();
echo $cntACmp;
?>
