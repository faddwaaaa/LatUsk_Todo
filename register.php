<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h3>Regis</h3>
    <form action="proses_register.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="name" id=""><br><br>

        <label for="">TanggaL Lahir</label>
        <input type="date" name="birth_date" id=""><br><br>

        <label for="">Email</label>
        <input type="email" name="email" id=""><br><br>

        <label for="">Username</label>
        <input type="text" name="username" id=""><br><br>

        <label for="">Password</label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" value="Register">

        <p>Sudah punya akun? <a href="login.php">Login Disini</a></p>
    </form>
</body>
</html>