<?php
include "koneksi.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user' AND password='$pass'");
$baris_level = mysqli_fetch_assoc($query);
echo $cek = mysqli_num_rows($query);

if($cek > 0) {
    setcookie('username', $user, time() + (60*60*24*7), '/');
    setcookie('leveluser', $baris_level['leveluser'], time() + (60*60*24*7), '/');
    header('location: ./pelanggan/view-pelanggan.php?pesan=Login_Berhasil');
} else {
    header('location: index.php?pesan=Login_Gagal');
}
?>