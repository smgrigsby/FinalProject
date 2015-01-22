
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
					<form action="savepost.php" method="POST">
							<input type="text" value="ADD A TITLE">
							<input type="text" value="SAY A LITTLE SOMETHING...">
							UPLOAD A PHOTO
							<input class="submitBtn" type="submit"  name="save" value="Save" />
						</form>
				</div>
				<div id="albumpost">
					<form action="savepost.php" method="POST">
							<input type="text" value="ADD A TITLE">
							<input type="text" value="SAY A LITTLE SOMETHING...">
							ADD PHOTOS
							<input class="submitBtn" type="submit"  name="save" value="Save" />
						</form>
				</div>
				<div id="storypost">
					<form action="savepost.php" method="POST">
						<input type="text" value="TELL A STORY...">
						<input class="submitBtn" type="submit"  name="save" value="Save" />
					</form>
				</div>

				
					<ul>
						<li><a href='#photopost'><img src="assets/icon_phot.png" height="50px" width="50px"/></a></li> <!-- links to Active Accounts Tab -->
						<li><a href='#albumpost'><img src="assets/icon_albu.png" height="50px" width="50px"/></a></li> <!-- links to Send Invite Tab -->
						<li><a href='#storypost'><img src="assets/icon_post.png" height="50px" width="50px"/></a></li> <!-- links to Messages Tab -->
					</ul>
				
			</section>

			<div id='comments_feed'>
				<h3>Recent Comments</h3>
				php...
			</div>

			<div id='recentpost_feed'>
				<h3>Recent Comments</h3>
				php...
			</div>

			<div id='saveddrafts_feed'>
				<h3>Recent Comments</h3>
				php...
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
							<a href='#'> + Add Spouse </a> <!--JS: Creates Additional Input Fields -->
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
								<input type="password" class="setting_input" name="password"> <br>
							New Password <br>
								<input type="password" class="setting_input" name="newpass"> <br>
							Password Strength <!-- Strength Indicator --> <br>
							Confirm New Password <br>
								<input type="text"  class="setting_input" name="confnewpass"> <br>
							<!-- Error Message -->
						</div>
								
						<input class="submitBtn" type="submit" value="Save Changes">
					</form>
				</div>
		<!-- BEGIN Payments Tab-->
				<div id='payment'>
					<h4>This feature is in development, credit card information not required</h4>
					<form>
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
					</form>
				</div>
		<!-- BEGIN Membership Plan Tab-->
					<div id='plans'>
						<h4>This feature is in development, account upgrades currently unavailable</h4>
						<form>
							<input type='radio' name='planopt' value='basic' checked> Basic Plan <br>
							<input type='radio' name='planopt' value='silver'> Silver Plan <br>
							<input type='radio' name='planopt' value='gold'> Gold Plan <br>
							<input type="submit" class="submitBtn" value="Save Changes">
						</form>
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
							<td>Img</td>
							<td>Username</td>
							<td>Nickname</td>
							<td>City, State</td>
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
							<td><img src="assets/default_profile_pic.jpg" alt="'.$row['user_name'].'" 
								width="50" height="50"/></td>
							<td>'.$row['user_name'].'</td>
							<td>N/A</td>
							<td>'.$row['address'].'</td>
							<td> <a href="delete_account.php?id='.$row['user_id'].'">Delete</a>
						</tr>'; }
							?>
					</table>
				</div>
		<!-- BEGIN Send Invites Tab -->
				<div id='newinvite'>
					<p>Copy the following and paste into an email:</p> 
					<p>Hi, I wanted to invite you to set up an account with BabyGrigsby so I can share stories and photos
						of the kids with you. Just paste this link into your browser to sign up!</p>
					<p>
					<?php echo 'http://localhost:8889/FinalProject/create_account.php?id="'.$_SESSION['blog_id'].'"' ?></p>
			
					<h4>This feature is in development</h4>
						
						<form>
							Name <br>
								<input type="text" name="sendto"> <br>
							Email Address <br>
								<input type="text" name="sendemail"> <br>
							Personal Message <br>
								<input type="text" name="sendmessage"> <br>
								<!--Styling: Divider Bar -->
								<!--Error Message-->
							<input type="submit" value="Send Message">
						</form>

					<h4>Pending Invites</h4>
						<p>You have no pending invites at this time </p>
				</div>
		<!-- BEGIN Messages Tab -->
					<div id='messages'>
						<h4>This feature is in development</h4>
						<h4>Messages</h4>
							<p>You have messages at this time </p>
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
		</div>	
	</div>
	</div>

	<footer class="mem_dash">
		<p> copyright 2014 BabyGrigsby </p>
	</footer>
<!-- END HTML, BEGIN LINKS AND FORMATTING -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
    	
    	<link href="css/main.css" rel="stylesheet">
    	<?php echo '<style> #content_container, .user_greeting { background-color: #'.$_SESSION['bgcolor'].'; }</style>'?>

		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

		<script>
			$(function() {
				$("#tab_nav").tabs();
				$("#dashboard").tabs();
				$("#settings").tabs();
				$("#invites").tabs();
				$("#pages").tabs();
			
			});
		</script>

	</body>
</html>
