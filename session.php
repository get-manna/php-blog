<?php
session_start();




// sesson not exits
if (!isset($_SESSION['user'])) {
    header("Location: http://tutirial_project.test/login.php");

    die();
}

?>
