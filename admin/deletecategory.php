<?php
include('../config/conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = $_GET['created_at'];
    $sql = "DELETE FROM categories WHERE id = '$category_id'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header("Location: manageposts.php");
}

}
?>
