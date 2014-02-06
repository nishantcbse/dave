<?php
include_once('classes/check.class.php');
//protect("1,2");
if(isset($_SESSION['user_profile_id'])){

}else{
   header('Location: register.php');
}


$title = 'register';
$label = 'form';
include_once('header.php');
$user_avatar = 'documents/upload/default.png';
$file_avatar = 'default.png';
include_once('classes/listbox.class.php');

$spartyList = $listbox->getPolitical_Party_List();
$sdistrict  = $listbox->getDistrict();
$sprovince  = $listbox->getProvince();


?>
 <script src="js/candidate_register.js"></script>
<div id="conferm" class="modal hide fade" tabindex="-1"></div>
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span4 space-mobile">
            <!-- BEGIN FORM-->
<<<<<<< HEAD
            <form  enctype="multipart/form-data"   class="form-horizontal" id="candidate-register-form">
=======
            <form action="" method="post" class="form-horizontal" id="candidate-register-form">
    	  	<input type="hidden" name="user-id"  val="-1" />
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
           
            <div class="control-group">
                    <label class="control-label" for="firstname"><?php _e('Info'); ?></label>
                    <div class="controls">
<<<<<<< HEAD
                        <textarea type="text" class="m-wrap span8"  id="info" name="info" ></textarea>
=======
                        <textarea type="text" class="m-wrap span8"  id="Info" name="Info" ></textarea>
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
                    </div>
                </div>            
            
                <div class="control-group">
                    <label class="control-label" for="firstname"><?php _e('First name'); ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span8"  id="first_name" name="first_name" placeholder="" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"for="middlename"><?php _e('Middle name'); ?></label>
                    <div class="controls">
<<<<<<< HEAD
                        <input type="text" class="m-wrap span8"  id="middle_name" name="middle_name" placeholder=""/>
=======
                        <input type="text" class="m-wrap span8"  id="middle_name" name="middle_name" placeholder="" required="required"/>
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="lastname"><?php _e('Last name'); ?>  </label>
                    <div class="controls">
                        <input type="text" class="m-wrap span8"  id="last_name" name="last_name" placeholder="" required="required"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="politicalpratner"><?php _e('Political Party'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="political_party" name="political_party" placeholder="" required="required">
                         <?php echo $spartyList; ?>  
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="partysymbol"><?php _e('Party Symbol'); ?></label>
                    <div class="controls">
                        <select name="party_symbol" id="select2_partysymbol" class="span8 " required="required">
                            <option value="1">UNITED PEOPLE'S FREEDOM ALLIANCE</option>
                            <option value="2">UNITED NATIONAL PARTY</option>
                            <option value="3">PEOPLE'S LIBERATION FRONT (JVP)</option>
                            <option value="4">SRI LANKA MUSLIM CONGRESS</option>
                            <option value="5">DEMOCRATIC PARTY</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="provinces"><?php _e('Provinces'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="province" name="province" placeholder="" required="required"/>
                          <?php echo $sprovince; ?> 
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officeaddress"><?php _e('Office address'); ?></label>
                    <div class="controls">
                        <textarea class="span8 m-wrap" rows="3" name="office_address" id="office_address" required="required"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officecity"><?php _e('Office city'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="office_city" name="office_city" required="required">
                         <?php echo $sdistrict ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officephone"><?php _e('Office phone'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_phone1" name="office_phone1" class="m-wrap span8" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officefax"><?php _e('Office fax'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fax" name="office_fax" class="m-wrap span8" required="required"/>
                    </div>
                </div>
                
                
                <div class="control-group">
                    <label class="control-label" for="officemail"><?php _e('Email'); ?></label>
                    <div class="controls">
                        <input class="m-wrap span8" type="email" id="office_email" name="office_email" placeholder="" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Website URL'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_website" name="office_website" class="m-wrap span8" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Facebool Link'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fb_link" name="office_fb_link" class="m-wrap span8" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Twitter Link'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_twitter_link" name="office_twitter_link" class="m-wrap span8" />
                    </div>
                </div>
 
<<<<<<< HEAD


=======
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
        <div class="control-group">
          <label class="control-label" for="image">
            <?php _e('Uplode Image'); ?>
          </label>
          <div class="controls">
        <div class="fileupload fileupload-new" data-provides="fileupload">
<<<<<<< HEAD
         <input  type="hidden" name="avatar" id="avatar" value=""/>
=======
         <input type="hidden" name="avatar" id="avatar" value="<?php echo $file_avatar; ?>"/>
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
            <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $user_avatar; ?>" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
<<<<<<< HEAD
                        <span class="fileupload-exists" >Change</span>
                        <input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/></span>
=======
                        <span class="fileupload-exists" >Change</span><input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/></span>
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
        </div>
        </div>
                
                <div class="control-group">
                    <div class="controls">
<<<<<<< HEAD
                    <button type="submit" class="theme-btn btn" value="Submit" onclick=" savepic()">Submit</button>
=======
                    <button type="submit" class="theme-btn btn" value="Submit" onclick="">Submit</button>
>>>>>>> 0b9e5f0ac40c05c0dcb7a73715934e3db43bf5bb
                    <button class="btn" type="reset">Clear</button>
                    </div>
                </div>
                
            </form>
            <!-- END FORM-->  
            </div>
            <!-- END INFO BLOCK -->   

    <!-- BEGIN ADVERTISE -->
       <?php include 'pages/right_advertise.php'; ?>
    <!-- END ADVERTISE --> 
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
    
  <?php include 'footer.php' ?>

