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
$user_first_name         = $setting->getField('first_name');
$user_middle_name        = $setting->getField('middle_name');
$user_last_name          = $setting->getField('last_name');
$user_address            = $setting->getField('address');
$user_city               = $setting->getField('city');
$user_email              = $setting->getField('email');
$security_question       = $setting->getField('security_question');
$answer                  = $setting->getField('answer');
?>
<link href="assets/css/pages/profile.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style_profile.css" rel="stylesheet" type="text/css"/>
<script src="js/settings.js"></script>


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
                  <li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
                  <li><a href="#tab_1_2" data-toggle="tab">Profile Info</a></li>
                  <li><a href="#tab_1_3" data-toggle="tab">Account</a></li>
                  <li><a href="#tab_1_4" data-toggle="tab">Purchased Product</a></li>
                  <li><a href="#tab_1_6" data-toggle="tab">Help</a></li>
                </ul>
                
                
                
                <div class="tab-content">
                
                  <div class="tab-pane row-fluid active" id="tab_1_1">
                       <?php include_once('pages/admin/page-overview.php'); ?>
                  </div>
                  <!--end tab-pane-->
                  
                  <div class="tab-pane profile-classic row-fluid" id="tab_1_2">
                       <?php include_once('pages/admin/page-profile.php'); ?>
                  </div>
                  
                  
                  <!--tab_1_2-->
                  <div class="tab-pane row-fluid profile-account" id="tab_1_3">
                      <?php include_once('pages/admin/page-account.php'); ?>
                  </div>
                  <!--end tab-pane-->
                  
                  
                  <div class="tab-pane" id="tab_1_4">
                    <div class="row-fluid add-portfolio">
                      <div class="pull-left"> <span>502 Items sold this week</span> </div>
                      <div class="pull-left"> <a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a> </div>
                    </div>
                    <!--end add-portfolio-->
                    <div class="row-fluid portfolio-block">
                      <div class="span5 portfolio-text"> <img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
                        <div class="portfolio-text-info">
                          <h4>Home Page Ads</h4>
                          <p>This is test</p>
                        </div>
                      </div>
                      <div class="span5" style="overflow:hidden;">
                        <div class="portfolio-info"> Today Sold <span>187</span> </div>
                        <div class="portfolio-info"> Total Sold <span>1789</span> </div>
                        <div class="portfolio-info"> Earns <span>$37.240</span> </div>
                      </div>
                      <div class="span2 portfolio-btn"> <a href="#" class="btn bigicn-only"><span>Manage</span></a> </div>
                    </div>
                    <!--end row-fluid-->
                  </div>
                  <!--end tab-pane-->
                  <div class="tab-pane row-fluid" id="tab_1_6">
                    <div class="row-fluid">
                      <div class="span12">
                        <div class="span3">
                          <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active"> <a data-toggle="tab" href="#tab_1"> <i class="icon-briefcase"></i> General Questions </a> <span class="after"></span> </li>
                            <li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>
                            <li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>
                            <li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>
                            <li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>
                            <li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>
                          </ul>
                        </div>
                        <div class="span9">
                          <div class="tab-content">
                            <div id="tab_1" class="tab-pane active">
                              <div style="height: auto;" id="accordion1" class="accordion collapse">
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a> </div>
                                  <div class="accordion-body collapse in" id="collapse_1">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> Pariatur cliche reprehenderit enim eiusmod highr brunch ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> Food truck quinoa nesciunt laborum eiusmod nim eiusmod high life accusamus  ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> High life accusamus terry richardson ad ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_4">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_5" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_5">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_6" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed"> Wolf moon officia aute non cupidatat skateboard dolor brunch ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_6">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab_2" class="tab-pane">
                              <div style="height: auto;" id="accordion2" class="accordion collapse">
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Cliche reprehenderit, enim eiusmod high life accusamus enim eiusmod ? </a> </div>
                                  <div class="accordion-body collapse in" id="collapse_2_1">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Pariatur cliche reprehenderit enim eiusmod high life non cupidatat skateboard dolor brunch ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_2">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Food truck quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_3">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> High life accusamus terry richardson ad squid enim eiusmod high ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_4">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_5">
                                    <div class="accordion-inner">
                                      <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
                                      <p> moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Wolf moon officia aute non cupidatat skateboard dolor brunch ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_6">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_2_7">
                                    <div class="accordion-inner">
                                      <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
                                      <p> moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab_3" class="tab-pane">
                              <div style="height: auto;" id="accordion3" class="accordion collapse">
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_1" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Cliche reprehenderit, enim eiusmod ? </a> </div>
                                  <div class="accordion-body collapse in" id="collapse_3_1">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_2" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Pariatur skateboard dolor brunch ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_2">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_3" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Food truck quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_3">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_4" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> High life accusamus terry richardson ad squid enim eiusmod high ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_4">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_5" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high  eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_5">
                                    <div class="accordion-inner">
                                      <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
                                      <p> moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_6" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_6">
                                    <div class="accordion-inner"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_7" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high life accusamus aborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_7">
                                    <div class="accordion-inner">
                                      <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
                                      <p> moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-group">
                                  <div class="accordion-heading"> <a href="#collapse_3_8" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed"> Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ? </a> </div>
                                  <div class="accordion-body collapse" id="collapse_3_8">
                                    <div class="accordion-inner">
                                      <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
                                      <p> moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end span9--> 
                      </div>
                    </div>
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
<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		});
	</script> 
<!-- END JAVASCRIPTS -->

<?php include_once('footer.php'); ?>