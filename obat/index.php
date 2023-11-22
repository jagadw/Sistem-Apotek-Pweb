<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tambah Obat</title>
    <style>
        /* * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        } */
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
<!-- </head>
<body> -->
    <br>
    <h1 align="center">TAMBAH OBAT</h1>
    <form action="./obat/proses.php" method="post">
    <table border="0" align="center">
        <!-- <tr>
            <td>Id Obat</td>
            <td><input name="idobat" type="text"></td>
        </tr> -->
        <tr>
            <td>Id Supplier</td>
            <td><select name="idsupplier" value="" id="">
            <?php
        // include "../koneksi.php";
        $query = "SELECT * FROM tb_supplier";
        $data = mysqli_query($koneksi, $query);
        while($baris = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$baris['idsupplier'];?>"><?=$baris['perusahaan'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input name="namaobat" type="text"></td>
        </tr>
        <tr>
            <td>Kategori Obat</td>
            <td><input name="kategoriobat" type="text"></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><input name="hargajual" type="text"></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><input name="hargabeli" type="text"></td>
        </tr>
        <tr>
            <td>Stok Obat</td>
            <td><input name="stok_obat" type="text"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input name="keterangan" type="text"></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Simpan" id="submit"></td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>

    </table>
    </form>

<!-- </body>
</html> -->