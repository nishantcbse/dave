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
        <div class="desc">Total Price - <span id="totalProductPrice"> $ 0.00 </span></div>
      </div>
      <a class="more" href="register.php"> Add Cart <i class="m-icon-swapright m-icon-white"></i> </a> </div>
  </div>
</div>

    <h2>Profile page Details</h2>
     <div class="border"></div>
  <div class="margin-bottom-40 span6 profileproduct">
    <div class="row-fluid span12">
      <div class="span8">
        <form action="#" class="form-horizontal">
          <div class="control-group">
            <label class="control-label leftalign">NAME</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PARTY</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">NUMBER</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PHOTO</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">DESCRIPTION ABOUT YOU</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PHONE</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">FAX</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">ADDRESS</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">WEB ADDRESS</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">SOCIAL NETWORKING LINKS</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">RECIEVE DIRECT MAIL</label>
            <div class="controls checkmark"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <div class="span6">
  <form action="#" class="form-horizontal">
  <div class="control-group">
            <label class="control-label leftalign">CAMPAIGN PHOTO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES</option>
                <option value="Category 4">NO</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">CAMPAIGN VIDEO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">COMPAIGN AUDIO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PLAN DURATION</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
        <div class="buy2">
        <button type="button" class="btn btn-info onClick="addtocart()">BUY</button>
        </div>
          
  </form>
  
  </div>
</div>

<!-- END CONTAINER --> 

<!-- BEGIN CONTAINER -->
<div class="container min-hight"> 
  <h2>Home Page Advertisement</h2>
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
                    <input type="checkbox" value="<?php echo $posx['name']; ?>|<?php echo $posx['price']; ?>|home" class="<?php echo $posx['label']; ?>"    <?php echo $posx['sell'] == 1 ?'disabled=disabled' : ''; ?> > <label><?php echo $posx['name']; ?>  &nbsp; $<?php echo $posx['price']; ?></label>
                   <?php  } ?>
                </div>
              </div>
             <div class="span4 buybtn">
                <div class="buy">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
            </div>               
           </div>
    <?php 
	     $i++;
	   }
	?>
   
       
    </div>
  </div>
 
    <h2>Other page Ads</h2>
    <div class="border"></div>
	<div class="row-fluid">
         
   <!-- ##############  REGISTER PRODUCT ################# -->  
         
          <div class="span6 homeProduct">
          	<h4>REGISTER</h4>
                  <?php  display_registerproduct(); ?>
               
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          
  <!-- ##############  Login Product ################# -->  
  
  
  
          
          <div class="span6 homeProduct">
          	<h4>LOGIN PAGE</h4>

                  <?php  display_loginproduct(); ?>

                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4>CONTACT US PAGE</h4>
                  <?php  display_contactusproduct(); ?>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4>ABOUT PAGE</h4>

                  <?php  display_aboutproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>WELCOME PAGE</h4>
                  <?php  display_welcomeproduct(); ?>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>ACCOUNT SPONSOR INFO PAGE</h4>

                  <?php  display_accountsponsorproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>CANDIDATE INFO PAGE</h4>

                  <?php  display_candidateinfoproduct(); ?>
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
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