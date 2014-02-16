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
            <form  enctype="multipart/form-data"   class="form-horizontal" id="candidate-register-form">
           
            <div class="control-group">
                    <label class="control-label" for="firstname"><?php echo CANDIDATE_INFO ?></label>
                    <div class="controls">
                        <textarea type="text" class="m-wrap span"  id="info" name="info" ></textarea>
                    </div>
                </div>            
            
                <div class="control-group">
                    <label class="control-label" for="firstname"><?php echo FIRST_NAME ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span"  id="first_name" name="first_name" placeholder="" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"for="middlename"><?php echo MIDDLE_NAME ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span"  id="middle_name" name="middle_name" placeholder=""/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="lastname"><?php echo LAST_NAME ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span"  id="last_name" name="last_name" placeholder="" required="required"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="politicalpratner"><?php echo CANDIDATE_POLITICAL_PARTY ?></label>
                    <div class="controls">
                        <select class="span m-wrap select2" tabindex="1" id="political_party" name="political_party" placeholder="" required="required">
                         <?php echo $spartyList; ?>  
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="partysymbol"><?php echo CANDIDATE_PARTY_SYMBLO ?></label>
                    <div class="controls">
                    
                        <select name="party_symbol" id="select2_partysymbol" class="select2 span m-wrap" tabindex="1" required="required">
                            <option value="1">UNITED PEOPLE'S FREEDOM ALLIANCE</option>
                            <option value="2">UNITED NATIONAL PARTY</option>
                            <option value="3">PEOPLE'S LIBERATION FRONT (JVP)</option>
                            <option value="4">SRI LANKA MUSLIM CONGRESS</option>
                            <option value="5">DEMOCRATIC PARTY</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="provinces"><?php echo CANDIDATE_PROVINCES ?></label>
                    <div class="controls">
                        <select class="span m-wrap select2" tabindex="1" id="province" name="province" placeholder="" required="required"/>
                          <?php echo $sprovince; ?> 
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officeaddress"><?php echo CANDIDATE_OFFICE_ADDRESS ?></label>
                    <div class="controls">
                        <textarea class="span m-wrap" rows="3" name="office_address" id="office_address" required="required"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officecity"><?php echo CANDIDATE_OFFICE_CITY ?></label>
                    <div class="controls">
                        <select class="span m-wrap select2" tabindex="1" id="office_city" name="office_city" required="required">
                         <?php echo $sdistrict ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officephone"><?php echo CANDIDATE_OFFICE_PHONR ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_phone1" name="office_phone1" class="m-wrap span" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officefax"><?php echo CANDIDATE_OFFICE_FAX ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fax" name="office_fax" class="m-wrap span" required="required"/>
                    </div>
                </div>
                
                
                <div class="control-group">
                    <label class="control-label" for="officemail"><?php echo CANDIDATE_EMAIL ?></label>
                    <div class="controls">
                        <input class="m-wrap span" type="email" id="office_email" name="office_email" placeholder="" required="required"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo CANDIDATE_WEBSITE_URL ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_website" name="office_website" class="m-wrap span" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo CANDIDATE_FACEBOOK_LINK ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fb_link" name="office_fb_link" class="m-wrap span" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo CANDIDATE_TWITTER_LINK ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_twitter_link" name="office_twitter_link" class="m-wrap span" />
                    </div>
                </div>
 
        <div class="control-group">
          <label class="control-label" for="image">
            <?php echo CANDIDATE_UPLODE_IMAGE ?>
          </label>
          <div class="controls">
        <div class="fileupload fileupload-new" data-provides="fileupload">
         <input  type="hidden" name="avatar" id="avatar" value=""/>
            <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $user_avatar; ?>" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new"><?php echo SELECT_IMAGE ?></span>
                        <span class="fileupload-exists" ><?php echo CHANGE ?></span>
                        <input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/></span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><?php echo REMOVE ?></a>
                    </div>
                </div>
        </div>
        </div>
                
                <div class="control-group">
                    <div class="controls">
        			<input type="hidden" name="candidate-image-reg" id="candidate-image-reg"  value="" />
                    <button type="submit" class="theme-btn btn" value="Submit" onclick=" savepic()"><?php echo SUBMIT ?></button>
                    <button class="btn" type="reset"><?php echo CLEAR ?></button>
                    </div>
                </div>
                
            </form>
            <!-- END FORM-->  
            </div>
            <!-- END INFO BLOCK -->   

    <!-- BEGIN ADVERTISE -->
       <?php include 'pages/right_advertise_candidate.php'; ?>
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
	    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true"><?php echo OK ?></button>
	</div>
</form>
</div>
    
  <?php include 'footer.php' ?>

