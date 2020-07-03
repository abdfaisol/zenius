<?php
include "backend/koneksi.php";
include "backend/sesi.php";
if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/zenius/login.php");
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>phone-number</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="assets/css/ph.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container d-flex justify-content-xl-center align-items-xl-center" style="margin-top: 25px;">
            <div class="ph-min" style="font-family: Montserrat, sans-serif;">
                <div style="postion:relative; overflow: hidden"><a class="link-zen-black" href="#" style="float: right;font-size: 14px;">SKIP</a></div>
                <img src="assets/img/1.png" style="margin: 0 auto; display:block">
                <h5 style="text-align:center; font-weight:bolder"><strong>Masukkan nomor HP kamu</strong><br></h5>
                <p style="text-align: center;font-size: 12px;">Kami akan mengirimkan 4 digit kode verifikasi<br></p>
                <form method="POST" action="daftarhp.php">
                    <div class="fm"><input class="form-control icot-input-induk" name="hp" type="text" placeholder="masukkan nomor telepon kamu" style="font-size: 12px;" required><span class="icot-input" style="font-size: 12px;">+62</span></div><button class="btn btn-primary form-control btn-min-zen"
                    type="submit" style="font-size: 14px;margin-top: 7rem;">Kirim</button>
                </form>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>