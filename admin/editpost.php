<?php
include('../config/conection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $created_at =  date("d-m-y h:i:s");

    $sql = "UPDATE posts SET title = '$title', description = '$description', category_id = '$category_id', created_at = '$created_at' WHERE id = '$_GET[id]'";

    $result = mysqli_query($conn, $sql);
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
                    <h1 class="text-2xl font-semibold">Edit Post</h1>
                </div>

                <!-- Form -->
                <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                    <form action="" method="post">
                        <div class="mb-4">



                            <?php
                            $sql="SELECT * FROM posts WHERE id = $_GET[id]";
                            $result = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                                <input type="text" id="title" value="<?php echo $row['title']; ?>" name="title" required class="w-full p-2 border border-gray-300 rounded">
    
                                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                                <input type="text" id="description" value="<?php echo $row['description']; ?>" name="description" required class="w-full p-2 border border-gray-300 rounded">
                                <?php
                              }
                            ?>



                            <div class="">
                                <label for="category" class="block text-gray-700 font-bold mb-2">Choose a Category</label>
                                <select id="category"  value="<?php echo $row['category']; ?>" name="category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    <?php

                                    $category_sql = "SELECT * FROM categories";
                                    $category_result = mysqli_query($conn, $category_sql);


                                    while ($category = mysqli_fetch_assoc($category_result)) {
                                        echo "<option value='" . $category['id'] . "'>" . $category['name'] . "</option>";
                                    }


                                    ?>
                                </select>
                            </div>




                            <button type="submit" class="py-2 px-8 mt-4 rounded bg-blue-700 text-white" name="submit">Edit Post</button>

                        </div>
                    </form>
                </div>
            </main>
        </div>
    </main>

</body>

</html>