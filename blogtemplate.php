<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">



    <!-- Main Container -->
    <div class="max-w-6xl mx-auto p-6 flex flex-col md:flex-row gap-6">

        <!-- Left Side: Blog List -->
        <div class="w-full md:w-2/3">
            <h2 class="text-2xl font-bold mb-4">Latest Blog Posts</h2>

            <!-- Blog Post 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <img src="https://via.placeholder.com/800x400" alt="Blog Image" class="rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-600">How to Learn Web Development</h3>
                <p class="text-gray-600 text-sm mt-1">Published on Feb 25, 2025</p>
                <p class="mt-3 text-gray-700">Web development is a skill that allows you to build amazing websites and applications...</p>
                <a href="#" class="text-blue-500 mt-3 inline-block font-medium hover:underline">Read more</a>
            </div>

            <!-- Blog Post 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/800x400" alt="Blog Image" class="rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-600">Tailwind CSS: The Future of Styling</h3>
                <p class="text-gray-600 text-sm mt-1">Published on Feb 20, 2025</p>
                <p class="mt-3 text-gray-700">Tailwind CSS is a utility-first framework that makes designing easy and efficient...</p>
                <a href="#" class="text-blue-500 mt-3 inline-block font-medium hover:underline">Read more</a>
            </div>
        </div>

        <!-- Right Side: Category List -->
        <div class="w-full md:w-1/3">
            <h2 class="text-2xl font-bold mb-4">Categories</h2>
            <ul class="bg-white p-4 rounded-lg shadow-md space-y-2">
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">🍽️ Restaurants</li>
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">💻 Technology</li>
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">👗 Fashion</li>
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">🏋️ Health & Fitness</li>
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">📚 Education</li>
                <li class="p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition cursor-pointer">✈️ Travel</li>
            </ul>
        </div>

    </div>

</body>
</html>
