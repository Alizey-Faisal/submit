<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "formm";

try {
    $conn = mysqli_connect($hostname,$username,$password,$database);
} catch (mysqli_sql_exception$e) {
    echo $e->getMessage();
}

?>