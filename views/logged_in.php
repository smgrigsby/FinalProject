<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php $_SESSION['user_email']; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>
	</head>
	
	<body>
		<header>
			<h1>BabyGrigsby</h1>
		</header>

		<div id="tabs">
		<ul>
			<li><a href='#dashboard'>Dashboard</a></li> <!-- links to Dashboard Panel -->
			<li><a href='#settings'>Settings</a></li> <!-- links to Settings Panel -->
			<li><a href='#invites'>Invites</a></li> <!-- links to Invites Panel -->
			<li><a href='#pages'>Custom Pages</a></li> <!-- links to Custom Pages Panel -->
		</ul>

			<!-- BEGIN Dashboard Panel -->
<p>------------------------------------------------------------------- DASHBOARD PANEL</p>
<!--Temporary divider being used during development, not part of end design-->
			<div id='dashboard'>
				<section class='dash_panel'>
						<!-- USERNAME placeholder text -->
					<h3> Welcome <?php echo $_SESSION['user_name']; ?>!</h3>
					<a href='index.php?logout'>Logout</a> <!--"index.php?logout" is just my simplified form of "index.php?logout=true" -->
						<!-- Content, TBA during Beta -->
				</section>
			</div>
			<!-- END Dashboard Panel -->

			<!-- BEGIN Settings Panel -->
<p>------------------------------------------------------------------- SETTINGS PANEL</p>
<!--Temporary divider being used during development, not part of end design-->
			<div id='settings'>
				<section class='dash_panel'>
					<h3> Welcome <?php echo $_SESSION['user_name']; ?> </h3>
					<a href='index.php?logout'>Logout</a>

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
	<p>------------------------------------------------------------------- ACCOUNT INFORMATION</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='account'>
						<form <?php echo 'action="update_member.php?id='. $_SESSION['user_id'].'" method="GET"' ?> >
							<div class='content_box'>
								First Name: <input type="text" name="fname" <?php echo 'value="'.$_SESSION['f_name'] .'">' ?> <br />
								Last Name: <input type="text" name="lname" <?php echo 'value="'.$_SESSION['l_name'] .'">' ?> <br />
								Email Address: <input type="text" name="email" <?php echo 'value="'.$_SESSION['user_email'] .'">' ?><br />
								<a href='#'> + Add Spouse </a> <!--JS: Creates Additional Input Fields -->
							</div>
								<!--Styling: Divider Bar -->
							<div class='content_box'>
								Change Background: <br>
									<input type='radio' name='color' value='4BC0B3' checked> Teal <br>
									<input type='radio' name='color' value='F1676C'> Coral <br>
									<input type='radio' name='color' value='A8D058'> Green <br>
									<input type='radio' name='color' value='7D73B5'> Purple <br>
									<input type='radio' name='color' value='5EC6F1'> Blue <br>
							</div>
							<input type="submit" value="Save Changes">
						</form>
					</div>
					<!-- END Accounts Tab -->

					<!-- BEGIN Passwords Tab -->
	<p>------------------------------------------------------------------- CHANGE PASSWORD</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='password'>
						<form>
							<div class='content_box'>
								Current Password <br>
									<input type="password" name="password"> <br>
								New Password <br>
									<input type="password" name="newpass"> <br>
								Password Strength <!-- Strength Indicator --> <br>
								Confirm New Password <br>
									<input type="text" name="confnewpass"> <br>
									<!-- Error Message -->
							</div>
								<!--Styling: Divider Bar -->
							<input type="submit" value="Save Changes">
						</form>
					</div>
					<!-- END Passwords Tab -->

					<!-- BEGIN Payments Tab -->
	<p>------------------------------------------------------------------- PAYMENT OPTIONS</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='payment'>
						<form>
							<div class='content_box'>
								Name (As shown on card) <br>
									<input type="text" name="nameoncard"> <br>
								Security Code <br>
									<input type="text" name="security"> <br>
								Credit Card Number <br>
									<input type="text" name="cardnum"> <br>
								Expiration Date (MM/YY) <br>
									<input type="text" name="exp"> <br>
							</div>
								<!--Styling: Divider Bar -->
							<div class='content_box'>
								Billing Address <br>
									<input type="text" name="billaddress"> <br>
								Apt # <br>
									<input type="text" name="billapt"> <br>
								City <br>
									<input type="text" name="billcity"> <br>
								State <br>
									<input type="text" name="billstate"> <br>
								Zip Code <br>
									<input type="text" name="billzip"> <br>
							</div>
							<input type="submit" value="Save Changes">
						</form>
					</div>
					<!-- END Payments Tab -->

					<!-- BEGIN Membership Plan Tab -->
	<p>------------------------------------------------------------------- MEMBERSHIP PLANS</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='plans'>
						<form>
							<input type='radio' name='planopt' value='basic' checked> Basic Plan <br>
							<input type='radio' name='planopt' value='silver'> Silver Plan <br>
							<input type='radio' name='planopt' value='gold'> Gold Plan <br>
							<input type="submit" value="Save Changes">
						</form>
					</div>
					<!-- END Membership Plan Tab -->

				</section>
			</div>
			<!-- END Settings Panel -->

			<!-- BEGIN Invites Panel -->
<p>------------------------------------------------------------------- INVITES PANEL</p>
<!--Temporary divider being used during development, not part of end design-->
			<div id='invites'>
				<section class='dash_panel'>
					<h3> Welcome <?php echo $_SESSION['user_name']; ?> </h3>
					<a href='index.php?logout'>Logout</a>

				<h2>Manage Invites</h2>
				<div class='sec_nav'>
					<ul>
						<li><a href='#active'>Active Account</a></li> <!-- links to Active Accounts Tab -->
						<li><a href='#newinvite'>Send New Invite</a></li> <!-- links to Send Invite Tab -->
						<li><a href='#messages'>Messages</a></li> <!-- links to Messages Tab -->
					</ul>
				</div>

					<!-- BEGIN Active Accounts Tab -->
	<p>------------------------------------------------------------------- ACTIVE ACCOUNTS</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='active'>
						<table>
							<tr>
								<td>Img</td>
								<td>Display Name</td>
								<td>City, State</td>
								<td>User Since</td>
							</tr>
							<tr>
								<td>Img</td>
								<td>[User]</td>
								<td>[Address]</td>
								<td>[Date]</td>
							</tr>
							<tr>
								<td></td>
								<td>+ Invite New User</td>
						</table>
					</div>
					<!-- END Active Accounts Tab -->

					<!-- BEGIN Send Invites Tab -->
	<p>------------------------------------------------------------------- SEND INVITES</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='newinvite'>
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
					<!-- END Send Invites Tab -->

					<!-- BEGIN Messages Tab -->
	<p>------------------------------------------------------------------- MESSAGES</p>
	<!--Temporary divider being used during development, not part of end design-->
					<div id='messages'>
						<h4>Messages</h4>
							<p>You have messages at this time </p>
					</div>
					<!-- END Messages Tab -->

				</section>
			</div>
			<!-- END Invites Panel -->

			<!-- BEGIN Custom Pages Panel -->
<p>------------------------------------------------------------------- PAGES PANEL</p>
<!--Temporary divider being used during development, not part of end design-->
			<div id='pages'>
				<section class='dash_panel'>
					<h3> Welcome <?php echo $_SESSION['user_name']; ?> </h3>
					<a href='index.php?logout'>Logout</a>
						<!-- Content, TBA during Beta -->
				</section>
			</div>
			<!-- END Custom Pages Panel -->
		</div>

		<!-- END HTML, BEGIN LINKS AND FORMATTING -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>

    	<link href="css/main.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	</body>
	</html>
