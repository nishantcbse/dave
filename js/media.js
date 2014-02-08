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
										var image = '';
										for (var i in jsonData) {
											var rec = jsonData[i];
											
											image +=  '<div class="row-fluid uploadImagePreview span12">'+
															'<div class="span1">'+
															   '<img src="documents/media/files/thumbnail/'+rec.name+'" alt=""></div>'+
															'<div class="span7">'+
																'<span class="mediadetail">'+rec.detail+'</span>'+
															'</div>'+
															'<div class="span2">'+
															   ' <a href="#responsive" data-toggle="modal" class="btn green submit-btn" onclick="mediaDetailEdit(\'.mediadetail\','+rec.id+')">Edit</a>'+
															'</div>'+
															'<div class="span2">'+
																'<div class="submit-btn"> <a href="#" class="btn green" onclick="deleteImage(\'.uploadImagePreview\','+rec.id+',\''+rec.name+'\')">Delete</a></div>'+
															'</div>'+
														'</div>';
											
										}
										$('#uplaodedImage').prepend(image);
										
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
	console.log();
	
	$.get('classes/settings.class.php',{deleteMedia:true,mediaid:b,medianame:c}).done(function(data){
		   a.parent().parent().parent().remove();
	});
    
}


function viewMedia(){
  
  $.get('pages/ajax/admin-media-view.php',{viewmedia:true}).done(function(data){
	  
	      //.log();
	      // $('.filter-v1').html(data);
	  })
}