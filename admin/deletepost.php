<?php
include('../config/conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header("Location: manageposts.php");
}

}
?>
