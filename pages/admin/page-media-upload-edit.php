
  <div id="responsive" class="modal hide fade" tabindex="-1" data-width="550">
     <form method="POST" class='' id='media-edit-form'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3><?php echo SETTINGS_MEDIA_EDIT ?></h3>
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
            <input type="text" placeholder="" class="m-wrap span12" id="media-detail" name="media-detail" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php echo SETTINGS_URL ?>
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
                <button type="button" data-dismiss="modal" class="btn"><?php echo CLOSE ?></button>
                <button type="button" class="btn blue" id="mediaSave" onclick="Modifymedia()"><?php echo SAVE_CHANGES ?></button>
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
