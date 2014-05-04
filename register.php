<?php

// include the configs / constants for the database connection
require_once("config/db.php");

// load the registration class
require_once("classes/Registration.php");

// create the registration object
$registration = new Registration();

// show the register view (with the registration form)
include("view/register.php");
