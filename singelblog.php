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
    <title>Header</title>
</head>

<body>
    <?php include('./template/header.php'); ?>

    <main class="p-5 ">
        <h2 class="font-bold text-blue-700 text-3xl">Singel Blog</h2>


        <div class="container mx-auto mt-8 p-4 md:flex gap-6">

            <div class="w-full md:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                <img src="<?php echo './image/single-image.jpg'; ?>" alt="Blog Image" class="w-full h-72 object-cover rounded-lg">

                <h1 class="text-4xl font-bold mt-4"><?php echo $row['title']; ?></h1>
                <p class="text-gray-500 text-sm mt-1">Published on February 23, 2025</p>

                <p class="mt-4 text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rhoncus varius ligula, nec tincidunt eros sodales nec. Nullam tincidunt magna ut odio fermentum, at tristique lectus vehicula.
                </p>

                <p class="mt-4 text-lg leading-relaxed">
                    Vivamus faucibus, lectus a sagittis faucibus, risus nunc congue magna, a vulputate lorem nunc vel risus. Ut ornare elit quis lacus eleifend, nec eleifend dolor feugiat.
                </p>

                <p class="mt-4 text-lg leading-relaxed">
                    Donec ut nisi eu erat vulputate facilisis. Duis pharetra metus sit amet justo pharetra, ac fringilla lectus tincidunt.
                </p>

            </div>


            <div class="w-full md:w-1/3">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold border-b pb-2 text-blue-700">Related Posts</h2>
                    <ul class="mt-3 space-y-2">
                        <li><a href="#" class="text-blue-700 hover:underline">Understanding Tailwind CSS</a></li>
                        <li><a href="#" class="text-blue-700 hover:underline">How to Build a Blog</a></li>
                        <li><a href="#" class="text-blue-700 hover:underline">Best Practices for Web Design</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </main>

    <?php include('./template/footer.php'); ?>
</body>

</html>