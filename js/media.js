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
							.success(function (result, textStatus, jqXHR) {/* ... */ console.log(result)})
							.error(function (jqXHR, textStatus, errorThrown) {/* ... */})
							.complete(function (result, textStatus, jqXHR) {/* ... */});
					}
			});			

            // Load existing files:
            // Demo settings:
            $.ajax({
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

            // Upload server status check for browsers with CORS support:
            if ($.support.cors) {
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

            // initialize uniform checkboxes  
            App.initUniform('.fileupload-toggle-checkbox');
			
			/*var overallProgress = $('#fileupload').fileupload('progress');
			console.log(overallProgress);
			*/
});