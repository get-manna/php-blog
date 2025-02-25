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
    <title>Header</title>
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
                <h1 class="text-2xl font-semibold">Manage Posts</h1>
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Logout</button>
            </div>

            <!-- Dashboard Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Users</h3>
                    <p class="text-2xl mt-2">1,234</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Revenue</h3>
                    <p class="text-2xl mt-2">$12,345</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Orders</h3>
                    <p class="text-2xl mt-2">567</p>
                </div>
            </div>
        </main>
    </div>
    </main>
</body>

</html>