// JavaScript Document
function getSearch(){
		var abc = $('#searchText').val();
		var l = window.location;
		var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];
		var searchUrl = base_url + '/search.php?search=' + abc;
		window.location.replace(searchUrl);
}