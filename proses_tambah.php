<?php
session_start();
require "koneksi.php";

$title = $_POST['title'];
$desc = $_POST['description'];
$id_cat = $_POST['id_category'];
$status = $_POST['status'];
$id_user = $_POST['id_user'];

$sql = "INSERT INTO todo (title, description, id_category, status, id_user)
        VALUES
        ('$title','$desc','$id_cat','$status','$id_user')";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:index.php?tambah=sukses");
} else {
    header("location:index.php?tambah=gagal");
}
exit();
?>