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
<div style="display:none;">
    <?php echo json_encode($datatable_body);?>
</div>
<input type="hidden" id="uifm-list-recbyform-data" value="<?php echo $export;?>">
<table id="table_id" class="display">
    <thead>
        <tr>
            <?php foreach ($datatable_head as $value) {?>
                 <th><?php echo $value->fieldname;?></th>
            <?php }?>
                 <th><?php echo __('Date','FRocket_admin');?></th>
                 <th><?php echo __('Options','FRocket_admin');?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datatable_body as $value) {?>
        <tr>
            <?php foreach ($value as $key=>$value2) {?>
                <?php if($key!='fbh_id'){ ?>
                    <td><?php echo $value2;?></td>
                <?php } ?>
            <?php } ?>
            <td>
                <div class="btn-group">
                <ul class="unstyled">
                <li>
                    <a 
                        class="btn btn-sm btn-info"
                        href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=records&action=info_record&id_rec='.$value->fbh_id;?>"><i class="fa fa-pencil-square-o"></i> <?php echo __('Show detail','FRocket_admin');?></a></li>
                </ul>
            </div>
            </td>
        </tr>    
        <?php }?>
    </tbody>
</table>
