<?php
ob_start();
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
	<title> Add | Soccer Club </title>
	<link rel="shortcut icon" href="Gambar/logo1.png"/>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script type="bs/css/bootstrap.min.css"></script>
	<script type="bs/js/jquery.min.js"></script>

	<link rel="stylesheet" href="styleftambah.css">
	<!--Font-->
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	
	
	</head>

	<body>
	<div align="center" style="margin-top: 10px !important;">
			<img src="Gambar/logo1.png" class="avatar" style="width:150px;height:150px;">
		</div>
		<div class="box-content">
			<h2 align="center">Input Your Data Pemain</h2>
		</div>
		<div class="login-form">
			<form action="simpan_p.php" method="post">	
				<div class="divider top"></div>
				
				<div class="form-group">
					<label for="id">ID Pemain :</label>
					<input type="text" class="form-control" placeholder="" required="required" name="id_p" required autofocus >
				</div>
				
				<div class="form-group">
					<label for="id">Nama :</label>
					<input type="text" class="form-control" placeholder="" required="required" name="nama">
				</div>
				<div class="form-group">
					<label for="id">No.Punggung :</label>
					<input type="text" class="form-control" placeholder="" required="required" name="no_p">
				</div>
				<button type="submit" class="btn  btn-block tombol1">Simpan</button>
				<a href="crud_player.php" class=" btn btn-block tombol2" Style="color: white;"> BATAL </a>
				<br><br>
				
				<div class="divider bottom"></div>
			</form>	
		</div>

	
	<!--<div class="container">

		<form action="simpan_p.php" method="POST">
		
 			<div class="form-group">
				<label for="id">ID PEMAIN :</label>
      			<input type="text" class="form-control" name="id">
  			</div>
			
			<div class="form-group">
				<label for="nama">NAMA :</label>
      			<input type="text" class="form-control" name="nama">
  			</div>

 			<div class="form-group">
				<label for="no_p">NO PUNGGUNG :</label>
      			<input type="text" class="form-control" name="no_p">
  			</div>
			
			
						  			  			
			<button  class="btn btn-primary" type="submit"> SIMPAN </button>
			<button  class=" btn btn-danger"> <a href="crud_player.php" Style="color: white;"> BATAL </a>
			
		</form>		
	</div>-->
</body>
</html>





