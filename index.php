<?php
$success = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['username'];
    $city = $_POST['usercity'] ?? '';
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    if (!empty($name) && !empty($city) && !empty($email) && !empty($password)) {
        include 'connection.php';
        $sql_insert = "INSERT INTO `users` (name,city,email,password) VALUES ('$name','$city','$email','$password')";
        try {
            mysqli_query($conn, $sql_insert);
            $success = "data inserted succesfully";
        } catch (mysqli_sql_exception $e) {
            $e->getMessage();
        }
    } else {
        $error = "all feilds are required";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-pink-200 h-screen w-screen grid place-items-center">

    <?php
    include 'navbar.php';
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="max-w-md w-full p-6 bg-white shadow-md rounded-lg space-y-6">
        <h1 class="text-2xl font-bold text-center text-pink-800">FORM</h1>

        <?php if (!empty($error)) echo "<p class='text-red-800 text-center'>$error</p>"; ?>
        <?php if (!empty($success)) echo "<p class='text-green-800 text-center'>$success</p>"; ?>

        <div class="grid gap-1">
            <label for="username" class="text-pink-700 font-medium">Name</label>
            <input type="text" name="username" id="username" class="border border-pink-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="grid gap-1">
            <label for="usercity" class="text-pink-700 font-medium">City</label>
            <select name="usercity" id="usercity" class="border border-pink-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option selected disabled>Select city</option>
                <option value="karachi">Karachi</option>
                <option value="islamabad">Islamabad</option>
                <option value="multan">Multan</option>
                <option value="lahore">Lahore</option>
                <option value="kashmir">Kashmir</option>
                <option value="hyderabad">Hyderabad</option>
            </select>
        </div>

        <div class="grid gap-1">
            <label for="useremail" class="text-pink-700 font-medium">Email</label>
            <input type="email" name="useremail" id="useremail" class="border border-pink-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="grid gap-1">
            <label for="userpassword" class="text-pink-700 font-medium">Password</label>
            <input type="password" name="userpassword" id="userpassword" autocomplete="off" class="border border-pink-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex justify-center">
            <input type="submit" value="Submit" name="submit" class="w-full sm:w-auto bg-pink-200 text-pink-800 px-6 py-2 rounded-md hover:bg-pink-400 transition duration-200 cursor-pointer">
        </div>
    </form>

</body>


</html>