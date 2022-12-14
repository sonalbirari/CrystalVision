<?php
	include("connect.php");
	$id = $_GET['id'];
	$q = "delete from tblItem where Id = $id ";
	mysqli_query($con,$q);	
	header("location:index.php");
?>
