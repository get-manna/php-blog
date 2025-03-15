<?php
include_once('../session.php');

include('../config/conection.php');
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Manage posts</title>
</head>

<body>

 

    <main class=" ">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include('./layout/sidebar.php'); ?>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Top Navigation -->
            <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
                <h1 class="text-2xl font-semibold">Manage users profile</h1>
                <a href="/../logout.php" class="bg-blue-600 text-white px-4 py-2 rounded">Logout </a>
            </div>

            <!-- Dashboard Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Users</h3>
                    <p class="text-2xl mt-2">
                        <?php
                        $total_users = "SELECT COUNT(*) as total FROM users";
                        $total_users_result = mysqli_query($conn, $total_users);
                        $total = mysqli_fetch_assoc($total_users_result);
                        echo $total['total'];
                        ?>
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Categories</h3>
                    <p class="text-2xl mt-2">
                        <?php 
                         $post_category="SELECT * FROM categories";
                         $post_category_result=mysqli_query($conn,$post_category);
                         $total_category= mysqli_num_rows($post_category_result);
                         echo $total_category;
                         
                         ?>
                    </p>
                </div>
            </div>

        </main>
    </div>
    </main>
</body>

</html>