
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome <?php echo $_SESSION['user_name']; ?>!</title>
	</head>
	
	<body>
		<div id="homeview">
			<header>
				<ul>
					<li><a href='#defaultview'></a></li>
					<li><a href='#custpage_menu'><img src="assets/icon_cpage.png" height="50px" width="50px"/></a></li> 
					<li><a href='#archive_menu'><img src="assets/icon_arch.png" height="50px" width="50px"/></a></li> 
					<li><a href='#search_menu'><img src="assets/icon_sear.png" height="50px" width="50px"/></a></li> 
					<li><a href='#settings_menu'><img src="assets/icon_cset.png" height="50px" width="50px"/></a></li> 
				</ul>
				<h1>BabyGrigsby</h1>
			</header>

			<!-- Default Tab, Empty Placeholder -->	
			<div id="defaultview"></div>

			<!-- Pages Tab -->
			
			<div id="custpage_menu" class="menu_view">
				<ul>
		
				<?php 

					$user="root"; $pass="root";
					$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
					$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = '4' && status = '1'");
						
					$stmt->execute();
					$result=$stmt->fetchall(PDO::FETCH_ASSOC);
					foreach($result as $row){ echo 
						'<li><a href="display_pages.php?id='.$row['id'].'">'.$row['post_title'].'</a></li>'; }
				?> </ul>
			</div>
			<!-- Archives Tab -->	
			<div id="archive_menu" class="menu_view">
				<h3> Recent Posts </h3>
				<h3> Recent Comments </h3>
				<h3> Archives </h3>
			</div>
			<!-- Search Tab -->	
			<div id="search_menu" class="menu_view">
				<form action="search.php" method="POST">
					<input class= "input_search" type="text">
					<input class="submitBtn" type="submit" value="Search" />
				</form>
			</div>
			<!-- Settings Tab -->	
			<div id="settings_menu" class="menu_view">
				<h3> Basic Info </h3>
				<p> FIRST NAME: KARA LAST NAME: RICHARDSON</p>
				<p> DISPLAY AS: AUNT KARA</p>
				<p>CITY: BOTHELL STATE: WASHINGTON</p>
				<p>EMAIL: KJRICHARDSON@GMAIL.COM</p>
				<p>CHANGE PASSWORD</p>
			</div>
		
		<div class="user_greeting">
				<h3> Welcome <?php echo $_SESSION['user_name']; ?>!</h3>
				<a href='index.php?logout'>Logout</a> <!--"index.php?logout" is just my simplified form of "index.php?logout=true" -->
			</div>
		<?php include("views/display_posts.php"); ?>
			
	</div>	

		<footer>
			<p> copyright 2014 BabyGrigsby </p>
		</footer>
<!-- END HTML, BEGIN LINKS AND FORMATTING -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
    	
    	<link href="css/main.css" rel="stylesheet">
    	<?php echo '<style> #search_menu .submitBtn{ background-color: #'.$_SESSION['bgcolor'].'; }#custpage_menu a{font-weight: bold;color: #'.$_SESSION['bgcolor'].'; }</style>'?>

    	
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

		<script>
			$(function() {
				$("#homeview").tabs();
			
			});
			
		$(document).ready(function(){
  			$(".commentBtn").click(function(){
    			$(".comments").toggle();
  			});
		});
		
			
		
			
		</script>


	</body>
</html>
