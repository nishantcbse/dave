$(document).ready(function() {
   $('#users-label').html('<i class="icon-list-alt"></i> users');
        $("#users-add").click(function(e){
			e.preventDefault();
            $("#user-delete").hide();
            $("#users-term").val('0');
            $("#users-delete").attr('checked', false);
			$('#list-actions').hide();
            $('#users-list').hide();
            $('#record-delete').hide();
            $('#users-label').html('<i class="icon-list-alt"></i> users - Add');
            $('#users-box').show();
            $('input[name=users-id]').val(-1);
            $("#users-name").focus();
		});

        $("#users-cancel").click(function(){
            $('#users-box').hide();
            $('#users-label').html('<i class="icon-list-alt"></i> users');
            $('#list-actions').show();
            $('#users-list').show();
		});

        $("#confirm-no").click(function(){
            $('#jqxWindow-confirm').jqxWindow('close');
		});

        $("#confirm-yes").click(function(){
            Modifyusers('delete');
		});

        $("#users-form").validate({
	        submitHandler: function() {
                var flag = $('#users-delete').is(":checked");
                if (flag==true){
					$('#modal-title-bond').html('users - Delete');
					$("#modal-confirm").modal();
                } else {
                    $('#users-save').button('loading');
                    var id = $("#users-id").val();
                    if (id==-1){
                        Modifyusers('add');
                    } else {
                        Modifyusers('edit');
                    }
                }
            },
        });

});


function Loadusers(id){
    $.ajax({
        type: "GET",
        url: "classes/admin/manage_users.class.php?id="+id,
        dataType: "html",
        success: function(result){
        var $response=$(result);
        if (status != 'FAIL') {
            var name = $response.filter('#name').text();
            var status = $response.filter('#status').text();
            var county = $response.filter('#county').text();
            var type = $response.filter('#type').text();
            var precinct = $response.filter('#precinct').text();
            var position = $response.filter('#position').text();
            var term = $response.filter('#term').text();
			
			if(type == 'JP'){
			  $('#type-jp').show();
			}else{
			  $('#type-jp').hide();
			}
			
			
            $('#list-actions').hide();
            $('#users-list').hide();
            $('#users-label').html('<i class="icon-list-alt"></i> userss - Edit');
            $('#users-box').show();
            $("#record-delete").show();
            $("#users-delete").attr('checked', false);
            
            $('input[name=users-id]').val(id);
            $("#users-name").focus();
            }
        }
    });
}

function Modifyusers(type){
    var post = $('#users-form').serialize();
    $.post('classes/admin/manage_users.class.php', post, function (data) {
        if (data.match('success') !== null) {
           // $('#jqxWindow-users').jqxWindow('close');
            location.reload();
        } else {
            $('#modal-title-error').html('System');
            $('#modal-body-error').html(data);
            $("#modal-error").modal();
            if (type=='delete'){
                $('#jqxWindow-confirm').jqxWindow('close');
            } else {
                $('#users-save').button('reset');
            }
        }
    });
}