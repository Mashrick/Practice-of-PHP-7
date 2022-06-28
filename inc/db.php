<?php
	
	$server 	=	"localhost";
	$userName	=	"root";
	$password 	=	"";
	$dbName		=	"studentportal";


	$db 	=	mysqli_connect($server ,$userName,$password,$dbName);

	if ($db) {

		//echo "database connected";

	} else {

		echo die("MySQL Error. " .mysqli_error($db));

	}
	





?>
