<?php
include_once('classes/check.class.php');
//protect("1,2");


$title = 'register';
$label = 'form';
include_once('header.php');
	$user_avatar = 'documents/upload/default.png';
    $file_avatar = 'default.png';
?>


<script src="js/register.js"></script>
<!-- BEGIN CONTAINER -->
<div id="conferm" class="modal hide fade" tabindex="-1"></div>
<div class="container min-hight"> 
  <!-- BEGIN ABOUT INFO -->
  <div class="row-fluid margin-bottom-30"> 
    <!-- BEGIN INFO BLOCK -->
    <div class="span4 space-mobile"> 
      <!-- BEGIN FORM-->
      <form action="" method="post" class="form-horizontal" id="register-form">
      <input type="hidden" name="user-id"  val="-1" />
        <div class="control-group">
          <label class="control-label" for="firstname">
            <?php echo FIRST_NAME ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="first_name" name="first_name" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php echo LAST_NAME ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="last_name" name="last_name" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="address">
            <?php echo REGISTER_ADDRESS ?>
          </label>
          <div class="controls">
            <textarea class="span12 m-wrap" rows="3" id="address" name="address" required="required"></textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="city">
            <?php echo REGISTER_CITY ?>
          </label>
          <div class="controls">
            <input type="text" class="span12 m-wrap" tabindex="1" id="city" name="city" required="required"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email" data-required="1">
            <?php echo REGISTER_EMAIL ?>
          </label>
          <div class="controls">
            <input class="m-wrap span12" type="email" id="email" name="email" required="required">
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label"><?php echo REGISTER_SECURITY_QUESTION ?></label>
          <div class="controls">
            <select class="select2 span12 m-wrap" tabindex="1" id="security_question" name="security_question" required="required">
             <option>‏</option>
             <option value="<?php echo REGISTER_SECURITY_QUESTION1 ?>" ><?php echo REGISTER_SECURITY_QUESTION1 ?>‏</option>
             <option value="<?php echo REGISTER_SECURITY_QUESTION2 ?>" ><?php echo REGISTER_SECURITY_QUESTION2 ?>‏</option>
             <option value="<?php echo REGISTER_SECURITY_QUESTION3 ?>" ><?php echo REGISTER_SECURITY_QUESTION3 ?>‏</option>
             <option value="<?php echo REGISTER_SECURITY_QUESTION4 ?>" ><?php echo REGISTER_SECURITY_QUESTION4 ?></option>
             <option value="<?php echo REGISTER_SECURITY_QUESTION5 ?>‏" ><?php echo REGISTER_SECURITY_QUESTION5 ?>‏</option>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="answer">
            <?php echo REGISTER_ANSWER ?>
          </label>
          <div class="controls">
            <input type="text" id="answer" name="answer" class="m-wrap span" required="required"/>
          </div>
        </div>
        
        
        <div class="control-group">
          <label class="control-label" for="Registration Category">
            <?php echo REGISTER_CATEGORY ?>
          </label>
          <div class="controls">
            <select class="select2 span12 m-wrap" tabindex="1" id="registration_category" name="registration_category" required="required">
             <option value="advertisement"><?php echo REGISTER_ADVERTISEMENT ?></option>
             <option value="profile"><?php echo REGISTER_PROFILE ?></option>
            </select>
            
          </div>
        </div>
        
        
        
        
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary" value="Submit" id="submit" onclick=""><?php echo SUBMIT ?></button>
            <button class="btn btn-info" type="reset"><?php echo CLEAR ?></button>
          </div>
        </div>
      </form>
      <!-- END FORM--> 
      
    </div>
    
    <!-- BEGIN ADVERTISE -->
       <?php include 'pages/right_advertise_register.php'; ?>
    <!-- END ADVERTISE --> 
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
	    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true"><?php echo OK ?></button>
	</div>
</form>
</div>
<?php include 'footer.php' ?>