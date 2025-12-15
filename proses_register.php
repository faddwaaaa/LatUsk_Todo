<?php
require "koneksi.php";

$nama = $_POST['name'];
$tgl = $_POST['birth_date'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO user (name, birth_date, email, username, password)
        VALUES
        ('$nama','$tgl','$email','$username',md5('$pass'))";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:login.php?register=sukses");
    exit;
} else {
    header("location:register.php?register=gagal");
    exit;
}
?>