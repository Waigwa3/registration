<?php
require 'db.php';

$name = mysqli_real_escape_string ($conn, $_POST ["name"]);
$email = mysqli_real_escape_string($conn, $_POST ["email"]);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//check user

$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$check);

if (mysqli_num_rows($result) > 0) {
    echo "user already exists";
    exit();
}

//Add user

$sql = "INSERT INTO users(name,email,password)
        VALUES('$name','$email','$password')";
        
        if (msqli_query($conn,$sql)) {
            header("location: login.php");
    
        }else {
            echo "error";
        }
