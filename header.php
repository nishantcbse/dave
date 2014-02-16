<?php ob_start(); ?>
<?php include_once('classes/translate.class.php'); ?>
<?php 
if (!isset($_SESSION)) session_start(); 

if(isset($_SESSION['jigowatt']['gravatar']) && !empty($_SESSION['jigowatt']['gravatar'])){
  $avatar = 'documents/avatar/'.$_SESSION['jigowatt']['user_id'].'/'.$_SESSION['jigowatt']['gravatar'];
}else{
  $avatar = 'documents/avatar/default.png';
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Dave </title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />               
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome-old/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />          
    <link rel="stylesheet" href="assets/plugins/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen">                
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <!-- BEGIN PAGE LEVEL STYLES --> 
    <link href="assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->   
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
     
    <link href="assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>    
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="css/ravi.css" rel="stylesheet" type="text/css"/>
	<!-- Upload --> 
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
    <!-- Upload --> 
	<!-- Model Box -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css"/>
	<link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<!-- End Model Box --> 
    <link href="assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
    
	<!-- Le javascript -->
    <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>    
    <script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>    
    <script type="text/javascript" src="assets/plugins/hover-dropdown.js"></script> 
	<script type="text/javascript" src="assets/plugins/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<!--	<script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
-->    <script src="js/jquery.validate.js"></script>
    <!-- END CORE PLUGINS -->
    <script src="assets/scripts/app.js"></script>         
    <script src="assets/scripts/index.js"></script> 
	<script src="js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
    <script src="js/ajaxupload.js"></script>
    <!-- END JAVASCRIPTS -->
	<!-- END PAGE LEVEL PLUGINS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-fileupload.js"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- Upload -->
	<!-- Model Box --> 
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
	<script src="assets/scripts/ui-modals.js"></script> 
    <script type="text/javascript" src="js/universal.js"></script>    
    <script type="text/javascript" src="js/header.js"></script>    
    
	<!-- End Model Box --> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
          
            Index.initRevolutionSlider(); 
          
			FormFileUpload.init();

        });
    </script>
<?php include_once('classes/language/en_language.php'); ?>
    </head>

	<body>


    <!-- BEGIN HEADER -->
    <div class="front-header">
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <!-- BEGIN LOGO (you can use logo image instead of text)-->
                    <!-- END LOGO -->
                    
                    
    <div style="width:800px">  
        <div style="float:left">
                <a class="brand logo-v1" href="index.php">
                    <img src="assets/img/logo_blue.png" id="logoimg" alt="">
                </a>
        </div> 
        <div class="nav-collapse collapse"  style="float:left">
            <ul class="nav">
                <li class="active"><a href="home.php"><?php echo MENU_HOME ?></a></li>
                <li><a href="#"><?php echo MENU_ABOUT ?></a></li>
                <li><a href="#"><?php echo MENU_CONTACT_US ?></a></li>
                <li><a href="#"><?php echo MENU_TERMS ?></a></li>
                <li><a href="#"><?php echo MENU_POLICY ?></a></li>
                <li><a href="#"><?php echo MENU_SITE_MAP ?></a></li>
               
            </ul>
        </div>
     </div>
                    
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="nav-collapse collapse pull-right">
    
    <div class="login-nav" >
        <ul class="nav"> 
        
	<?php if(isset($_SESSION['jigowatt']['username'])) { ?>
                    <li class="dropdown" style="margin-top: 17px;">
                        <p class="navbar-text dropdown-toggle" data-toggle="dropdown" id="userDrop">
                            <span style="float:left"><img src="<?php echo $avatar ; ?>" width="40px"></span>
                            <span style="float:left"><a href="#"><?php echo $_SESSION['jigowatt']['username']; ?></a></span>
                           <span style="float:left; margin-top: 10px;"> <b class="caret"></b></span>
                        </p>
                        
                        <ul class="dropdown-menu">
<!--                            <li><a href="admin/index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
-->                            <li><a href="user_s.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> 
<!--                            <li><a href="profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
-->                            <li class="divider"></li>
                            <li><a href="logout.php"><?php _e('Sign out'); ?></a></li>
                        </ul>
                        
                    </li>                           
    <?php }else{ ?>
                    <li><a href="product.php" class="loginnav"><?php echo MENU_REGISTER ?></a></li>
                    <li><a href="login.php" class="loginnav"><?php echo MENU_LOGIN ?></a></li>
                    <br><br><br>
    <?php } ?>
            </ul>
        </div>
           <div class="input-append search">
                <form method="get" action="search.php">
                    <input style="background:#fff;" class="m-wrap" type="text" id="searchText" name="search" placeholder="<?php echo MENU_SEARCH ?>" />
                    <button type="submit" class="btn theme-btn" onClick=""><?php echo MENU_GO ?></button>
               </form>
            </div>

            
            
    </div>
    
                    <!-- BEGIN TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>      
    </div>  
    <!-- END HEADER -->

<!-- Main content
================================================== -->
