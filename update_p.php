<?php
    include "koneksi.php";
    
    $id = $_POST['id_p'];
	$nama = $_POST['nama'];
	$no_p = $_POST['no_p'];
		
    // query SQL untuk insert data
    $sql="UPDATE pemain SET nama='".$nama."',no_punggung='".$no_p."' WHERE id_p='".$id."'";
    echo "UPDATE pemain SET nama='".$nama."',no_punggung='".$no_p."' WHERE id_p='".$id."'";
    //$sql="UPDATE club SET asal_daerah='".$asal_daerah."',tahun_berdiri='".$tahun_berdiri."',manager='".$manager."' WHERE id='".$id."'";
		
    // mengalihkan ke halaman index.php
    //header("location:index.php");
    if ($con->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: crud_player.php');
    } 
		
		
?>