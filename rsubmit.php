<?php
require 'db.php';


$name  = mysqli_real_escape_string($conn, $_POST['name']);
$age   = mysqli_real_escape_string($conn, $_POST['age']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "Email already registered. <a href='signup.php'>Try again</a>";
    exit();
}

$sql = "INSERT INTO users (name, age, email, password)
        VALUES ('$name', '$age', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
