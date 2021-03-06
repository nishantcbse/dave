<?php include_once('classes/generic.class.php'); ?>
<?php include_once('classes/admin/manage_products.class.php'); ?>
<?php include_once('classes/admin/functions-products.php'); ?>

<script src="js/admin/manage_product.js"></script>

                    <div class="row-fluid" id='products-list-home'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-home-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductshome(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-register'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-register-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductsregister(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-login'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-login-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductslogin(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-contact'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-contact-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductcontact(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-about'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-about-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductsabout(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-welcome'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-welcome-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductswelcome(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-accountsponser'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-accountsponser-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductsaccountsponser(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                    <div class="row-fluid" id='products-list-candidateinfo'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-candidateinfo-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductscandidateinfo(); ?>
    							</div>
  						    </div>

						</div>
					</div>
                    </div>
					<div id="form">
                 	<div id='products-box' style="display:none">
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
                                                    <input type="password" name="image" id="image" class="input-large span7">
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
