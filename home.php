<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<div class="mt-20">
    <table class="w-[90%] mx-auto text-center">
        <thead class="bg-pink-400 text-pink-800">
            <th class="p-1">id</th>
            <th class="p-1">name</th>
            <th class="p-1">city</th>
            <th class="p-1">email</th>
            <th class="p-1">password</th>
            <th class="p-1">created_at</th>
        </thead>
        <tbody class="bg-pink-200">
            <?php
            include 'connection.php';

            $sql_fetch = "SELECT * FROM `users`";
            $result = mysqli_query($conn,$sql_fetch);

            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['city'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>" . $row['created_at'] . "</td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>