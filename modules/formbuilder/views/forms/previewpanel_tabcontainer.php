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
$style_pane='';
if(intval($tabindex)!=0){
$style_pane='style="display:none;"';
}
?>
<div data-uifm-step="<?php echo $tabindex;?>"
     id="uifm-step-tab-<?php echo $tabindex;?>"
     class="uiform-step-pane"
 >
        <div class="uiform-items-container uiform-tab-container ui-sortable">
            <?php echo $tab_html_fields;?>
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