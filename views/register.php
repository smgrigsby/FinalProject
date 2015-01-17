<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>WELCOME!</title>
    </head>
    
    <body>
        <header>
            <h1>BabyGrigsby</h1>
            <a href='index.php'>Sign In</a>
        </header>
<!-- register form -->
<form method="post" action="register.php" name="registerform">
    <h3>CREATE YOUR ACCOUNT</h3>

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label><br />
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label><br />
    <input id="login_input_email" class="login_input" type="email" name="user_email" required /><br />

    <label for="login_input_password_new">Password (min. 6 characters)</label><br />
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br />

    <label for="login_input_password_repeat">Repeat password</label><br />
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br />
    <input type="submit"  name="register" value="Sign Up" />

</form>

<section>
            <h2>Protecting Privacy, Sharing Stories. <br>
                Join Today for Free! </h2>
            <p> Being a parent is an extraordinary adventure. From their first tooth to their first prom, every day of your child's life is full of moments worth sharing. We give you the power to choose who you share those moments with. </p>
            <a href='#'> LEARN MORE </a>
        </section>

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
        <!--<script type="text/javascript" src="js/main.js"></script>-->

        <link href="css/main.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    </body>
    </html>
