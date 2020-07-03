<!DOCTYPE html>
<?php
include "backend/koneksi.php";
include "backend/sesi.php";
?>
<html>
<head>
	<title>Login - Zenius Education</title>
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
	<!-- Akhir dari menu -->
	<div class="post full-w">
		<div class="ContainerPost full-w flex relative">
			<div id="coks" class="Sign container centerMargin flex directionFlexRow">
				<div class="sign-3 col-md-4">
					<h2 align="center">Masuk ke Zenius</h2>
					<button class="button" id="bg-fb"><i class="fab fa-facebook-f"></i> Masuk dengan Facebook</button>
					<button class="button" id="bg-tw"><i class="fab fa-twitter"></i> Masuk dengan Twitter</button>
					<button class="button" id="bg-goog"><i class="fab fa-google"></i> Masuk dengan Google</button>
					<button class="button" id="bg-app"><i class="fab fa-apple"></i> Masuk dengan Apple</button>
				</div>
				<div class="sign-2 flex flexCenterAll relative">
					<span class="relative">atau</span>
				</div>
				<div class="sign-1">
					<form class="needs-validation" novalidate method="post" action="ceklogin.php">
						<div class="feed-alert">
							Tulis e-mail dengan format yang benar
						</div>
						<div class="form-group relative">
							<input type="email" class="form-control emailku" name="email" placeholder="Ketik alamat e-mailmu" id="Email" aria-describedby="emailHelp" required>
						</div>
						<div class="feed-alert">
							Tulis passwordmu minimal 6 karakter
						</div>
						<div class="form-group relative">
							<!-- <i class="far fa-eye-slash"></i> -->
							<i class="pass showpass far fa-eye"></i>
							<input type="password" class="form-control check pass" name="pass" placeholder="Ketik passwordmu" id="InputPassword" required>
						</div>
						<p><a href="lupa.php">Lupa Password?</a></p>
						<button type="submit" class="button login" width="100%">Submit</button>
						<p style="padding: 15px 0" align="center" class="pesan">Belum memiliki akun? <a href="daftar.php">Daftar sekarang</a></p>
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
	<script src="zenius.js"></script>
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
<script src="zenius.js"></script>
<script src="menu.js"></script>
</body>
</html>