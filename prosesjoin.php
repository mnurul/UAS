<?php

	include "koneksi.php";
	
	/*
	
		$host ="localhost";
		$user ="root";
		$pass ="";
		$database = "cisco_academy";
		
		$con = mysql_connect($host, $user, $pass, $database) or die("database mysql gagal koneksi")
	*/
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	
	mysqli_query ($con,"insert into admin values('$username','$password','$level')");
	//echo "insert into admin values('$username','$password')";
	//echo "insert into nilai values($npm,'$nama_mahasiswa',$absensi, $tugas, $uts, $uas)";
	/*cara login
	  mysql_query($con,"insert into nilai(npm, nama_mahasiswa, absensi, tugas, uts, uas)"
				  values($npm, $nama_mahasiswa, $absensi, $tugas, $uts, $uas)");
	*/
	header("location: login.php");
?>