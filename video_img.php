<?php 
$title = 'Profile';
$label = 'profile';
include_once('header.php');
include_once('classes/video_img.class.php');

$user_avatar = 'documents/upload/default.png';
$file_avatar = 'default.png';
include_once('classes/listbox.class.php');
?>
    <!-- Upload -->
	<script src="assets/plugins/fancybox/source/jquery.fancybox.js"></script>
	<!-- BEGIN:File Upload Plugin JS files-->
	<script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
	<!-- The File Upload file processing plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
	<!-- The File Upload user interface plugin -->
	<script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
	<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
	<!--[if gte IE 8]><script src="assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
	<!-- END:File Upload Plugin JS files-->
 <script src="js/video_img.js"></script>
 
 
 
 
 
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
    
    <div class="span2">
    	<h2>Settings</h2>
        <ul class="nav nav-pills nav-stacked">
        <li><a href="profile.php">Profile Edit</a></li>
        <li><a href="candidate_register.php">Info</a></li>
        <li><a href="#">Audio</a></li>
        <li class="active1"><a href="#">Image And Video</a></li>
        </ul>
    
    </div>
    
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span8 space-mobile pull-left">
            				<h2>Settings</h2>
                            <i class="fa fa-user-md fa-2x"></i> &nbsp; &nbsp; Video And Image Upload
                            <div class="border"></div>
            
            <!-- BEGIN Upolad-->
            
				<div class="row-fluid">
					<div class="span12">
						<!-- The file upload form used as target for the file upload widget -->
						<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
							<!-- Redirect browsers with JavaScript disabled to the origin page -->
							<noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
							<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
							<div class="row-fluid fileupload-buttonbar">
								<div class="span12">
									<!-- The fileinput-button span is used to style the file input field as button -->
									<span class="btn green fileinput-button">
									<i class="icon-plus icon-white"></i>
									<span>Add files...</span>
									<input type="file" name="files[]" multiple>
									</span>
									<button type="submit" class="btn blue start">
									<i class="icon-upload icon-white"></i>
									<span>Start upload</span>
									</button>
									<button type="reset" class="btn yellow cancel">
									<i class="icon-ban-circle icon-white"></i>
									<span>Cancel upload</span>
									</button>
									<button type="button" class="btn red delete">
									<i class="icon-trash icon-white"></i>
									<span>Delete</span>
									</button>
									<input type="checkbox" class="toggle">
								</div>
								<!-- The global progress information -->
							</div>
							<!-- The loading indicator is shown during file processing -->
							<div class="fileupload-loading"></div>
							<!-- The table listing the files available for upload/download -->
							<table role="presentation" class="table table-striped">
								<tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
							</table>
						</form>
					</div>
				</div>
                
				<div class="row-fluid">
					<div class="span12">
						<script id="template-upload" type="text/x-tmpl">
							{% for (var i=0, file; file=o.files[i]; i++) { %}
							    <tr class="template-upload fade">
							        <td class="preview"><span class="fade"></span></td>
							        <td class="name"><span>{%=file.name%}</span></td>
							        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
							        {% if (file.error) { %}
							            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
							        {% } else if (o.files.valid && !i) { %}
							            <td>
							                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
							            </td>
							            <td class="start">{% if (!o.options.autoUpload) { %}
							                <button class="btn">
							                    <i class="icon-upload icon-white"></i>
							                    <span>Start</span>
							                </button>
							            {% } %}</td>
							        {% } else { %}
							            <td colspan="2"></td>
							        {% } %}
							        <td class="cancel">{% if (!i) { %}
							            <button class="btn red">
							                <i class="icon-ban-circle icon-white"></i>
							                <span>Cancel</span>
							            </button>
							        {% } %}</td>
							    </tr>
							{% } %}
						</script>
						<!-- The template to display files available for download -->
						<script id="template-download" type="text/x-tmpl">
							{% for (var i=0, file; file=o.files[i]; i++) { %}
							    <tr class="template-download fade">
							        {% if (file.error) { %}
							            <td></td>
							            <td class="name"><span>{%=file.name%}</span></td>
							            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
							            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
							        {% } else { %}
							            <td class="preview">
							            {% if (file.thumbnail_url) { %}
							                <a class="fancybox-button" data-rel="fancybox-button" href="{%=file.url%}" title="{%=file.name%}">
							                <img src="{%=file.thumbnail_url%}">
							                </a>
							            {% } %}</td>
							            <td class="name">
							                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
							            </td>
							            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
							            <td colspan="2"></td>
							        {% } %}
							        <td class="delete">
							            <button class="btn red" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
							                <i class="icon-trash icon-white"></i>
							                <span>Delete</span>
							            </button>
							            <input type="checkbox" class="fileupload-checkbox hide" name="delete" value="1">
							        </td>
							    </tr>
							{% } %}
						</script>
					</div>
				</div>

            <!-- END Upload-->  
            </div>

        </div>
        
  </div>
    
<div id="modal-error" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="post" id="error-form">
    <div class="modal-header">
	    <h3 id="modal-title-error"></h3>
	</div>
	<div id="modal-body-error">
    </div>
    <div class="modal-footer">
	    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Ok</button>
	</div>
</form>
</div>

<?php include ('footer.php'); ?>