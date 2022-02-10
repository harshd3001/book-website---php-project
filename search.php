<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname ="books";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

$sql = "SELECT b_name , b_img FROM book";
$result = mysqli_query($conn, $sql);

// Fetch all
$q = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result set
mysqli_free_result($result);
mysqli_close($conn);
?>