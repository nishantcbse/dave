<style>
	.red{height:34px !important;}
	.uploadImagePreview{
		border: 1px solid #000000;
		margin-bottom: 5px;
		padding: 11px 3px 8px;
		margin-left:0px !important;
		}
</style>
    
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
            
            
            <div class="row-fluid">
					<div class="span12">
						<br>
						<!-- The file upload form used as target for the file upload widget -->
						<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
							<!-- Redirect browsers with JavaScript disabled to the origin page -->
							<noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
							<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
							<div class="row-fluid fileupload-buttonbar">
								<div class="span7">
									<!-- The fileinput-button span is used to style the file input field as button -->
									<span class="btn green fileinput-button">
									<i class="icon-plus icon-white"></i>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple>
									</span>
									
								</div>
								<!-- The global progress information -->
								<div class="span5 fileupload-progress fade">
									<!-- The global progress bar -->
									<div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
										<div class="bar" style="width:0%;"></div>
									</div>
									<!-- The extended global progress information -->
									<div class="progress-extended">&nbsp;</div>
								</div>
							</div>
							<!-- The loading indicator is shown during file processing -->
							<div class="fileupload-loading"></div>
							<br>
							<!-- The table listing the files available for upload/download -->
							<table role="presentation" class="table table-striped">
								<tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
							</table>
						</form>
						<br>
					</div>
            </div>
            
				<div class="row-fluid">
					<div class="span12">
                       <div id="uplaodedImage">
                       
                       
                        <?php  $setting->uploadImagePreview() ?>
                       
                       </div>
                    
                    
                    
					</div>
				</div>




  <div id="responsive" class="modal hide fade" tabindex="-1" data-width="550">
     <form method="POST" class='' id='media-edit-form'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3>Media Edit</h3>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:auto;" data-always-visible="1" data-rail-visible1="1">
                    <div class="row-fluid">
                        <div class="span12">
        <div class="control-group">
          <label class="control-label" for="Detail">
            <?php _e('Detail'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="media-detail" name="media-detail" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php _e('URL'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="media-url" name="media-url" required="required"/>
          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="media-id" name="media-id"  value="" />
                <input type="hidden"  name="action"  value="edit-media-detail" />
                <button type="button" data-dismiss="modal" class="btn">Close</button>
                <button type="button" class="btn blue" id="mediaSave" onclick="Modifymedia()">Save changes</button>
            </div>
            
        </div>
     </form>
</div>

	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="assets/scripts/ui-modals.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
	<script src="js/media.js"></script>

	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   UIModals.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
