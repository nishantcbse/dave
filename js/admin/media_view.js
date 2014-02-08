        jQuery(document).ready(function() {    
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
