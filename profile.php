<?php 
$title = 'Profile';
$label = 'profile';
include_once('header.php');
include_once('classes/profile.class.php');

$user_avatar = 'documents/upload/default.png';
$file_avatar = 'default.png';
include_once('classes/listbox.class.php');
?>

 <script src="js/profile.js"></script>
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
    
    <div class="span2">
    	<h2>Settings</h2>
        <ul class="nav nav-pills nav-stacked">
        <li><a href="#">Profile Edit</a></li>
        <li><a href="#">Info</a></li>
        <li><a href="#">Audio</a></li>
        <li><a href="video_img.php">Image And Video</a></li>
        </ul>
    
    </div>
    
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span5 space-mobile pull-left">
            				<h2>Settings</h2>
                            <i class="fa fa-user-md fa-2x"></i> &nbsp; &nbsp; Profile Editing
                            <div class="border"></div>
            
            <!-- BEGIN FORM-->
            <form action="#" class="form-horizontal" method="post" id="profile">
            <input type="hidden" name="user-id"  val="-1" />
            
                <div class="control-group">
                          <label class="control-label" for="image">
                            <?php _e('Uplode Image'); ?>
                          </label>
                      <div class="controls">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                         <input type="hidden" name="avatar" id="avatar" value="<?php echo $file_avatar; ?>"/>
                            <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $user_avatar; ?>" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists" >Change</span><input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                         </div>
                      </div>
                </div>
            
                
                <div class="control-group">
                    <label class="control-label"><?php _e('First name'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="first_name" name="first_name" class="m-wrap span8" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Last name'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="last_name" name="last_name" class="m-wrap span8" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Address'); ?></label>
                    <div class="controls">
                        <textarea class="span8 m-wrap" rows="3" name="address" id="address"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('City'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="city" name="city">
                         <?php echo $sdistrict ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Email"><?php _e('Email'); ?></label>
                    <div class="controls">
                        <input class="m-wrap span8" type="email" id="email" name="email" placeholder="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Security Question'); ?></label>
                    <div class="controls">
                    <select class="select2 span8 m-wrap" tabindex="1" id="security_question" name="security_question" onclick="validate()" >
                     <option value="a" >a</option>
                    </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Answer'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="answer" name="answer" class="m-wrap span8" />
                    </div>
                </div>
                
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="theme-btn btn" value="Submit" id="submit"><?php _e('Save changes'); ?></button>
            <button class="btn" type="reset">Clear</button>
          </div>
        </div>
            </form>
											<!-- END FORM-->  
            </div>
            <!-- END INFO BLOCK -->   

            <!-- BEGIN CAROUSEL -->            
            <div class="offset1 span4 front-carousel pull-right">
            <div class="row-fluid">
            <div class="span12">
                  <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img1-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/pics/img2-medium.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/pics/img3-medium.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img4-medium.jpg" alt="">
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>

            </div>                
            </div>
            
                <div class="row-fluid">
                <div class="span12">
            <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner1">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img1-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/pics/img2-medium.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/pics/img3-medium.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img4-medium.jpg" alt="">
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>
                </div>                
            </div>

                <div class="row-fluid">
                <div class="span12">
            <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner2">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img1-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/pics/img2-medium.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/pics/img3-medium.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img4-medium.jpg" alt="">
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>
                </div>                
            </div>

         </div>
            <!-- END CAROUSEL -->             
        </div>
        <!-- END ABOUT INFO --> 
        
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

<?php include ('footer.php'); ?>