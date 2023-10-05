<?php
    include '../koneksi.php';

    $iddetailtransaksi = $_POST['iddetailtransaksi'];
    $idtransaksi = $_POST['idtransaksi'];
    $idobat = $_POST['idobat'];
    $jumlah = $_POST['jumlah'];
    $hargasatuan = $_POST['hargasatuan'];
    $totalharga = $_POST['totalharga'];

    $query = "INSERT INTO tb_detail_transaksi VALUES ('$iddetailtransaksi','$idtransaksi','$idobat','$jumlah','$hargasatuan','$totalharga')";
    $push = mysqli_query($koneksi, $query);

    if ($push) {
        header('location: view-detailtransaksi.php?pesan=berhasil_ditambahkan');
    } else {
        header('location: index.php?pesan=gagal_ditambahkan');
    }
?>