<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	mysqli_query($con, "delete from club where id ='$id'");
	
	header("location: crud.php");
?>