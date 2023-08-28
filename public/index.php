<?php

// start the session
session_start();
// show errors on pages while dev work
// ini_set('display_errors', 1);
// get the init file
require "../app/init.php";

// create an instance of the app class
$app = new App();

?>