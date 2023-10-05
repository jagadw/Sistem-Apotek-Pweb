<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
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
<h1 align="center">DETAIL TRANSAKSI</h1>
<form action="proses.php" method="post">
    <table align="center">
        <tr>
            <td>ID Detail Transaksi</td>
            <td><input type="text" name="iddetailtransaksi"></td>
        </tr>
        <tr>
            <td>ID Transaksi</td>
            <td><select name="idtransaksi" id="">
                <?php
                include '../koneksi.php';
                $query = "SELECT * FROM tb_transaksi";
                $data = mysqli_query($koneksi, $query);
                while($baris = mysqli_fetch_assoc($data)) {
                ?>
                <option value="<?= $baris['idtransaksi']?>"><?= $baris['tgltransaksi']?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>ID Obat</td>
            <td><select name="idobat" id="">
                <?php
                include '../koneksi.php';
                $query = "SELECT * FROM tb_obat";
                $data = mysqli_query($koneksi, $query);
                while($baris = mysqli_fetch_assoc($data)) {
                ?>
                <option value="<?= $baris['idobat']?>"><?= $baris['namaobat']?></option>
                <?php
                }
                ?>
            </select>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td><input type="text" name="hargasatuan"></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><input type="text" name="totalharga"></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Simpan" id="submit"></td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
    </table>
    </form>
</body>
</html>