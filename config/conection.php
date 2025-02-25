<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$conn = mysqli_connect(hostname: "localhost",username: "root",password: "root",database: "blog");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>