<?php
    include '../koneksi.php';
    $username = $_POST['username'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username' LIMIT 1");
    if(mysqli_num_rows($query) > 0){
        $password = md5($_POST['password']);
        $re_password = md5($_POST['re_password']);
        if ($password == $re_password) {
            $update = mysqli_query($koneksi, "UPDATE tb_login SET password='$password' WHERE username='$username'");
            header('location: ../index.php?pesan=berhasil_update');
        }else{
            header('location: index.php?pesan=invalid_password');
        }
    }else{
        header('location: index.php?pesan=gagal_update');
    }
?>