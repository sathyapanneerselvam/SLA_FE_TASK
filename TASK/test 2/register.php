<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password === $confirm_password) {
        $_SESSION["user"] = $username; // Store session
        echo "<script>alert('Registration Successful! Redirecting to Login Page...'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Passwords do not match!'); window.location.href = 'useregister.html';</script>";
    }
}
?>
