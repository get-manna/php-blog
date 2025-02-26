<?php
include('../config/conection.php');
$sql = "SELECT * FROM categories";
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
                    <h1 class="text-2xl font-semibold">Manage Category</h1>
                    <a href="/admin/addcategory.php" class="bg-blue-600 text-white px-4 py-2 rounded">Add Category</a>
                </div>

                <!-- Dashboard Widgets -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold">Total Posts</h3>
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
                        <h3 class="text-xl font-semibold">Total Category</h3>
                        <p class="text-2xl mt-2">
                            <?php
                            $total_Categor = "SELECT count(*) as total FROM categories";
                            $total_Categor_result = mysqli_query($conn, $total_Categor);
                            $total = mysqli_fetch_assoc($total_Categor_result);
                            echo $total['total'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class=" border rounded-lg mt-10">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border bg-gray-100 px-4 py-2">ID</th>
                                <th class="border bg-gray-100 px-4 py-2">Category</th>
                                <th class="border bg-gray-100 px-4 py-2">Edit</th>
                                <th class="border bg-gray-100 px-4 py-2">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td class='border px-4 py-2'>" . $row['id'] . "</td>";

                                $category_name = "SELECT name FROM categories WHERE id=" . $row['id'];
                                $category_result = mysqli_query($conn, $category_name);
                                $category = mysqli_fetch_assoc($category_result);

                                //
                                echo "<td class='border px-4 py-2'>" . $category['name'] . "</td>";
                                echo "<td class='border px-4 py-2'><a href='/admin/editcategory.php?id="  . $row['id'] . "' class='bg-blue-500 text-white px-4 py-1 rounded justify-center items-center'>Edit</a></td>";
                                echo "<td class='border px-4 py-2'><a href='/admin/deletecategory.php?id="  . $row['id'] . "' class='bg-red-500 text-white px-4 py-1 rounded'>Delete</a></td>";


                                echo "</tr>";
                            }
                            ?>



                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </main>
</body>

</html>