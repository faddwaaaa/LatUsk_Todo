<?php
session_start();
require "koneksi.php";

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION['id_user'];
$kategori = mysqli_query($koneksi, "SELECT * FROM category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah TodoList</title>
</head>
<body>
    <h3>Tambah TodoList</h3>
    <form action="proses_tambah.php" method="post">
        <label for="">Judul</label>
        <input type="text" name="title" id=""><br><br>

        <label for="">Deskripsi</label><br>
        <textarea name="description" id="" rows="4"></textarea><br><br>

        <label for="">Kategori</label>
        <select name="id_category">
            <option value="">Pilih Kategori</option>
            <?php while($k = mysqli_fetch_assoc($kategori)) { ?>
                <option value="<?= $k['id_category'] ?>"><?= $k['category'] ?></option>
            <?php } ?>
        </select><br><br>

        <label for="">Status</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Done">Done</option>
        </select>
        
        <br><br>
        <input type="hidden" name="id_user" value="<?= $id_user ?>">
        <button type="submit">Tambah</button>
    </form>
</body>
</html>