                    <div class="row-fluid">
                      <div class="span12">
                        <div class="span3">
                          <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active"> <a data-toggle="tab" href="#tab_1-1"> <i class="icon-cog"></i> Personal info </a> <span class="after"></span> </li>
                            <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
                            <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
                            <li ><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Candidate Info</a></li>
                          </ul>
                        </div>
                        <div class="span9">
                          <div class="tab-content">
                            <div id="tab_1-1" class="tab-pane active">
                              <div style="height: auto;" id="accordion1-1" class="accordion collapse">
     							 <form action="" method="post" class="form-horizontal" id="register-edit-form">
      <input type="hidden" name="user-id"  val="-1" />
        <div class="control-group">
          <label class="control-label" for="firstname">
            <?php _e('First name'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="first_name" name="first_name" value="<?php echo $user_first_name; ?>"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php _e('Last name'); ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="last_name" name="last_name" value="<?php echo $user_last_name; ?>"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="address">
            <?php _e('Address'); ?>
          </label>
          <div class="controls">
            <textarea class="span12 m-wrap" rows="3" id="address" name="address"><?php echo $user_address; ?></textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="city">
            <?php _e('City'); ?>
          </label>
          <div class="controls">
            <input type="text" class="span12 m-wrap" tabindex="1" id="city" name="city" value="<?php echo $user_city; ?>"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email" data-required="1">
            <?php _e('Email'); ?>
          </label>
          <div class="controls">
            <input class="m-wrap span12" type="email" id="email" name="email" value="<?php echo $user_email; ?>">
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Security Question</label>
          <div class="controls">
            <select class="select2 span12 m-wrap" tabindex="1" id="security_question" name="security_question" value="<?php echo $security_question; ?>">
             <option value="a" >a</option>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="answer">
            <?php _e('Answer'); ?>
          </label>
          <div class="controls">
            <input type="text" id="answer" name="answer" class="m-wrap span8" value="<?php echo $answer; ?>"/>
          </div>
        </div>
        
        
        <div class="control-group">
          <label class="control-label" for="Registration Category">
            <?php _e('Registration Category'); ?>
          </label>
          <div class="controls">
            <select class="select2 span12 m-wrap" tabindex="1" id="registration_category" name="registration_category" required="required">
             <option value="advertisement">Advertisement</option>
             <option value="profile">Profile</option>
            </select>
            
          </div>
        </div>
        
        
        
        
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary" value="Submit" id="submit" onclick="">Submit</button>
            <button class="btn btn-info" type="reset">Clear</button>
          </div>
        </div>
      </form>
                              </div>
                            </div>
                            <div id="tab_2-2" class="tab-pane">
                              <div style="height: auto;" id="accordion2-2" class="accordion collapse">
                                <form action=""method="post" class="form-horizontal" id="image-edit-form">
                                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                  <br />
                                  <div class="controls">
                                  </div>
                                  <div class="space10"></div>
								<div class="controls">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                         <input type="hidden" name="avatar" id="avatar" value="<?php echo $avatar; ?>"/>
                            <div class="fileupload-new thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;"><img src="<?php echo $avatar; ?>" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-info"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists btn-info" >Change</span><input type="file"  name="fileToUpload" id="fileToUpload" onchange="filechange()"/></span>
                                        <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                         </div>
                      </div>
                                  <div class="clearfix"></div>
                                  <div class="space10"></div>
                                  <div class="submit-btn"> <a href="#" class="btn green" onclick="Modify_image()">Submit</a> <a href="#" class="btn">Cancel</a> </div>
                                </form>
                              </div>
                            </div>
                            <div id="tab_3-3" class="tab-pane">
                              <div style="height: auto;" id="accordion3-3" class="accordion collapse">
                                <form action="#">
                                  <label class="control-label">Current Password</label>
                                  <input type="password" class="m-wrap span8" />
                                  <label class="control-label">New Password</label>
                                  <input type="password" class="m-wrap span8" />
                                  <label class="control-label">Re-type New Password</label>
                                  <input type="password" class="m-wrap span8" />
                                  <div class="submit-btn"> <a href="#" class="btn green">Change Password</a> <a href="#" class="btn">Cancel</a> </div>
                                </form>
                              </div>
                            </div>
                            <div id="tab_4-4" class="tab-pane">
                              <div style="height: auto;" id="accordion4-4" class="accordion collapse">
       					     <form action="" method="post" class="form-horizontal" id="candidate-edit-form">
    	  	<input type="hidden" name="user-id"  val="-1" />
           
            <div class="control-group">
                    <label class="control-label" for="firstname"><?php _e('Info'); ?></label>
                    <div class="controls">
                        <textarea type="text" class="m-wrap span8"  id="info" name="info" ><?php echo $info; ?></textarea>
                    </div>
                </div>            
            
                <div class="control-group">
                    <label class="control-label" for="firstname"><?php _e('First name'); ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span8"  id="first_name" name="first_name" placeholder="" value="<?php echo $candidate_first_name; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"for="middlename"><?php _e('Middle name'); ?></label>
                    <div class="controls">
                        <input type="text" class="m-wrap span8"  id="middle_name" name="middle_name" placeholder="" value="<?php echo $candidate_middle_name; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="lastname"><?php _e('Last name'); ?>  </label>
                    <div class="controls">
                        <input type="text" class="m-wrap span8"  id="last_name" name="last_name" placeholder="" value="<?php echo $candidate_last_name; ?>" />
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="politicalpratner"><?php _e('Political Party'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="political_party" name="political_party" placeholder="" >
                         <?php echo $spartyList; ?>  
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="partysymbol"><?php _e('Party Symbol'); ?></label>
                    <div class="controls">
                        <select name="party_symbol" id="select2_partysymbol" class="span8 " >
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
                        <select class="span8 m-wrap select2" tabindex="1" id="province" name="province" placeholder="" />
                          <?php echo $sprovince; ?> 
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officeaddress"><?php _e('Office address'); ?></label>
                    <div class="controls">
                        <textarea class="span8 m-wrap" rows="3" name="office_address" id="office_address" ><?php echo $candidate_address; ?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officecity"><?php _e('Office city'); ?></label>
                    <div class="controls">
                        <select class="span8 m-wrap select2" tabindex="1" id="office_city" name="office_city" >
                         <?php echo $sdistrict ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officephone"><?php _e('Office phone'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_phone1" name="office_phone1" class="m-wrap span8" value="<?php echo $phone; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="officefax"><?php _e('Office fax'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fax" name="office_fax" class="m-wrap span8" value="<?php echo $fax; ?>" />
                    </div>
                </div>
                
                
                <div class="control-group">
                    <label class="control-label" for="officemail"><?php _e('Email'); ?></label>
                    <div class="controls">
                        <input class="m-wrap span8" type="email" id="office_email" name="office_email" placeholder="" value="<?php echo $email; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Website URL'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_website" name="office_website" class="m-wrap span8" value="<?php echo $website; ?>"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Facebool Link'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_fb_link" name="office_fb_link" class="m-wrap span8" value="<?php echo $facebook; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php _e('Twitter Link'); ?></label>
                    <div class="controls">
                        <input type="text" placeholder="" id="office_twitter_link" name="office_twitter_link" class="m-wrap span8" value="<?php echo $twitter; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <button type="submit" class="theme-btn btn" value="Submit" onclick="candidate_edit()">Submit</button>
                    <button class="btn" type="reset">Clear</button>
                    </div>
                </div>
                
            </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end span9--> 
                      </div>
                    </div>
                    
