$(document).ready(function() {
    var register_form = $("#candidate-register-form");
	if (register_form.length > 0) {
		
        $(register_form).validate({
				invalidHandler: function(event, validator) {
									var errors = validator.numberOfInvalids();
				
									$('#modal-title-error').html('System');
									$('#modal-body-error').html('<div class="alert alert-error">Please correct error then submit form</div>');
									$("#modal-error").modal();
				
								},
				submitHandler: function() {
									 var id = $("#user-id").val();
										confirm()
										Modify();
									}
			 
				});
		
		}
		
});



function confirm(){
       	var $modal = $('#conferm');
		  $('body').modalmanager('loading');
		  setTimeout(function(){
		     $modal.load('pages/modals_payment1.php', '', function(){
		      $modal.modal().on("hidden", function() {
              	$modal.empty();
				
              });
		    });
		  }, 1000);
       
}

function redirect1(){
	Modify(); 
	setTimeout(function(){
      window.location.href = "integration/paypal/sample/payments/CreatePaymentUsingPayPal.php";
	},2000);
}



function format(state) {
	if (!state.id) return state.text; // optgroup
	return "<img class='flag' src='documents/party_symbols/" + state.id.toLowerCase() + ".png'    width='16px' height='11px' />&nbsp;&nbsp;" + state.text;
}


(function($) { 
    $.fn.serializeAll = function() {
        var rselectTextarea = /^(?:select|textarea)/i;
        var rinput = /^(?:color|date|datetime|datetime-local|email|file|hidden|month|number|password|range|search|tel|text|time|url|week)$/i;
        var rCRLF = /\r?\n/g;

        var arr = this.map(function(){
            return this.elements ? jQuery.makeArray( this.elements ) : this;
        })
        .filter(function(){
            return this.name && !this.disabled &&
                ( this.checked || rselectTextarea.test( this.nodeName ) ||
                    rinput.test( this.type ) );
        })
        .map(function( i, elem ){
            var val = jQuery( this ).val();

            return val == null ?
                null :
                jQuery.isArray( val ) ?
                    jQuery.map( val, function( val, i ){
                        return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
                    }) :
                    { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
        }).get();

        return $.param(arr);
    }
})(jQuery);  // call this by $(selector).serializeAll();  this will give the posted data of all element and with file type too‏



function Modify(){
    var post = $('#candidate-register-form').serializeAll();
    $.post('classes/candidate_register.class.php', post, function (data) {
        if (data.match('success') !== null) {
            //location.reload();
        } else {
			$('#modal-title-error').html('System');
			$('#modal-body-error').html(data);
			$("#modal-error").modal();
        }
    });
}
function savepic(){
		$.ajaxFileUpload({
			url:'documents/upload/default.php',
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
	   setTimeout(function(){document.getElementById("isForm").submit()}, 1000); 
}


function filechange(){
	 document.getElementById('avatar').value = document.getElementById('fileToUpload').value ;
	 
	}

function validate(){
            var fname  	 = $('#first_name').val();
            var lname 	 = $('#last_name').val();
            var address  = $('#address').val();
            var city 	 = $('#city').val();
            var email 	 = $('#email').val();
            var question = $('#question').val();
            var answer 	 = $('#answer').val();
			
			if(fname.length == 0 || lname.length == 0 || address.length == 0 || city.length == 0 || email.length == 0 || question.length == 0 || answer.lenght == 0){
			 // $("#submit").attr("disabled", "disabled");
			}
			else{
			   //$('#submit').prop('disabled', false);
			}
			
}
