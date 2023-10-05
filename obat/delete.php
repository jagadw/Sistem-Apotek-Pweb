<?php
    include '../koneksi.php';
    if(isset($_GET['idobat'])) {
        $idobat = $_GET['idobat'];
        // show form edit dengan data yang sudah diambil dari db
        $query = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_supplier USING(idsupplier) WHERE idobat=$idobat");
        $baris = mysqli_fetch_array($query);
        ?>
        <?php
    } else {
        echo "ID obat tidak ditemukan";
    }
    ?>

<?php
    if(isset($_GET['idobat'])) {
        $idobat = $_GET['idobat'];
        // $perusahaan = $_POST['perusahaan'];
        // $namaobat = $_POST['namaobat'];
        // $kategoriobat = $_POST['kategoriobat'];
        // $hargajual = $_POST['hargajual'];
        // $hargabeli = $_POST['hargabeli'];
        // $stok_obat = $_POST['stok_obat'];
        // $keterangan = $_POST['keterangan'];

        $delete = mysqli_query($koneksi, "DELETE FROM tb_obat WHERE idobat='$idobat'");

        if($delete) {
            header('location: view-obat.php?pesan=berhasil_diubah');
        } else {
            header('location: view-obat.php?pesan=gagal_diubah');
        }
    }
?>