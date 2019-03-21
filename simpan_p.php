<?php

	include "koneksi.php";
	
	/*
	
		$host ="localhost";
		$user ="root";
		$pass ="";
		$database = "cisco_academy";
		
		$con = mysql_connect($host, $user, $pass, $database) or die("database mysql gagal koneksi")
	*/
	
	$id = $_POST['id_p'];
	$nama = $_POST['nama'];
	$no_p = $_POST['no_p'];
	
	
	
	mysqli_query ($con,"insert into pemain values('$id','$nama','$no_p')");
	//echo "insert into pemain values('$id','$nama','$no_p')";
	//echo "insert into club values('$id','$asal_daerah',$tahun_berdiri, $manager)";
	//echo "insert into nilai values($npm,'$nama_mahasiswa',$absensi, $tugas, $uts, $uas)";
	/*cara login
	  mysql_query($con,"insert into nilai(npm, nama_mahasiswa, absensi, tugas, uts, uas)"
				  values($npm, $nama_mahasiswa, $absensi, $tugas, $uts, $uas)");
	*/
	header("location: crud_player.php");
?>