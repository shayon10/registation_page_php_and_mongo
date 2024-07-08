<?php
include 'db.php';

$email = $_POST['email'];

$user = $collection->findOne(['email' => $email]);

if ($user) {
    header("Location: resetpassword.html?email=" . $email);
} else {
    echo "Email not found";
}
?>
