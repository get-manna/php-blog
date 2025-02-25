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
<body>
<?php include('./template/header.php');?>

<main class="p-5 ">
    <h2 class="font-bold text-blue-700 text-3xl">Latest Blog</h2>
    
    <div class="container p-2 flex gap-5 flex-wrap justify-center">
        <?php


    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="max-w-md bg-white p-4 rounded-lg shadow-lg w-[calc(33.33%-20px)]">
            <img src="../image/single-image.jpg" alt="Blog Image" class="w-full h-48 object-cover rounded-lg">
            <h2 class="text-2xl font-bold mt-4"><?php echo $row['title']; ?></h2>
            <p class="text-gray-500 text-sm"><?php echo $row['created_at']; ?></p>
            <p class="text-gray-700 mt-2"><?php echo $row['description']; ?></p>
            <a href="singelblog.php?id=<?php echo $row['id']; ?>" class="text-blue-500 mt-2 inline-block">Read More</a>
        </div>

       
    
    <?php } ?>
</div>



    </main>

<?php include('./template/footer.php');?>
</body>
</html>