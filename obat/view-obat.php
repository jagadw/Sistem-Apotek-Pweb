<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tabel Obat</title>
    <style>
        /* * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        } */
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
        .addobat {
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .addobat a {
            background-color: #00adef;
            border-radius: 8px;
            color: #fff;
            padding: 8px;
            font-weight: bold;
        }
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
<!-- </head>
<body> -->
    <?php
    // session_start();

    // if (!isset($_SESSION['username'])) {
    //     header("location: index.php");
    // }
    // $username = $_SESSION['username'];
    // $login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username'");
    // $logged = mysqli_fetch_assoc($login);
    ?>
    <!-- <h3>Selamat Datang! Kak <?= $logged['username']; ?></h3>
    <p><a id="logout" href="../logout.php">Logout</a></p> -->
    <h1 align="center">TABEL OBAT</h1>
    <div class="addobat">
        <a href="dashboard.php?page=addobat">Tambah</a>
    </div>
    <br>
    <table border="3" cellpadding="3" width="80%" align="center">
        <thead>
            <tr>
                <!-- <th>ID Obat</th> -->
                <th>Perusahaan</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok Obat</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_supplier USING(idsupplier) ORDER BY idobat DESC");
            while($baris = mysqli_fetch_assoc($query)) {
            $idobat = $baris['idobat'];
            $hide_delete = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_detail_transaksi ON tb_obat.idobat = tb_detail_transaksi.idobat WHERE tb_obat.idobat = $idobat");
            $cek = mysqli_num_rows($hide_delete);
            ?>
            <tr>
                <td><?= $baris['perusahaan']; ?></td>
                <td><?= $baris['namaobat']; ?></td>
                <td><?= $baris['kategoriobat']; ?></td>
                <td><?= $baris['hargajual']; ?></td>
                <td><?= $baris['hargabeli']; ?></td>
                <td><?= $baris['stok_obat']; ?></td>
                <td><?= $baris['keterangan']; ?></td>
                <?php
            // var_dump($cek);
            if($cek==0){
                ?>
                <td id="delete"><a href="./obat/delete.php?idobat=<?=$idobat?>">Del</a></td>
                <td id="edit"><a href="dashboard.php?page=editobat&idobat=<?=$idobat?>">Edit</a></td>
                <?php
            } else {
                ?>
                <td colspan="2" id="edit"><a href="dashboard.php?page=editobat&idobat=<?=$idobat;?>">Edit</a></td>
                <?php
                }
                ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<!-- </body>
</html> -->