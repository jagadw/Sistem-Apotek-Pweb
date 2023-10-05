<?php
    // include '../koneksi.php';
    // // print_r($_POST);
    // $idpelanggan = $_POST['idpelanggan'];
    // $namapelanggan = $_POST['namapelanggan'];
    // $alamat = $_POST['alamat'];
    // $telp = $_POST['telp'];
    // $usia = $_POST['usia'];
    // $buktifotoresep = $_POST['buktifotoresep'];

    // $query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan
    // VALUES ('$idpelanggan', '$namapelanggan', '$alamat', '$telp', '$usia', '$buktifotoresep')");

    // if($query) {
    //     header('location: view-pelanggan.php?pesan=berhasil_ditambahkan');
    // } else {
    //     header('location: index.php?pesan=gagal_ditambahkan');
    // }

    include '../koneksi.php';
    // print_r($_POST); 
    // $idpelanggan = $_POST['idpelanggan'];
    $namapelanggan = $_POST['namapelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $usia = $_POST['usia'];
    $buktifotoresep = $_FILES['buktifotoresep']['name'];
    $file_tmp = $_FILES['buktifotoresep']['tmp_name'];
    move_uploaded_file($file_tmp, "./images/".$buktifotoresep);

    $query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES (NULL, '$namapelanggan', '$alamat', '$telp', '$usia', '$buktifotoresep')");

    // cara cek error atau comot codingan ke SQL di phpmyadmin untuk liat keterangan errornya
    // var_dump($buktifotoresep);

    // cara cek keterangan foto sudah sesuai atau tidaknya
    // $idpelanggan = isset($_POST['idpelanggan']) ? $_POST['idpelanggan'] : '';
    // $buktifotoresep = isset($_FILES['buktifotoresep']['name']) ? $_FILES['buktifotoresep']['name'] : '';

    if($query) {
        header('location: view-pelanggan.php?pesan=berhasil_ditambahkan');
    } else {
        header('location: index.php?pesan=gagal_ditambahkan');
    }
?>