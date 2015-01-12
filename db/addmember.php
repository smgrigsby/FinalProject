<?php
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=FinalProject;port=8889', $user, $pass);

	if (filter_var(($_POST['memberemail']), FILTER_VALIDATE_EMAIL)){ //checks that email is valid
		if (($_POST['memberpassword']) == ($_POST['repeat_password'])){ //checks that password inputs match

		//takes input from form and assigns to variables
		$membername = $_POST['membername']; 
		$memberemail = $_POST['memberemail'];
		$memberpassword = $_POST['memberpassword'];

		$stmt = $dbh->prepare("INSERT INTO member (membername, memberemail, memberpassword) 
			VALUES ('$membername', '$memberemail', 'memberpassword')"); //inserts input into member database
		$stmt->bindParam(':membername', $membername);
		$stmt->bindParam(':memberemail', $memberemail);
		$stmt->bindParam(':memberpassword', $memberpassword);
		$stmt->execute();
		header('Location: ../signin.html'); //redirects to sign in page
		die();
		}else {echo "<h2>Sorry your passwords do not match.<a href='../index.html'>RETURN</a></h2>";} //passwords don't match
	}else{
		echo "<h2>Sorry this is not a valid email address.<a href='../index.html'>RETURN</a></h2>";} //email NOT valid
?>