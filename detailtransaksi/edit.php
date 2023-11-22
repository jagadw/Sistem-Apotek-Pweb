<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Detail Transaksi</title>
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
</head>
<body>
    <?php
            if(isset($_GET['iddetailtransaksi'])) {
            $idobat = $_GET['iddetailtransaksi'];
            $query = mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi INNER JOIN tb_transaksi USING(idtransaksi) WHERE idtransaksi=$idtransaksi");
            $baris = mysqli_fetch_assoc($query);
        ?>
            <h1 align="center">EDIT OBAT</h1>
            <form action="dashboard.php?page=editobat" method="post">
            <table align="center">
            <tr>
            <?php
        // include "../koneksi.php";
        $query = "SELECT * FROM tb_transaksi";
        $data = mysqli_query($koneksi, $query);
        while($baris = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$baris['idtransaksi'];?>"><?=$baris['idtransaksi'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>

        <tr>
            <?php
        // include "../koneksi.php";
        $query = "SELECT * FROM tb_obat";
        $data = mysqli_query($koneksi, $query);
        while($baris = mysqli_fetch_assoc($data)){
        ?>
        <option value="<?=$baris['idobat'];?>"><?=$baris['idobat'];?></option>
        <?php
        }
    ?>
            </select>
        </td>
        </tr>
        <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?= $baris['jumlah']?>"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="hargasatuan" value="<?= $baris['hargasatuan']?>"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="text" name="totalharga" value="<?= $baris['totalharga']?>"></td>
            </tr>
            </table>
        </form>
        <?php
    }
    ?>

    <?php
    // if(isset($_POST['edit'])) {
    //         $idobat = $_POST['idobat'];
    //         $idsupplier = $_POST['idsupplier'];
    //         $namaobat = $_POST['namaobat'];
    //         $kategoriobat = $_POST['kategoriobat'];
    //         $jumlah = $_POST['jumlah'];
    //         $hargasatuan = $_POST['hargasatuan'];
    //         $totalharga = $_POST['totalharga'];

    //         $edit = mysqli_query($koneksi, "UPDATE tb_obat SET idsupplier='$idsupplier', namaobat='$namaobat', kategoriobat='$kategoriobat', jumlah='$jumlah', hargasatuan='$hargasatuan', totalharga='$totalharga' WHERE idobat='$idobat'");

    //         if ($edit) {
    //             header('location: dashboard.php?page=obat&pesan=edit_berhasil');
    //             } else {
    //             header('location: dashboard.php?page=obat&pesan=edit_gagal');
    //             }        
    //     }
        ?>

</body>
</html>