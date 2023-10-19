<?php
    include '../koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT); // meng-enkripsi password
    $leveluser = $_POST['leveluser'];
    $idkaryawan = $_POST['idkaryawan'];

    $query_username = mysqli_query($koneksi, "SELECT COUNT(*) FROM tb_login WHERE idkaryawan='$idkaryawan'");
    $check_username = mysqli_fetch_row($query_username);

    if($check_username['0'] != 0) {
        echo "<script>alert('Username sudah ada, silahkan menggunakan username yang lain');window.location.href='index.php'</script>";
    }else{
        $query = mysqli_query($koneksi, "INSERT INTO tb_login
        VALUES ('$username', '$pass_hash', '$leveluser', '$idkaryawan')");
    if(!$query){
        header('location: index.php?pesan=gagal_register');
        exit;
    }
}
?>