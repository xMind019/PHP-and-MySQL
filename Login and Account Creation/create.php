<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Creation</title>
</head>
<body>
    <h2>Account Creation</h2>
    <form action="connection.php" method="post">
        Firstname:<br>
        <input type="text" name="first_name" required><br>
        Lastname:<br>
        <input type="text" name="last_name" required><br>
        Create Username:<br>
        <input type="text" name="username" required><br>
        Create Password:<br>
        <input type="text" name="pass" required><br>
        <input type="checkbox" name="type" value="client" required>Create Account<br>
        <input type="submit" value="Create"><br>
        <a href="index.php">Home</a><br>
        <a href="login.php.php">Login</a><br>
    </form>    
</body>
</html>