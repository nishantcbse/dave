<?php include_once('classes/generic.class.php');
	 include_once('classes/admin/table.class.php');
	 include_once('classes/admin/functions-table.php'); 
$file_avatar = 'default.png'; ?>
<script src="js/admin/table.js"></script>

	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/ui-modals.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   UIModals.init();
		});
	</script>
    
    
    
<script>
	var PROFILE_NAME  =  '<?php echo $table->getField('party_name'); ?>';
</script>
			<div id="main">
				<div class="container-fluid">


                    <div class="row-fluid">
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                      <h3 id="table-label"></h3>  
                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="table-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
    							</div>
    							<div class="box-content" id='table-list'>
                                    <?php list_table(); ?>
    							</div>
  						    </div>

						</div>
					</div>
                    
        <div class="row-fluid">
            <div class="span1">
				<img src="http://localhost/dave/documents/media/files/thumbnail/1512760_261772880641407_1772739902_a.png"></div>
            <div class="span7">
                <span>The Most Complete & Popular Admin & Frontend Theme</span>
            </div>
            <div class="span2">
      			<a href="#responsive" data-toggle="modal" class="btn green submit-btn" onclick="">Edit</a>
            </div>
            <div class="span2">
      			<div class="submit-btn"> <a href="#" class="btn green" onclick="">Submit</a></div>
            </div>
        </div>
        <div id="responsive" class="modal hide fade" tabindex="-1" data-width="550">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3>Responsive & Scrollable</h3>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:auto;" data-always-visible="1" data-rail-visible1="1">
                    <div class="row-fluid">
                        <div class="span12">
        <div class="control-group">
          <label class="control-label" for="firstname">
            <?php _e('Detail'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="first_name" name="first_name" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php _e('URL'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="last_name" name="last_name" required="required"/>
          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
                
                 	<div id='table-box' style="display:none">
                        <div class="row-fluid">
                                <div class="span6">
                                    <div class="box-content nopadding">
                                        <form method="POST" class='form-horizontal form-bordered' id='table-form'>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Political Party List</label>
                                                <div class="controls">
                                                    <input type="text" name="table-name" id="table-name" class="input-large span7" value="<?php echo $table->getField('party_name'); ?>">
                                                </div>
                                            </div>
                                            
        									<div class="control-group">
                                                  <label class="control-label" for="image">
                                                    <?php _e('Party Symbol'); ?>
                                                  </label>
                                                  <div class="controls">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                 <input type="hidden" name="party_symbol" id="avatar-politicalparty" value=""/>
                                                    <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $avatar; ?>" /></div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                            <div>
                                                                <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                                                <span class="fileupload-exists" >Change</span><input type="file"  name="party_symbol" id="party_symbol" onchange="filechange()"/></span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                            </div>
                                                        </div>
                                                </div>
        									</div>
                                            
                                            <div class="check-col" id="record-delete" style="margin-top:10px;" >
                                                 <div class="check-line " >
                                                        <input type="checkbox"  name="table-delete" id="table-delete" class="icheck-me" data-skin="square" data-color="blue"> <label class='inline ' for="table-delete"> Delete? </label>
                                                  </div>
                                             </div>
                                            <input type="hidden" name="table-id" id="table-id" value="">
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary" id="table-save">Save</button>
                                                <button type="button" class="btn" id="table-cancel">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                
                   </div><!-- End table box --> 
                
                
			</div>
