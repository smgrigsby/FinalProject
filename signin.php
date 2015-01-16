<?php 
	//connects to mysql db
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=FinalProject;port=8887', $user, $pass);

	if($_SERVER['REQUEST_METHOD']=='POST'){ 

		$username=$_POST['username'];
		$password=$_POST['password'];
				
		$stmt=$dbh->prepare("SELECT * FROM users WHERE user_n=$username AND user_p=$password");
				
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		
		$stmt->execute();

		session_start();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);
		foreach ($result as $row) {
			$_SESSION["user"] = $row['memberid'];
			$_SESSION["username"] = $row['user_n'];
		}
		
		header('Location: ../dashboard.php');
		
	}
?>