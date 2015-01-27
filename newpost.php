<?php 
  		$user="root"; $pass="root";
        $dbh = new PDO("mysql:host=localhost;dbname=login;port=8887", $user, $pass);
        
     //    $post_type = $_POST['post_type'];
    	// $post_title = $_POST['post_title'];
    	// $post_body = $_POST['post_body'];

    	// $values= array(':pty' => $post_type, ':pti' => $post_title, ':pb' => $post_body);
    	// $values= array($post_type,$post_title,$post_body);

        	$stmt= $dbh->prepare("INSERT INTO posts(post_type, post_title, post_body) 
        	VALUES (:post_type,:post_title,:post_body)");
    
   //  		$stmt->bindValue(':post_type', $_POST['post_type'], PDO::PARAM_INT);
			// $stmt->bindValue(':post_title', $_POST['post_title'], PDO::PARAM_STR);
			// $stmt->bindValue(':post_body', $_POST['post_body'], PDO::PARAM_STR);
   //  		$stmt->execute();
    


    // This works...
    $stmt->execute(array(':post_type' => '1', ':post_title' => 'Something New', ':post_body' => 'Insert'));

        



	header('Location: index.php');
	die();

	?>