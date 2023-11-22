<?php
    // include '../koneksi.php';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Edit Supplier</title>
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
    <?php
        if(isset($_GET['idsupplier'])) {
        $idsupplier = $_GET['idsupplier'];
        $query = mysqli_query($koneksi, "SELECT * FROM tb_supplier WHERE idsupplier=$idsupplier");
        $baris = mysqli_fetch_assoc($query);    
    ?>
    <h1 align="center">EDIT SUPPLIER</h1>
    <form action="dashboard.php?page=editsupplier" method="post">
        <table align="center">
            <tr>
                <!-- <td>ID Supplier</td> -->
                <td><input type="hidden" name="idsupplier" value="<?= $baris['idsupplier'];?>"></td>
            </tr>
            <tr>
                <td>Perusahaan</td>
                <td><input type="text" name="perusahaan" value="<?= $baris['perusahaan'];?>"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp" value="<?= $baris['telp'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $baris['alamat'];?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?= $baris['keterangan'];?>"></td>
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
        $idsupplier = $_POST['idsupplier'];
        $perusahaan = $_POST['perusahaan'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];
    
        $edit = mysqli_query($koneksi, "UPDATE tb_supplier SET idsupplier='$idsupplier', perusahaan='$perusahaan', telp='$telp', alamat='$alamat', keterangan='$keterangan' WHERE idsupplier='$idsupplier'");
    
        if ($edit) {
            header('location: dashboard.php?page=supplier&pesan=edit_berhasil');
        } else {
            header('location: dashboard.php?page=supplier&pesan=edit_gagal');
        }    
    }
    ?>
<!-- </body>
</html> -->