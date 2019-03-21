<?php
	session_start();
	include "koneksi.php";
	
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	
	
	$data = mysqli_query($con,"select * from admin where username ='".$username."' and password = '".$password."'");
	print_r($data);
	$cek = mysqli_num_rows($data);
	
	if($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";

		//header("location:admin.php");
		header("location:index.php");
	} else{
		header("location:login.php?pesan=gagal");
		
	}	
		
	
?>