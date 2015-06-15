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
<?php 
$id_field=(!empty($id))?$id:'';
?>
<div id="<?php echo $id_field;?>"  data-typefield="39" class="uiform-wizardbtn uiform-field uiform-field-childs">
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
                <?php echo $quick_options;?>
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
