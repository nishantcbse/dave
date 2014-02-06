$(document).ready(function() {
   $('#products-home-label').html('<i class="icon-list-alt"></i> Products: Home');
   $('#products-register-label').html('<i class="icon-list-alt"></i> Products: Register');
   $('#products-login-label').html('<i class="icon-list-alt"></i> Products: Login');
   $('#products-contact-label').html('<i class="icon-list-alt"></i> Products: Contact');
   $('#products-about-label').html('<i class="icon-list-alt"></i> Products: About');
   $('#products-welcome-label').html('<i class="icon-list-alt"></i> Products: Welcome');
   $('#products-accountsponser-label').html('<i class="icon-list-alt"></i> Products: Account Sponser');
   $('#products-candidateinfo-label').html('<i class="icon-list-alt"></i> Products: Candidate Info');
        
		$("#products-add").click(function(e){
			e.preventDefault();
            $("#product-delete").hide();
            $("#products-term").val('0');
            $("#products-delete").attr('checked', false);
			$('#list-actions').hide();
            $('#products-list').hide();
            $('#record-delete').hide();
            $('#products-label').html('<i class="icon-list-alt"></i> products - Add');
            $('#products-box').show();
            $('input[name=products-id]').val(-1);
            $("#products-name").focus();
		});

        $("#products-cancel").click(function(){
            $('#products-box').hide();
            $('#products-label').html('<i class="icon-list-alt"></i> products');
            $('#list-actions').show();
            $('#products-list').show();
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
            $('#products-label').html('<i class="icon-list-alt"></i> productss - Edit');
            $('#products-box').show();
            $('#product').hide();
            $("#record-delete").hide();
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
}