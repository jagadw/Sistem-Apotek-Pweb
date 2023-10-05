<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
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
<h1 align="center">ADD KARYAWAN</h1>
<form action="proses.php" method="post">
    <table align="center">
        <!-- <tr>
            <td>ID Karyawan</td>
            <td><input type="text" name="idkaryawan"></td>
        </tr> -->
        <tr>
            <td>Nama Karyawan</td>
            <td><input type="text" name="namakaryawan"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td><input type="text" name="telp"></td>
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