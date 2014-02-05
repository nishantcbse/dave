$(document).ready(function(){
 $("#snav_btn").click(function(){
    var that = this;
       $("#snav_menu").slideToggle(function() {
	     			$("#header ul.menu li").toggleClass("#snav_menu");
       });
   }); 
});
