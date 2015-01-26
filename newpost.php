<!-- <div id="photopost">
					<form action="savepost.php" method="POST">
							<input class= "input_title" type="text" value="ADD A TITLE">
							<input class= "input_body" type="text" value="SAY A LITTLE SOMETHING...">
							UPLOAD A PHOTO
							<input class="submitBtn" type="submit"  name="save" value="Save" />
						</form>
				</div>
				<div id="albumpost">
					<form action="savepost.php" method="POST">
							<input class= "input_title" type="text" value="ADD A TITLE">
							<input class= "input_body" type="text" value="SAY A LITTLE SOMETHING...">
							ADD PHOTOS
							<input class="submitBtn" type="submit"  name="save" value="Save" />
						</form>
				</div>
				<div id="storypost">
					<form action="savepost.php" method="POST">
						<input class= "input_body" type="text" value="TELL A STORY...">
						<input class="submitBtn" type="submit"  name="save" value="Save" />
					</form>
				</div> -->
<?php 
	$user="root";
	$pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

				$user_name
				$post_type
				$post_title
				$post_body
				$photo_array


				$clientname=$_POST['clientname'];
				$clientphone=$_POST['clientphone'];
				$clientemail=$_POST['clientemail'];
				$clientsite=$_POST['clientsite'];
				
				$stmt=$dbh->prepare("INSERT INTO clients (clientname, clientphone, clientemail, clientsite) VALUES ('$clientname', '$clientphone', '$clientemail', '$clientsite')");
				$stmt->bindParam(':clientname', $clientname);
				$stmt->bindParam(':clientphone', $clientphone);
				$stmt->bindParam(':clientemail', $clientemail);
				$stmt->bindParam(':clientsite', $clientsite);
				$stmt->execute();