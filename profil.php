<!DOCTYPE html>
<?php
include "backend/koneksi.php";
include "backend/sesi.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fontss/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fontss/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fontss/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styleprofil.css">
</head>
<body>
    <?php 
    $emailku = $_SESSION['email'];
    if (!isset($_SESSION['email'])) {
        header("Location: http://localhost/zenius/login.php");
    }else{
        $s=$emailku;
        $res=mysqli_query($db,"SELECT * FROM member WHERE email = '$s'");
        $data = [];
        while($row=mysqli_fetch_array($res)){
            $data = [
                        'email'=> $row['email'],
                        'username' => $row['username'],
                        'nickname'=> $row['nickname'],
                        'fullname' => $row['fullname'],
                        'pass'=> $row['password'],
                        'status_user' => $row['status_user'],
                        'hp' => $row['hp'],
                        'hportu' => $row['hportu'],
                        'tipe' => $row['tipe'],
                        'timeoff' => $row['timeoff'],
                        'status' => $row['status'],
                        'jenjang' => $row['jenjang'],
                        'kelas'=> $row['kelas'],
                        'kurikulum' => $row['kurikulum'],
                        'school' => $row['sekolah'],
                        'video' => $row['video']
                    ];

        }
    }?>
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="head">
            <div class="head1 full-w flex centerMargin">
                <img src="img/logo-zeniusnet3.png" height="63">
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
                                <li><a href="">Konfirmasi Pembayaran</a></li>
                                <li><a href="">Aktivasi</a></li>
                            </ul>
                        </li>
                        <?php
                    }else{
                        ?>
                        <li id="userku">HALO, Abdullah <i class="fas fa-angle-down"></i> <i class="far fa-user"></i>
                            <ul>
                                <li id="titleUser">Abdullah <br> <p id="statusUserKu">Premium</p></li>
                                <li id="titleUser">AKUN SAYA</li>
                                <li><a href="profil.php">Edit Profile</a></li>
                                <li><a href="help.php">Bantuan</a></li>
                                <li id="titleUser">MEMBERSHIP</li>
                                <li><a href="beli.php">Beli</a></li>
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
                                                                                <li><a href="sd/1mat.php">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas2">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="#">Kelas 2 SD</a></li>
                                                                                <li><a href="sd/2mat.php">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas3">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kelas 3 SD</a></li>
                                                                                <li><a href="">Matematika</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="contentsub container-fluid" id="kelas4">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <ul>
                                                                                <li><a href="">Kelas 4 SD</a></li>
                                                                                <li><a href="">Matematika</a></li>
                                                                                <li><a href="">Sains</a></li>
                                                                                <li><a href="">Bahasa Inggris</a></li>
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
                                                                                <li><a href="/cg/29/matematika-smp-kelas-7-ktsp" >Matematika</a></li>
                                                                                <li><a href="/cg/27/fisika-smp-kelas-7">Fisika</a></li>
                                                                                <li><a href="/cg/28/biologi-smp-kelas-7-ktsp">Biologi</a></li>
                                                                                <li><a href="/cg/26/bahasa-inggris-smp-kelas-7-ktsp">Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/528/bahasa-indonesia-smp-kelas-7-ktsp">Bahasa Indonesia</a></li>
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
                                                                                <li><a href="/cg/646/matematika-smp-kelas-8-kurikulum-2013">Matematika</a></li>
                                                                                <li><a href="/cg/1778/ipa-smp-kelas-8-kurikulum-2013">IPA</a></li>
                                                                                <li><a href="/cg/649/bahasa-inggris-smp-kelas-8-kurikulum-2013">Bahasa Inggris</a></li>
                                                                                <li><a href="/cg/650/bahasa-indonesia-smp-kelas-8-kurikulum-2013">Bahasa Indonesia</a></li>
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
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <!-- Belajar Mandiri -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Belajar Mandiri</a>
                                </li>
                            </ul>
                            <form class="form-inline relative">
                                <input class="form-control" type="search" placeholder="Masukkan kode konten" aria-label="Search">
                                <button class="cari" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir dari menu -->
    <div class="d-flex justify-content-between breadcump" style="font-family: Montserrat, sans-serif;padding: 1rem 0;">
        <div class="container d-flex justify-content-between align-items-xl-center">
            <div>
                <h3 style="color: #666;">Akun Saya</h3>
            </div>
            <h6 style="color: #666;font-size: 14px;margin: 0;">You are here:<strong> Home </strong><i class="fas fa-angle-right"></i>&nbsp;Profil<br></h6>
        </div>
    </div>
    <div class="container d-flex flex-column" style="font-family: Montserrat, sans-serif;">
        <div style="margin: 10px 0;">
            <div class="info alert alert-success" role="alert">
                This is a success alert—check it out!
            </div>
            <div class="title-data">
                <h3 style="color: #666;">Akun Saya</h3>
            </div>
            <div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Username</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata"><?=$data['username'] ?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c form" style="padding: 0;">
                        <input type="text" class="isine form-control">
                    </div>
                    <div class="mobile-flex-row tablet-flex-column d-flex">
                        <button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="username">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Nama Panggilan</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata"><?=$data['nickname'] ?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                    <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="nickname">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Nama</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata"><?$data['fullname']?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                    <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="fullname">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Email</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata"><?=$data['email']?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c"
                        style="padding: 0;"><input type="text" class="form-control"></div>
                    <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="email">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Password</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata">*****</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                    <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Status Pengguna</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        <p style="display:inline" class="showdata"><?=$data['status_user']?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                    <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                    <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="status_user">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                            style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
                </div>
                <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                    <div class="col-sm-3 title-label" style="padding: 0;">
                        <p>Nomor HP Kamu</p>
                    </div>
                    <div class="col-sm-7 show-data" style="padding: 0;">
                        
                        <?php $nomorhp = $data['hportu']; if(empty($nomorhp)){?><button class="btn btn-primary tambah-data show-edit" type="button">Tambah</button><?php }else{?><p style="display:inline" class="showdata"><?=$data['hp']?>&nbsp;<i class="fa fa-check-circle" style="color: green;"></i></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button><?php } ?>
                    </div>
                    <div
                        class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                        style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
            </div>
            <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                <div class="col-sm-3 title-label" style="padding: 0;">
                    <p>Nomor HP Orang Tua</p>
                </div>
                <div class="col-sm-7 show-data" style="padding: 0;"><?php $nomorhp = $data['hportu']; if(empty($nomorhp)){?><button class="btn btn-primary tambah-data" type="button">Tambah</button><?php }else{?><p style="display:inline" class="showdata"><?=$data['hportu']?>&nbsp;</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button><?php } ?></div>
                <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
                <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                        style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
            </div>
        </div>
    </div>
    <div style="margin: 10px 0;">
        <div class="title-data">
            <h3 style="color: #666;">Status Membership<br></h3>
        </div>
        <div>
            <div class="col-sm-8" style="margin: 10px 0;font-size:14px">
                <div class="table-responsive" style="text-align:center">
                    <table class="table">
                        <thead style="background-color: black; color: white">
                            <tr class="table-member">
                                <th>Jenjang</th>
                                <th>Masa Berakhir</th>
                            </tr>
                        </thead>
                        <tbody class="table-membership">
                            <tr>
                                <td>Semua Jenjang</td>
                                <td><?= date("Y-m-d", $data['timeoff']) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 10px 0;">
        <div class="title-data">
            <h3 style="color: #666;">Info Pendidikan<br></h3>
        </div>
        <div>
            <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                <div class="col-sm-3 title-label" style="padding: 0;">
                    <p>Jenjang</p>
                </div>
                <div class="col-sm-7 show-data" style="padding: 0;">
                    <p style="display:inline" class="showdata"><?=$data['jenjang']?></p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control option" style="font-size: 14px;"><optgroup label="This is a group">
                    <option <?php if ($data['status_user']=="NaN" or empty($data['status_user'])) {echo "selected";}?>>-</option>
                        <option value="sd" <?php if($data['jenjang']=="sd"){echo "selected";} ?>>SD atau sederajat</option>
                        <option value="smp" <?php if($data['jenjang']=="smp"){echo "selected";} ?>>SMP atau sederajat</option>
                        <option value="smk" <?php if($data['jenjang']=="smk"){echo "selected";} ?>>SMK</option>
                        <option value="sma" <?php if($data['jenjang']=="sma"){echo "selected";} ?>>SMA</option>
                        <option value="sma2" <?php if($data['jenjang']=="sma2"){echo "selected";} ?>>sederajat SMA</option>
                        <option value="lulus" <?php if($data['jenjang']=="lulus"){echo "selected";} ?>>Alumni</option>
                </optgroup></select></div>
                <div
                    class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;" value="jenjang">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                        style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p>Jurusan</p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;">
                <p style="display:inline" class="showdata"><?php  ?>IPA</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
            <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
            <div
                class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                    style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Kurikulum</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>Kurikulum 2013 Revisi</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
        <div
            class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Sekolah</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>-</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
        <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Kelas</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>12</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
        <div
            class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    </div>
    </div>
    <div style="margin: 10px 0;">
        <div class="title-data">
            <h3 style="color: #666;">Info Pendidikan<br></h3>
        </div>
        <div>
            <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
                <div class="col-sm-3 title-label" style="padding: 0;">
                    <p>Jenjang</p>
                </div>
                <div class="col-sm-7 show-data" style="padding: 0;">
                    <p style="display:inline" class="showdata"><?php  ?>SMA</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
                <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                <div
                    class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                        style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p>Jurusan</p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;">
                <p style="display:inline" class="showdata"><?php  ?>IPA</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
            <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
            <div
                class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                    style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Kurikulum</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>Kurikulum 2013 Revisi</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
        <div
            class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Sekolah</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>-</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c form" style="padding: 0;"><input type="text" class="form-control isine"></div>
        <div class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
        <div class="col-sm-3 title-label" style="padding: 0;">
            <p>Kelas</p>
        </div>
        <div class="col-sm-7 show-data" style="padding: 0;">
            <p style="display:inline" class="showdata"><?php  ?>12</p><button class="btn btn-primary btn-link show-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue; float:right">Edit</button></div>
        <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
        <div
            class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
    </div>
    </div>
    </div>
    <div style="margin: 10px 0;">
        <div class="title-data">
            <h3 style="color: #666;">Info Pendidikan<br></h3>
        </div>
        <div>
            <div class="mobile-flex-column d-flex flex-row col-sm-8 option-server" style="margin: 10px 0;font-size:14px">
                <div class="col-sm-3 title-label" style="padding: 0;">
                    <p>Jenjang</p>
                </div>
                <div class="col-sm-7 show-data" style="padding: 0;"><button class="btn btn-primary tambah-data" type="button">Flash</button><button class="btn btn-primary tambah-data" type="button">HTML5</button></div>
                <div class="col-sm-6 edit-data-c" style="padding: 0;"><select class="form-control" style="font-size: 14px;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                <div
                    class="mobile-flex-row tablet-flex-column d-flex"><button class="btn btn-primary btn-link edit-data-c save" type="button" style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Save</button><button class="btn btn-primary btn-link edit-data-c cancel-edit" type="button"
                        style="padding: 0 5px;font-size: 14px;background-color: transparent;color: blue;">Cancel</button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p><strong>Facebook Account</strong><br></p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;"><button class="btn btn-primary d-xl-flex align-items-xl-center button col-sm-8 d-flex col-x" id="bg-fb" type="button" style="margin: 0; display:flex"><i class="fab fa-facebook-f"></i><a class="flex-grow-1" href="#" style="text-align:center;">Connect with Facebook</a></button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p><strong>Twitter Account</strong><br></p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;"><button class="btn btn-primary d-xl-flex align-items-xl-center button col-sm-8 d-flex col-x" id="bg-tw" type="button" style="margin: 0; display:flex"><i class="fab fa-twitter"></i><a class="flex-grow-1" href="#" style="text-align:center;">Connect with Twitter</a></button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p><strong>Google Account</strong><br></p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;"><button class="btn btn-primary d-xl-flex align-items-xl-center button col-sm-8 d-flex col-x" id="bg-goog" type="button" style="margin: 0; display:flex"><i class="fab fa-google"></i><a class="flex-grow-1" href="#" style="text-align:center;">Connect with Google</a></button></div>
        </div>
        <div class="mobile-flex-column d-flex flex-row col-sm-8" style="margin: 10px 0;font-size:14px">
            <div class="col-sm-3 title-label" style="padding: 0;">
                <p><strong>Apple Account</strong><br></p>
            </div>
            <div class="col-sm-7 show-data" style="padding: 0;"><button class="btn btn-primary d-xl-flex align-items-xl-center button col-sm-8" id="bg-app" style="margin: 0;"><i class="fab fa-apple"></i><a class="flex-grow-1" href="#" style="text-align:center;">Connect with Apple</a></button></div>
        </div>
    </div>
    </div>
    </div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jsprofil.js"></script>
    <script>
    $(".info").hide();
    $(".save").click(function(){
        var tg = $(this).val();
        var email = $(this).parent().find(".form");
        if($(this).parent().find("option") > 0){
            email = email.children("option:selected").val();
        }else{
            email= $(this).parent().parent().find(".form .isine").val();
        }
        console.log(tg);
        
        $.ajax({
            url:'backend/update.php?target=<?=$s?>',
            method:'POST',
            data:{
                email:email,
                target:tg
            },
            success:function(response){
                $(".info").text(response);
                $(".info").show();
            }
        });
         $(this).parent().parent().find(".showdata").text();
         $(this).parent().parent().find(".showdata").text(email);
         $(this).parent().parent().find(".show-data").show();
         $(this).parent().parent().find(".edit-data-c").hide();
         $(this).parent().parent().find(".title-label").css("font-weight","bolder");
    });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="zenius.js"></script>
</body>

</html>