<?php
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
    <title>deshboard</title>
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
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
                <a href="login.php" class="bg-blue-600 text-white px-4 py-2 rounded">Logout</a>
            </div>

            <!-- Dashboard Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Users</h3>
                    <p class="text-2xl mt-2">
                         
                        <?php
                        $total_posts = "SELECT COUNT(*) as total FROM posts";
                        $total_posts_result = mysqli_query($conn, $total_posts);
                        $total = mysqli_fetch_assoc($total_posts_result);
                        echo $total['total'];
                        ?>

                       
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Categories</h3>
                    <p class="text-2xl mt-2">
                    <?php
                        $total_posts = "SELECT COUNT(*) as total FROM categories";
                        $total_posts_result = mysqli_query($conn, $total_posts);
                        $total = mysqli_fetch_assoc($total_posts_result);
                        echo $total['total'];
                        ?>
                    </p>
                </div>
            </div>
        </main>
    </div>
    </main>

</body>

</html>