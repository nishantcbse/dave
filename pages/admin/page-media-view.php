<?php
include_once('classes/check.class.php');
//protect("1,2");
include_once('classes/listbox.class.php');
include_once('classes/settings.class.php');

//$view = $setting->mediaView();



?>   
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">               
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES --> 
    <link href="assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>


    <div class="container min-hight">
        <!-- BEGIN FILTER -->           
        <div class="filter-v1 margin-bottom-40 span12">
            
                
                
                
               
              <?php   $setting->mediaView() ; ?>  
                
                
                
          
        </div>
        <!-- END FILTER -->           
    </div>
    
    <script src="assets/plugins/jquery.mixitup.min.js"></script>      
    <script type="text/javascript" src="assets/plugins/hover-dropdown.js"></script>                
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->   
    <!-- END CORE PLUGINS -->
    <script src="assets/scripts/app.js"></script>      
    <script src="js/admin/media_view.js"></script>      
    <script>
        jQuery(document).ready(function() {    
           App.init();
        });
    </script>
