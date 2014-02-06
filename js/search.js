// JavaScript Document
$(document).ready(function(){
	
})

function search_candidate(){
    var search = $('#search_val').val();
	$.get('classes/search.class.php',{search:search,searchtype:'candidate'}).done(function(data){
		   $('#search_result').html(data); 
		})
}
