<?php
include('./config/conection.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = 'email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists.";
    } else {

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Register</h2>
        <form action="#" method="post" id="form" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-600" for="name">Name</label>
                <input name="name" type="text" id="name" class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <p class="mt-1 text-sm text-red-500 hidden" id="nameError">Name is required.</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600" for="email">Email</label>
                <input name="email" type="email" id="email" class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <p class="mt-1 text-sm text-red-500 hidden" id="emailError">Valid email is required.</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600" for="password">Password</label>
                <input name="password" type="password" id="password" class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <p class="mt-1 text-sm text-red-500 hidden" id="passwordError">Password must be at least 6 characters.</p>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600"> submit</button>
        </form>
    </div>

    <script>
        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const password = document.getElementById('password');

            document.getElementById('nameError').classList.add('hidden');
            document.getElementById('emailError').classList.add('hidden');
            document.getElementById('passwordError').classList.add('hidden');

            if (name.value.trim() === '') {
                document.getElementById('nameError').classList.remove('hidden');
                isValid = false;
            }

            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.value.match(emailPattern)) {
                document.getElementById('emailError').classList.remove('hidden');
                isValid = false;
            }

            if (password.value.length < 6) {
                document.getElementById('passwordError').classList.remove('hidden');
                isValid = false;
            }

            if (isValid) {
                document.getElementById('form').submit();
            }
        });
    </script>
</body>

</html>