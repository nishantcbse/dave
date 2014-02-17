<h2><?php echo PRODUCT_CANDIDATE_INFO ?></h2>
<div style="height: auto;" id="accordion4-4" class="accordion collapse">
  <form action="" method="post" class="form-horizontal" id="candidate-edit-form">
    <div class="control-group">
      <label class="control-label" for="firstname">
        <?php echo CANDIDATE_INFO ?>
      </label>
      <div class="controls">
        <textarea type="text" class="m-wrap span8"  id="info" name="info" ><?php echo $info; ?></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="firstname">
        <?php echo FIRST_NAME ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="first_name" name="first_name" placeholder="" value="<?php echo $candidate_first_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label"for="middlename">
        <?php echo MIDDLE_NAME ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="middle_name" name="middle_name" placeholder="" value="<?php echo $candidate_middle_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="lastname">
        <?php echo LAST_NAME ?>
      </label>
      <div class="controls">
        <input type="text" class="m-wrap span8"  id="last_name" name="last_name" placeholder="" value="<?php echo $candidate_last_name; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="politicalpratner">
        <?php echo CANDIDATE_POLITICAL_PARTY ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="political_party" name="political_party" placeholder="" >
          <?php echo $spartyList; ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="partysymbol">
        <?php echo CANDIDATE_PARTY_SYMBLO ?>
      </label>
      <div class="controls">
        <select name="party_symbol" id="select2_partysymbol" class="span8 " >
          <option value="1"><?php echo CANDIDATE_PARTY_SYMBAL1 ?></option>
          <option value="2"><?php echo CANDIDATE_PARTY_SYMBAL2 ?></option>
          <option value="3"><?php echo CANDIDATE_PARTY_SYMBAL3 ?></option>
          <option value="4"><?php echo CANDIDATE_PARTY_SYMBAL4 ?></option>
          <option value="5"><?php echo CANDIDATE_PARTY_SYMBAL5 ?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="provinces">
        <?php echo CANDIDATE_PROVINCES ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="province" name="province" placeholder="" />
        
        <?php echo $sprovince; ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officeaddress">
        <?php echo CANDIDATE_OFFICE_ADDRESS ?>
      </label>
      <div class="controls">
        <textarea class="span8 m-wrap" rows="3" name="office_address" id="office_address" ><?php echo $candidate_address; ?></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officecity">
        <?php echo CANDIDATE_OFFICE_CITY ?>
      </label>
      <div class="controls">
        <select class="span8 m-wrap select2" tabindex="1" id="office_city" name="office_city" >
          <?php echo $sdistrict ?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officephone">
        <?php echo CANDIDATE_OFFICE_PHONR ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_phone1" name="office_phone1" class="m-wrap span8" value="<?php echo $phone; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officefax">
        <?php echo CANDIDATE_OFFICE_FAX ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_fax" name="office_fax" class="m-wrap span8" value="<?php echo $fax; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="officemail">
        <?php echo CANDIDATE_EMAIL ?>
      </label>
      <div class="controls">
        <input class="m-wrap span8" type="email" id="office_email" name="office_email" placeholder="" value="<?php echo $email; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php echo CANDIDATE_WEBSITE_URL ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_website" name="office_website" class="m-wrap span8" value="<?php echo $website; ?>"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php echo CANDIDATE_FACEBOOK_LINK ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_fb_link" name="office_fb_link" class="m-wrap span8" value="<?php echo $facebook; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">
        <?php echo CANDIDATE_TWITTER_LINK ?>
      </label>
      <div class="controls">
        <input type="text" placeholder="" id="office_twitter_link" name="office_twitter_link" class="m-wrap span8" value="<?php echo $twitter; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="image">
        <?php echo CANDIDATE_UPLODE_IMAGE ?>
      </label>
      <div class="controls">
        <span id="previewImageSpan">
            <img id="uploadPreviewCandidateImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />
        </span>
        <input id="uploadImageCandidate" type="file" name="fileToUpload" onchange="PreviewImageCandidateImage();" style="display:none" />
        <span class="btn btn-file">
              <span class="fileupload-new" onclick="selectCandidateImage()"><?php echo SELECT_IMAGE ?></span> 
        </span>
        <span class="btn btn-file" id="image-upload-candidate-image" style="display:none">
                 <span class="fileupload-exists" onclick="saveCandidateImage()"><?php echo UPLOAD ?></span>
        </span>
    </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <input type="hidden" name="candidate-image" id="candidate-image"  value="" />
        <input type="hidden" name="candidate-info-id" id="candidate-info-id"  value="" />
         <input type="hidden" name="action"  value="candidate">
        <a href="#" class="theme-btn btn" " onclick="Modify_info('candidate')"><?php echo SUBMIT ?></a>
        <button class="btn" type="reset"><?php echo CLEAR ?></button>
      </div>
    </div>
  </form>
</div>
