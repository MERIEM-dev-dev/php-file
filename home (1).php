<?php
// start the session
session_start();
// check if logout clicked
if (isset($_POST["logout"])) {
    // destroy the session for logout
    session_destroy();
    session_unset();
    // redirect to sign in page
    header("location: index.php");
}
require_once "includes/main-logout.php";
