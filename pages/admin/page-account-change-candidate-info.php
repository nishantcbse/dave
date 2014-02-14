<h2>Candidate Info</h2>
<div style="height: auto;" id="accordion4-4" class="accordion collapse">
  <form action="" method="post" class="form-horizontal" id="candidate-edit-form">
    <div class="control-group">
      <label class="control-label" for="firstname">
        <?php _e('Info'); ?>
      </label>
      <div class="controls">
        <textarea type="text" class="m-wrap span8"  id="info" name="info" ><?php echo $info; ?></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="firstname">
        <?php _e('First name'); ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="first_name" name="first_name" placeholder="" value="<?php echo $candidate_first_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label"for="middlename">
        <?php _e('Middle name'); ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="middle_name" name="middle_name" placeholder="" value="<?php echo $candidate_middle_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="lastname">
        <?php _e('Last name'); ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="last_name" name="last_name" placeholder="" value="<?php echo $candidate_last_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="politicalpratner">
        <?php _e('Political Party'); ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="political_party" name="political_party" placeholder="" >
          <?php echo $spartyList; ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="partysymbol">
        <?php _e('Party Symbol'); ?>
      </label>
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
      <label class="control-label" for="provinces">
        <?php _e('Provinces'); ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="province" name="province" placeholder="" />
        
        <?php echo $sprovince; ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officeaddress">
        <?php _e('Office address'); ?>
      </label>
      <div class="controls">
        <textarea class="span8 m-wrap" rows="3" name="office_address" id="office_address" ><?php echo $candidate_address; ?></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officecity">
        <?php _e('Office city'); ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="office_city" name="office_city" >
          <?php echo $sdistrict ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officephone">
        <?php _e('Office phone'); ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_phone1" name="office_phone1" class="m-wrap span8" value="<?php echo $phone; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officefax">
        <?php _e('Office fax'); ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_fax" name="office_fax" class="m-wrap span8" value="<?php echo $fax; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officemail">
        <?php _e('Email'); ?>
      </label>
      <div class="controls">
        <input class="m-wrap span8" type="email" id="office_email" name="office_email" placeholder="" value="<?php echo $email; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php _e('Website URL'); ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_website" name="office_website" class="m-wrap span8" value="<?php echo $website; ?>"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php _e('Facebool Link'); ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_fb_link" name="office_fb_link" class="m-wrap span8" value="<?php echo $facebook; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php _e('Twitter Link'); ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_twitter_link" name="office_twitter_link" class="m-wrap span8" value="<?php echo $twitter; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="image">
        <?php _e('Candidate Image'); ?>
      </label>
      <div class="controls">
        <span id="previewImageSpan">
            <img id="uploadPreviewCandidateImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
        </span>
        <input id="uploadImageCandidate" type="file" name="fileToUpload" onchange="PreviewImageCandidateImage();" style="display:none" />
        <span class="btn btn-file">
              <span class="fileupload-new" onclick="selectCandidateImage()"> Select image </span> 
        </span>
        <span class="btn btn-file" id="image-upload-candidate-image" style="display:none">
                 <span class="fileupload-exists" onclick="saveCandidateImage()">Upload</span>
        </span>
    </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <input type="hidden" name="candidate-image" id="candidate-image"  value="" />
        <input type="hidden" name="candidate-info-id" id="candidate-info-id"  value="" />
         <input type="hidden" name="action"  value="candidate">
        <a href="#" class="theme-btn btn" " onclick="Modify_info('candidate')">Submit</a>
        <button class="btn" type="reset">Clear</button>
      </div>
    </div>
  </form>
</div>
