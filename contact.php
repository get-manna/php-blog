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
    <title>Contact Page</title>
</head>

<body class="bg-gray-100 text-gray-800">


    <!-- header -->
    <?php include('./template/header.php'); ?>



    <!-- form section -->

    <!-- Contact Section -->
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
            <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">Contact Us</h2>
            <p class="text-gray-500 text-center mb-6">Feel free to reach out to us for any inquiries.</p>

            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-600 text-sm font-medium">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>





    <!-- footer  -->
    <?php include('./template/footer.php'); ?>


</body>

</html>



</html>