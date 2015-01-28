<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

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

<form method="post" action="viewer_register.php" name="registerform">
    <h3>Welcome! You have been invited to view your friend's page but first you'll need to create an account.</h3>

    <?php echo '<input type="hidden" name="blog_id" value="'. $_GET['id'].'" >' ?>
    <input type="hidden" name="user_type" value="2">
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username </label><br />
    <input id="login_input_username" title="(only letters and numbers, 2 to 64 characters)" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label><br />
    <input id="login_input_email" class="login_input" type="email" name="user_email" required /><br />

    <label for="login_input_password_new">Password </label><br />
    <input id="login_input_password_new" title="(min. 6 characters)" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br />

    <label for="login_input_password_repeat">Repeat password</label><br />
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br />
    <input type="submit"  name="register" value="Sign Up" />

</form>

    
        <footer>
            <p> copyright 2014 BabyGrigsby </p>
        </footer>

        <!-- END HTML, BEGIN LINKS AND FORMATTING -->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>

        <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <script>
            $(function() {
                $(document).tooltip();
        });
    </script>
    </body>
    </html>
