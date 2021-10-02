<?php

	$servername = "localhost";
	$username = "id17626060_payjee";
	$password = "Rimpayal@123";
	$dbname = "id17626060_ye_banktransactiondetails";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>