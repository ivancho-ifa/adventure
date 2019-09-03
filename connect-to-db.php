<?php
	$cn=mysqli_connect("localhost","root","","travel");

	mysqli_query($cn, "SET NAMES 'utf8'");
	mysqli_query($cn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>
