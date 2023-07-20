<?php
session_start();

// Replace these credentials with your admin credentials
$admin_username = "admin";
$admin_password = "adminpassword";

if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
    $_SESSION['user_type'] = 'admin';
    header("Location: index.php");
} else {
    header("Location: login.php");
}
?>
