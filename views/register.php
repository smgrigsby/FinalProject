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
        <title>Sign Up for a free BabyGrigsby Account!</title>
    </head>
    
    <body>
        <header id="register">
            <a href='index.php'>Sign In</a>
            <h1>BabyGrigsby</h1>     
        </header>

<!-- register form -->
<div id='signup'>
<form method="post" action="register.php" name="registerform">
    <h3>CREATE YOUR ACCOUNT</h3>

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username </label><br />
    <input id="login_input_username" title="(only letters and numbers, 2 to 64 characters)" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label><br />
    <input id="login_input_email" class="login_input" type="email" name="user_email" required /><br />

    <div class="form_row">
        <label for="login_input_password_new">Password </label>
        <input id="login_input_password_new" title="(min. 6 characters)" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
    </div><div class="form_row">
        <label for="login_input_password_repeat">Verify password</label>
        <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </div>
    <input class="submitBtn" type="submit"  name="register" value="Sign Up" />

</form>
</div>
<section id="cta">
            <h2>Protecting Privacy, Sharing Stories. <br>
                Join Today for Free! </h2>
            <p> Being a parent is an extraordinary adventure. From their first tooth to their first prom, every day of your child's life is full of moments worth sharing. We give you the power to choose who you share those moments with. </p>
            <a href='#'> LEARN MORE > </a>
        </section>

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
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>

        <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet"> 

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <script>
            $(function() {
                $(document).tooltip();
        });
    </script>
    </body>
    </html>
