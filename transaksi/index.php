<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
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
    <br>
    <h1 align="center">TAMBAH TRANSAKSI</h1>
    <form action="proses.php" method="post">
    <table border="0" align="center">
        <tr>
            <td>ID Transaksi</td>
            <td><input name="idtransaksi" type="text"></td>
        </tr>
        <tr>
            <td>ID Pelanggan</td>
            <td><select name="idpelanggan" value="" id="">
            <?php
        include "../koneksi.php";
        $query = "SELECT * FROM tb_pelanggan";
        $data = mysqli_query($koneksi, $query);
        while($baris = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$baris['idpelanggan'];?>"><?=$baris['namapelanggan'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>
        <tr>
            <td>ID Karyawan</td>
            <td><select name="idkaryawan" value="" id="">
            <?php
        include "../koneksi.php";
        $query = "SELECT * FROM tb_karyawan";
        $data = mysqli_query($koneksi, $query);
        while($baris = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$baris['idkaryawan'];?>"><?=$baris['namakaryawan'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td>
            <td><input name="tgltransaksi" type="date"></td>
        </tr>
        <tr>
            <td>Kategori Pelanggan</td>
            <td><input name="kategoripelanggan" type="text"></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td><input name="totalbayar" type="text"></td>
        </tr>
        <tr>
            <td>Bayar</td>
            <td><input name="bayar" type="text"></td>
        </tr>
        <tr>
            <td>Kembali</td>
            <td><input name="kembali" type="text"></td>
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