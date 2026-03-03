<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

</head>
<body>
    <h2>User registration</h2>
    <form action="rsubmit.php" method="POST">
        Name:<input type="text" name="name" required><br><br>
        Age:<input type="number" name="age" required><br><br>
        Email:<input type="text" name="email" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        <button type="submit">Register</button>


    </form>
    <p>Already have an account <a href="login.php">login</a></p>
    
</body>
</html>