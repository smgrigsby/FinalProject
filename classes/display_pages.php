<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

<?php 
	$user="root"; $pass="root";
	$dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

	$stmt=$dbh->prepare("SELECT * FROM posts WHERE id = :id");
	$stmt->bindValue(':id', $_GET['id'],  PDO::PARAM_INT);

	$stmt->execute();
	$result=$stmt->fetchall(PDO::FETCH_ASSOC);
	foreach($result as $row){echo
		'<html lang="en">
			<head>
				<title>'.$row['post_title'].'</title>
			</head>
    
			<body>
			 <header>
            	<div class="linkto"><a href="index.php">GO BACK</a></div>
            	<h1>BabyGrigsby</h1> 
        	</header>

			<div id="page_container">

			<h2>'.$row['post_title'].'</h2>

			'.$row['post_body'].'

			</div>
			<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet" type="text/css">
        	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">

        	<link href="../css/main.css" rel="stylesheet">
			<style> 
			

			#page_container{
				background-color:#fff;
				margin: 0 auto;
				width: 80%;
				padding: 20px;
				border: 1px solid #E6E6E6;
				border-radius: 5px;
				margin-top:50px;
			}

			h2{
				text-align:center;
			}

			table, td, th {
				margin: 0 auto;
    			padding: 5px;
    			text-align: left;	
			}
			
			</style>
			</body>
			</html>'
		; }
?>



