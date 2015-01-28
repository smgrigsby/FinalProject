<?php 
		$user="root"; $pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
		$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = 1 || post_type = 2 || post_type = 3");
								// $stmt->bindValue(':b_id', $_SESSION['blog_id'],  PDO::PARAM_INT);
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
	'<img src="assets/icon_gcir.png" class="date_dot" width="15px" height="15px" />
	<div class="post_display" class="type'. $row['post_type'].'">
		'.$row['post_title'].' '
		.$row['post_body'].'<br />

		<div id="likebtn" onclick="hitLike()"><img src="assets/icon_glik.png" width="42px" height="42px"></div>
		<img src="assets/icon_comm.png" class="commentBtn" width="30px" height="30px" >
		
		</div>

		<div class="comments">
			<form method="POST" action="newcomment.php">
				<input id="comment_input" type="text">
			</form>
		</div>

		
		'; 
		}

		echo '<br /><br />';
?>
