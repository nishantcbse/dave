$(document).ready(function(){
            // Initialize the jQuery File Upload widget:
           
		   
		   
		   
		   
		 //   $('#fileupload').fileupload({
                // Uncomment the following to send cross-domain cookies:
           // });
			
			$('#fileupload').fileupload({
                xhrFields: {withCredentials: true},
                url: 'documents/media/index.php',
				drop: function (e, data) {
					$.each(data.files, function (index, file) {
						console.log(file);
						//alert('Dropped file: ' + file.name);
					});
				},
				change: function (e, data) {
					$.each(data.files, function (index, file) {
						console.log(file);
						//alert('Selected file: ' + file.name);
					});
				},
				 add: function (e, data) {
						var jqXHR = data.submit()
							.success(function (result, textStatus, jqXHR) {/* ... */ 
							      console.log(result.files[0]);
								  //var resultid = result.files[0];
								  var name = result.files[0].name;
								  var type = result.files[0].type;
								  //var name = result.files[0].name;
								  
								 $.get('classes/settings.class.php',{media:true,name:name,type:type}).done(function(data){
									 
										var jsonData = JSON.parse(data);
										for (var i in jsonData) {
											var rec = jsonData[i];
											var image = '<image src="documents/media/files/thumbnail/'+rec.name+'" class="previewimage"><a href="#" onclick="deleteImage(\'.previewimage\','+rec.id+',\''+rec.name+'\')" >delete</a>';
											$('#uplaodedImage').append(image);
										}
									 })
							      
							})
							.error(function (jqXHR, textStatus, errorThrown) {/* ... */})
							.complete(function (result, textStatus, jqXHR) {/* ... */});
					}
			});			

            // Load existing files:
            // Demo settings:
/*            $.ajax({
                // Uncomment the following to send cross-domain cookies:
                xhrFields: {withCredentials: true},
                url: $('#fileupload').fileupload('option', 'url'),
                dataType: 'json',
                context: $('#fileupload')[0],
                maxFileSize: 5000000,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                process: [{
                        action: 'load',
                        fileTypes: /^image\/(gif|jpeg|png)$/,
                        maxFileSize: 20000000 // 20MB
                    }, {
                        action: 'resize',
                        maxWidth: 1440,
                        maxHeight: 900
                    }, {
                        action: 'save'
                    }
                ]
            }).done(function (result) {
				console.log(result);
                $(this).fileupload('option', 'done')
                    .call(this, null, {
						
                    result: result
                });
            });
*/
            // Upload server status check for browsers with CORS support:
/*            if ($.support.cors) {
                $.ajax({
                    url: 'documents/media/index.php',
                    type: 'HEAD'
                }).fail(function () {
                    $('<span class="alert alert-error"/>')
                        .text('Upload server currently unavailable - ' +
                        new Date())
                        .appendTo('#fileupload');
                }).done(function(data){console.log(data);});
            }
*/
            // initialize uniform checkboxes  
            App.initUniform('.fileupload-toggle-checkbox');
			
			/*var overallProgress = $('#fileupload').fileupload('progress');
			console.log(overallProgress);
			*/
});

function deleteImage(a,b,c){
	
	$.get('classes/settings.class.php',{deleteMedia:true,mediaid:b,medianame:c}).done(function(data){
		   $(a).remove();
	});
    
}


function viewMedia(){
  
  $.get('pages/ajax/admin-media-view.php',{viewmedia:true}).done(function(data){
	  
	      //.log();
	      // $('.filter-v1').html(data);
	  })
}