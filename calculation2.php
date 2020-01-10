<?php
	
	session_start();
	include("connection.php");


	$query="SELECT order_number FROM order_list ORDER BY order_number DESC LIMIT 1 ";
	print_r($_POST);

?>