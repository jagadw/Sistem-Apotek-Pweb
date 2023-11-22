<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
    body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
    overflow: hidden;
    background-color: #00adef;
    }

    .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    .topnav a:hover {
    background-color: #ff9800;
    color: black;
    }

    /* .topnav a.active {
    background-color: #ff9800;
    color: white;
    } */

    .topnav .icon {
    display: none;
    }

    @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
        float: right;
        display: block;
    }
    }

    @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
    }
    /* .dropdown hover {
        display: none;
        position: absolute;
    }
    .dropdown {
        display: block;
        text-decoration: none;
        background-color: #00adef;
        padding: 3px;
    } */
    #logout {
            background-color: #ffc107;
            padding: 5px;
        }
</style>
    <!-- Responsive CSS Navbar -->
    <div class="topnav" id="myTopnav">
        <a href="dashboard.php?page=obat" class="active">Obat</a>
        <a href="dashboard.php?page=karyawan">Karyawan</a>
        <a href="dashboard.php?page=pelanggan">Pelanggan</a>
        <a href="dashboard.php?page=supplier">Supplier</a>
        <a href="dashboard.php?page=detailtransaksi">Detail</a>
        <a href="dashboard.php?page=transaksi">Transaksi</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    </div>

    <!-- Content Here -->

    <script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    }
    </script>