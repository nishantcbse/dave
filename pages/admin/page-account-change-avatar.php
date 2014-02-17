
<div style="height: auto;" id="accordion2-2" class="accordion collapse">

<div class="control-group">
                    
                      <div class="controls">
                        <div style="height: auto;" id="accordion2-4" class="accordion collapse"> 
                         <span id="profile-image-preview">
                        <img id="uploadPreviewProfileImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" src="documents/avatar/<?php echo $_SESSION['jigowatt']['user_id'] ?>/<?php echo $_SESSION['jigowatt']['gravatar']; ?>" />
                           </span>                     
                          <input id="uploadImageProfile" type="file" name="fileToUpload" onchange="PreviewImageProfile();" style="display:none" />
                         
                          <span class="btn btn-file"> <span class="fileupload-new" onclick="selectImgProfile()"><?php echo SELECT_IMAGE ?></span> </span> <span class="btn btn-file" id="image-upload-profile" style="display:none"> <span class="fileupload-exists" onclick="saveProfilePicture()"><?php echo UPLOAD ?></span> </span> </div>
                      </div>
                    </div>



</div>
