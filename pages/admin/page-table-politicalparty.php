<?php include_once('classes/generic.class.php');
	 include_once('classes/admin/table.class.php');
	 include_once('classes/admin/functions-table.php'); 
$file_avatar = 'default.png'; ?>
<script src="js/admin/table.js"></script>

    
    
    
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
