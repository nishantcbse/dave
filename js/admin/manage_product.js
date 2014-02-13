$(document).ready(function() {
   $('#products-home-label').html('<i class="icon-list-alt"></i> Products: Home');
   $('#products-register-label').html('<i class="icon-list-alt"></i> Products: Register');
   $('#products-login-label').html('<i class="icon-list-alt"></i> Products: Login');
   $('#products-contact-label').html('<i class="icon-list-alt"></i> Products: Contact');
   $('#products-about-label').html('<i class="icon-list-alt"></i> Products: About');
   $('#products-welcome-label').html('<i class="icon-list-alt"></i> Products: Welcome');
   $('#products-accountsponser-label').html('<i class="icon-list-alt"></i> Products: Account Sponser');
   $('#products-candidateinfo-label').html('<i class="icon-list-alt"></i> Products: Candidate Info');
        

        $("#products-cancel").click(function(){
            $('#products-box').hide();
            $('.product-edit-form').hide();
            $('#products-label').html('<i class="icon-list-alt"></i> products');
            $('#list-actions').show();
            $("#products-list-home").show();
            $(".products-list").show();
            $("#products-list-register").show();
            $("#products-list-login").show();
            $("#products-list-contact").show();
            $("#products-list-about").show();
            $("#products-list-welcome").show();
            $("#products-list-accountsponser").show();
            $("#products-list-candidateinfo").show();
		});

        $("#confirm-no").click(function(){
            $('#jqxWindow-confirm').jqxWindow('close');
		});

        $("#confirm-yes").click(function(){
            Modifyproducts('delete');
		});

        $("#products-form").validate({
	        submitHandler: function() {
                var flag = $('#products-delete').is(":checked");
                if (flag==true){
					$('#modal-title-bond').html('products - Delete');
					$("#modal-confirm").modal();
                } else {
                    $('#products-save').button('loading');
                    var id = $("#products-id").val();
                    if (id==-1){
                        Modifyproducts('add');
                    } else {
                        Modifyproducts('edit');
                    }
                }
            },
        });

});


function Loadproductshome(id){
    $.ajax({
        type: "GET",
        url: "classes/admin/manage_products.class.php?id="+id,
        dataType: "html",
        success: function(result){
        var $response=$(result);

        if (status != 'FAIL') {
            var label = $response.filter('#label').text();
            var name = $response.filter('#name').text();
            var price = $response.filter('#price').text();
            var image = $response.filter('#image').text();
            var sell = $response.filter('#sell').text();
			
            $('#list-actions').hide();
            $('#products-list').hide();
            $('.products-list').hide();
            $('#products-label').html('<i class="icon-list-alt"></i> productss - Edit');
		    $('#products-box').show();
		    $('.product-edit-form').show();
            $("#record-delete").hide();
            $("#products-list-home1").hide();
            $("#products-list-register").hide();
            $("#products-list-login").hide();
            $("#products-list-contact").hide();
            $("#products-list-about").hide();
            $("#products-list-welcome").hide();
            $("#products-list-accountsponser").hide();
            $("#products-list-candidateinfo").hide();
            $("#products-delete").attr('checked', false);
            $('input[name=products-id]').val(id);
            $("#products-name").focus();
			
            }
        }
    });
}

function Modifyproducts(type){
    var post = $('#products-form').serialize();
    $.post('classes/admin/manage_products.class.php', post, function (data) {
        if (data.match('success') !== null) {
           // $('#jqxWindow-products').jqxWindow('close');
            location.reload();
        } else {
            $('#modal-title-error').html('System');
            $('#modal-body-error').html(data);
            $("#modal-error").modal();
            if (type=='delete'){
                $('#jqxWindow-confirm').jqxWindow('close');
            } else {
                $('#products-save').button('reset');
            }
        }
    });
	
	
	function savePic(){
		$.ajaxFileUpload({
			url:'documents/profile-upload.php',
			secureuri:false,
			fileElementId:'uploadImage',
			
			success: function (data, status){
				console.log(data); console.log(status);
				//document.getElementById("isForm").submit();
				alert($('#uploadImage').val());
				
				
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

function selectImage(){
   $('#uploadImageProduct').trigger('click');
   $('#image-upload-product').show();

}

}