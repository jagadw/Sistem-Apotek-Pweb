<?php
    include '../koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan ORDER BY idpelanggan DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pelanggan</title>
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
    echo "Selamat Datang! Kak ".$_COOKIE['username'];
    ?>
    <p><a id="logout" href="../logout.php">Logout</a></p>

    <h1 align="center">TABEL PELANGGAN</h1>
    <table border="3" align="center">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Usia</th>
                <th>Bukti Foto Resep</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($baris = mysqli_fetch_assoc($query)) {
            $idpelanggan = $baris['idpelanggan'];
            $query2 = mysqli_query($koneksi, "SELECT * FROM tb_transaksi INNER JOIN tb_pelanggan USING (idpelanggan) WHERE idpelanggan = $idpelanggan");
            $cek = mysqli_num_rows($query2);
            ?>
            <tr>
                <td><?= $baris['idpelanggan']; ?></td>
                <td><?= $baris['namapelanggan']; ?></td>
                <td><?= $baris['alamat']; ?></td>
                <td><?= $baris['telp']; ?></td>
                <td><?= $baris['usia']; ?></td>
                <td><a href="./images/<?= $baris['buktifotoresep']; ?>"><img src="./images/<?= $baris['buktifotoresep']; ?>" alt="<?= $baris['buktifotoresep']; ?>" width="300px" height="300px"></a></td>
            <?php
            if ($cek==0) {
                ?>
                <td id="edit"><a href="edit.php?idpelanggan=<?= $baris['idpelanggan']; ?>">Edit</a></td>
                <td id="delete"><a href="delete.php?idpelanggan=<?= $baris['idpelanggan']; ?>">Del</a></td>
                <?php
            } else {
                ?>
                <td colspan="2" id="edit"><a href="edit.php?idpelanggan=<?= $baris['idpelanggan']; ?>">Edit</a></td>
                <?php
                }
            ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>