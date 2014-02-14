$(document).ready(function() {
    var register_edit = $("#register-edit-form");
	
	//alert(CANDIDATE_INFO_ID);
	$('#personal-info-id').val(USER_INFO_ID ); //setting global candidate info id
	$('#candidate-info-id').val(CANDIDATE_INFO_ID ); //setting global candidate info id
	
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


	function saveProfilePicture(){
		$.ajaxFileUpload({
			url:'documents/profile-upload.php',
			secureuri:false,
			fileElementId:'uploadImageProfile',
			
			success: function (data, status){
				var imageName = $('#uploadImageProfile').val();
				//$('#product-image1').val(imageName);
				
				ModifyAvtar(imageName);
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
}

function ModifyAvtar(imageName){
	   
		$.post('classes/settings.class.php',{action:'changeavtar',avatar:imageName}).done(function(data){
			   location.reload();
			})

}


 function PreviewImageProfile() {
				var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("uploadImageProfile").files[0]);
				
				oFReader.onload = function (oFREvent) {
				             document.getElementById("uploadPreviewProfileImage").src = oFREvent.target.result;
		};
   };




function selectImgProfile(){
   $('#uploadImageProfile').trigger('click');
   $('#image-upload-profile').show();

}

function saveCandidateImage(){
		$.ajaxFileUpload({
			url:'documents/candidate-upload.php',
			secureuri:false,
			fileElementId:'uploadImageCandidate',
			
			success: function (data, status){
				var imageName = $('#uploadImageCandidate').val();
				$('#candidate-image').val(imageName);
				//alert($('#uploadImageCandidate').val());
				
				
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
	   //setTimeout(function(){document.getElementById("isForm").submit()}, 1000); 
}

            function PreviewImageCandidateImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImageCandidate").files[0]);
        
                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreviewCandidateImage").src = oFREvent.target.result;
                };
            };

function selectCandidateImage(){
   $('#uploadImageCandidate').trigger('click');
   $('#image-upload-candidate-image').show();

}

