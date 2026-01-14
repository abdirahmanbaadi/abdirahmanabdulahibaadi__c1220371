<?php
$conn = mysqli_connect("localhost", "root", "", "baadi_1");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
