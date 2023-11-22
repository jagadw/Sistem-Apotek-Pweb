<?php
    include '../koneksi.php';
    if(isset($_GET['idsupplier'])) {
        $idsupplier = $_GET['idsupplier'];
        // show form edit dengan data yang sudah diambil dari db
        $query = mysqli_query($koneksi, "SELECT * FROM tb_supplier WHERE idsupplier=$idsupplier");
        $baris = mysqli_fetch_array($query);
        ?>
        <?php
    } else {
        echo "ID supplier tidak ditemukan";
    }
    ?>

<?php
    if(isset($_GET['idsupplier'])) {
        $idsupplier = $_GET['idsupplier'];
        // $perusahaan = $_POST['perusahaan'];
        // $namasupplier = $_POST['namasupplier'];
        // $kategorisupplier = $_POST['kategorisupplier'];
        // $hargajual = $_POST['hargajual'];
        // $hargabeli = $_POST['hargabeli'];
        // $stok_supplier = $_POST['stok_supplier'];
        // $keterangan = $_POST['keterangan'];

        $delete = mysqli_query($koneksi, "DELETE FROM tb_supplier WHERE idsupplier='$idsupplier'");

        if($delete) {
            header('location: ../dashboard.php?page=supplier&pesan=berhasil_diubah');
        } else {
            header('location: ../dashboard.php?page=supplier&pesan=gagal_diubah');
        }
        // var_dump($delete);
    }
?>