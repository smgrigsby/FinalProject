<?php 
		$user="root"; $pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
		$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = 1");
								// $stmt->bindValue(':b_id', $_SESSION['blog_id'],  PDO::PARAM_INT);
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
	
		'<h4>'.$row['post_title'].'</h4>
		<p>'.$row['post_body'].'</p>'; }
							?>