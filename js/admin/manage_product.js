$(document).ready(function() {
   $('#products-home-label').html('<i class="icon-list-alt"></i> Products: Home');
   $('#products-register-label').html('<i class="icon-list-alt"></i> Products: Register');
   $('#products-login-label').html('<i class="icon-list-alt"></i> Products: Login');
   $('#products-contact-label').html('<i class="icon-list-alt"></i> Products: Contact');
   $('#products-about-label').html('<i class="icon-list-alt"></i> Products: About');
   $('#products-welcome-label').html('<i class="icon-list-alt"></i> Products: Welcome');
   $('#products-accountsponser-label').html('<i class="icon-list-alt"></i> Products: Account Sponser');
   $('#products-candidateinfo-label').html('<i class="icon-list-alt"></i> Products: Candidate Info');
        

        $("#products-cancel1").click(function(){
            $('#products-content').show();
			$('#products-box1').hide()
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


function Loadproducts(id){
	
	$.get('classes/admin/manage_products.class.php',{productid:id}).done(function(data){
           var jsonData = JSON.parse(data);
            for (var i in jsonData) {
                var rec = jsonData[i];
			     console.log(rec);
			    $('#product-label').val(rec.label);
			    $('#product-name').val(rec.name);
			    $('#product-price').val(rec.price);
			    $('#products-id1').val(rec.id);
				
				var productImage = '<img  src="documents/product/'+PRODUCT_USER_ID+'/'+rec.image+'" id="uploadPreviewProductImage" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />';
				$('#product-image-preview').html(productImage);
			}
		   
		    
			$('#products-content').hide();
			$('#products-box1').show()
		})
}

function Modifyproducts(){
    var post = $('#products-form1').serialize();
    $.post('classes/settings.class.php', post, function (data) {
        if (data.match('success') !== null) {
		    
			$('#products-content').show();
			$('#products-box1').hide()
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
}
	
	function saveProductPicture(){
		$.ajaxFileUpload({
			url:'documents/product-upload.php',
			secureuri:false,
			fileElementId:'uploadImageProduct',
			
			success: function (data, status){
				var imageName = $('#uploadImageProduct').val();
				$('#product-image1').val(imageName);
				
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


 function PreviewImageProduct() {
				var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("uploadImageProduct").files[0]);
				
				oFReader.onload = function (oFREvent) {
				             document.getElementById("uploadPreviewProductImage").src = oFREvent.target.result;
		};
   };




function selectImgProduct(){
   $('#uploadImageProduct').trigger('click');
   $('#image-upload-product').show();

}
