<?php
include 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$user = $collection->findOne(['email' => $email, 'password' => $password]);

if ($user) {
    $_SESSION['user'] = $email;
    header("Location: homepage.html");
} else {
    echo "Invalid email or password";
}
?>
