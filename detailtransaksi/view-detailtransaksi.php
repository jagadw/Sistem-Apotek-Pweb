<?php
    // include '../koneksi.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>TABEL DETAIL TRANSAKSI</title>
    <style>
        /* * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        } */
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
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
<!-- </head>
<body> -->
    <h1 align="center">TABEL DETAIL TRANSAKSI</h1>
    <table border="3" cellpadding="3" width="80%" align="center">
        <thead>
            <tr>
                <th>ID Detail Transaksi</th>
                <th>ID Transaksi</th>
                <th>ID Obat</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // include '../koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi ORDER BY iddetailtransaksi DESC");
            while($baris = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $baris['iddetailtransaksi']?></td>
                <td><?= $baris['idtransaksi']?></td>
                <td><?= $baris['idobat']?></td>
                <td><?= $baris['jumlah']?></td>
                <td><?= $baris['hargasatuan']?></td>
                <td><?= $baris['totalharga']?></td>
                <td id="edit"><a href="dashboard.php?page=editdetailtransaksi&iddetailtransaksi=<?= $baris['iddetailtransaksi']?>">Edit</a></td>
                <td id="delete"><a href="./detailtransaksi/delete.php?iddetailtransaksi=<?= $baris['iddetailtransaksi']?>">Del</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<!-- </body>
</html> -->