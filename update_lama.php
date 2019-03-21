<?php
		include "koneksi.php";
		
		$id = $_POST['id'];
		$asal_daerah = $_POST['asal_daerah'];
		$tahun_berdiri = $_POST['tahun_berdiri'];
		$manager = $_POST['manager'];
		
		
		mysqli_query($con, "update club set asal_daerah ='$asal_daerah',
											 tahun_berdiri = '$tahun_berdiri',
											 manager = '$manager',											
											 where id = '$id'");
											 
											 /*echo "update nilai set nama_mahasiswa='$nama_mahasiswa',
											 absensi = $absensi,
											 tugas = $tugas,
											 uts = $uts,
											 uas = $uas
											 where npm = '$npm'";
											 */
		/*echo "update club set asal_daerah='$asal_daerah',
											 tahun_berdiri = '$tahun_berdiri',
											 manager = '$manager',											
											 where id = '$id'";*/
									
		header("location: crud.php");									 
?>