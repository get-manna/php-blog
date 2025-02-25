<?php
include('./config/conection.php');

if (isset($_POST['submit'])) {

    $id =  $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $created_at =  date("d-m-y h:i:s");

    // Corrected SQL Query
    $sql = "INSERT INTO `posts` (id, title, category_id, description, created_at) 
            VALUES ('$id', '$title', '$category_id', '$description', '$created_at')";

    $result = mysqli_query($conn, $sql);
}
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
                    <h1 class="text-2xl font-semibold">Add Post</h1>
                </div>

                <!-- Form -->
                <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                    <form action="" method="post">
                        <div class="mb-4">


                            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                            <input type="text" id="title" name="title" required class="w-full p-2 border border-gray-300 rounded">

                            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                            <input type="text" id="description" name="description" required class="w-full p-2 border border-gray-300 rounded">

                            <div class="">
                                <label for="category" class="block text-gray-700 font-bold mb-2">Choose a Category</label>
                                <select id="category" name="category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    <?php

                                    $sql = "SELECT * FROM categories";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }


                                    ?>



                                </select>
                            </div>



                            <button type="submit" class="py-2 px-8 mt-4 rounded bg-blue-700 text-white" name="submit">Add Post</button>

                        </div>
                    </form>
                </div>
            </main>
        </div>
    </main>

</body>

</html>