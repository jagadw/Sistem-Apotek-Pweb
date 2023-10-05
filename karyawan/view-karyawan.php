<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Karyawan</title>
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
    <h1 align="center">TABEL KARYAWAN</h1>
    <table border="3" align="center">
        <thead>
            <tr>
                <!-- <th>ID Karyawan</th> -->
                <th>Nama Karyawan</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
            while($baris = mysqli_fetch_assoc($query)) {
                $query_transaksi = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_transaksi WHERE idkaryawan = '".$baris['idkaryawan']."'");
                $query_login = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_login WHERE idkaryawan = '".$baris['idkaryawan']."'");

                $result_transaksi = mysqli_fetch_assoc($query_transaksi);
                $result_login = mysqli_fetch_assoc($query_login);

                if($result_transaksi['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idkaryawan=".$baris['idkaryawan']."'>Edit</a></td>";
                } else if($result_login['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idkaryawan=".$baris['idkaryawan']."'>Edit</a></td>";
                } else {
                    $delete_button = "<td id='delete'><a href='delete.php?idkaryawan=".$baris['idkaryawan']."'>Del</a></td>";
                    $edit_button = "<td id='edit'><a href='edit.php?idkaryawan=".$baris['idkaryawan']."'>Edit</a></td>";
                }
            ?>
            <tr>
                <td><?= $baris['namakaryawan']; ?></td>
                <td><?= $baris['alamat']; ?></td>
                <td><?= $baris['telp']; ?></td>
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