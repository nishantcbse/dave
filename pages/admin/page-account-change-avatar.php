
<div style="height: auto;" id="accordion2-2" class="accordion collapse">
<!--  <div style="width:220px; margin-bottom:30px; float:left;">
    <div class="fileupload fileupload-new" data-provides="fileupload">
      <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $user_avatar; ?>" /></div>
      <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
      <div> <span class="btn btn-file">
      <span class="fileupload-new">Select image</span> 
         <span class="fileupload-exists" >Change</span>
        <input type="file"  name="fileToUpload" id="fileToUpload" onchange=""/>
        </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
    </div>
  </div>
-->  
<img id="uploadPreview" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
<input id="uploadImage" type="file" name="fileToUpload" onchange="PreviewImage();" style="display:none" />
<span class="btn btn-file">
      <span class="fileupload-new" onclick="selectImage()"> Select image </span> 
</span>
<span class="btn btn-file" id="image-upload" style="display:none">
         <span class="fileupload-exists" onclick="savePic()">Upload</span>
</span>


<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
  
  
  
  
</div>
