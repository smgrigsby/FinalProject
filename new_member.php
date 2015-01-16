<?php 
	//connects to mysql db
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
		header('Location: ../signin.html');
		die();
	}
?>