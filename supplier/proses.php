<?php
    include '../koneksi.php';
    print_r($_POST);
    $perusahaan = $_POST['perusahaan'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_supplier
    VALUES (NULL, '$perusahaan', '$telp', '$alamat','$keterangan')");

    if($query) {
        header('location: ../dashboard.php?page=supplier&pesan=berhasil_ditambahkan');
    } else {
        header('location: ../dashboard.php?page=supplier&pesan=gagal_ditambahkan');
    }
?>