<?php 
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=FinalProject;port=8887', $user, $pass);

	if($_SERVER['REQUEST_METHOD']=='POST'){ 

		$username=$_POST['user-name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirm=$_POST['pass-confirm'];

		// $site = new Site($dbh);
		// $exists = $site->checkName($username); //checks for existing username
		// 	if($exists===true){
		// 	errormsg("Username already exists.");
		// 	}
		// $exists = $site->checkEmail($email); //checks for existing email
		// 	if($exists===true){
		// 	errormsg("Email address already in use.");
		// 	}
		// if($password!==$confirm){ //checks that password inputs match
		// 	errormsg("Your passwords do not match.");
		// }

		// $hashed = $site->hasher($username, $password); //encyrpts password before storing
		// $pass=$hashed["hash"];
		// $salt=$hashed["pass"];
				
				
		$stmt=$dbh->prepare("INSERT INTO users (user_n, user_p, email) VALUES ('$username', '$password', '$email')");
				
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		//$stmt->bindParam(':salt', $salt);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Log In</title>
	</head>
	
	<body>
		<header>
			<h1>BabyGrigsby</h1>
			<a href='index.html'>Not a Member? Sign Up!</a>
		</header>

		<form action="xhr/signin.php" method="POST">
			<h3>LOG INTO YOUR ACCOUNT</h3>
			Username:<input name= "username" type="text" id="user" required><br />
			Password:<input name= "password" type="password" id="pass" required><br />

			<!--<input type="checkbox" name="remember">Remember Me <br><br>-->
			<input type="submit" id="signinButton" value="Sign In"/>
		</form>

		<footer>
			<ul>
				<li><a href='#'>About Us</a></li>
				<li><a href='#'>Jobs</a></li>
				<li><a href='#'>Advertising</a></li>
				<li><a href='#'>Contact Us</a></li>
				<li><a href='#'>Privacy & Terms</a></li>
			</ul>

			<p> copyright 2014 BabyGrigsby </p>
		</footer>

		<!-- END HTML, BEGIN LINKS AND FORMATTING -->
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
    	

    	<link href="css/main.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		
	</body>
	</html>