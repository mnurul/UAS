<?php
	session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bs/css/bootstrap.min.css">
		<title>Soccer Club</title>
		<link rel="shortcut icon" href="Gambar/logo1.png"/>
		<link rel="stylesheet" href="style.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
			
		<!--Font-->
		<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat|Staatliches" rel="stylesheet">
	
	</head>
	<body >
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
			
			  <a class="navbar-brand" href="#">Soccer Club</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
				  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
				  <a class="nav-item nav-link" href="#event">Event</a>
				  
				  <a class="nav-item btn  tombol2  " href="login.php">Login</a>
				  <!--Button-->
				  
				  <a class="nav-item nav-link " href="logout.php">Logout</a>
				</div>
			   		</div>
			</div>
		</nav>
		
		<!--Jumbotron-->
		<div class="jumbotron jumbotron-fluid"  >
		  <div class="container">
		  	<div class="row" style="width:100%;">
				<div class="col-md-6">
					<img src="Gambar/logo1.png"  class="logoatas display-4" alt="Los Angeles" width="50" height="50">	
				</div>
				<div class="col-md-6">
					<h1 class="display-4 teksjumbotron">Fair Play</h1>	
				</div>
			</div>
		  </div>
		</div>


		<div class="bg" >	
			<!--Carousel-->
			<center>
				<div id="demo" class="carousel slide gambarslide " data-ride="carousel" >
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						<li data-target="#demo" data-slide-to="3"></li>
						<li data-target="#demo" data-slide-to="4"></li>
					</ul>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="Gambar/foto1.jpg" alt="Los Angeles" width="900" height="500">
						</div>
						<div class="carousel-item">
							<img src="Gambar/foto2.jpg" alt="Chicago" width="900" height="500">
						</div>
						<div class="carousel-item">
							<img src="Gambar/foto3.jpg" alt="New York" width="900" height="500">
						</div>
						<div class="carousel-item">
							<img src="Gambar/foto4.jpg" alt="New York" width="900" height="500">
						</div>
						<div class="carousel-item">
							<img src="Gambar/foto5.jpg" alt="New York" width="900" height="500">
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</center>

			<div class="row" id="event">
				<div class="col-md-6">
					<center>	
						<h1 class="teks">
							<span style="font-size:40px;margin-left:23px;">on </span>
							<span style="font-family: 'Montserrat', sans-serif;">31 december 2018</span>
							<span style="font-size:50px;margin-left:60px;">there </span>
							<span style="font-size:40px;font-family: 'Staatliches', cursive;">will be a </span>			
							<br>
							<span style="font-size:70px;font-family: 'Staatliches', cursive;">Soccer Competition</span>
						</h1>
						
					</center>
				</div>
				<div class="col-md-6">
					<!--Banner-->
					<div class="container setbanner ">
							<center>
								<br>
								<img src="Gambar/banner1.jpg" alt="Avatar" class="image" style="width:70%">
									<div class="middle">
										<?php
											//$test='username';
											//echo "test : ".isset($_SESSION['username']);
											if(isset($_SESSION['username']) == 1){
												$action="crud.php";
											}else{
												$action="login.php";
											}
										?>
										<a href="<?php echo $action?>" class="btn tombol2">Regist</a>	
									</div>
							</center>	
					</div>
				</div>
			</div>
			
			<div class="container">
				<br><br>
				<center>
					
				</center>
			</div>
		</div>

		<!--Footer-->
		<div class="end">
			<center>			
				<img src="Gambar/nike.png" class="avatar" style="width:110px;height:70px;">
				<img src="Gambar/cola.png" class="avatar" style="width: 120px;height: 150px;margin-left:-10px;">
				<img src="Gambar/redbull.png" class="avatar" style="width:140px;height:70px;">
				<br>
				<h5 style="font-family: 'Staatliches', cursive;">COPYRIGHT</h5>
				<br>
				<h5 style="margin-top:-30px;font-family: 'Staatliches', cursive;">ARIEF-MNURUL-PANDU-TEGUH
			</center>		
					
				
			
				
				
				
			
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script>
			function myFunction() {
				$('#myModal').modal('show');
				return false;
			}
		</script>
	</body>
</html>



