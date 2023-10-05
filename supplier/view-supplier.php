<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Supplier</title>
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
    <h1 align="center">TABEL SUPPLIER</h1>
    <table border="3" align="center">
        <thead>
            <tr>
                <!-- <th>ID Supplier</th> -->
                <th>Perusahaan</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_supplier");
            while($baris = mysqli_fetch_assoc($query)) {
                // Memeriksa apakah idsupplier ditemukan pada tb_obat
                $query_obat = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_obat WHERE idsupplier = '".$baris['idsupplier']."'");
                $result_obat = mysqli_fetch_assoc($query_obat);
                if($result_obat['total'] > 0) {
                    $delete_button = "";
                    $edit_button = "<td align='center' colspan='2' id='edit'><a href='edit.php?idsupplier=".$baris['idsupplier']."'>Edit</a></td>";
                } else {
                    $delete_button = "<td id='delete'><a href='delete.php?idsupplier=".$baris['idsupplier']."'>Del</a></td>";
                    $edit_button = "<td id='edit'><a href='edit.php?idsupplier=".$baris['idsupplier']."'>Edit</a></td>";
                }
            ?>
            <tr>
                <td><?= $baris['perusahaan']; ?></td>
                <td><?= $baris['telp']; ?></td>
                <td><?= $baris['alamat']; ?></td>
                <td><?= $baris['keterangan']; ?></td>
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