<?php
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<div class="dev-preview-fields">
    <h3>Textbox</h3>
    <!--\ textbox -->
        <div id=""  data-typefield="6" class="uiform-textbox uiform-field">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                                Checkboxes and radios <i class="glyphicon glyphicon-question-sign"></i>
                                    </label>
                            <label class="control-label">
                                <small class="uifm-sublabel">Normal Bootstrap elements</small>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="uifm-field-container">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div id="" data-typefield="6" class="uiform-textbox uiform-field">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="control-label">Checkboxes and radios <br>
                                    <small class="text-navy">Normal Bootstrap elements</small></label>
                    </div>
                    <div class="col-sm-12">
                        <div class="help-block">
                            Help block text
                        </div>
                        <div class="uifm-field-container">
                            <input class="form-control" type="text">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <div id=""  data-typefield="6" class="uiform-textbox uiform-field">
            <div class="uiform-field-wrap uiform-field-move">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="uifm-control-label">
                            <label class="control-label">
                               <span  data-field-option="uifm-label"  class="uifm-label uifm-f-option"> <?php echo __('Textbox label','FRocket_admin'); ?></span> 
                               <i class="glyphicon glyphicon-question-sign"></i>
                              <small data-field-option="uifm-sublabel" class="uifm-sublabel uifm-f-option"><?php echo __('Textbox sublabel','FRocket_admin'); ?></small>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div   data-field-option="uifm-help-block"  class="help-block uifm-f-option">
                            Help block text
                        </div>
                        <div class="uifm-input-container">
                            <input data-field-option="uifm-textbox-input" class="form-control uifm-f-option" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>