<?php  
include_once('classes/check.class.php'); 
//protect("1,2");

$title = 'Product';
$label = 'product';
include_once('header.php');
include_once('classes/product.class.php');
include_once('classes/function_product.php');

$shomeProduct = $product->homeProduct();


//echo '<pre>'; print_r($sregisterProduct);

?>
<style>
#product-cart {
	position: absolute;
	top: 122px;   
	right: 56px;   
	z-index: 999;
	opacity: 1 ;
}
</style>


<script src="js/product.js"></script>

<div class="container min-hight">
<!-- BEGIN FILTER -->


<div class="row-fluid">


<div class=""  id="product-cart" style="display:none;">
  <div class="responsive pull-right" data-tablet="span12" data-desktop="span12">
    <div class="dashboard-stat green">
      <div class="visual"> <i class="icon-shopping-cart"></i> </div>
      <div class="details">
        <div class="number productCount" id="productCount"> 0 </div>
        <div class="desc"><?php echo PRODUCT_TOTAL_PRICE ?> - <span id="totalProductPrice"> $ 0.00 </span></div>
      </div>
      <a class="more" href="register.php"><?php echo PRODUCT_ADD_CART ?><i class="m-icon-swapright m-icon-white"></i> </a> </div>
  </div>
</div>

    <h2><?php echo PRODUCT_PROFILE_PAGE_DETAILS ?></h2>
     <div class="border"></div>
  <div class="margin-bottom-40 span6 profileproduct">
    <div class="row-fluid span12">
      <div class="span8">
        <form action="#" class="form-horizontal">
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_NAME ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_PARTY ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_NUMBER ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_PHOTO ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_DESCRIPTION_ABOUT_YOU ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_PHONE ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_FAX ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_ADDRESS ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_WEB_ADDRESS ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_SOCIAL_NETWORKING ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_RECIEVE_DIRECT_MAIL ?></label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <div class="span6">
  <form action="#" class="form-horizontal">
  <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_CAMPAIGN_PHOTO ?></label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1"><?php echo PRODUCT_YES ?></option>
                <option value="Category 4"><?php echo PRODUCT_NO ?></option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_CAMPAIGN_VIDEO ?></label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1"><?php echo PRODUCT_YES_100 ?></option>
                <option value="Category 4"><?php echo PRODUCT_NO_100 ?></option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_COMPAIGN_AUDIO ?></label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1"><?php echo PRODUCT_YES_100 ?></option>
                <option value="Category 4"><?php echo PRODUCT_NO_100 ?></option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign"><?php echo PRODUCT_PLAN_DURATION ?></label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1"><?php echo PRODUCT_YES_100 ?></option>
                <option value="Category 4"><?php echo PRODUCT_NO_100 ?></option>
              </select>
            </div>
          </div>
        <div class="buy2">
        <button type="button" class="btn btn-info onClick="addtocart()"><?php echo BUY ?></button>
        </div>
          
  </form>
  
  </div>
</div>

<!-- END CONTAINER --> 

<!-- BEGIN CONTAINER -->
<div class="container min-hight"> 
  <h2><?php echo PRODUCT_HOME_PAGE_ADVERTISEMENT ?></h2>
  <div class="border"></div>
  <div class="row-fluid margin-bottom-10">
    <div class="span12 homeProduct"> 
    
    
    <?php
	   $i = 0;
       foreach($shomeProduct as $posx){
	?>
         <div class="span4 <?php echo 'homeA'.$i ?>">
            <div class="span6">
 				<h4>Tile <?php echo $i+1 ; ?></h4>
                <div class="checkbox">
                   <?php  foreach($posx as $posx){ ?>
                    <input type="checkbox" value="<?php echo $posx['name']; ?>|<?php echo $posx['price']; ?>|home|<?php echo $posx['id']; ?>" class="<?php echo $posx['label']; ?>"    <?php echo $posx['sell'] == 1 ?'disabled=disabled' : ''; ?> > <label><?php echo $posx['name']; ?>  &nbsp; $<?php echo $posx['price']; ?></label>
                   <?php  } ?>
                </div>
              </div>
             <div class="span4 buybtn">
                <div class="buy">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
            </div>               
           </div>
    <?php 
	     $i++;
	   }
	?>
   
       
    </div>
  </div>
 
    <h2><?php echo PRODUCT_OTHER_PAGE_ADS ?></h2>
    <div class="border"></div>
	<div class="row-fluid">
         
   <!-- ##############  REGISTER PRODUCT ################# -->  
         
          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_REGISTER ?></h4>
                  <?php  display_registerproduct(); ?>
               
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>
          
          
  <!-- ##############  Login Product ################# -->  
  
  
  
          
          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_LOGIN_PAGE ?></h4>

                  <?php  display_loginproduct(); ?>

                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_CONTACT_US_PAGE ?></h4>
                  <?php  display_contactusproduct(); ?>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_ABOUT_PAGE?></h4>

                  <?php  display_aboutproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_WELCOME_PAGE ?></h4>
                  <?php  display_welcomeproduct(); ?>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_ACCOUNT_SPONSOR ?></h4>

                  <?php  display_accountsponsorproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4><?php echo PRODUCT_CANDIDATE_INFO_PAGE ?></h4>

                  <?php  display_candidateinfoproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()"><?php echo BUY ?></button>
                </div>
          </div>

    </div>
</div>
       
          
          
          
<!--        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>LOGIN PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>CONTACT US PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>ABOUT PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>WELCOME PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>ACCOUNT SPONSOR INFO PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>CANDIDATE INFO PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
-->      


</div>

<?php include 'footer.php' ?>