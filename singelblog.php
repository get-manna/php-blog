<?php
include('./config/conection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>

<body class="bg-gray-100 text-gray-800">


    <!-- header -->
    <?php include('./template/header.php'); ?>

    <!-- Main Container -->
    <div class="max-w-6xl mx-auto p-6 flex flex-col md:flex-row gap-6">

        <!-- Left Side: Blog List -->
        <div class="w-full md:w-2/3">
            <h2 class="text-2xl font-bold mb-4">Singel Blog </h2>


            <div class="w-full  bg-white p-6 rounded-lg shadow-lg">
                <img src="<?php echo './image/single-image.jpg'; ?>" alt="Blog Image" class="w-full h-72 object-cover rounded-lg">

                <h1 class="text-3xl font-bold mt-4 text-blue-700 lowercase"><?php echo $row['title']; ?></h1>
                <p class="text-gray-500 text-sm mt-4 "><?php echo $row['created_at']; ?></p>

                <?php 
                
                 $sql="SELECT * FROM categories WHERE id=$row[category_id]";
                 $result=mysqli_query($conn,$sql);
                 $category=mysqli_fetch_assoc($result);
                
                 ?>
                 <p class=" text-blue-700 mt-2 text-lg leading-relaxed">Category name : <?php echo $category['name']; ?> </p>
                <p class="mt-2 text-lg leading-relaxed"><?php echo $row['description']; ?></p>
                <a href="/index.php" class="text-blue-700 mt-4 rounded">view All Blog</a>

            </div>

        </div>




        <!-- Right Side: Category List -->
        <div class="w-full md:w-1/3 mt-12">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold border-b pb-2 text-blue-700">Related Posts</h2>
                <ul class="mt-3 space-y-2">
                    <li><a href="#" class="text-blue-700 hover:underline"> <?php echo $row['title'] ?> </a></li>
                    <li><a href="#" class="text-blue-700 hover:underline">How to Build a Blog</a></li>
                    <li><a href="#" class="text-blue-700 hover:underline">Best Practices for Web Design</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- footer  -->
    <?php include('./template/footer.php'); ?>


</body>

</html>



</html>