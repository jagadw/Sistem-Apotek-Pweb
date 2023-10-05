<?php
include "koneksi.php";
session_start();

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user' AND password='$pass'");
$baris_level = mysqli_fetch_assoc($query);
echo $cek = mysqli_num_rows($query);

if($cek > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['level'] = $baris_level;
    header('location: ./obat/view-obat.php?pesan=Login_Berhasil');
} else {
    header('location: index.php?pesan=Login_Gagal');
}
?>