<!doctype html>
<html lang="en">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bs/css/bootstrap.min.css">
		<title>Login | Soccer Club</title>
		<link rel="shortcut icon" href="Gambar/logo1.png"/>
		<link rel="stylesheet" href="stylelogin.css">
		
		<!--Font-->
		<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	
	</head>
	<body>
		<div align="center" style="margin-top: 50px !important;">
			<img src="Gambar/logo1.png" class="avatar" style="width:150px;height:150px;">
		</div>
		<div class="login-form">
			<form action="prologlig.php" method="post">
				<h1 class="text-center " style="font-family: Unica One;">Login</h1>
				<h6 class="text-center ">Welcome Back</h6>
				<div class="divider top"></div>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="username" required="required" name="username" required autofocus >
				</div>
				
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" required="required" name="password">
				</div>
				
				<button type="submit" class="btn  btn-block tombol1"> Login</button>
				<br><br>
				<h6 class="text-center">Don't have an account?<a href="join.php">Join</a></h6>
				<div class="divider bottom"></div>
			</form>	
		</div>
	
	



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bs/js/bootstrap.bundle.min.js"></script>
	</body>
</html>