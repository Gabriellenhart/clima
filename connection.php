<?php
$username = "root";
$pass = "";
$host = "127.0.0.1";
$db_name = "database";
$conn = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $conn, $db_name );
?>
