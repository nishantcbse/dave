
  <div style="height: auto;" id="accordion2-2" class="accordion collapse">
    <form class="form-horizontal" method="post" id="avatar-edit-form" enctype="multipart/form-data">
      <div class="controls"> </div>
      <div class="space10"></div>
      <div class="controls">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <input type="hidden" name="avatar" id="avatar" value="<?php echo $avatar; ?>"/>
          <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $avatar; ?>" /></div>
          <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
          <div> <span class="btn btn-file btn-info"><span class="fileupload-new">Select image</span> <span class="fileupload-exists btn-info" >Change</span>
            <input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/>
            </span> <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="space10"></div>
      <input type="hidden" name="image-edit-id" id="image-edit-id" value="">
       <input type="hidden" name="action"  value="avatar">
      <div class="submit-btn"> <a href="#" class="btn green" onclick="Modify_info('avatar')">Submit</a> <a href="#" class="btn">Cancel</a> 							 	  </div>
    </form>
  </div>