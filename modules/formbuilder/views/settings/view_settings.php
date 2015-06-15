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
<div id="uiform-container" data-uiform-page="" class="uiform-wrap">
        <div class="col-md-12">
            <div class="space20"></div>
            <div class="uifm-settings-response"></div>
           
            <div class="uiform-settings-inner-box">
                <div class="row">
        <div class="col-lg-12">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="fa fa-list-alt"></i>
                <h5>
                <?php echo __('Global Settings','FRocket_admin');?>
                </h5>
               
            </div>  
            <div class="widget-body">
               <div class="widget-forms clearfix">
                   <form 
                       id="uifrm-setting-form"
                       chartset="utf-8"
                       name="frmform"
                       class="form-horizontal">
                       <div id="uiform-settings-inner-body">
                        <div class="form-group">
                            <label class=" col-sm-2 control-label"><?php echo __('Language','FRocket_admin');?></label>
                            <div class="col-sm-10">
                                <div class="span4">
                                    <select class="form-control input-sm" name="language"  id="language" data-placeholder="Select here.." >
                                    <?php 
                                    foreach ($lang_list as $frow): 
                                        ?>
                                    <?php $sel = ($frow['val'] == $language) ? " selected=\"selected\"" : "" ?>
                                        <option value="<?php echo $frow['val']; ?>" <?php echo $sel; ?>>
                                            <?php echo $frow['label']; ?>
                                        </option>
                                        <?php 
                                    endforeach; 
                                        ?>
                                    <?php unset($frow); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>
                   </form>
               </div>
                
                <div class="clear"></div>
            </div>
            <div class="widget-footer">
                <a class="btn btn-sm btn-primary" 
                            href="javascript:void(0);"
                            onclick="rocketform.globalsettings_saveOptions();"
                            >
                            <i class="fa fa-floppy-o"></i>
                        <?php echo __('Save changes','FRocket_admin')?>
                        </a>
        </div>
        </div> 
    </div>
    </div>
            </div>
        </div>
    
</div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function () {
    rocketform();
});
//]]>
</script>