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
    <title>login Form </title>
</head>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "admin" && $password === "12345") {
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>
        <?php if (!empty($error)): ?>
            <p class="text-red-500 text-sm text-center mt-2"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="" method="POST" class="mt-4">
            <div>
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <button type="submit" class="w-full mt-6 px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
        </form>
    </div>
</body>

</html>



</html>