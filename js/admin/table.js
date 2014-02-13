$(document).ready(function() {
        

        $("#table-add").click(function(e){
			e.preventDefault();
            $("#record-delete").hide();
            $("#table-name").val('');
            $("#table-precinct").val('');
            $("#table-position").val('');
            $("#table-term").val('0');
            $("#table-delete").attr('checked', false);
			$('#list-actions').hide();
            $('#table-list').hide();
            $('#table-label').html('<i class="icon-list-alt"></i> tables - Add');
            $('#table-box').show();
            $('#table-add').hide();
			
            $('input[name=table-id]').val(-1);
            $("#table-name").focus();
		});

        $("#table-cancel").click(function(){
            $('#table-box').hide();
            $('#table-label').html('<i class="icon-list-alt"></i> tables');
            $('#list-actions').show();
            $('#table-list').show();
            $('#table-add').show();
		});

        $("#confirm-no").click(function(){
            $('#jqxWindow-confirm').jqxWindow('close');
		});

        $("#confirm-yes").click(function(){
            Modifytable('delete');
		});

        $("#table-form").validate({
	        submitHandler: function() {
                var flag = $('#table-delete').is(":checked");
                if (flag==true){
					$('#modal-title-bond').html('tables - Delete');
					$("#modal-confirm").modal();
                } else {
                    $('#table-save').button('loading');
                    var id = $("#table-id").val();
                    if (id==-1){
                        Modifytable('add');
                    } else {
                        Modifytable('edit');
                    }
                }
            },
        });

});

function savepic(){
		$.ajaxFileUpload({
			url:'documents/profile-upload.php',
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
	   //setTimeout(function(){document.getElementById("isForm").submit()}, 1000); 
}


function filechange(){
	 document.getElementById('politicalparty').value = document.getElementById('fileToUpload').value ;
	 document.getElementById('avatar').value = document.getElementById('fileToUpload').value ;
	 
	}

function Loadtable(id){
    $.ajax({
        type: "GET",
        url: "classes/admin/table.class.php?politicalpartyid="+id,
        dataType: "html",
        success: function(result){

            var jsonData = JSON.parse(result);
            for (var i in jsonData) {
                var rec = jsonData[i];
				var partyname = rec.political_party_list;
				var partysymbol = rec.party_symbols;
				var partyid = rec.id;
			
      
            var partyImage = '<img id="uploadPreviewPartySymbol" src="document/party_symbols/'+partysymbol+'" class="thumbnail" style="width:200px; height:150px; max-width: 200px; max-height: 150px;" />' ;
            $('#list-actions').hide();
            $('#table-list').hide();
            $('#table-label').html('<i class="icon-list-alt"></i> tables - Edit');
            $('#table-box').show();
            $("#record-delete").show();
            $("#table-delete").attr('checked', false);
            $('#table-add').hide();
            $("#table-name").val(partyname);
            $('input[name=table-id]').val(partyid);
            $("#table-name").focus();
            }
        }
    });
}

function Modifytable(type){
    var post = $('#table-form').serialize();
    $.post('classes/table.class.php', post, function (data) {
        if (data.match('success') !== null) {
           // $('#jqxWindow-table').jqxWindow('close');
            location.reload();
        } else {
            $('#modal-title-error').html('System');
            $('#modal-body-error').html(data);
            $("#modal-error").modal();
            if (type=='delete'){
                $('#jqxWindow-confirm').jqxWindow('close');
            } else {
                $('#table-save').button('reset');
            }
        }
    });
}

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
   $('#uploadImagePartySymbol').trigger('click');
   $('#image-upload-party-symbol').show();

}

