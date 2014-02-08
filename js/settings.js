$(document).ready(function() {
    var register_edit = $("#register-edit-form");
	
	alert(USER_INFO_ID);
	$('#personal-info-id').val(USER_INFO_ID ); //setting global candidate info id
	
/*	if (register_edit.length > 0) {
		
        $('#register_form').validate({
				invalidHandler: function(event, validator) {
									var errors = validator.numberOfInvalids();
				
									$('#modal-title-error').html('System');
									$('#modal-body-error').html('<div class="alert alert-error">Please correct error then submit form</div>');
									$("#modal-error").modal();
				
								},
				submitHandler: function() {
									 var id = $("#user-id").val();
										Modify();
									}
			 
				});
		
		}
*/		
});


function Modify_info(type){
	
	if(type == 'personal'){
       var post = $('#personal-info-form').serialize();
	}else if(type == 'avatar'){
		var post = $('#avatar-edit-form').serialize();
	}else if(type == 'candidate'){
		var post = $('#candidate-edit-form').serialize();
	}else if(type == 'password'){
		var post = $('#password-edit-form').serialize();
	}
	
    $.post('classes/settings.class.php', post, function (data) {
        if (data.match('success') !== null) {
            location.reload();
        } else {
			$('#modal-title-error').html('System');
			$('#modal-body-error').html(data);
			$("#modal-error").modal();
        }
    });
}


function Modify_image(){
    var post = $('#image-edit-form').serialize();
    $.post('classes/settings.class.php', post, function (data) {
        if (data.match('success') !== null) {
            //location.reload();
        } else {
			$('#modal-title-error').html('System');
			$('#modal-body-error').html(data);
			$("#modal-error").modal();
        }
    });
}
function Modify_candidate(){
    var post = $('#candidate-edit-form').serialize();
    $.post('classes/settings.class.php', post, function (data) {
        if (data.match('success') !== null) {
            //location.reload();
        } else {
			$('#modal-title-error').html('System');
			$('#modal-body-error').html(data);
			$("#modal-error").modal();
        }
    });
}
