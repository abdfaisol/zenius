<!DOCTYPE html>
<?php
include "backend/koneksi.php";
include "backend/sesi.php";
?>
<html>
<head>
	<title>Daftar - Zenius Education</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="https://www.zenius.net/wp-content/uploads/2020/03/zenius-1.png">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

</head>
<body>
	<?php 
	if (!isset($_SESSION['email'])) {
		
	}else{
		header("Location: http://localhost/zenius/");
	}?>
	<!-- V2 -->
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
	<div class="post full-w">
		<div class="ContainerPost full-w flex relative">
			<div class="Sign wrapperSizeDefault centerMargin flex directionFlexRow">
				<div class="sign-3">
					<h2 align="center">Daftar ke Zenius</h2>
					<button class="button" id="bg-fb"><i class="fab fa-facebook-f"></i> Daftar dengan Facebook</button>
					<button class="button" id="bg-tw"><i class="fab fa-twitter"></i> Daftar dengan Twitter</button>
					<button class="button" id="bg-goog"><i class="fab fa-google"></i> Daftar dengan Google</button>
					<button class="button" id="bg-app"><i class="fab fa-apple"></i> Daftar dengan Apple</button>
				</div>
				<div class="sign-2 flex flexCenterAll relative">
					<span class="relative">atau</span>
				</div>
				<div class="sign-1">
					<form class="needs-validation" method="POST" action="prosesdaftar.php" novalidate>
						<div class="feed-alert">
							Tulis e-mail dengan format yang benar
						</div>
						<div class="form-group relative">
							<input type="email" placeholder="Ketik alamat e-mailmu"  name="email" class="form-control" id="Email" aria-describedby="emailHelp" required>
						</div>
						<div class="feed-alert">
							Kolom ini wajib diisi
						</div>
						<div class="form-group relative">
							<input type="text" placeholder="Ketik nama panggilanmu" name="nickname" class="form-control" id="Email" aria-describedby="emailHelp" required>
						</div>
						<div class="feed-alert">
							Tulis passwordmu minimal 6 karakter
						</div>
						<div class="form-group relative">
							<!-- <i class="far fa-eye-slash"></i> -->
							<i class="pass showpass far fa-eye"></i>
							<input type="password" placeholder="Ketik passwordmu"  name="pass" class="form-control check" id="InputPassword" required>
						</div>
						<button type="submit" class="button" name="submit" width="100%">Daftar</button>
						<p style="padding: 15px 0;" align="center">
							Dengan menekan tombol 'Daftar', maka kamu menyetujui <a href="privacy.php">Ketentuan Penggunaan</a>
						</p>
						<p style="padding: 15px 0" align="center">
							Sudah memiliki akun? <a href="login.php">Masuk sekarang</a>
						</p>
					</form>
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
							<img src="https://abdfaisol.github.io/zenius/img/logo-f.png">
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
	<!-- File JS -->
	<script src="file:///C:/Users/Asus/Documents/Website/Tools/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>
<script src="zenius.js"></script><script src="menu.js"></script>
</body>
</html>