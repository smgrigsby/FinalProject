<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

<?php 
  		$user="root"; $pass="root";
        $dbh = new PDO("mysql:host=localhost;dbname=login;port=8887", $user, $pass);

if($_SERVER['REQUEST_METHOD']=='POST'){
        $stmt= $dbh->prepare("INSERT INTO posts(post_type, post_title, post_body, status) 
        	VALUES (:post_type,:post_title,:post_body, :status)");
    	$stmt->execute(array(':post_type' => '4', ':post_title' => 'New Custom Page', 
    		':post_body' => 
    		'<html lang="en">
				<head>
					<title>New Custom Page</title>
				</head>
    
			<body>
			</body>
			</html>', ':status' => '2'));


	header('Location: ../index.php');
	die();
}

if($_SERVER['REQUEST_METHOD']=='GET'){
	$stmt=$dbh->prepare("DELETE FROM posts WHERE id = :id");
	$stmt->bindValue(':id', $_GET['id'],  PDO::PARAM_INT);
	$stmt->execute();

	header('Location: ../index.php');
	die();
}
	?>