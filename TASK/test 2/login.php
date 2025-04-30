<?php
session_start();

$valid_username = "admin";  // Example username
$valid_password = "12345";  // Example password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

    if ($uname === $valid_username && $pwd === $valid_password) {
        $_SESSION["user"] = $uname;  // Store session
        header("Location: index1.html");  // Redirect to index1.html
        exit();
    } else {
        echo "<script>alert('Invalid Username or Password!'); window.location.href = 'index.html';</script>";
    }
}
?>
