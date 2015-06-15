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

<div class="uifm-set-section-input3">
   <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label class="control-label" for="">
                    <?php echo __('Custom html content','FRocket_admin'); ?>
                </label>
                <div class="controls form-group">
                    <?php
                    /*pending add this tinymce*/
                    $settings = array( 'media_buttons' => true,'textarea_rows'=>5);
			wp_editor('', 'uifm_fld_inp3_html',$settings );
                    ?>
                </div>
                                  
                </div>
            </div>
        </div>
</div>
