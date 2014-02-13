$(document).ready(function() {
    var register_form = $("#register-form");
	if (register_form.length > 0) {
		
        $(register_form).validate({
				invalidHandler: function(event, validator) {
									var errors = validator.numberOfInvalids();
				
									$('#modal-title-error').html('System');
									$('#modal-body-error').html('<div class="alert alert-error">Please correct error then submit form</div>');
									$("#modal-error").modal();
				
								},
				submitHandler: function() {
									 var id = $("#user-id").val();
									
								   
									var registrationType = $('#registration_category').val();
									
									if( registrationType == 'profile'){
										Modify();
										
									}else if(registrationType == 'advertisement'){
										confirm()
									}
			 
		 }
				});
		
		}
		   $('.select2').select2({
                placeholder: "Select an Option",
                allowClear: true
            });
		
});



function checkRegistrationType(){
			var registrationType = $('#registration_category').val();
			if( registrationType == 'advertisement'){
				confirm();
				
			}else if(registrationType == 'profle'){
				 Modify(type)
			}
}

function confirm(){
       	var $modal = $('#conferm');
		  $('body').modalmanager('loading');
		  setTimeout(function(){
		     $modal.load('pages/modals_payment.php', '', function(){
		      $modal.modal().on("hidden", function() {
              	$modal.empty();
				
              });
		    });
		  }, 1000);
       
}


function redirect1(){
	Modify(); 
	setTimeout(function(){
      window.location.href = "integration/paypal/sample/payments/CreatePaymentUsingPayPal.php";
	},2000);
}


function Modify(){
    var post = $('#register-form').serialize();
    $.post('classes/register.class.php', post, function (data) {
        if (data.match('success') !== null) {
            //location.reload();
			var registrationType = $('#registration_category').val();
			if( registrationType == 'profile'){
				window.location.replace("candidate_register.php");
				
			}
			
        } else {
			$('#modal-title-error').html('System');
			$('#modal-body-error').html(data);
			$("#modal-error").modal();
        }
    });
}

function savepic(){
		$.ajaxFileUpload({
			url:'documents/upload/default.php',
			secureuri:false,
			fileElementId:'fileToUpload',
			dataType: 'json',
			success: function (data, status){
				document.getElementById("isForm").submit();
				if(typeof(data.error) != 'undefined'){
						if(data.error != ''){
							alert(data.error);
						}else{
						alert(msg); // returns location of uploaded file
						}
				  }
			  },
			error: function (data, status, e){
					alert(e);
					}
				}
			)
	   setTimeout(function(){document.getElementById("isForm").submit()}, 1000); 
}


function filechange(){
	 document.getElementById('avatar').value = document.getElementById('fileToUpload').value ;
	 
	}

