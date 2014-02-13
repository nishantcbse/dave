            <div class="row-fluid">
              <div class="span12">
                <div class="span2">
          <ul class="ver-inline-menu tabbable margin-bottom-10">
            <li class="active"> <a data-toggle="tab" href="#home1"> <i class="icon-picture"></i> Home </a> <span class="after"></span></li>
            <li ><a data-toggle="tab" href="#register1"><i class="icon-picture"></i> Register </a></li>
            <li ><a data-toggle="tab" href="#login1"><i class="icon-picture"></i> Login </a></li>
            <li ><a data-toggle="tab" href="#contactus1"><i class="icon-picture"></i> Contact </a></li>
            <li ><a data-toggle="tab" href="#about1"><i class="icon-picture"></i> About </a></li>
            <li ><a data-toggle="tab" href="#welcome1"><i class="icon-picture"></i> Welcome </a></li>
            <li ><a data-toggle="tab" href="#accountsponser1"><i class="icon-picture"></i> Account Sponser </a></li>
            <li ><a data-toggle="tab" href="#candidateinfo1"><i class="icon-picture"></i> Candidate Info </a></li>
          </ul>
                </div>
                
                <div class="span10">
                  <div class="tab-content">
                    <div id="home1" class="tab-pane active">
                      <div style="height: auto;" id="home1" class="accordion collapse">
                        <?php include_once('page-product-home.php'); ?>
                      </div>
                    </div>
                    
                    <div id="register1" class="tab-pane">
                      <div style="height: auto;" id="register1" class="accordion collapse">
                    <?php include_once('page-product-register.php'); ?>
                    </div>
                  </div>
                    
                    <div id="login1" class="tab-pane">
                      <div style="height: auto;" id="login1" class="accordion collapse">
                    <?php include_once('page-product-login.php'); ?>
                    </div>
                  </div>
                    
                    <div id="contactus1" class="tab-pane">
                      <div style="height: auto;" id="contactu1" class="accordion collapse">
                    <?php include_once('page-product-contactus.php'); ?>
                    </div>
                  </div>
                    
                    <div id="about1" class="tab-pane">
                      <div style="height: auto;" id="about1" class="accordion collapse">
                    <?php include_once('page-product-about.php'); ?>
                    </div>
                  </div>
                    
                    <div id="welcome1" class="tab-pane">
                      <div style="height: auto;" id="welcome1" class="accordion collapse">
                    <?php include_once('page-product-welcome.php'); ?>
                    </div>
                  </div>
                    
                    <div id="accountsponser1" class="tab-pane">
                      <div style="height: auto;" id="accountsponser" class="accordion collapse">
                    <?php include_once('page-product-accountsponser.php'); ?>
                    </div>
                  </div>
                    
                    <div id="candidateinfo1" class="tab-pane">
                      <div style="height: auto;" id="candidateinfo1" class="accordion collapse">
                    <?php include_once('page-product-candidateinfo.php'); ?>
                    </div>
                  </div>
                  
                  
                 	<div id='products-box' style="display:none" class="product-edit-form">
                        <div class="row-fluid">
                                <div class="span12">
                                    <div class="box-content nopadding">
                                        <form method="POST" class='form-horizontal form-bordered' id='products-form'>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Label</label>
                                                <div class="controls">
                                                    <input type="text" readonly="readonly" name="label" id="label" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Name</label>
                                                <div class="controls">
                                                    <input type="text" readonly="readonly" name="name" id="name" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Price</label>
                                                <div class="controls">
                                                    <input type="text" name="price" id="price" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Image</label>
                                                <div class="controls">
                                                    <div style="height: auto;" id="accordion2-4" class="accordion collapse">
                                                    <img id="uploadPreviewProductImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
                                                    <input id="uploadImageProduct" type="file" name="fileToUpload" onchange="PreviewImageProduct();" style="display:none" />
                                                    <span class="btn btn-file">
                                                          <span class="fileupload-new" onclick="selectImage()"> Select image </span> 
                                                    </span>
                                                    <span class="btn btn-file" id="image-upload-product" style="display:none">
                                                             <span class="fileupload-exists" onclick="savePic()">Upload</span>
                                                    </span>
                                                    
                                                    
                                                    <script type="text/javascript">
                                                    
                                                        function PreviewImageProduct() {
                                                            var oFReader = new FileReader();
                                                            oFReader.readAsDataURL(document.getElementById("uploadImageProduct").files[0]);
                                                    
                                                            oFReader.onload = function (oFREvent) {
                                                                document.getElementById("uploadPreviewProductImage").src = oFREvent.target.result;
                                                            };
                                                        };
                                                    
                                                    </script>
                                                      
  </div>
                                                </div>
                                            </div>
                                            
<!--                                            <div class="check-col" id="record-delete" style="margin-top:10px; margin-left:102px;" >
                                                 <div class="check-line " >
                                                        <input type="checkbox"  name="products-delete" id="user-delete" class="icheck-me" data-skin="square" data-color="blue"> <label class='inline ' for="user-delete"> Delete? </label>
                                                  </div>
                                             </div>
-->                                            <input type="hidden" name="products-id" id="products-id" value="">
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary" id="user-save">Save</button>
                                                <button type="button" class="btn" id="products-cancel">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                
                  
                   </div>
                <!--end span9--> 
              </div>
               </div>
            </div>
            
