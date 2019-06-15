<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: user.php');
	}
?>
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
			<header>
				<div class="container">
						<a href="" class="logo"><img src="image/logo.png"></a>
						<nav>
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Calendar</a></li>
								<li><a href="">Places</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				
					
				</div>
			</header>
			<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

	</body>
</html>