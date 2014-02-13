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
                                                    <input type="text" name="table-name" id="table-name" class="input-large span7" value="">
                                                </div>
                                            </div>
                                            
        									<div class="control-group">
                                                  <label class="control-label" for="image">
                                                    <?php _e('Party Symbol'); ?>
                                                  </label>
                                                  <div class="controls">
                                                    <div style="height: auto;" id="accordion2-3" class="accordion collapse">
                                                    <img id="uploadPreviewPartySymbol" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
                                                    <input id="uploadImagePartySymbol" type="file" name="fileToUpload" onchange="PreviewImagePartySymbol();" style="display:none" />
                                                    <span class="btn btn-file">
                                                          <span class="fileupload-new" onclick="selectImage()"> Select image </span> 
                                                    </span>
                                                    <span class="btn btn-file" id="image-upload-party-symbol" style="display:none">
                                                             <span class="fileupload-exists" onclick="savePic()">Upload</span>
                                                    </span>
                                                    
                                                    
                                                    <script type="text/javascript">
                                                    
                                                        function PreviewImagePartySymbol() {
                                                            var oFReader = new FileReader();
                                                            oFReader.readAsDataURL(document.getElementById("uploadImagePartySymbol").files[0]);
                                                    
                                                            oFReader.onload = function (oFREvent) {
                                                                document.getElementById("uploadPreviewPartySymbol").src = oFREvent.target.result;
                                                            };
                                                        };
                                                    
                                                    </script>
                                                      
  
  
  
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
