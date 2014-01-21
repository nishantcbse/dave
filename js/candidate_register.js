$(document).ready(function() {
    var register_form = $("#candidate-register-form");
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
										confirm()
										Modify();
									}
			 
				});
		
		}
		
});



function confirm(){
       	var $modal = $('#conferm');
		  $('body').modalmanager('loading');
		  setTimeout(function(){
		     $modal.load('pages/modals_payment1.php', '', function(){
		      $modal.modal().on("hidden", function() {
              	$modal.empty();
				Modify(type);
              });
		    });
		  }, 1000);
       
}


function format(state) {
	if (!state.id) return state.text; // optgroup
	return "<img class='flag' src='documents/party_symbols/" + state.id.toLowerCase() + ".png'    width='16px' height='11px' />&nbsp;&nbsp;" + state.text;
}



function Modify(){
    var post = $('#candidate-register-form').serialize();
    $.post('classes/candidate_register.class.php', post, function (data) {
        if (data.match('success') !== null) {
            //location.reload();
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

function validate(){
            var fname  	 = $('#first_name').val();
            var lname 	 = $('#last_name').val();
            var address  = $('#address').val();
            var city 	 = $('#city').val();
            var email 	 = $('#email').val();
            var question = $('#question').val();
            var answer 	 = $('#answer').val();
			
			if(fname.length == 0 || lname.length == 0 || address.length == 0 || city.length == 0 || email.length == 0 || question.length == 0 || answer.lenght == 0){
			 // $("#submit").attr("disabled", "disabled");
			}
			else{
			   //$('#submit').prop('disabled', false);
			}
			
}
