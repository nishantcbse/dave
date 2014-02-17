<?php
include_once('classes/check.class.php');
protect("*");
include_once('header.php');
include_once('classes/settings.class.php');
include_once('classes/listbox.class.php');
$title = 'settings';  
$label = '';

$userid = $setting->getField('user_id');

$candidateinfo = $setting->getField('candidate_info');
$name = $setting->getField('name');
$user_profile_id = $setting->getField('user_profile_id');

if( !empty($user_profile_id)){
	$party_symbol = 'documents/party_symbols/'.$setting->getField('party_symbols');
}else{
	$party_symbol = '';
}

if( !empty($user_profile_id)){
	$party_name = $setting->getField('candidate_political_party');
}else{
	$party_name = '';
}
$login_avatar = $setting->getField('avatar');
if( !empty($login_avatar)){
	$avatar = 'documents/avatar/'.$userid.'/'.$setting->getField('avatar');
}else{
	$avatar = 'documents/avatar/default.png';
}

$user_profile_id = $setting->getField('user_profile_id');
//print_r($user_profile_id);
//persoanl info 
$user_first_name         = $setting->getField('first_name');
$user_middle_name        = $setting->getField('middle_name');
$user_last_name          = $setting->getField('last_name');
$user_address            = $setting->getField('address');
$user_city               = $setting->getField('city');
$user_email              = $setting->getField('email');

$candidate_id_check = $setting->getField('candidate_id');

if(!empty($candidate_id_check)){
	$setting->party_img();
	$candidate_id = $setting->getField('candidate_id');

}else{
	$candidate_id = '';

}

//print_r($candidate_id.'id');
//candidate info
$candidate_first_name    = $setting->getField('candidate_first_name');
$candidate_middle_name   = $setting->getField('candidate_middle_name');
$candidate_last_name     = $setting->getField('candidate_last_name');
$party                   = $setting->getField('candidate_political_party');
$province                = $setting->getField('candidate_province');
$candidate_address 		 = $setting->getField('candidate_office_address');
$candidate_city			 = $setting->getField('candidate_city');
$phone					 = $setting->getField('candidate_phone');
$fax 					 = $setting->getField('candidate_fax');
$email					 = $setting->getField('candidate_email');
$website				 = $setting->getField('candidate_website');
$facebook				 = $setting->getField('candidate_fb_link');
$twitter				 = $setting->getField('candidate_twitter_link');
$info					 = $setting->getField('candidate_info');
$spartyList              = $listbox->getPolitical_Party_List();
$sdistrict 				 = $listbox->getDistrict();
$sprovince			     = $listbox->getProvince();
?>


<link href="assets/css/pages/profile.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style_profile.css" rel="stylesheet" type="text/css"/>
<script src="js/settings.js"></script>
<script>
  var USER_INFO_ID      = <?php echo $user_profile_id; ?>;
  <?php if( !empty($candidate_id_check)){ ?>

  var CANDIDATE_INFO_ID = <?php echo $candidate_id; ?>;
  <?php }else{ ?>
  var CANDIDATE_INFO_ID = '';
  <?php } ?>
</script>
	<script src="js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
    <script src="js/ajaxupload.js"></script>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12"> 
      
      <!-- BEGIN PAGE -->
      <div class="page-content"> 
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>portlet Settings</h3>
          </div>
          <div class="modal-body">
            <p>Here will be a configuration form</p>
          </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM--> 
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid"> 
          <!-- BEGIN PAGE HEADER-->
          <div class="row-fluid">
            <div class="span12"> 
              <!-- BEGIN STYLE CUSTOMIZER --> 
              
              <!-- BEGIN PAGE TITLE & BREADCRUMB-->
              <h3 class="page-title"><?php echo SETTINGS_USER_ADMIN ?></h3>
              
              <!-- END PAGE TITLE & BREADCRUMB--> 
            </div>
          </div>
          <!-- END PAGE HEADER--> 
          <!-- BEGIN PAGE CONTENT-->
          <div class="row-fluid profile">
            <div class="span12"> 
              <!--BEGIN TABS-->
              <div class="tabbable tabbable-custom tabbable-full-width">
                <ul class="nav nav-tabs">
                  <!--                  <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                  <li class="active"><a href="#profile" data-toggle="tab">Profile Info</a></li>
-->
                  <li class="active"><a href="#account" data-toggle="tab" onclick="location.replace('#account')"><?php echo SETTINGS_ACCOUNT ?></a></li>
                  <li><a href="#media" data-toggle="tab" onclick="location.replace('#media')"><?php echo SETTINGS_MEDIA ?></a></li>
<!--                  <li><a href="#manage" data-toggle="tab">Manage</a></li>
                 <li><a href="#table" data-toggle="tab">Table</a></li>
-->                   <li><a href="#products" data-toggle="tab" onclick="location.replace('#products')"><?php echo SETTINGS_PRODUCTS ?></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane row-fluid active" id="overview">
                    <?php //include_once('pages/admin/page-overview.php'); ?>
                  </div>
                  <!--end tab-pane-->
                  
                  <div class="tab-pane profile-classic row-fluid "  id="profile">
                    <?php //include_once('pages/admin/page-profile.php'); ?>
                  </div>
                  
                  <!--tab_1_2-->
                  <div class="tab-pane row-fluid profile-account active" id="account">
                    <div class="row-fluid">
                      <div class="span12">
                        <div class="span3">
                          <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active"> <a data-toggle="tab" href="#account_personal_info" onclick="location.replace('#account_personal_info')"> <i class="icon-cog"></i><?php echo SETTINGS_PERSONAL_INFO ?></a> <span class="after"></span> </li>
                            <li ><a data-toggle="tab" href="#account_change_avators" onclick="location.replace('#account_change_avators')"><i class="icon-picture"></i><?php echo SETTINGS_CHANGE_AVATAR ?></a></li>
                            <li ><a data-toggle="tab" href="#account_change_password" onclick="location.replace('#account_change_password')"><i class="icon-lock"></i><?php echo SETTINGS_CHANGE_PASSWORD ?></a></li>
                              <?php if( !empty($candidate_id_check)){ ?>

                            <li ><a data-toggle="tab" href="#account_candidate_info" onclick="location.replace('#account_candidate_info')"><i class="icon-eye-open"></i><?php echo SETTINGS_CANDIDATE_INFO ?></a></li>
                              <?php } ?>
                          </ul>
                        </div>
                        <?php include_once('pages/admin/page-account.php'); ?>
                      </div>
                    </div>
                  </div>
                  <!--end tab-pane-->
                  
                  <div class="tab-pane row-fluid profile-account" id="media">
                    <?php include_once('pages/admin/page-media.php'); ?>
                  </div>
                  <!--end tab-pane-->
                  
                  <div class="tab-pane" id="manage">
                    <?php include_once('pages/admin/page-manage.php'); ?>
                  </div>
                  
                  <!--end tab-pane-->
<!--                  <div class="tab-pane row-fluid" id="table">
                    <?php //include_once('pages/admin/page-table.php'); ?>
                  </div>
-->                  <!--end tab-pane--> 
                  
                  <div class="tab-pane row-fluid" id="products">
                    <?php include_once('pages/admin/page-product.php'); ?>
                  </div>
                  <!--end tab-pane--> 
                  
                </div>
              </div>
              <!--END TABS--> 
            </div>
          </div>
          <!-- END PAGE CONTENT--> 
        </div>
        <!-- END PAGE CONTAINER--> 
      </div>
      <!-- END PAGE --> 
    </div>
  </div>
</div>

<div id="modal-confirm" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="post" id="confirm-form">
    <div class="modal-header">
	    <h3 id="modal-title"></h3>
	</div>
	<div class="modal-body">
        <p><strong><?php echo CONFERM ?></strong></p>
        <p><?php echo DO_YOU_WANT_TO ?></p>
        <input type="hidden" name="forfeiture-action" id="forfeiture-action" value="">
        <input type="hidden" name="forfeiture-id" id="forfeiture-id" value="<?php echo $id; ?>">
    </div>
    <div class="modal-footer">
	    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true"><?php echo NO ?></button>
		<button type="submit" id="confirm-save" class="btn" data-dismiss="modal"><?php echo YES ?></button>
	</div>
</form>
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

<?php include_once('footer.php'); ?>