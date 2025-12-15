<?php
require "koneksi.php";
$id_todo = $_GET['id_todo'];
$sql = "DELETE FROM todo WHERE id_todo = '$id_todo'";
$query = mysqli_query($koneksi, $query);

if($query){
    header("location:index.php?hapus=sukses");
} else {
    header("location:login.php?hapus=gagal");
}
exit();
?>