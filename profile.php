<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT name, age, created_at FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h2>Welcome, <?php echo $user['name']; ?></h2>

<p><strong>Name:</strong> <?php echo $user['name']; ?></p>
<p><strong>Age:</strong> <?php echo $user['age']; ?></p>
<p><strong>Date registered:</strong> <?php echo $user['created_at']; ?></p>

<a href="logout.php">Logout</a>

</body>
</html>
