<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	mysqli_query($con, "delete from pemain where id_p ='$id'");
	//echo "delete from pemain where id_p ='$id'";
	header("location: crud_player.php");
?>