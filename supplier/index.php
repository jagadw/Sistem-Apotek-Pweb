<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tambah Supplier</title>
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
    <h1 align="center">TAMBAH SUPPLIER</h1>
    <form action="./supplier/proses.php" method="post">
    <table border="0" align="center">
        <!-- <tr>
            <td>ID Supplier</td>
            <td><input name="idsupplier" type="text"></td>
        </tr> -->
        <tr>
            <td>Perusahaan</td>
            <td><input name="perusahaan" type="text"></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td><input name="telp" type="text"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input name="alamat" type="text"></td>
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