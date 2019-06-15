<html>
	<head>
		<title>User Login and Registration</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="login-box">
				<div class="row">
					<div class="col-md-6 login-left">
						<h2>Login here</h2>
						<form action="validation.php" method="post">
							<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
							</div>
							<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
					</div>
					
					<div class="col-md-6 login-right">
						<h2>Register here</h2>
						<form action="registration.php" method="post">
							<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
							</div>
							<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	
	</body>
</html>
