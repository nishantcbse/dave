$(document).ready(function(){
       	$.fn.modalmanager.defaults.resize = true;
		$.fn.modalmanager.defaults.spinner = '<div class="loading-spinner fade" style="width: 200px; margin-left: -100px;"><img src="assets/img/ajax-modal-loading.gif" align="middle">&nbsp;<span style="font-weight:300; color: #eee; font-size: 18px; font-family:Open Sans;">&nbsp;Loading...</span></div>';
       	var $modal = $('#welcome_modeal');
			$modal.on('click', '.update', function(){
		  $modal.modal('loading');
		  setTimeout(function(){
		    $modal
		      .modal('loading')
		      .find('.modal-body')
		        .prepend('<div class="alert alert-info fade in">' +
		          'Updated!<button type="button" class="close" data-dismiss="alert"></button>' +
		        '</div>');
		  }, 1000);
		}); 

	
	
	})



function modelbox(){
       	var $modal = $('#welcome_modeal');
 
		  // create the backdrop and wait for next modal to be triggered
		  //alert('here');
		  $('body').modalmanager('loading');
		 
		  setTimeout(function(){
		     $modal.load('pages/modals_ajax.html', '', function(){
		      $modal.modal().on("hidden", function() {
              	$modal.empty();
              });
		    });
		  }, 1000);
       
}

function redirect(){
window.location.href = "register.php";
}

