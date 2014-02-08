<?php
include_once('classes/check.class.php');
protect("1,2");
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


$candidate_id = $setting->getField('candidate_id');
//print_r($candidate_id);
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
  var CANDIDATE_INFO_ID = <?php echo $candidate_id; ?>;
</script>


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
              <h3 class="page-title"> User Admin </h3>
              
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
                  <li class="active"><a href="#account" data-toggle="tab">Account</a></li>
                  <li><a href="#media" data-toggle="tab">Media</a></li>
                  <li><a href="#manage" data-toggle="tab">Manage</a></li>
                  <li><a href="#table" data-toggle="tab">Table</a></li>
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
                            <li class="active"> <a data-toggle="tab" href="#tab_1-1"> <i class="icon-cog"></i> Personal info </a> <span class="after"></span> </li>
                            <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
                            <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
                            <li ><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Candidate Info</a></li>
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
                  <div class="tab-pane row-fluid" id="table">
                    <?php include_once('pages/admin/page-table.php'); ?>
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
<?php include_once('footer.php'); ?>