<?php
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=FinalProject;port=8889', $user, $pass);

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$memberemail = $_POST['memberemail'];
		$memberpassword = $_POST['memberpassword'];

		$query = "SELECT * FROM member WHERE memberemail='$memberemail' and password='$memberpassword'";
		$result = mysql_query($query);
		$count = mysql_num_rows($result);

		if ($count == 1){
			header('Location: ../dashboard.html');
			die();
		}else {echo "<h2>Invalid Log In.<a href='../signin.html'>RETURN</a></h2>"}

	}else { 
		header('Location: ../index.html');
		die();
}
?>