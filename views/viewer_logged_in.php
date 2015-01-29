<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

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
				<div id="col_left"><h3>Archives</h3></div>

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
				
				<?php 
				echo '<div id="col_left"><h3> Basic Info </h3><form action="update_user.php" method="POST">
				<input type="hidden" name="user" value="'.$_SESSION['user_name'].'">
				Name (Display As): <input type="text" class="setting_input" name="nickname" value="'.$_SESSION['nickname'].'"><br/>
				Email Address: <input type="text" class="setting_input" name="email" value="'.$_SESSION['user_email'].'"><br/>
				City, State: <input type="text" class="setting_input" name="address" value="'.$_SESSION['address'].'">
				</div>
				<div id="col_midd">
				<h3>Profile Picture</h3>
				<img src="assets/'.$_SESSION['avatar'].'" width="160px" height="160px" />
				<input name="userfile" type="file" /><br /></div>
				<div id="col_right"><h3>Notifications</h3>
				<p>Do you want to recieve email notifications?</p>
				<input type="radio" name="notifications" value="on"> Turn On <br />
				<input type="radio" name="notifications" value="off" checked> Turn Off </div>
				</form>

				'

				?>
			</div>
		
		<div class="user_greeting">
				<h3> Welcome <?php echo $_SESSION['nickname']; ?>!</h3>
				<a href='index.php?logout'>Logout</a> <!--"index.php?logout" is just my simplified form of "index.php?logout=true" -->
			</div>
		<?php 
			$user="root"; $pass="root";
			$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);
			$stmt=$dbh->prepare("SELECT * FROM posts WHERE post_type = 1 || post_type = 2 || post_type = 3");
				$stmt->execute();
				$result=$stmt->fetchall(PDO::FETCH_ASSOC);
				foreach($result as $row){ echo 
					'<img src="assets/icon_gcir.png" class="date_dot" width="15px" height="15px" />
					 <div class="post_display" class="type'. $row['post_type'].'">
			  			'.$row['post_title'].' '.$row['post_body'].'<br />

						<div id="likebtn" onclick="hitLike()"><img src="assets/icon_glik.png" width="42px" height="42px"></div>
						<a id="commentBtn" href="javascript:toggle();"><img src="assets/icon_comm.png"  width="30px" height="30px" ></a>
					</div>
					<div id="comments" style="display: none">
						<img src="assets/'.$_SESSION['avatar'].'" width="50px" height="50px" />
						<h5>'.$_SESSION['nickname'].' </h5>
						<form method="POST" action="newcomment.php">
						<input id="comment_input" type="text">
						</form>
					</div>'; 
				}

				echo '<br /><br />';
		?>
			
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
			
		function toggle(){
			var ele = document.getElementById("comments");
			

			if(ele.style.display == "block") {
				ele.style.display = "none";
				
			}else{
				ele.style.display = "block";
				
			}
		}
			
		</script>


	</body>
</html>
