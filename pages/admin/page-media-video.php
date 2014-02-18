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
<!--									<span class="btn green fileinput-button">
									<i class="icon-plus icon-white"></i>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple>
									</span>
-->									<span class="btn green fileinput-button"  onclick="add_YouTube_video()">
									<i class="icon-plus icon-white"></i>
									<span><?php echo SETTINGS_ADD_VIDEO ?></span>
									<input type="button" value="" id="">
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
                       
                       
                        <?php  //$setting->uploadImagePreview() ?>
                       
                       </div>
                    
                    
                    
					</div>
				</div>




  <div id="add_YouTube_video" class="modal hide fade" tabindex="-1" data-width="550">
     <form method="POST" class='' id='add_youtube_video_form'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3><?php echo SETTINGS_VIDEO ?></h3>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:auto;" data-always-visible="1" data-rail-visible1="1">
                    <div class="row-fluid">
                        <div class="span12">
        <div class="control-group">
          <label class="control-label" for="Detail">
            <?php echo SETTINGS_DETAIL ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="media-detail-video" name="media-detail" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php echo SETTINGS_URL ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="media-url-video" name="media-url" required="required"/>
          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="action" value="youtube" />
                <button type="button" data-dismiss="modal" class="btn"><?php echo CLOSE ?></button>
                <button type="button" class="btn blue" id="videoUploadSave" onclick="Modifymedia()"><?php echo SAVE_CHANGES ?></button>
            </div>
            
        </div>
     </form>
</div>
