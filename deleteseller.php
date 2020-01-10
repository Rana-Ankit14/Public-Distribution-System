<?php
	session_start();
	include("connection.php");
	$id=$_GET['id'];
	$query="delete from user where id='$id'";

$run=mysqli_query($link,$query);
	header("location:seller_list.php");

?>