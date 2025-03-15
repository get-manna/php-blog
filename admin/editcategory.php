<?php
include('../config/conection.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $id=$_GET['id'];

    $sql = "SELECT * FROM categories WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $category = mysqli_fetch_assoc($result);
    
    // if ($row = mysqli_fetch_assoc($result)) {
    //     // Record found, store values
    //     $category_name = $row['name'];
    //     echo "Category Name: " . $category_name; // Display single record
    // } else {
    //     echo "Record not found!";
    // }
}
// 

if($_SERVER['REQUEST_METHOD'] == "POST"){

$id = $_GET['id'];
$name = $_POST['category_name'];
$sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    header("location: /admin/managecategory.php");

} else {
    echo "Error: " . mysqli_error($conn);
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Category</title>
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
                    <h1 class="text-2xl font-semibold">Edit category</h1>
                </div>

                <!-- Form -->


                 <div class="bg-white p-6 rounded-lg shadow-md mt-6"></div>
                 <form action="" method="post">
                     <div class="mb-4"></div>
                     <label for="Add_Category" class="block text-gray-700 font-bold mb-2">Edit_Category</label>
                     <input type="text" name="category_name" value="<?php echo $category['name']; ?>" required class="w-full p-2 border border-gray-300 rounded">
                     <button type="submit" class="py-2 px-8 mt-4 rounded bg-blue-700 text-white" name="submit">Edit Category</button>
                  </div>
                 </form>
                 </div>

                 <?php 

               ?>








    </main>
    </div>
    </main>

</body>

</html>