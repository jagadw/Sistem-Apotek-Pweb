<?php
    include '../koneksi.php';
    if(isset($_GET['idtransaksi'])) {
        $idtransaksi = $_GET['idtransaksi'];
        // show form edit dengan data yang sudah diambil dari db
        $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE idtransaksi=$idtransaksi");
        $baris = mysqli_fetch_array($query);
        ?>
        <?php
    } else {
        echo "ID transaksi tidak ditemukan";
    }
    ?>

<?php
    if(isset($_GET['idtransaksi'])) {
        $idtransaksi = $_GET['idtransaksi'];

        $delete = mysqli_query($koneksi, "DELETE FROM tb_transaksi WHERE idtransaksi='$idtransaksi'");

        if($delete) {
            header('location: view-transaksi.php?pesan=berhasil_diubah');
        } else {
            header('location: view-transaksi.php?pesan=gagal_diubah');
        }
        // var_dump($delete);
    }
?>