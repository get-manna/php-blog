<?php
include('./config/conection.php');
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Header</title>
</head>

<body class="bg-gray-100 text-gray-800">



    <!-- Main Container -->
    <div class="max-w-6xl mx-auto p-6 flex flex-col md:flex-row gap-6">

        <!-- Left Side: Blog List -->
        <div class="w-full md:w-2/3">
            <h2 class="text-2xl font-bold mb-4">Latest Blog Posts</h2>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <img src="./image/single-image.jpg" alt="Blog Image" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-blue-600"> <?php echo  $row['title'] ?> </h3>
                    <p class="text-gray-600 text-sm mt-1"><?php echo  $row['created_at'] ?></p>
                    <p class="mt-3 text-gray-700"><?php echo  $row['description'] ?></p>
                </div>

            <?php

            }
            ?>


        </div>


        

        <!-- Right Side: Category List -->
        <div class="w-full md:w-1/3 ">
            <h2 class="text-2xl font-bold mb-4">Categories</h2>
            <ul class="bg-white p-4 rounded-lg shadow-md space-y-2">
                <?php

                $sql = "SELECT * FROM categories";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                        🍽️ <?php echo $row['name']; ?>
                    </li>

                <?php
                }

                ?>
            </ul>
        </div>

    </div>

</body>

</html>



</html>