<?php
include('../config/conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) { 
        $id = $_GET['id']; 
        $sql = "DELETE FROM categories WHERE id = $id"; 
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: managecategory.php");
            exit; 
        } else {
            echo "Error deleting category: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request: No ID provided.";
    }
}
?>
