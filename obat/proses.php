<?php
    include '../koneksi.php';
    // $idobat = $_POST['idobat'];
    $idsupplier = $_POST['idsupplier'];
    $namaobat = $_POST['namaobat'];
    $kategoriobat = $_POST['kategoriobat'];
    $hargajual = $_POST['hargajual'];
    $hargabeli = $_POST['hargabeli'];
    $stok_obat = $_POST['stok_obat'];
    $keterangan = $_POST['keterangan'];

    // cek apakah sudah masuk
    // echo "$idsupplier";
    // echo "$namaobat";
    // echo "$kategoriobat";
    // echo "$hargajual";
    // echo "$hargabeli";
    // echo "$stok_obat";
    // echo "$keterangan";

    // Dari Wdclogin
    // $query = "INSERT INTO tb_obat (idobat, idsupplier, namaobat, kategoriobat, hargajual, hargabeli, stok_obat, keterangan)
    // VALUES (NULL, '$idsupplier', '$namaobat', '$kategoriobat', '$hargajual', '$hargabeli', '$stok_obat', '$keterangan')";
    // $push = mysqli_query($koneksi, $query);

    // Diajarin pak arie
    $query = mysqli_query($koneksi, "INSERT INTO tb_obat (idobat, idsupplier, namaobat, kategoriobat, hargajual, hargabeli, stok_obat, keterangan)
    VALUES (NULL, '$idsupplier', '$namaobat', '$kategoriobat', '$hargajual', '$hargabeli', '$stok_obat', '$keterangan')");

    // if(!$query) {
    // echo "Gagal memasukan data obat". mysqli_connect_error($koneksi);
    // }

    if($query) {
        header('location: ../dashboard.php?page=obat&pesan=berhasil_ditambahkan');
    }else{
        header('location: ../dashboard.php?page=obat&pesan=gagal_ditambahkan');
    }
?>