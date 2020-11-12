


<!DOCTYPE html>
<html>
<head>
	<title>SMS | Management System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light mt-5 px-0">
				<div class="card">
					<div class="card-head text-uppercase text-center text-white bg-danger p-3"><h2>users Register</h2></div>
					<div class="card-body">
						<form action="includes/register.php" method="post" class="p-4">
							<div class="form-group">
								<label class="text-dark text-uppercase px-3">username</label>
								<input type="text" class="form-control" name="user" placeholder="Enter your username">
							</div>
							<div class="form-group">
								<label class="text-dark text-uppercase px-3">password</label>
								<input type="password" class="form-control" name="pass" placeholder="Enter your password">
							</div>
							<div class="form-group">
								<label class="text-dark text-uppercase px-3">confirm password</label>
								<input type="password" class="form-control" name="cpass" placeholder="confirm your password">
							</div>
							<div class="form-group">
								<label class="text-dark text-uppercase px-3">enter key</label>
								<input class="form-control" type="text" name="key" placeholder="enter specified key">
								
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success btn-block">
							</div>
							<div class="form-group">
								 	
							</div>
							<a href="login.php" class="btn btn-primary float-right">Login</a>
						</form>
						<h1 class="text-danger"> <?php 
							session_start();
							if (isset($_SESSION['error'])) {
								$error = $_SESSION['error'];
								echo $error;
							}
						 ?> </h1>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>