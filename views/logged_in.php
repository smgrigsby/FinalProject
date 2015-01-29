<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

      <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>
	</head>
	
	<body>
		<header class="mem_dash">
			<h1>BabyGrigsby</h1>
		</header>

	<div id="tab_nav">
		<div id="sidebar">
			<ul>
				<li><img src="assets/icon_dash.png" height="75px" width="75x"/><br />
					<a href='#dashboard'>Dashboard</a></li> <!-- links to Dashboard Panel -->
				<li><img src="assets/icon_sett.png" height="75px" width="75x"/><br />
					<a href='#settings'>Settings</a></li> <!-- links to Settings Panel -->
				<li><img src="assets/icon_invi.png" height="75px" width="75x"/><br />
					<a href='#invites'>Invites</a></li> <!-- links to Invites Panel -->
				<li id="last"><img src="assets/icon_page.png" height="75px" width="75x"/><br />
					<a href='#pages'>Custom<br /> Pages</a></li> <!-- links to Custom Pages Panel -->
			</ul>
		</div>
	<div class="user_greeting">
		<h3> Welcome <?php echo $_SESSION['user_name']; ?>!</h3>
		<a href='index.php?logout'>Logout</a> <!--"index.php?logout" is just my simplified form of "index.php?logout=true" -->
	</div>				

	<div id="content_container">
<!-- BEGIN Dashboard Panel -->
<div id='dashboard'>
				
			<section id='post_container'>
				<div id="photopost">
		

        <!-- <textarea  rows="5" cols="65"></textarea>
        <button id="saveInput">SAVE</button>  -->
						<form action="newpost.php" method="POST">
							<input id="post_type" type="hidden" value="1">
							Photo Title: <br/>
							<input id="post_title" class= "input_title" type="text">
							Description: <br/>
							<input id="post_body" class= "input_body" type="text">
							<input name="userfile" type="file" /><br />
							
							<input class="submitBtn" type="submit"  name="save" value="SAVE" />
						</form>
				</div>
				<div id="albumpost">
					<h4>Feature in development</h4>
				</div>
				<div id="storypost">
					<form action="newpost.php" method="POST">
						Tell a Story: <br/>
						<input class= "input_body" type="text" >
						<input class="submitBtn" type="submit"  name="save" value="Save" />
					</form>
				</div>

				
					<ul>
						<li><a href='#photopost'><img src="assets/icon_phot.png" height="50px" width="50px"/></a></li> <!-- links to Active Accounts Tab -->
						<li><a href='#albumpost'><img src="assets/icon_albu.png" height="50px" width="50px"/></a></li> <!-- links to Send Invite Tab -->
						<li><a href='#storypost'><img src="assets/icon_post.png" height="50px" width="50px"/></a></li> <!-- links to Messages Tab -->
					</ul>
				
			</section>

			<div class="feed" id='comments_feed'>
				<h3>Recent Comments</h3>

				<?php 
					$user="root"; $pass="root";
					$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
					$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = '5'");
						
					$stmt->execute();
					$result=$stmt->fetchall(PDO::FETCH_ASSOC);
					foreach($result as $row){ echo'
						<div class="recent_comment">
						<img src="assets/default_profile_pic.jpg" width="40px" height="40px">
						<h5>'.$row['viewer_name'].'</h5>
						<p>'.$row['comment'].'</p>
						<a href="#"> >> </a>
						</div>
					'; }
				?>
				
			</div>

			<div class="feed" id='recentpost_feed'>
				<h3>Recent Posts</h3>

				<?php 
					$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = 1 || post_type = 2 || post_type = 3");
						
					$stmt->execute();
					$result=$stmt->fetchall(PDO::FETCH_ASSOC);
					foreach($result as $row){ 
						if($row['post_type'] == 1){
							echo '<p>Story >>"S: Its like I can read yo...';
						}else if($row['post_type'] == 2){
							echo '<p>Gallery >> At the Seattle Aquari...';
						}else{
							echo '<p>Photo >> Computer Saavy Kai...';
						}
						
					; }
				?>
	
			</div>

			<div class="feed" id='saveddrafts_feed'>
				<h3>Saved Drafts</h3>
				<p>Empty</p>
			</div>
		</div>	

<!-- BEGIN Settings Panel -->
		<div id='settings'>
			
				<h2>Settings</h2>
				<div class='sec_nav'>
					<ul>
						<li><a href='#account'>Account Information</a></li> <!-- links to Accounts Tab -->
						<li><a href='#password'>Change Password</a></li> <!-- links to Passwords Tab -->
						<li><a href='#payment'>Payment Options</a></li> <!-- links to Payments Tab -->
						<li><a href='#plans'>Membership Plans</a></li> <!-- links to Membership Plan Tab -->
					</ul>
				</div>
		<!-- BEGIN Accounts Tab -->
				<div id='account'>
					<form action='update_user.php' method='POST'>
						<div class='content_box'>
							First Name: <input type="text" class="setting_input" name="fname" <?php echo 'value="'.$_SESSION['f_name'] .'">' ?><br />
							Last Name: <input type="text" class="setting_input" name="lname" <?php echo 'value="'.$_SESSION['l_name'] .'">' ?><br />
							Email Address: <input type="text" class="setting_input" name="email" <?php echo 'value="'.$_SESSION['user_email'] .'">' ?><br />
							<a id="addspouse" href="javascript:toggle();"> + Add Spouse </a>

							<div id="toggleinputs" style="display: none">
								Spouse's First Name: <input type="text" class="setting_input" name="sfname"><br>
								Spouse's Last Name: <input type="text" class="setting_input" name="slname"><br>
							</div> <!--JS: Creates Additional Input Fields -->
						</div>

						<div class='content_box'>
							
							<ul>
								<li>Change Background: </li>
								<li><input type='radio' name='color' value='4BC0B3'> Teal </li>
								<li><input type='radio' name='color' value='F1676C'> Coral </li>
								<li><input type='radio' name='color' value='A8D058'> Green </li>
								<li><input type='radio' name='color' value='7D73B5'> Purple </li>
								<li><input type='radio' name='color' value='5EC6F1'> Blue </li>
							</ul>
						</div>

						<?php echo'<input type="hidden" name="user" value="'. $_SESSION['user_name'] .'">'?> 
						<input class="submitBtn" type="submit" value="Save Changes">
					</form>
					</div>
		<!-- BEGIN Passwords Tab -->
				<div id='password'>
					<form>
						<div class='content_box'>
							Current Password <br>
								<input type="password" class="setting_input" name="password"> <br><br>
							New Password <br>
								<input type="password" class="setting_input" name="newpass"> <br>
							
							Confirm New Password <br>
								<input type="password"  class="setting_input" name="confnewpass"> <br>
							<!-- Error Message -->
						</div>
								
						<input class="submitBtn" type="submit" value="Save Changes">
					
					</form>
				</div>
		<!-- BEGIN Payments Tab-->
				<div id='payment'>
					<h4>This feature is in development, credit card information not required</h4>
					<!-- <form>
						<div class='content_box'>
							Name (As shown on card) <br>							
								<input type="text"class="setting_input"  name="nameoncard" disabled> <br>
							Security Code <br>
								<input type="text" class="setting_input" name="security" disabled> <br>
							Credit Card Number <br>
								<input type="text" class="setting_input" name="cardnum" disabled> <br>
							Expiration Date (MM/YY) <br>
								<input type="text" class="setting_input" name="exp" disabled> <br>
						</div>
								
						<div class='content_box'>
							Billing Address <br>
								<input type="text" class="setting_input" name="billaddress" disabled> <br>
							Apt # <br>
								<input type="text" class="setting_input" name="billapt" disabled> <br>
							City <br>
								<input type="text" class="setting_input" name="billcity" disabled> <br>
							State <br>
								<input type="text" class="setting_input" name="billstate" disabled> <br>
							Zip Code <br>
								<input type="text" class="setting_input" name="billzip" disabled> <br>
						</div>
						
						<input class="submitBtn" type="submit" value="Save Changes">
					</form> -->
				</div>
		<!-- BEGIN Membership Plan Tab-->
					<div id='plans'>
						<h4>This feature is in development, account upgrades currently unavailable</h4>
						<!-- <form>
							<input type='radio' name='planopt' value='basic' checked> Basic Plan <br>
							<input type='radio' name='planopt' value='silver'> Silver Plan <br>
							<input type='radio' name='planopt' value='gold'> Gold Plan <br>
							<input type="submit" class="submitBtn" value="Save Changes">
						</form> -->
					</div>
			
		</div>

<!-- BEGIN Invites Panel -->
		<div id='invites'>
			

				<h2>Manage Invites</h2>
				<div class='sec_nav'>
					<ul>
						<li><a href='#active'>Active Account</a></li> <!-- links to Active Accounts Tab -->
						<li><a href='#newinvite'>Send New Invite</a></li> <!-- links to Send Invite Tab -->
						<li><a href='#messages'>Messages</a></li> <!-- links to Messages Tab -->
					</ul>
				</div>
		<!-- BEGIN Active Accounts Tab -->
				<div id='active'>
					<table>
						<tr>
							<th>Img</th>
							<th>Username</th>
							<th>Nickname</th>
							<th>City, State</th>
							<th>Remove User</th>
						</tr>
							<?php 
								$user="root"; $pass="root";
								$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
								$stmt=$dbh->prepare("SELECT * FROM users WHERE user_type = '2' && blog_id = :b_id");
								$stmt->bindValue(':b_id', $_SESSION['blog_id'],  PDO::PARAM_INT);
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
						'<tr>
							<td><img src="assets/'.$row['avatar'].'" alt="'.$row['user_name'].'" 
								width="50" height="50"/></td>
							<td>'.$row['user_name'].'</td>
							<td>'.$row['nick_name'].'</td>
							<td>'.$row['address'].'</td>
							<td> <a href="remove_viewer.php?id='.$row['user_id'].'">Remove '.$row['user_name'].'?</a>
						</tr>'; }
							?>
					</table>
				</div>
		<!-- BEGIN Send Invites Tab -->
				<div id='newinvite'>
					<div class="content_box">
						
						<h4>Copy the following and paste into an email:</h4> 
						
						<p>Hi, I wanted to invite you to set up an account with BabyGrigsby so I can share stories and photos
							of the kids with you. Just paste this link into your browser to sign up!</p>
						<p>
						<?php echo 'http://localhost:8889/FinalProject/viewer_register.php?id="'.$_SESSION['blog_id'].'"' ?></p>
						<?php echo '<p>Thank you, '. $_SESSION['f_name'].' '.$_SESSION['l_name']; ?>
					<!-- <h4>This feature is in development</h4>
						
						<form>
							Name <br>
								<input type="text" class="invite_input" name="sendto"> <br>
							Email Address <br>
								<input type="text" class="invite_input" name="sendemail"> <br>
							Personal Message <br>
								<input type="text" class="invite_input" name="sendmessage"> <br> -->
								
							<!-- <input class="submitBtn" type="submit" value="Send Message">
						</form>  -->
					</div>
					<!-- <h4>Pending Invites</h4>
						<p>You have no pending invites at this time </p> -->
				</div>
		<!-- BEGIN Messages Tab -->
					<div id='messages'>
						
						<h4>Messages</h4>
							<p>You have no messages at this time </p>
					</div>
			
		</div>

<!-- BEGIN Custom Pages Panel -->
		<div id='pages'>
			<!-- Content, TBA during Beta -->
				<h4>This feature is in development</h4>
				<div class='sec_nav'>
					<ul>
						<li><a href='#activepage'>Active Pages</a></li> <!-- links to Active Accounts Tab -->
						<li><a href='#inactivepage'>Inactive Pages</a></li> <!-- links to Send Invite Tab -->
						<li><a href='#createpage'>Create a New Page</a></li> <!-- links to Messages Tab -->
					</ul>
				</div>
					<div id='activepage'>
					<table>
						<tr>
							<td><h4>Page Name</h4></td>
							<td> </td>
							<td> </td>
							
						</tr>
							<?php 
								$user="root"; $pass="root";
								$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
								$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = '4' && status = '1'");
				
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
						'<tr>
							<td>'.$row['post_title'].'</td>
							<td> <a href="delete_account.php?id='.$row['user_id'].'">Edit</a>
							<td> <a href="add_deletePage.php?id='.$row['id'].'">Delete</a>
						</tr>'; }
							?>
					</table>
				</div>
					<div id='inactivepage'>
					<table>
						<tr>
							<td><h4>Page Name</h4></td>
							<td> </td>
							<td> </td>
							
						</tr>
							<?php 
								$user="root"; $pass="root";
								$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
								$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = '4' && status = '2'");
						
								$stmt->execute();
								$result=$stmt->fetchall(PDO::FETCH_ASSOC);
								foreach($result as $row){ echo 
						'<tr>
							<td>'.$row['post_title'].'</td>
							<td> <a href="delete_account.php?id='.$row['id'].'">Edit</a>
							<td> <a href="add_deletePage.php?id='.$row['id'].'">Delete</a>
						</tr>'; }
							?>
					</table>
				</div>

				<div id='createpage'>
					<form action="add_deletePage.php" method="POST">
						<input class="submitBtn" type="submit" value="CREATE NEW PAGE" />
					</form>
						 <!-- <div id="toolbar">
  							<button class="ql-bold">Bold</button>
  							<button class="ql-italic">Italic</button>
						</div>

						<div id="editor">
  							<div>Hello World!</div>
  							<div>Some initial <b>bold</b> text</div>
  							<textarea  rows="5" cols="20"></textarea>
 						 <div></div>
						</div>
							<form>
							<p>Date: <input type="text" id="datepicker"></p>
							<input class= "input_title" type="text" value="ADD A TITLE">
							<input class= "input_body" type="text" value="SAY A LITTLE SOMETHING...">
						
							<input class="submitBtn" type="submit"  name="save" value="Save" />
						</form> -->
				</div>
		</div>	
	</div>
	</div>

	<footer class="mem_dash">
		<p> copyright 2014 BabyGrigsby </p>
	</footer>
<!-- END HTML, BEGIN LINKS AND FORMATTING -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
    	
    	<script src="//cdn.quilljs.com/0.19.8/quill.js"></script>
    	
    	<link href="css/main.css" rel="stylesheet">
    	<?php echo '<style> #content_container, .user_greeting { background-color: #'.$_SESSION['bgcolor'].'; }
    	.feed h3{ color: #'.$_SESSION['bgcolor'].'; }#dashboard .submitBtn{ background-color: #'.$_SESSION['bgcolor'].'; }</style>'?>
    	

		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

		<script>
			$(function() {
				$("#tab_nav").tabs();
				$("#dashboard").tabs();
				$("#settings").tabs();
				$("#invites").tabs();
				$("#pages").tabs();
				$( "#datepicker" ).datepicker();
			});

			var quill = new Quill('#editor');
  				quill.addModule('toolbar', { container: '#toolbar' });

  			function toggle(){
			var ele = document.getElementById("toggleinputs");
			var text = document.getElementById("addspouse")

			if(ele.style.display == "block") {
				ele.style.display = "none";
				text.innerHTML="+ Add Spouse";
				
			}else{
				ele.style.display = "block";
				text.innerHTML="Remove Spouse";
			}
		}
		</script>

	</body>
</html>
