<?php
$admin_username = 'admin';
$admin_password = 'admin';
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $admin_username && $password === $admin_password) {
    header("Location: admin.php");
    exit();
} else {
    echo "error in password";
}
?>