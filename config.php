<?php
    
	$bdhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="clinic";
	$conn = mysqli_connect($bdhost,$dbuser,$dbpass);
	$db = mysqli_select_db($conn,$dbname);
	if (!$conn) {
		
		die("Connection failed : ");

	}
	if ( !$db) {
		die("Database Connection failed : ");
	}
?>