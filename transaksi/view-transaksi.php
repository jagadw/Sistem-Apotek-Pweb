<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Transaksi</title>
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
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1 align="center">TABEL TRANSAKSI</h1>
    <table border="3" align="center">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>ID Karyawan</th>
                <th>Tanggal Transaksi</th>
                <th>Kategori Pelanggan</th>
                <th>Total Bayar</th>
                <th>Bayar</th>
                <th>Kembali</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi ORDER BY idtransaksi DESC");
            while($baris = mysqli_fetch_assoc($query)) {
                $query_pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_pelanggan WHERE idpelanggan = '".$baris['idpelanggan']."'");
                $query_login = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_login WHERE idkaryawan = '".$baris['idkaryawan']."'");
                $query_karyawan = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_karyawan WHERE idkaryawan = '".$baris['idkaryawan']."'");

                $result_pelanggan = mysqli_fetch_assoc($query_pelanggan);
                $result_login = mysqli_fetch_assoc($query_login);
                $result_karyawan = mysqli_fetch_assoc($query_karyawan);

                if($result_pelanggan['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idtransaksi=".$baris['idtransaksi']."'>Edit</a></td>";
                } else if($result_login['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idtransaksi=".$baris['idtransaksi']."'>Edit</a></td>";
                } else if($result_karyawan['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idtransaksi=".$baris['idtransaksi']."'>Edit</a></td>";
                } else {
                    $delete_button = "<td id='delete'><a href='delete.php?idtransaksi=".$baris['idtransaksi']."'>Del</a></td>";
                    $edit_button = "<td id='edit'><a href='edit.php?idtransaksi=".$baris['idtransaksi']."'>Edit</a></td>";
                }
            ?>
            <tr>
                <td><?= $baris['idtransaksi']; ?></td>
                <td><?= $baris['idpelanggan']; ?></td>
                <td><?= $baris['idkaryawan']; ?></td>
                <td><?= $baris['tgltransaksi']; ?></td>
                <td><?= $baris['kategoripelanggan']; ?></td>
                <td><?= $baris['totalbayar']; ?></td>
                <td><?= $baris['bayar']; ?></td>
                <td><?= $baris['kembali']; ?></td>
                <?= $delete_button; ?>
                <?= $edit_button; ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>