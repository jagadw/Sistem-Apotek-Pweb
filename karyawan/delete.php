<?php
    include '../koneksi.php';
    if(isset($_GET['idkaryawan'])) {
        $idkaryawan = $_GET['idkaryawan'];
        // show form edit dengan data yang sudah diambil dari db
        $query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE idkaryawan=$idkaryawan");
        $baris = mysqli_fetch_array($query);
        ?>
        <?php
    } else {
        echo "ID karyawan tidak ditemukan";
    }
    ?>

<?php
    if(isset($_GET['idkaryawan'])) {
        $idkaryawan = $_GET['idkaryawan'];
        // $perusahaan = $_POST['perusahaan'];
        // $namakaryawan = $_POST['namakaryawan'];
        // $kategorikaryawan = $_POST['kategorikaryawan'];
        // $hargajual = $_POST['hargajual'];
        // $hargabeli = $_POST['hargabeli'];
        // $stok_karyawan = $_POST['stok_karyawan'];
        // $keterangan = $_POST['keterangan'];

        // Cara ambil sintaks mysql lewat var_dump($delete);
        // mysqli_query($koneksi dihilangin
        // $delete = "DELETE FROM tb_karyawan WHERE idkaryawan='$idkaryawan'";

        $delete = mysqli_query($koneksi, "DELETE FROM tb_karyawan WHERE idkaryawan='$idkaryawan'");

        if($delete) {
            header('location: view-karyawan.php?pesan=berhasil_diubah');
        } else {
            header('location: view-karyawan.php?pesan=gagal_diubah');
        }
        // var_dump($delete);
    }
?>