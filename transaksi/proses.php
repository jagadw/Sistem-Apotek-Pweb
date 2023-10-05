<?php
    include '../koneksi.php';
    $idtransaksi = $_POST['idtransaksi'];
    $idpelanggan = $_POST['idpelanggan'];
    $idkaryawan = $_POST['idkaryawan'];
    $tgltransaksi = $_POST['tgltransaksi'];
    $kategoripelanggan = $_POST['kategoripelanggan'];
    $totalbayar = $_POST['totalbayar'];
    $bayar = $_POST['bayar'];
    $kembali = $_POST['kembali'];

    $query = "INSERT INTO tb_transaksi VALUES ('$idtransaksi','$idpelanggan','$idkaryawan','$tgltransaksi', '$kategoripelanggan','$totalbayar','$bayar','$kembali')";
    $push = mysqli_query($koneksi, $query);

    // var_dump($query);
    if($push) {
        header('location: view-transaksi.php?pesan=berhasil_ditambahkan');
    } else {
        header('location: index.php?pesan=gagal_ditambahkan');
    }
?>