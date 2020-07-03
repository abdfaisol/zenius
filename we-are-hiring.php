<?php
include "backend/koneksi.php";
include "backend/sesi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>We Are Hiring - Zenius Education</title>
	<link rel="stylesheet" type="text/css" href="assets/css/we-are-hiring.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="icon" href="assets/img/tittle-logo">
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
	<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main wereHiringPage">
            <div class="clearfix"></div>
            
            <!-- Banner -->
            <div class="row">
                <div class="col-md-12 hiring-banner">
                    <img class="img-responsive" src="assets/img/hiring-desktop2.png">
                </div>
                <div class="col-md-12 hiring-banner-tablet">
                    <img class="img-responsive" src="assets/img/hiring-tablet.png">
                </div>
                <div class="col-md-12 hiring-banner-mobile">
                    <img class="img-responsive" src="assets/img/hiring-tablet.png">
                </div>
            </div>

            <!--  Section 1 -->
            <div class="container">
                <div class="row tc">
                    <div class="col-md-12 hiring-s2">
                        <p style="text-align: center;">Terima kasih atas kunjungannya ke website kami.</p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;">Sebelum kamu mempertimbangkan lebih jauh untuk melamar pekerjaan di Zenius, izinkan kami untuk menceritakan tentang misi yang kami perjuangkan di Zenius Education.</p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;">Semenjak berdiri pada tahun 2007, PT Zona Edukasi Nusantara berkomitmen untuk menjadi pelopor revolusi pendidikan digital di Indonesia dengan misi besar untuk mempersembahkan “great learning experience” kepada seluruh pelajar di Indonesia.</p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;">Satu hal yang akan selalu menjadi prinsip kami dalam menjalani misi ini adalah menciptakan pendidikan yang bertumpu pada metodologi sains dan rasionalitas.</p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;">Jika kamu merasa sejalan dengan misi yang sedang kami perjuangkan ini, mari bergabung dan berjuang bersama untuk pendidikan Indonesia.</p>
                        <p style="text-align: center;">
                    </p></div>
                </div>
            </div>

            <div class="container splited-hiring">
                <div class="row ph4">
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <img src="assets/img/p_z_1.jpg">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="row">
                    <div class="col-md-12 clearfix">
                        <img src="assets/img/p_z_2.jpg">
                    </div>
                    <div class="col-md-12 bottom clearfix">
                        <img src="assets/img/p_z_3.jpg">
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="container-fluid zenius-notes">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 content">
                            <h3>Sedikit catatan tentang Zenius Education:</h3>
								<ul>
									<li>Sampai tahun 2017, website zenius.net telah dikunjungi oleh lebih dari 10 juta users per tahun dan menjadi startup pendidikan di Indonesia dengan traffic tertinggi nasional.</li>
									<li>Zenius menjadi satu-satunya startup pendidikan yang mencapai peringkat 10 besar berdasarkan startupranking.com/top/indonesia</li>
									<li>Berdasarkan riset oleh Conversion Rate Expert (Juli 2017) kepuasan pengguna zenius mencapai skala 8.6/10</li>
									<li>Jangkauan kami tersebar di seluruh Indonesia. Tidak hanya pada kota besar, tapi juga kota kabupaten dan desa dengan proporsi sekitar 19% ibukota provinsi, 69% kota kabupaten, dan 12% pedesaan</li>
								</ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Available Positions -->
            <div class="container">
                <div class="row positions">
                    <h3>Available Positions</h3>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Scriptwriter</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Budget Control</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">English Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Tutor TPA</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Mathematics Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Bahasa Indonesia Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Web Developer</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Chemistry Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Sociology Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div id="we-are-hiring-jobs-available" class="col-md-12">
                            <div class="list clearfix job-list-item">
                            <div class="col-md-8 col-sm-8 job-title">Physics Tutor</div>
                                <div class="col-md-4 col-sm-4 job-apply">
                                    <a href="#" class="btn apply">Apply Now</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

            <!-- Can't find what you're looking for -->
            <style>
                .wereHiringPage .lost-in-space .container {
                    background-image: url('assets/img/illust_hiring.png');                }
                @media only screen and (max-width: 991px) and (min-width: 1px) {
                    .wereHiringPage .lost-in-space .container  {
                        background-image: none;
                    }
                }
            </style>
            <div class="container-fluid lost-in-space">
                <div class="container">
                    <div class="row">
                        <div class="content col-md-6 col-md-offset-5 col-sm-12">
                            <h3>Can’t Find What You’re Looking For?</h3>
                                <p>If you don’t want to be in a specific position above but still think that you are a great fit for us, you can still apply.</p>
                                <p>&nbsp;</p>
                                <p>Send us an email to <b>hrd@zeniuseducation.com</b> and tell us your achievements in the past, your understanding about our business, and show us why you are a great fit for the company. Put the tag #GreatFit on the email subject. We might consider hiring you.</p>
                            <img class="img-responsive mobile-img" src="assets/img/illust_hiring.png">
                        </div>
                    </div>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->


	<!-- Scroll To Top -->
	<a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up"></i></a>

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
                        <div id="logo-footer">
                            <img src="assets/img/logo-f.png">
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
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="zenius.js"></script>
<script src="menu.js"></script>
</body>
</html>