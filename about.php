<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <?php include('./template/header.php'); ?>

    <!-- About Section -->
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Who We Are</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="/image/single-image.jpg" alt="About Image" class="rounded-lg mb-4 w-full">
            <p class="text-gray-700 leading-relaxed">
                Welcome to our website! We are dedicated to providing valuable content and services to our users. Our mission is to create an engaging platform where people can learn, share, and grow together.
            </p>
            <p class="text-gray-700 leading-relaxed mt-4">
                Our team consists of passionate professionals who work hard to ensure the best experience for our visitors. We believe in innovation, quality, and customer satisfaction.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <?php include('./template/footer.php'); ?>


</body>
</html>
