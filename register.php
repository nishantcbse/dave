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

<div class="container min-hight"> 
  <!-- BEGIN ABOUT INFO -->
  <div class="row-fluid margin-bottom-30"> 
    <!-- BEGIN INFO BLOCK -->
    <div class="span7 space-mobile"> 
      <!-- BEGIN FORM-->
      <form action="" method="post" class="form-horizontal" id="register-form">
      <input type="hidden" name="user-id"  val="-1" />
        <div class="control-group">
          <label class="control-label" for="firstname">
            <?php _e('First name'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span8" id="first_name" name="first_name" onclick="validate()"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php _e('Last name'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span8" id="last_name" name="last_name" onclick="validate()"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="address">
            <?php _e('Address'); ?>
          </label>
          <div class="controls">
            <textarea class="span8 m-wrap" rows="3" id="address" name="address" onclick="validate()"></textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="city">
            <?php _e('City'); ?>
          </label>
          <div class="controls">
            <input type="text" class="span8 m-wrap" tabindex="1" id="city" name="city" onclick="validate()"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email" data-required="1">
            <?php _e('Email'); ?>
          </label>
          <div class="controls">
            <input class="m-wrap span8" type="email" id="email" name="email" onclick="validate()">
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Security Question</label>
          <div class="controls">
            <select class="select2 span8 m-wrap" tabindex="1" id="security_question" name="security_question" onclick="validate()" >
             <option value="a" >a</option>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="answer">
            <?php _e('Answer'); ?>
          </label>
          <div class="controls">
            <input type="text" id="answer" name="answer" class="m-wrap span8" onclick="validate()" />
          </div>
        </div>
        
        
        <div class="control-group">
          <label class="control-label" for="Registration Category">
            <?php _e('Registration Category'); ?>
          </label>
          <div class="controls">
            <select class="select2 span8 m-wrap" tabindex="1" id="registration_category" name="registration_category" onclick="validate()" >
             <option value="advertisement">Advertisement</option>
             <option value="profile">Profile</option>
            </select>
            
          </div>
        </div>
        
        
        
        
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="theme-btn btn" value="Submit" id="submit">Submit</button>
            <button class="btn" type="reset">Clear</button>
          </div>
        </div>
      </form>
      <!-- END FORM--> 
      
    </div>
    
    <!-- BEGIN ADVERTISE -->
       <?php include 'pages/right_advertise.php'; ?>
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
	    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Ok</button>
	</div>
</form>
</div>

<?php include 'footer.php' ?>