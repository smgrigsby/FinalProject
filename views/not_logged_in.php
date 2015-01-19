<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Log In</title>
    </head>
    
    <body>
        <header>
             <a href='register.php'>Not a Member? Sign Up!</a><br />
            <h1>BabyGrigsby</h1>
           
        </header>
<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />

</form>
<footer>
            <ul>
                <li><a href='#'>About Us</a></li>
                <li><a href='#'>Jobs</a></li>
                <li><a href='#'>Advertising</a></li>
                <li><a href='#'>Contact Us</a></li>
                <li><a href='#'>Privacy & Terms</a></li>
            </ul>

            <p> copyright 2014 BabyGrigsby </p>
        </footer>

        <!-- END HTML, BEGIN LINKS AND FORMATTING -->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        

        <link href="css/main.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        
    </body>
    </html>