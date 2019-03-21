<?php

	include "koneksi.php";
	
	/*
	
		$host ="localhost";
		$user ="root";
		$pass ="";
		$database = "cisco_academy";
		
		$con = mysql_connect($host, $user, $pass, $database) or die("database mysql gagal koneksi")
	*/
	
	$id = $_POST['id'];
	$asal_daerah = $_POST['asal_daerah'];
	$tahun_berdiri = $_POST['tahun_berdiri'];
	$manager = $_POST['manager'];
	
	
	mysqli_query ($con,"insert into club values('$id','$asal_daerah','$tahun_berdiri','$manager')");
	//echo "insert into club values('$id','$asal_daerah',$tahun_berdiri, $manager)";
	//echo "insert into nilai values($npm,'$nama_mahasiswa',$absensi, $tugas, $uts, $uas)";
	/*cara login
	  mysql_query($con,"insert into nilai(npm, nama_mahasiswa, absensi, tugas, uts, uas)"
				  values($npm, $nama_mahasiswa, $absensi, $tugas, $uts, $uas)");
	*/
	header("location: crud.php");
?>