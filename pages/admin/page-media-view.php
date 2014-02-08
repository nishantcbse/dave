<?php
include_once('classes/check.class.php');
//protect("1,2");
include_once('classes/listbox.class.php');
?>   
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">               
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES --> 
    <link href="assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>


    <div class="container min-hight">
        <!-- BEGIN FILTER -->           
        <div class="filter-v1 margin-bottom-40">
            <ul class="grid-v1 thumbnails">
                <li class="span3 mix category_1">
                    <img src="assets/img/works/img1.jpg" alt="">
                    <div class="hover-portfolio hover-portfolio-small">
                        <h2>Cascusamus et iusto accusamus</h2>
                        <a class="hover-portfolio-lft"><i class="icon-link"></i></a>
                        <a class="hover-portfolio-rgt fancybox-button" href="assets/img/works/img1.jpg" title="Project Name" data-rel="fancybox-button"><i class="icon-search"></i></a>                            
                    </div>                                        
                </li>
                <li class="span3 mix category_2">
                    <img src="assets/img/works/img2.jpg" alt="">
                    <div class="hover-portfolio hover-portfolio-small">
                        <h2>Cascusamus et iusto accusamus</h2>
                        <a class="hover-portfolio-lft"><i class="icon-link"></i></a>
                        <a class="hover-portfolio-rgt fancybox-button" href="assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button"><i class="icon-search"></i></a>                            
                    </div>                                        
                </li>
                <li class="span3 mix category_3">
                    <img src="assets/img/works/img3.jpg" alt="">
                    <div class="hover-portfolio hover-portfolio-small">
                        <h2>Cascusamus et iusto accusamus</h2>
                        <a class="hover-portfolio-lft"><i class="icon-link"></i></a>
                        <a class="hover-portfolio-rgt fancybox-button" href="assets/img/works/img3.jpg" title="Project Name" data-rel="fancybox-button"><i class="icon-search"></i></a>                            
                    </div>                    
                </li>
            </ul>
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
    <script>
        jQuery(document).ready(function() {    
           App.init();
          
		   
      
            $('.bxslider').show();
            $('.bxslider').bxSlider({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 360,
                slideMargin: 10
            });

            $('.bxslider1').show();            
            $('.bxslider1').bxSlider({
                minSlides: 6,
                maxSlides: 6,
                slideWidth: 360,
                slideMargin: 2
            });            
     

   
            $(function(){
                $('.grid-v1').mixitup();
            });    
       

        });
    </script>
