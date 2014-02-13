<?php

////////////////////
// Important ! These must be filled in correctly.
// Database details are required to use this script.


if($_SERVER[ 'HTTP_HOST' ] == 'localhost'){
	
	$host = "localhost"; // If you don't know what your host is, it's safe to leave it localhost
	$dbName = "dave"; // Database name
	$dbUser = "root"; // Username
	$dbPass = ""; // Password

}else if($_SERVER[ 'HTTP_HOST' ] == 'www.nwareindia.com' || $_SERVER[ 'HTTP_HOST' ] == 'nwareindia.com'){

	$host = "localhost"; // If you don't know what your host is, it's safe to leave it localhost
	$dbName = "nwareind_dave"; // Database name
	$dbUser = "nwareind_dave"; // Username
	$dbPass = "nishant3001"; // Password

}

?>