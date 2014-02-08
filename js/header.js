// JavaScript Document
function getSearch(){
	  
		var abc = $('#searchText').val();
		var l = window.location;
		var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1]; 
		alert(base_url);
		var searchUrl = 'http://localhost/dave/search.php?search=' + abc;
		window.location.replace(searchUrl);
		window.location.href = searchUrl;
}