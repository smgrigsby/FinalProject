<!-- Project: Baby Grigsby
Author: Sarah Meister Grigsby 
Date: January 2015 -->

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user="root"; $pass="root";
        $dbh = new PDO('mysql:host=localhost;dbname=login;port=8887', $user, $pass);

        $post_type=$_POST['post_type'];
        $post_title=$_POST['post_title'];
        $post_body=$_POST['post_body'];

        $stmt = $dbh->prepare("INSERT INTO posts (post_type, post_title, post_body) VALUES (:post_type, :post_type, :post_body)");
        $stmt->bindParam(':post_type', $post_type);
        $stmt->bindParam(':post_type', $post_title);
        $stmt->bindParam(':post_body', $post_body);
        $stmt->execute();
    };                      

/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("config/setvar.php");
    if ($_SESSION['user_type'] == 2){
        include("views/viewer_logged_in.php"); 
    }else {
        include("views/logged_in.php");   
    }

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}
