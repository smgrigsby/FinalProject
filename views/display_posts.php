<?php 
		$user="root"; $pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
		$stmt=$dbh->prepare("SELECT * FROM posts WHERE blog_id = :b_id");
								$stmt->bindValue(':b_id', $_SESSION['blog_id'],  PDO::PARAM_INT);
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
						



		'<tr>
							<td><img src="assets/default_profile_pic.jpg" alt="'.$row['user_name'].'" 
								width="50" height="50"/></td>
							<td>'.$row['user_name'].'</td>
							<td>N/A</td>
							<td>'.$row['address'].'</td>
							<td> <a href="delete_account.php?id='.$row['user_id'].'">Delete</a>
						</tr>'; }
							?>