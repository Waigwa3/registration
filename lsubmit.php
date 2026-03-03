<?php
session_start();
require 'db.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {

        // SET SESSION CORRECTLY
        $_SESSION['user_id'] = $user['id'];

        header("Location: profile.php");
        exit();
    }
}

echo "Invalid email or password. <a href='login.php'>Try again</a>";
?>
