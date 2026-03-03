<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>User Login</h2>

<form action="lsubmit.php" method="POST">
    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<p>Don't have an account?
    <a href="register.php">Register</a>
</p>

</body>
</html>