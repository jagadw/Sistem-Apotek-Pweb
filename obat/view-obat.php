<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Obat</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        td {
            margin: 8px;
        }
        table {
            border-collapse: collapse;
            box-shadow: 0 3px 20px rgba(0,0,0,0.3);
            /* padding: 20px;
            padding-bottom: 30px;
            font-weight: bolder; */
            border-radius: 8px;
        }
        h1 {
            color: #ff9800;
        }
        #edit {
            background-color: #ffc107;
        }
        #delete {
            background-color: #dc3545;
        }
        #logout {
            background-color: #ffc107;
            padding: 5px;
        }
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }
    $username = $_SESSION['username'];
    $login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username'");
    $logged = mysqli_fetch_assoc($login);
    ?>
    <h3>Selamat Datang! Kak <?= $logged['username']; ?></h3>
    <p><a id="logout" href="../logout.php">Logout</a></p>
    <h1 align="center">TABEL OBAT</h1>
    <table border="3" align="center">
        <thead>
            <tr>
                <!-- <th>ID Obat</th> -->
                <th>Perusahaan</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok Obat</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_supplier USING(idsupplier) ORDER BY idobat DESC");
            while($baris = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $baris['perusahaan']; ?></td>
                <td><?= $baris['namaobat']; ?></td>
                <td><?= $baris['kategoriobat']; ?></td>
                <td><?= $baris['hargajual']; ?></td>
                <td><?= $baris['hargabeli']; ?></td>
                <td><?= $baris['stok_obat']; ?></td>
                <td><?= $baris['keterangan']; ?></td>
                <td id="delete"><a href="delete.php?idobat=<?= $baris['idobat']; ?>">Del</a></td>
                <td id="edit"><a href="edit.php?idobat=<?= $baris['idobat']; ?>">Edit</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>