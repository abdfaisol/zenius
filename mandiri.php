<!doctype html>
<?php
include "backend/koneksi.php";
include "backend/sesi.php";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="mandiri.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://www.zenius.net/wp-content/uploads/2020/03/zenius-1.png">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Belajar Mandiri</title>
  </head>
  <body>
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="head">
            <div class="head1 full-w flex centerMargin">
                <a href="http://localhost/zenius"><img src="img/logo-zeniusnet3.png" height="63"></a>
                <div class="head2">
                    <ul>
                        <?php 
                        $linku = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        ?>
                        <?php 
                        if (!isset($_SESSION['email'])) {
        // ـJika tidak ada sesi
                            ?>
                        <li><a href="daftar.php?return=<?=$linku ?>">SIGN UP</a></li>
                        <li><a href="login.php?return=<?=$linku ?>">LOG IN</a></li>
                        <li>MEMBERSHIP <i class="fas fa-angle-down"></i>
                            <ul>
                                <li><a href="membership.php">Beli</a></li>
                                <li><a href="http://localhost/zenius">Konfirmasi Pembayaran</a></li>
                                <li><a href="aktivasi.php">Aktivasi</a></li>
                            </ul>
                        </li>
                        <?php
                    }else{
                        $email = $_SESSION['email'];
                        $data = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM member WHERE email = '$email'"));
                        $timeoff = (int)$data['timeoff'];
                        ?>
                        <li id="userku">HALO, <?=$data['nickname'] ?> <i style="margin-right: 10px" class="fas fa-angle-down"></i> <i class="far fa-user"></i>
                            <ul>
                                <li id="titleUser"> <?=$data['nickname'] ?> <br> <p id="statusUserKu"><?php if ($timeoff < time()) {echo "Regular";}else{echo "Premium";} ?></p></li>
                                <li id="titleUser">AKUN SAYA</li>
                                <li><a href="profil.php">Edit Profile</a></li>
                                <li><a href="help.php">Bantuan</a></li>
                                <li id="titleUser">MEMBERSHIP</li>
                                <li><a href="membership.php">Beli</a></li>
                                <li><a href="konfirmasi.php">Konfirmasi Pembayaran</a></li>
                                <li><a href="aktivasi.php">Aktivasi</a></li>
                                <li id="titleUser" class="except"><a href="logout.php">Sign Out</a></li>
                            </ul>
                        </li>
                        <?php 
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wr full-w">
            <div class="menu relative full-w">
                <div class="menucontainer">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- SD -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SD <i class="abs-center fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="item-sub">
                                        <li>
                                            <div class="relative full-w full-h">
                                                <div class="ctnmenu menu full-w">
                                                    <ul class="wrapmenu flex">
                                                        <li class="grow">
                                                            <div class="flex directionFlexRow">
                                                                <div class="submenu col-sm-2">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#kelas1">kelas 1<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas2">kelas 2<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas3">kelas 3<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas4">kelas 4<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas5">kelas 5<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas6">kelas 6<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#UN">UN SD<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <!-- Isi Sub -->
                                                                <div class="contentsub container-fluid" id="kelas1">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="#">Kelas 1 SD</a></li>
                                                                                <li><a href="materi.php">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas2">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="#">Kelas 2 SD</a></li>
                                                                                <li><a href="materi.php">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas3">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kelas 3 SD</a></li>
                                                                                <li><a href="materi.php">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas4">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kelas 4 SD</a></li>
                                                                                <li><a href="materi.php">Matematika</a></li>
                                                                                <li><a href="materi.php">Sains</a></li>
                                                                                <li><a href="materi.php">Bahasa Inggris</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas5">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Kelas 5 SD</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>Sains</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas6">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Kelas 6 SD</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>Sains</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="UN">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>UN SD</a></li>
                                                                                <li><a>UN SD Matematika</a></li>
                                                                                <li><a>UN SD Sains</a></li>
                                                                                <li><a>UN SD Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- SMP -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SMP <i class="abs-center fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="item-sub">
                                        <li>
                                            <div class="relative full-w full-h">
                                                <div class="ctnmenu menu full-w">
                                                    <ul class="wrapmenu flex">
                                                        <li class="grow">
                                                            <div class="flex directionFlexRow">
                                                                <div class="submenu col-sm-2">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#kelas1">kelas 7<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas2">kelas 8<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas3">kelas 9<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#UN">UN SMP<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- Isi Sub -->
                                                                <div class="contentsub container-fluid" id="kelas1">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">KTSP</a></li>
                                                                                <li><a href="materi.php" >Matematika</a></li>
                                                                                <li><a href="materi.php">Fisika</a></li>
                                                                                <li><a href="materi.php">Biologi</a></li>
                                                                                <li><a href="materi.php">Bahasa Inggris</a></li>
                                                                                <li><a href="materi.php">Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kurikulum 2013</a></li>
                                                                                <li><a href="/cg/641/matematika-smp-kelas-7-kurikulum-2013" >Matematika</a></li>
                                                                                <li><a href="/cg/1775/ipa-smp-kelas-7-kurikulum-2013" >IPA</a></li>
                                                                                <li><a href="/cg/644/bahasa-inggris-smp-kelas-7-kurikulum-2013" >Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/645/bahasa-indonesia-smp-kelas-7-kurikulum-2013" >Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas2">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">KTSP</a></li>
                                                                                <li><a href="/cg/33/matematika-smp-kelas-8">Matematika</a></li>
                                                                                <li><a href="/cg/31/fisika-smp-kelas-8">Fisika</a></li>
                                                                                <li><a href="/cg/32/biologi-smp-kelas-8">Biologi</a></li>
                                                                                <li><a href="/cg/30/bahasa-inggris-smp-kelas-8">Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/529/bahasa-indonesia-smp-kelas-8">Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kurikulum 2013</a></li>
                                                                                <li><a href="/cg/646/matematika-smp-kelas-8-kurikulum-2013">Matematika</a></li>
                                                                                <li><a href="/cg/1778/ipa-smp-kelas-8-kurikulum-2013">IPA</a></li>
                                                                                <li><a href="/cg/649/bahasa-inggris-smp-kelas-8-kurikulum-2013">Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/650/bahasa-indonesia-smp-kelas-8-kurikulum-2013">Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>                  
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas3">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">KTSP</a></li>
                                                                                <li><a href="/cg/1022/matematika-smp-kelas-9-kurikulum-2013">Matematika</a></li>
                                                                                <li><a href="/cg/1780/ipa-smp-kelas-9-kurikulum-2013">IPA</a></li>
                                                                                <li><a href="/cg/1026/bahasa-inggris-kelas-9-kurikulum-2013">Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/1025/bahasa-indonesia-kelas-9-smp-kurikulum-2013">Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kurikulum 2013</a></li>
                                                                                <li><a href="materi.php">Matematika</a></li>
                                                                                <li><a href="materi.php">IPA</a></li>
                                                                                <li><a href="materi.php">Bahasa Inggris</a></li>
                                                                                <li><a href="materi.php">Bahasa Indonesia</a></li>
                                                                            </ul>
                                                                        </div>                  
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="UN">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Persiapan per bab</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>IPA</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Soal UN SMP</a></li>
                                                                                <li><a>UN SMP Matematika</a></li>
                                                                                <li><a>UN SMP IPA</a></li>
                                                                                <li><a>UN SMP Bahasa Indonesia</a></li>
                                                                                <li><a>UN SMP Bahasa Inggris</a></li>
                                                                            </ul>
                                                                        </div>                  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- SMA -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SMA <i class="abs-center fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="item-sub">
                                        <li>
                                            <div class="relative full-w full-h">
                                                <div class="ctnmenu menu full-w">
                                                    <ul class="wrapmenu flex">
                                                        <li class="grow">
                                                            <div class="flex directionFlexRow">
                                                                <div class="submenu col-sm-2">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#kelas10">kelas 10<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas11">kelas 11<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#kelas12">kelas 12<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#unsma">UN SMA<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#unsmk">UN SMK<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#snmptn">SNMPTN</a>
                                                                        </li>


                                                                    </ul>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas10">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>KTSP</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                                <li><a>Kimia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah</a></li>                                                         
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Wajib</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013 Revisi</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Wajib</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas11">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>KTSP</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                                <li><a>Kimia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Sejarah</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                                <li><a>Kimia</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Wajib</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013 Revisi</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Wajib</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas12">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>KTSP</a></li>
                                                                                <li><a>Matematika</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sejarah</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Indonesia</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li><a>Kurikulum 2013 Revisi</a></li>
                                                                                <li><a>Matematika Wajib</a></li>
                                                                                <li><a>Matematika Peminatan</a></li>
                                                                                <li><a>Bahasa Inggris</a></li>
                                                                                <li><a>Bahasa Indonesia</a></li>
                                                                                <li><a>Fisika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia</a></li>
                                                                                <li><a>Biologi</a></li>
                                                                                <li><a>Ekonomi</a></li>
                                                                                <li><a>Sosiologi</a></li>
                                                                                <li><a>Geografi</a></li>
                                                                                <li><a>Sejarah Indonesia</a></li>
                                                                                <li><a>Sejarah Peminatan</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="unsma">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>UN SMA</a></li>
                                                                                <li><a>UN SMA Matematika IPA</a></li>
                                                                                <li><a>UN SMA Matematika IPS</a></li>
                                                                                <li><a>UN SMA Bahasa Inggris</a></li>
                                                                                <li><a>UN SMA Bahasa Indonesia</a></li>
                                                                                <li><a>UN SMA Fisika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>UN SMA Kimia</a></li>
                                                                                <li><a>UN SMA Biologi</a></li>
                                                                                <li><a>UN SMA Ekonomi</a></li>
                                                                                <li><a>UN SMA Geografi</a></li>
                                                                                <li><a>UN SMA Sosiologi</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="unsmk">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>UN SMK AKP</a></li>
                                                                                <li><a>UN SMK Matematika AKP</a></li>
                                                                                <li><a>UN SMK Bahasa Inggris AKP</a></li>
                                                                                <li><a>UN SMK Bahasa Indonesia AKP</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>UN SMK PSP</a></li>
                                                                                <li><a>UN SMK Matematika PSP</a></li>
                                                                                <li><a>UN SMK Bahasa Inggris PSP</a></li>
                                                                                <li><a>UN SMK Bahasa Indonesia PSP</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>UN SMK TKP</a></li>
                                                                                <li><a>UN SMK Matematika TKP</a></li>
                                                                                <li><a>UN SMK Bahasa Inggris TKP</a></li>
                                                                                <li><a>UN SMK Bahasa Indonesia TKP</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- UTBK -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        UTBK <i class="abs-center fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="item-sub">
                                        <li>
                                            <div class="relative full-w full-h">
                                                <div class="ctnmenu menu full-w">
                                                    <ul class="wrapmenu flex">
                                                        <li class="grow">
                                                            <div class="flex directionFlexRow">
                                                                <div class="submenu col-sm-2">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#learning">Zenius Learning</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tps">TPS UTBK<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#soshum">Soshum UTBK<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#saintek">Saintek UTBK<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#um">Ujian Mandiri<i class="abs-center fas fa-chevron-right"></i></a>
                                                                        </li>


                                                                    </ul>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="tps">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>TPS UTBK</a></li>
                                                                                <li><a>Penalaran Umum</a></li>
                                                                                <li><a>Soal Penalaran Umum</a></li>
                                                                                <li><a>Penalaran Verbal PBM dan PPU</a></li>
                                                                                <li><a>Soal Penalaran Verbal PBM dan PPU</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Pengetahuan Kuantitatif</a></li>
                                                                                <li><a>Soal Pengetahuan Kuantitatif</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="saintek">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Saintek UTBK</a></li>
                                                                                <li><a>Matematika IPA UTBK</a></li>
                                                                                <li><a>Soal Matematika IPA UTBK</a></li>
                                                                                <li><a>Fisika (Ringkas) UTBK</a></li>
                                                                                <li><a>Fisika (Lengkap) UTBK</a></li>
                                                                                <li><a>Soal Fisika UTBK</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Kimia UTBK</a></li>
                                                                                <li><a>Soal Kimia UTBK</a></li>
                                                                                <li><a>Biologi UTBK</a></li>
                                                                                <li><a>Soal Biologi UTBK</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="soshum">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Soshum UTBK</a></li>
                                                                                <li><a>Matematika Soshum UTBK</a></li>
                                                                                <li><a>Soal Matematika Soshum UTBK</a></li>
                                                                                <li><a>Materi Ekonomi UTBK</a></li>
                                                                                <li><a>Soal Ekonomi UTBK</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Materi Geografi UTBK</a></li>
                                                                                <li><a>Soal Geografi UTBK</a></li>
                                                                                <li><a>Materi Sejarah UTBK</a></li>
                                                                                <li><a>Soal Sejarah UTBK</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li class="fill"></li>
                                                                                <li><a>Materi Sosiologi UTBK</a></li>
                                                                                <li><a>Soal Sosiologi UTBK</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="um">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a>Ujian Mandiri</a></li>
                                                                                <li><a>SIMAK UI</a></li>
                                                                                <li><a>USM STAN</a></li>
                                                                                <li><a>UTUL UGM</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Blog -->
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <!-- Belajar Mandiri -->
                                <li class="nav-item">
                                    <a class="nav-link" href="mandiri.php">Belajar Mandiri</a>
                                </li>
                            </ul>
                            <form class="form-inline relative" method="POST" action="cari.php">
                                <input class="form-control" type="search" placeholder="Masukkan kode konten" name="ids" aria-label="Search">
                                <button class="cari" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir dari menu -->
    <!-- Belajar Mandiri -->
    <section class="content" id="id">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Panduan Mengelola Belajar Mandiri untuk guru, tersedia di bawah</h4>
                    <img src="img/Belajarmandiridirumah-homepage-2-copy.jpg" alt="">
                </div>

                <div class="col-sm-6">
                    <h2>Kenapa belajar mandiri di rumah?</h2>
                    <img src="img/Mockup-New-Zenius-App_Updated.png" alt="">
                </div>

                <div class="col-sm-6">
                    <h2>GRATIS TOTAL KE:</h2>
                    <p>Live Class Zenius. Tonton video pembelajaran Zenius dan bertanya langsung ke tutor-tutor terbaik Zenius.</p>
                    <p>Rencana Belajar GRATIS. Bantu proses belajar kamu jadi terstruktur dan terarah.</p>
                    <p>Puluhan ribu video materi belajar lengkap untuk SD, SMP, SMA untuk kurikulum KTSP, Kurikulum 2013, Kurikulum 2013 Revisi</p>
                    <p>Puluhan ribu video materi belajar lengkap untuk persiapan UNBK, UTBK, SPMB STAN, SIMAK UI, dan UTUL UGM.</p>
                    <p>Ratusan ribu latihan soal, ulangan harian, dan persiapan ujian yang disertai dengan video pembahasan.</p>
                    <p>Pengajaran yang santai dan bikin gampang paham</p>
                    <p>Berpengalaman dan telah mengantarkan ratusan ribu pelajar meraih cita-citanya</p>
                </div>

                <div class="col-sm-12">
                    <h2>Pengalaman mereka belajar mandiri bersama Zenius</h2>
                    <img src="img/Testimoni-01-1-1-700x300.jpg" alt="">
                    <h2>Cara akses semua video di Zenius bebas biaya</h2>
                    <p>1. Download Zenius App di Google Play dan App Store.</p>
                    <p>2. Buka Zenius App dan daftar/log in ke akun Zenius.</p>
                    <p>3. Klik banner yang ada di homepage.</p>
                    <p>4. Masukin no handphone kamu yang aktif, dan tunggu kode verifikasi dari Zenius.</p>
                    <p>5. Masukkan kode OTP yang kamu terima.</p>
                    <p>6. Selamat Belajar Sepuasnya Bareng Zenius!</p>

                    <h4>Bagaimana belajar mandiri di rumah dengan Zenius untuk kamu siswa kelas 9 dan 12?</h4>
                    <p>Setelah download aplikasi Zenius, kamu bisa belajar materi dan latihan soal untuk UNBK SMP, UNBK SMA, UTBK, SPMB STAN, SIMAK UI, dan UTUL UGM. Kamu bisa juga ikut tryout UNBK dan UTBK di aplikasi Zenius yang diadakan setiap minggu hingga pelaksanaan ujian nanti.</p>

                    <h4>Bagaimana belajar mandiri di rumah dengan Zenius untuk kamu yang belum mau ujian?</h4>
                    <p>Untuk kamu yang belum mau ujian, kamu bisa memilih materi yang kamu mau pelajarin di mana aja dan kapan aja kamu mau. Kamu bisa ulang terus sesuka hati dan latihan soal sampai kamu benar-benar paham.</p>
                    <p>Untuk kamu yang baru memakai Zenius, kamu bisa mulai dengan menonton video-video dalam menu insight yang berisi motivasi, cara belajar efektif, manajemen waktu, dll. </p>

                    <h4>Kumpulan artikel blog Zenius tentang belajar mandiri</h4>
                    <p>1. <a href="https://www.zenius.net/blog/23675/tips-belajar-mandiri-di-rumah-siap-unbk">Tips belajar mandiri di rumah</a></p>
                    <p>2. <a href="https://www.zenius.net/blog/23677/mengapa-apa-manfaat-belajar-di-rumah">Keuntungan belajar mandiri</a></p>
                    <p>3. <a href="https://www.zenius.net/blog/23680/belajar-di-rumah-bareng-zenius">Cara belajar mandiri menggunakan Zenius</a></p>

                    <h4>Live Class Zenius</h4>
                    <p>Zenius juga akan mengadakan LIVE CLASS di social media dan youtube Zenius untuk mendukung dan menemani proses belajar mandirimu di rumah.</p>
                    <p>Di live class ini, kamu dapat menonton video pembelajaran Zenius dan bertanya langsung ke tutor-tutor terbaik Zenius!</p>
                    <p>Jangan lewatkan kesempatan belajar ini karena live class hanya berlangsung di waktu tertentu saja. Rencana belajar live class dapat kamu lihat di social media Zenius atau lewat notifikasi dari aplikasi! </p>
                    <p>Jangan lupa update aplikasi terbaru kamu di android versi 1.6.6, namun mohon maaf untuk iOS fitur ini belum tersedia di aplikasi, tetapi kamu bisa tetap akses melalui Youtube Zenius.</p>
                    <a href="https://go.zenius.net/belajar-mandiri-desktop"><img src="img/Header-Web-GURU-1024x431-2.jpg" alt=""></a><br>
                    <h2>Pesan Zenius untuk Para Guru</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-Htc-dswVac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Untuk membantu bapak dan ibu guru dalam melakukan kegiatan mengajar selama masa belajar di rumah, berikut adalah panduan dari Zenius yang bisa digunakan. Panduan-panduan ini juga bisa diunduh melalui link ini:</p>
                    <a href="https://bit.ly/belajarmandiriZenius"><h5>Panduan Belajar Jarak Jauh Bersama Zenius</h5></a>
                    [slideshare id=230563280&doc=new-infografis1-kelolaprosesjarakjauh-200320024404&type=d]

                    
                </div>
        </div>
    </section>

    <!-- Belajar Mandiri -->
    <!-- Footer -->
    <div class="footer">
        <div class="footer2-atas">
            <div class="con-fa">
                <div class="con2-fa">
                    <div class="kiri-fa">
                        <ul>
                            <h4>TENTANG KAMI</h4>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">We Are Hiring</a>
                            </li>
                            <li>
                                <a href="#">Testimonial</a>
                            </li>
                        </ul>
                        <ul>
                            <h4>SOCIAL MEDIA</h4>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">Tiktok</a>
                            </li>
                            <li>
                                <a href="#">Youtube</a>
                            </li>
                            <li>
                                <a href="#">LINE</a>
                            </li>
                        </ul>
                        <ul>
                            <h4>HUBUNGI KAMI</h4>
                            <li>
                                <a href="#">Kontak</a>
                            </li>
                            <li>
                                <a href="#">Cuctomer Service</a>
                            </li>
                            <li>
                                <a href="#">Bantuan pertanyaan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tengah-fa">
                        <ul>
                            <h4>KONTEN</h4>
                            <li>
                                <a href="#">SNMPTN</a>
                            </li>
                            <li>
                                <a href="#">UTBK</a>
                            </li>
                            <li>
                                <a href="#">Ujian Mandiri</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Download Soal</a>
                            </li>
                            <li>
                                <a href="#">Simulasi UTBK SBMPTN</a>
                            </li>
                            <li>
                                <a href="#">Prolog Materi</a>
                            </li>
                            <li>
                                <a href="#">CPNS</a>
                            </li>
                        </ul>
                        <ul>
                            <h4>MEMBERSHIP</h4>
                            <li>
                                <a href="#">Pesan membership</a>
                            </li>
                            <li>
                                <a href="#">Panduan transaksi</a>
                            </li>
                            <li>
                                <a href="#">Aktivasi membership</a>
                            </li>
                            <li>
                                <a href="#">Konfirmasi pembayaran</a>
                            </li>
                        </ul>
                    </div>
                    <div class="kanan-fa">
                        <ul>
                            <h4>HAK CIPTA</h4>
                            <li>
                                <a href="#">Ketentuan Pengguna</a>
                            </li>
                            <li>
                                <a href="#">Kebijakan Privasi</a>
                            </li>
                        </ul>
                        <div class="logo-footer">
                            <img src="img/logo-f.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bawah">
            <div class="con-fb">
                <div class="con2-fb">
                    <div class="isi-c">
                        <p class="copyright">
                            PT Zona Edukasi Nusantara, 2020 <br>
                            logo, merk. dan isi website ini adalah hak cipta PT Zona Edukasi Nusantara
                        </p>
                    </div>      
                </div>
            </div>
        </div>
        <!-- ini bagian footer alias copy right -->
    </div>
<!-- Akhir Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="menu.js"></script>
    <script src="menu.js"></script>
  </body>
</html>