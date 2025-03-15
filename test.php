<?php

session_start();

// $_SESSION['users'] = "admin";

// if (isset($_SESSION['users'])) {
//     echo "Session variable is set.";
// }

$_SESSION['role'] = "admin";
$_SESSION['name'] = "manna";
$_SESSION['email'] = "manna@.com";

// var_dump($_SESSION);
echo $_SESSION['name'];    

?>