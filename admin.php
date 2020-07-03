<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: Montserrat, sans-serif;">
    <div class="menu-min d-flex flex-column" style="background-color: rgba(247,247,247,0.39);padding: 15px 25px;">
        <div class="radius-min" style="padding: 15px;background-color: #585edc;">
            <a href="#" style="color: white;">
                <h5><i class="far fa-user" style="margin-right: 15px;"></i>Admin</h5>
            </a>
        </div>
        <div style="padding: 15px;margin: 25px 0;">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#sc-data">Search Data</a></li>
                <li><a href="#gt-vc">Get Code</a></li>
                <li><a href="#cf-vc">Konfirmasi Code</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </div>
    </div>
    <div class="d-flex flex-row" style="width: 100%;padding: 25px 0;">
        <div class="wrapper-admin flex-grow-1">
            <div class="d-flex flex-row">
                <div id="mini-chart-min" class="radius-min">
                    <h4>Pengunjung</h4>
                    <h1>17 K</h1>
                </div>
                <div id="mini-chart-min" class="radius-min">
                    <h4>Total Page</h4>
                    <h1>17 K</h1>
                </div>
            </div>
            <div class="d-flex flex-row" style="margin: 25px 0;">
                <form style="width: 80%; font-size: 14px" method="post" action="backend/posting.php">
                    <p style="margin: 10px 0;">Publikasi Artikel Blog</p>
                    <input class="form-control" type="text" placeholder="Judul Artikel" name="judul">
                    <textarea class="form-control" placeholder="summary" style="margin: 15px 0;" name="summary"></textarea>
                    <textarea class="form-control" placeholder="Tulis isi artikelmu"style="margin: 15px 0;min-height: 150px;" name="artikel"></textarea>
                    <button class="btn btn-primary" type="submit">Publikasi</button>
                </form>
            </div>
            <div id="sc-data" class="d-flex flex-row" style="margin: 25px 0;">
                <form style="width: 80%; font-size: 14px">
                    <p style="margin: 10px 0;">Search Data</p>
                    <div class="d-flex flex-row" style="margin: 15px 0;"><input class="form-control" type="text" placeholder="key pencarian" style="margin-right: 10px;"><input class="form-control" type="text" placeholder="target"></div><button class="btn btn-primary form-control" type="button">Tambah Data</button></form>
            </div>
            <div id="gt-vc" class="d-flex flex-row" style="margin: 25px 0;">
                <form style="width: 80%; font-size: 14px">
                    <p style="margin: 10px 0;">Get E-Voucher</p>
                    <div class="d-flex flex-row" style="margin: 15px 0;"><input class="form-control" type="text" placeholder="email"><input class="form-control form-control" type="button"></div><button class="btn btn-primary form-control" type="button">Get Code</button></form>
            </div>
            <div id="cf-vc" class="d-flex flex-row" style="margin: 25px 0;">
                <form style="width: 80%; font-size: 14px">
                    <p style="margin: 10px 0;">Konfirmasi Voucher</p>
                    <div class="d-flex flex-row" style="margin: 15px 0;"><input class="form-control" type="text" placeholder="Code Voucher"></div><button class="btn btn-primary form-control" type="button">Konfirmasi</button></form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>