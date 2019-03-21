<?php
		include "koneksi.php";
		
		$id = $_POST['id'];
		$asal_daerah = $_POST['asal_daerah'];
		$tahun_berdiri = $_POST['tahun_berdiri'];
		$manager = $_POST['manager'];
		
		// query SQL untuk insert data
		$sql="UPDATE club SET asal_daerah='".$asal_daerah."',tahun_berdiri='".$tahun_berdiri."',manager='".$manager."' WHERE id='".$id."'";
		
		// mengalihkan ke halaman index.php
		//header("location:index.php");
		if ($con->query($sql) === TRUE) {
		//echo "New record created successfully";
		header('Location: crud.php');
		} 
		
		
?>