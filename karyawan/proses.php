<?php
    include '../koneksi.php';
    print_r($_POST); 
    $idkaryawan = $_POST['idkaryawan'];
    $namakaryawan = $_POST['namakaryawan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_karyawan
    VALUES (NULL, '$namakaryawan', '$alamat', '$telp')");

    if($query) {
        header('location: ../dashboard.php?page=karyawan&pesan=berhasil_ditambahkan');
    } else {
        header('location: ../dashboard.php?page=karyawan&pesan=gagal_ditambahkan');
    }
?>