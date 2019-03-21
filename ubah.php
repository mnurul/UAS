<!DOCTYPE HTML>
<?php
ob_start();
session_start();

	include "koneksi.php";
	
?>


<html lang="en">
	<head>
	  <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
		
	  <!-- Boostrap CSS -->
		<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	
		<title>Edit | Soccer Club</title>
		<link rel="shortcut icon" href="Gambar/logo1.png"/>
		<link rel="stylesheet" href="stylefubah.css">
	<!--Font-->
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	</head>

	<body>
	<div align="center" style="margin-top: 10px !important;">
			<img src="Gambar/logo1.png" class="avatar" style="width:150px;height:150px;">
		</div>
		<div class="box-content">
			<h2 align="center">Edit Your Data Club</h2>
		</div>
		<?php 	
			$id = $_GET['id'];
			$data = mysqli_query($con,"SELECT * FROM club WHERE id='".$id."'");
			while($row = mysqli_fetch_array($data)) {
		?>
		<div class="login-form">
			<form action="update.php" method="post">	
				<div class="divider top"></div>
				
				<div class="form-group">
					<label for="id">ID CLUB :</label>
					<input type="text" class="form-control" name="id" value="<?= $row['id']; ?>" required autofocus>
				</div>
				
				<div class="form-group">
					<label for="id">Asal Daerah :</label>
					<input type="text" class="form-control" name="asal_daerah" value="<?= $row['asal_daerah']; ?>" required autofocus>
				</div>
				<div class="form-group">
					<label for="id">Tahun Berdiri :</label>
					<input type="text" class="form-control" name="tahun_berdiri" value="<?= $row['tahun_berdiri']; ?>" required autofocus>
				</div>
				<div class="form-group">
					<label for="id">Manager :</label>
					<input type="text" class="form-control" name="manager" value="<?= $row['manager']; ?>" required autofocus>
				</div>
				<button type="submit" class="btn  btn-block tombol1">Simpan</button>
				<a href="crud.php" class=" btn btn-block tombol2" Style="color: white;"> BATAL </a>
				<br><br>
				
				<div class="divider bottom"></div>
			</form>	
		</div>

	
	<!--<div class="container">
		
				
		<h1 align="center;"> Ubah Profile </h1>
		
		<form action="update.php" method="post">
		
 			<div class="form-group">
				<label for="id">ID :</label>
      			<input type="text" class="form-control" name="id" value="<?= $row['id']; ?>">
  			</div>

 			<div class="form-group">
				<label for="asal_daerah">Asal Daerah :</label>
      			<input type="text" class="form-control" name="asal_daerah" value="<?= $row['asal_daerah'] ?>">
  			</div> 

 			<div class="form-group">
				<label for="tahun_berdiri">Tahun Berdiri :</label>
      			<input type="text" class="form-control" name="tahun_berdiri" value="<?= $row['tahun_berdiri'] ?>">
  			</div>  			


 			<div class="form-group">
				<label for="manager">Manager :</label>
      			<input type="text" class="form-control" name="manager" value="<?= $row['manager'] ?>">
  			</div>

				
				<div class="form-group form-check"> </div>

  			 
				<button  class=" btn btn-primary" type="submit">Simpan</button>
				<button  class=" btn btn-danger"> <a href="crud.php" style="color: white;">Batal</a></button>
  			
		</form>-->	
		
		<?php
		}
		?>
		
		
  	</div>
	
	<!-- OPtional JavaScript -->
	<!-- jQuery first, then popper.js, then Boostrap JS-->
	<script type="bs/js/jquery.min.js"> </script>
	
   </body>
</html>