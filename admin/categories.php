<?php
include('../config/conection.php');

if (isset($_POST['submit'])) {

    $name = $_POST['Add_Category'];

    // Corrected SQL Query  
    $sql = "INSERT INTO `categories` (name) VALUES ('$name')"; 

    $result = mysqli_query( $conn, $sql);
}
// 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add Post</title>
</head>

<body>

    <main>
        <div class="flex h-screen">
            <!-- Sidebar -->
            <?php include('./layout/sidebar.php'); ?>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                <!-- Top Navigation -->
                <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
                    <h1 class="text-2xl font-semibold">Add Category</h1>
                </div>

                <!-- Form -->
                <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="Add_Category" class="block text-gray-700 font-bold mb-2">Add_Category</label>
                            <input type="text" id="Add_Category" name="Add_Category" required class="w-full p-2 border border-gray-300 rounded">
                            <button type="submit" class="py-2 px-8 mt-4 rounded bg-blue-700 text-white" name="submit">Add Category</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </main>

</body>

</html>