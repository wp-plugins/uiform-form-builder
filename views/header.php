<?php
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<div class="uiform-editing-header">
   <nav class="navbar navbar-default" role="navigation">
  <div class="navbar-inner">
<div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only"><?php echo __('Toggle navigation','FRocket_admin'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="javascript:void(0);" class="navbar-brand"><img title="Rocket Form" src="<?php echo UIFORM_FORMS_URL;?>/assets/backend/image/rockfm-logo-header.png"></a>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-file"></span> <?php echo __('Forms','FRocket_admin'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=create_uiform';?>"><?php echo __('New','FRocket_admin'); ?></a></li>
            <li><a href="#"><?php echo __('Save','FRocket_admin'); ?></a></li>
            <li class="divider"></li>
            <li><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=list_uiforms';?>"><?php echo __('List forms','FRocket_admin'); ?></a></li>
          </ul>
        </li>
        <?php if(isset($_GET['action']) && Uiform_Form_Helper::sanitizeInput($_GET['action'])==='create_uiform'){?>
        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-file-text-o"></span> <?php echo __('Templates','FRocket_admin'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a onclick="javascript:rocketform.templates_load(1);" 
                   href="javascript:void(0);"><?php echo __('Contact us','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(2);" 
                   href="javascript:void(0);"><?php echo __('Newsletter','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(3);" 
                   href="javascript:void(0);"><?php echo __('Survey Questionnaire','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(4);" 
                   href="javascript:void(0);"><?php echo __('Online event registration','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(5);" 
                   href="javascript:void(0);"><?php echo __('Reservation Request','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(6);" 
                   href="javascript:void(0);"><?php echo __('Purchase Order - Point Of Sale','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(7);" 
                   href="javascript:void(0);"><?php echo __('Website Design Request','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(8);" 
                   href="javascript:void(0);"><?php echo __('Job Application','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(9);" 
                   href="javascript:void(0);"><?php echo __('CV Submission','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(10);" 
                   href="javascript:void(0);"><?php echo __('Order form','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(11);" 
                   href="javascript:void(0);"><?php echo __('wizard form','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(12);" 
                   href="javascript:void(0);"><?php echo __('All fields','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(13);" 
                   href="javascript:void(0);"><?php echo __('Conditional Logic','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(14);" 
                   href="javascript:void(0);"><?php echo __('Custom skin','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></a>
              </li>
          </ul>
        </li>
        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" 
             data-toggle="dropdown"><span class="fa fa-desktop"></span> <?php echo __('Preview','FRocket_admin'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a onclick="javascript:rocketform.previewform_showForm(1);" 
                   href="javascript:void(0);">
                       <?php echo __('desktop','FRocket_admin'); ?></a></li>
            <li><a onclick="javascript:rocketform.previewform_showForm(2);" 
                   href="javascript:void(0);">
                       <?php echo __('Tablet','FRocket_admin'); ?></a></li>
            <li><a onclick="javascript:rocketform.previewform_showForm(3);" 
                   href="javascript:void(0);">
                       <?php echo __('smartphone','FRocket_admin'); ?></a></li>
          </ul>
        </li>
        <?php } ?>
        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="fa fa-question-circle"></span> <?php echo __('Records','FRocket_admin'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=records&action=list_records';?>">
                <?php echo __('List all Forms','FRocket_admin'); ?>
                </a>
            </li>
            <li><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=records&action=info_records_byforms';?>">
                <?php echo __('List by Form','FRocket_admin'); ?></a>
            </li>
            <li><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=records&action=custom_report';?>">
                <?php echo __('Custom Report','FRocket_admin'); ?></a>
            </li>
          </ul>
        </li>
        <li class="divider-menu"></li>
        <li >
            <a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=create_uiform&opt=import';?>">
                <i class="fa fa-reply"></i> <?php echo __('Import','FRocket_admin'); ?></a></li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=forms&action=export_form';?>">
            <i class="fa fa-share"></i> <?php echo __('Export','FRocket_admin'); ?></a></li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=records&action=view_charts';?>">
            <span class="fa fa-area-chart"></span> <?php echo __('Charts','FRocket_admin'); ?> 
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=settings&action=view_settings';?>">
            <i class="fa fa-cog"></i> <?php echo __('Settings','FRocket_admin'); ?>
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo admin_url().'?page=uiform_form_builder&mod=formbuilder&controller=settings&action=backup_settings';?>">
            <i class="fa fa-cloud-download"></i> <?php echo __('Backup','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span>
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="javascript:void(0);" onclick="javascript:rocketform.guidedtour_load();">
            <span class="fa fa-question-circle"></span> <?php echo __('Guided tour','FRocket_admin'); ?>
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="http://codecanyon.net/item/uiform-wordpress-form-builder/11057544?ref=Softdiscover" class="rkfm-express-pro-button" target="_blank">
            <img src="<?php echo UIFORM_FORMS_URL;?>/assets/backend/image/express/express-get-pro-version.png">
            </a>
        </li>
        <li class="divider-menu"></li>
      </ul>
      <div id="uifm-loading-box" style="display:none;">
          <div class="uifm-alert"></div>
      </div>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

