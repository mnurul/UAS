<!doctype html>
<html lang="en">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bs/css/bootstrap.min.css">
		<title>Join | Soccer Club</title>
		<link rel="shortcut icon" href="gambar/logo1.png"/>
		<link rel="stylesheet" href="stylejoin.css">
		
		<!--Font-->
		<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	
	</head>
	<body>
		<div align="center" style="margin-top: 10px !important;">
			<img src="Gambar/logo1.png" class="avatar" style="width:150px;height:150px;">
		</div>
		
		<div class="login-form">
			<form action="prosesjoin.php" method="post">
				<h1 class="text-center " style="font-family: Unica One;">Join</h1>
				<h6 class="text-center">Already have an account?<a href="login.php">Login</a></h6>
				
				<div class="divider top"></div>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" required="required" name="username" required autofocus>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="level" required="required" name="level" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" required="required" name="password">
				</div>
				<button type="submit" class="btn btn-primary btn-block tombol"> Create</button>
				<!--<div class="divider"></div>-->
			</form>
		</div>
	
	
	
	
	
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bs/js/bootstrap.bundle.min.js"></script>
	</body>
</html>