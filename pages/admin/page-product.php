<?php include_once('classes/generic.class.php'); ?>
<?php include_once('classes/admin/manage_products.class.php'); ?>
<?php include_once('classes/admin/functions-products.php'); ?>
<script src="js/admin/manage_product.js"></script>
<script>
var PRODUCT_USER_ID = '<?php echo $_SESSION['jigowatt']['user_id'] ?>';
</script>


<div class="row-fluid">
  <div class="span12">
    <div class="span2">
      <ul class="ver-inline-menu tabbable margin-bottom-10">
        <li class="active"> <a data-toggle="tab" href="#home1"> <i class="icon-picture"></i><?php echo SETTINGS_HOME ?></a> <span class="after"></span></li>
        <li ><a data-toggle="tab" href="#register1"><i class="icon-picture"></i><?php echo SETTINGS_REGISTER ?></a></li>
        <li ><a data-toggle="tab" href="#login1"><i class="icon-picture"></i><?php echo SETTINGS_LOGIN ?></a></li>
        <li ><a data-toggle="tab" href="#contactus1"><i class="icon-picture"></i><?php echo SETTINGS_CONTACT ?></a></li>
        <li ><a data-toggle="tab" href="#about1"><i class="icon-picture"></i><?php echo SETTINGS_ABOUT ?></a></li>
        <li ><a data-toggle="tab" href="#welcome1"><i class="icon-picture"></i><?php echo SETTINGS_WELCOME ?></a></li>
        <li ><a data-toggle="tab" href="#accountsponser1"><i class="icon-picture"></i><?php echo SETTINGS_ACCOUNT_SPONSER ?></a></li>
        <li ><a data-toggle="tab" href="#candidateinfo1"><i class="icon-picture"></i><?php echo SETTINGS_CANDIDATE_INFO ?></a></li>
      </ul>
    </div>
    <div class="span10">
      <div id="products-content" style="display:block">
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
          </div>
        </div>
      </div>
      <div class="span10">
        <div class="tab-content" >
          <div id='products-box1' style="display:none" class="product-edit-form">
            <div class="row-fluid">
              <div class="span12">
                <div class="box-content nopadding">
                  <form method="POST" class='form-horizontal form-bordered' id='products-form1'>
                    <div class="control-group">
                      <label for="textfield" class="control-label"><?php echo SETTINGS_LABEL ?></label>
                      <div class="controls">
                        <input type="text" readonly="readonly" name="product-label" id="product-label" class="input-large span7">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="textfield" class="control-label"><?php echo SETTINGS_NAME ?></label>
                      <div class="controls">
                        <input type="text" readonly="readonly" name="product-name" id="product-name" class="input-large span7">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="textfield" class="control-label"><?php echo SETTINGS_PRICE ?></label>
                      <div class="controls">
                        <input type="text" name="product-price" id="product-price" class="input-large span7" readonly="readonly">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="textfield" class="control-label"><?php echo SETTINGS_IMAGE ?></label>
                      <div class="controls">
                        <div style="height: auto;" id="accordion2-4" class="accordion collapse"> 
                         <span id="product-image-preview">
                        <img id="uploadPreviewProductImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
                           </span>                     
                          <input id="uploadImageProduct" type="file" name="fileToUpload" onchange="PreviewImageProduct();" style="display:none" />
                         
                          <span class="btn btn-file"> <span class="fileupload-new" onclick="selectImgProduct()"><?php echo SELECT_IMAGE ?></span> </span> <span class="btn btn-file" id="image-upload-product" style="display:none"> <span class="fileupload-exists" onclick="saveProductPicture()"><?php echo UPLOAD ?></span> </span> </div>
                      </div>
                    </div>
                    
                    <!--                                            <div class="check-col" id="record-delete" style="margin-top:10px; margin-left:102px;" >
                                                 <div class="check-line " >
                                                        <input type="checkbox"  name="products-delete" id="user-delete" class="icheck-me" data-skin="square" data-color="blue"> <label class='inline ' for="user-delete"> Delete? </label>
                                                  </div>
                                             </div>
-->
                    <input type="hidden" name="action"  value="editproduct">
                    <input type="hidden" name="products-id" id="products-id1" value="">
                    <input type="hidden" name="product-image" id="product-image1" value="">
                    <div class="form-actions">
                      <button type="button" class="btn btn-primary" id="user-save" onclick="Modifyproducts()"><?php echo SAVE ?></button>
                      <button type="button" class="btn" id="products-cancel1"><?php echo CANCLE ?></button>
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
</div>
