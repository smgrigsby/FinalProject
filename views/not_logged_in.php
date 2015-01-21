<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    
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
<div id='signin'>
<form method="post" action="index.php" name="loginform">
    <h3>LOG INTO YOUR ACCOUNT</h3>

    <label for="login_input_username">USERNAME</label><br />
    <input id="login_input_username" class="login_input" type="text" name="user_name" required /><br />

    <label for="login_input_password">PASSWORD</label><br />
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required /><br />

    <input type="checkbox" id="ckbx"><label>REMEMEBER ME</label><br />
    <input class="submitBtn" type="submit"  name="login" value="SIGN IN" />

    <?php 

    if (isset($login)) {
        if ($login->errors) {
            foreach ($login->errors as $error) {
            echo $error;
            }
        } 
    }

    ?>

    
</form>
</div>
<footer>
            <ul>
                <li><a href='#'>ABOUT US</a></li>
                <li><a href='#'>JOBS</a></li>
                <li><a href='#'>ADVERTISING</a></li>
                <li><a href='#'>CONTACT US</a></li>
                <li><a href='#'>PRIVACY & TERMS</a></li>
            </ul>

            <p> copyright 2014 BabyGrigsby </p>
        </footer>

        <!-- END HTML, BEGIN LINKS AND FORMATTING -->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        

        <link href="css/main.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        
    </body>
    </html>