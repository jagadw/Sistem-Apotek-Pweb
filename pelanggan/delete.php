<?php
    include '../koneksi.php';
    if(isset($_GET['idpelanggan'])) {
        $idpelanggan = $_GET['idpelanggan'];
        // show form edit dengan data yang sudah diambil dari db
        $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE idpelanggan=$idpelanggan");
        $baris = mysqli_fetch_array($query);
        unlink("./images/".$baris['buktifotoresep']);
    }
        ?>

<?php
    if(isset($_GET['idpelanggan'])) {
        $idpelanggan = $_GET['idpelanggan'];

        $delete = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE idpelanggan='$idpelanggan'");

        if($delete) {
            header('location: ../dashboard.php?page=pelanggan&pesan=berhasil_diubah');
        } else {
            header('location: ../dashboard.php?page=pelanggan&pesan=gagal_diubah');
        }
        // var_dump($delete);
    }
?>