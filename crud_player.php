<?php session_start();

include "koneksi.php";

?>
<!doctype html>
<html lang="en">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bs/css/bootstrap.min.css">
		<title>CRUD | Soccer Club</title>
		<link rel="shortcut icon" href="Gambar/logo1.png"/>
		<link rel="stylesheet" href="stylecrud_player.css">
		
		
		<!--Font-->
		<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat|Staatliches" rel="stylesheet">
	
	</head>
	<body >
		<!--onload="setTimeout(myFunction, 3000);"-->
		<div align="center" style="margin-top: 10px !important;">
			<img src="Gambar/logo1.png" class="avatar" style="width:150px;height:150px;">
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12" align="center">
					<h1 class="teksheader" style="margin-top:10px;">
						<span style="font-size:40px;margin-left:23px;">
							Hallo <?php echo $_SESSION['username'];?>
						</span>
						<br>
						<span style="font-size:35px;font-family: 'Montserrat', sans-serif;"">
							Please Insert Your Data Club 
						</span>
					</h1>
					<img src="Gambar/panah.png" style="width:50px;height:50px;">
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">		
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<!-- ml-auto buat nav-link posisi kiri -->
					<div class="navbar-nav ">
						<a class="nav-item nav-link " href="crud.php">Profile Club </a>
						<a class="nav-item nav-link active" href="#pplayer">Profile Player</a>
						<!--Button
						<a class="nav-item btn btn-primary tombol2 " href="#">Disabled</a>-->
					</div>
				</div>
			</div>
		</nav>

		<div class="container" id="pplayer">
			<div class="row">
				<div class="col-md-12" >					
					<a href="form_tambah_p.php" class=" btn btn-primary" style="text-decoration:none;background-color: #17467C !important;">
						Tambah
					</a>
					<table class="table table-hover" action="ubah.php" method="post">
						<thead>
								<th>NO</th>
								<th>ID</th>
								<th>Nama</th>
								<th>No Punggung</th>
								
								
						</thead>
						
						<?php
							$no = 1;
							$data = mysqli_query($con,"select * from pemain");
							while ($row = mysqli_fetch_array($data))
							{
						?>
								<tr>
									<td>  <?= $no++; ?> </td>
									<td>  <?= $row['id_p'];?> </td>
									<td>  <?= $row['nama'];?></td>
									<td>  <?= $row['no_punggung'];?></td>
										
									<td>
											 <a href="ubah_p.php?id=<?= $row['id_p']; ?>" class="btn btn-success btn-sn" 
												 style="text-decoration:none;background-color: #17467C !important;">Ubah
											</a>   
											 <a href="delete_p.php?id=<?= $row['id_p'];?>" class=" btn btn-danger" 
												 style="text-decoration:none;background-color: #ED3042 !important;">Hapus
											</a>
								
									</td>
								</tr>
							<?php
								}
							?>	
									
					</table>
				</div style="text-align : right">
			</div>
		</div>

		
		<!--Modal-->
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
			

			  <!-- Modal Header -->
			  <div class="modal-header">
				<h4 class="modal-title">Let's Login</h4>
			  </div>
			  
			  <!-- Modal footer -->
			  <div class="modal-footer">
				<a href="login.php" class="btn btn-primary btn-block tombol" >Login</a>
				<a href="user.php" class="btn btn-primary btn-block tombol" >Join</a>
			  </div>

			
		  </div>
		</div>  
	
	
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bs/js/bootstrap.bundle.min.js"></script>
		<script>
			function myFunction() {
				$('#myModal').modal('show');
				return false;
			}
		</script>
	</body>
</html>



