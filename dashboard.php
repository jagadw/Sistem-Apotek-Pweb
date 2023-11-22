<?php
    include_once './template/header.php';
    include_once './template/navbar.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }
    $username = $_SESSION['username'];
    $login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username'");
    $logged = mysqli_fetch_assoc($login);
    ?>
    <h3>Selamat Datang! Kak <?= $logged['username']; ?></h3>
    <p><a id="logout" href="logout.php">Logout</a></p>

<?php
    switch($_GET['page']) {
    case 'main':
    break;
    case 'obat':
        include_once './obat/view-obat.php';
    break;
    case 'addobat':
        include_once './obat/index.php';
    break;
    case 'editobat':
        include_once './obat/edit.php';
    break;
    case 'karyawan':
        include_once './karyawan/view-karyawan.php';
    break;
    case 'addkaryawan':
        include_once './karyawan/index.php';
    break;
    case 'editkaryawan':
        include_once './karyawan/edit.php';
    break;
    case 'pelanggan':
        include_once './pelanggan/view-pelanggan.php';
    break;
    case 'addpelanggan':
        include_once './pelanggan/index.php';
    break;
    case 'editpelanggan':
        include_once './pelanggan/edit.php';
    break;
    case 'supplier':
        include_once './supplier/view-supplier.php';
    break;
    case 'addsupplier':
        include_once './supplier/index.php';
    break;
    case 'editsupplier':
        include_once './supplier/edit.php';
    break;
    case 'transaksi':
        include_once './transaksi/view-transaksi.php';
    break;
    case 'addtransaksi':
        include_once './transaksi/index.php';
    break;
    case 'edittransaksi':
        include_once './transaksi/edit.php';
    break;
    case 'detailtransaksi':
        include_once './detailtransaksi/view-detailtransaksi.php';
    break;
    case 'adddetailtransaksi':
        include_once './detailtransaksi/index.php';
    break;
    case 'editdetailtransaksi':
        include_once './detailtransaksi/edit.php';
    break;
    default;
}
include_once './template/footer.php';
?>