<?php

// include the configs / constants for the database connection
require_once("./config/db.php");

// load the login class
require_once("./classes/Login.php");

// create a login object
$login = new Login();

// check for login
if ($login->isUserLoggedIn() == true) {

    include("./view/logged_in.php");
} else {
    include("./view/not_logged_in.php");
}
?>
