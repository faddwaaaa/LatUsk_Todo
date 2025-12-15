<?php
session_start();
require "koneksi.php";

$id_user = $_SESSION['id_user'];
$user = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
</head>
<body>
    <nav>
        <a href="index.php">TodoList</a>
        <a href="profil.php">Profil</a>
        <a href="logout.php">Logout</a>
    </nav>
    
    <?php while($u = mysqli_fetch_assoc($user)) { ?>
        <p><strong>Nama :</strong> <?= $u['name'] ?></p>
        <p><strong>Tanggal Lahir :</strong> <?= $u['birth_date'] ?></p>
        <p><strong>Email :</strong> <?= $u['email'] ?></p>
        <p><strong>Username :</strong> <?= $u['username'] ?></p>
        <p><strong>Password :</strong> ****</p>
    <?php } ?>
</body>
</html>