<?php
session_start();
require "koneksi.php";

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION['id_user'];
if(isset($_GET['category']) && $_GET['category'] != "" ){
    $kategori_id = $_GET['category'];
    $sql = "SELECT t.*, c.category AS nama_kategori
            FROM todo t
            LEFT JOIN category c ON t.id_category = c.id_category
            WHERE id_user = '$id_user'
            AND t.id_category = '$kategori_id'
            ORDER BY t.id_todo DESC";
    $query = mysqli_query($koneksi, $sql);
} else {
    $sql = "SELECT t.*, c.category AS nama_kategori
            FROM todo t
            LEFT JOIN category c ON t.id_category = c.id_category
            WHERE id_user = '$id_user'
            ORDER BY t.id_todo DESC";
    $query = mysqli_query($koneksi, $sql);
}

$kategori = mysqli_query($koneksi, "SELECT * FROM category");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList Saya</title>
</head>
<body>
    <nav>
        <a href="index.php">TodoList</a>
        <a href="profil.php">Profil</a>
        <a href="logout.php">Logout</a>
    </nav>

    <h2>TodoList Saya</h2>
    <form action="" method="get">
        <label for="">Filter Kategori</label>
        <select name="category" onchange="this.form.submit()">
            <option value="">Semua</option>
            <?php while($k = mysqli_fetch_assoc($kategori)) { ?>
                <option value="<?= $k['id_category'] ?>"
                <?= isset($_GET['category']) && $_GET['category'] == $k['id_category'] ? 'selected' : '' ?>>
                <?= $k['category'] ?>
                </option>
            <?php } ?>
        </select><br>
    </form>
    <button onclick="window.print()">Print</button>
    <br><a href="tambah.php"><button>Tambah TodoList</button></a><br><br>

    <?php while($todo = mysqli_fetch_assoc($query)) { ?>
    <hr>
        <h4><?= $todo['title'] ?></h5>
        <small><?= $todo['description'] ?></small>
        <p><?= $todo['nama_kategori'] ?></p>
        <p><?= $todo['status'] ?></p>

        <a href="edit.php?id_todo=<?= $todo['id_todo'] ?>">Edit</a>
        <a href="hapus.php?id_todo=<?= $todo['id_todo'] ?>">Hapus</a>
    <hr>
    <?php } ?>
</body>
</html>