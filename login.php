<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>
    <form action="proses_login.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" id=""><br><br>

        <label for="">Password</label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" value="Login">

        <p>Belum punya akun? <a href="register.php">Register Disini</a></p>
    </form>
</body>
</html>