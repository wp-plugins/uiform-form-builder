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

<!--\ Fields templates -->
<div id="uiform-fields-templates" style="display:none;">
<!--\ TWO -->
<?php echo $uiform_grid_two;?>
<!--\ textbox -->
 <?php echo $uiform_textbox;?> 
   <!-- Modal -->
<div class="modal fade" id="modaltemplate" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              <span class="fa fa-question-circle"></span>
            </h4>
         </div>
         <div class="modal-body">
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal"><?php echo __('Close','FRocket_admin'); ?>
            </button>
           
         </div>
      </div><!-- /.modal-content -->
</div>
</div><!-- /.modal --> 

</div><!--\ Fields templates -->
   
   