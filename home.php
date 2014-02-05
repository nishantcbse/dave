<?php
include_once('classes/check.class.php');

$title = 'home';
$label = '';
include_once('header.php');
include_once('classes/function_home.php');

?>
<script src="js/home.js"></script>

<style>

.pricetag{
	
    padding:10px !important;
	
}
.pointer{
	
	cursor:pointer
	
}

</style>
  
    <!-- BEGIN CONTAINER -->   
    <div class="container min-hight">
        <!-- BEGIN FILTER -->           
        <div class="filter-v1 margin-bottom-40">
            <ul class="grid-v1 thumbnails">
				<div id="welcome_modeal" class="modal hide fade" tabindex="-1"></div>
                 
				 <?php echo display_homeproduct() ?>
            
            </ul>
        </div>
        <!-- END FILTER --> 
                  
    </div>
    <!-- END CONTAINER -->
<?php include 'footer.php' ?>
        
