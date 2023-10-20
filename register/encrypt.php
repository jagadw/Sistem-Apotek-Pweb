<?php
    include '../koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT); // meng-enkripsi password
    $leveluser = $_POST['leveluser'];
    $idkaryawan = $_POST['idkaryawan'];

    $query_username = mysqli_query($koneksi, "SELECT COUNT(*) FROM tb_login WHERE username='$username'");
    $check_username = mysqli_fetch_row($query_username);

    if($check_username['0'] != 0) {
        echo "<script>alert('Username sudah ada, silahkan menggunakan username yang lain');window.location.href='index.php'</script>";
    }else if(@$idkaryawan == NULL) {
        echo "<script>alert('Pendaftaran akun telah melewati batas');window.location.href='index.php'</script>";
    }else{
        $query = mysqli_query($koneksi, "INSERT INTO tb_login
        VALUES ('$username', '$pass_hash', '$leveluser', '$idkaryawan')");
        $hasil = mysqli_query($koneksi, $query);
    if(!$hasil){
        header('location: index.php?pesan=gagal_register');
    }else{
        header('location: ../index.php?pesan=berhasil_register');
        exit;
    }
}
?>