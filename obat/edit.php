<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        table {
            box-shadow: 0 3px 20px rgba(0,0,0,0.3);
            padding: 20px;
            padding-bottom: 30px;
            font-weight: bolder;
            border-radius: 8px;
        }
        td input, select {
            margin-bottom: 8px;
            margin-left: 10px;
            border-radius: 5px;
            padding-bottom: 8px;
        }
        h1 {
            color: #ff9800;
        }
        #submit {
            margin-top: 10px;
            background-color: #00adef;
            border-radius: 8px;
            color: #fff;
            border-color: #019eed;
            padding: 10px;
            font-weight: bold;
        }
        hr {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_GET['idobat'])) {
        $idobat = $_GET['idobat'];
        $query = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_supplier USING(idsupplier) WHERE idobat=$idobat");
        $baris = mysqli_fetch_assoc($query);
        ?>
        <h1 align="center">EDIT OBAT</h1>
        <form action="edit.php" method="post">
        <table align="center">
            <tr>
                <td><input type="hidden" name="idobat" value="<?= $baris['idobat']?>"></td>
            </tr>
            <tr>
            <td>Id Supplier</td>
            <td><select name="idsupplier" value="" id="">
            <?php
        include "../koneksi.php";
        $query2 = "SELECT * FROM tb_supplier";
        $data = mysqli_query($koneksi, $query2);
        while($barissup = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$barissup['idsupplier'];?>"><?=$barissup['perusahaan'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>
            <tr>
                <td>Nama Obat</td>
                <td><input type="text" name="namaobat" value="<?= $baris['namaobat']?>"></td>
            </tr>
            <tr>
                <td>Kategori Obat</td>
                <td><input type="text" name="kategoriobat" value="<?= $baris['kategoriobat']?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="hargajual" value="<?= $baris['hargajual']?>"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="hargabeli" value="<?= $baris['hargabeli']?>"></td>
            </tr>
            <tr>
                <td>Stok Obat</td>
                <td><input type="text" name="stok_obat" value="<?= $baris['stok_obat']?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?= $baris['keterangan']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="edit" id="submit"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
        </form>
        <?php
    }

    if(isset($_POST['edit'])) {
        $idobat = $_POST['idobat'];
        $idsupplier = $_POST['idsupplier'];
        $namaobat = $_POST['namaobat'];
        $kategoriobat = $_POST['kategoriobat'];
        $hargajual = $_POST['hargajual'];
        $hargabeli = $_POST['hargabeli'];
        $stok_obat = $_POST['stok_obat'];
        $keterangan = $_POST['keterangan'];

        $edit = mysqli_query($koneksi, "UPDATE tb_obat SET idsupplier='$idsupplier', namaobat='$namaobat', kategoriobat='$kategoriobat', hargajual='$hargajual', hargabeli='$hargabeli', stok_obat='$stok_obat', keterangan='$keterangan' WHERE idobat='$idobat'");

        if ($edit) {
            header('location: view-obat.php?pesan=edit_berhasil');
            } else {
            header('location: view-obat.php?pesan=edit_gagal');
            }        
    }
    ?>
</body>
</html>