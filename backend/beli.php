<?php
include 'koneksi.php';
$code = $_POST['code'];
$durasi = $_POST['durasi'];
$email = $_POST['email'];
if (empty($code)) {
	
}else{
	$expr = time()+60*60*1;
	// $expr = time()+60*60*1;
	$expr = (float)$expr;
	$cek = mysqli_num_rows(mysqli_query($db,"SELECT code FROM code_buy WHERE code='$code'"));
	if ($cek == 0) {
		mysqli_query($db,"INSERT INTO code_buy VALUES('$code','$email','$durasi','$expr')");
		echo "Get Voucher berhasil <br>";
		echo "Code --> $code<br>";
		echo "Pembelian atas email --> $email telah berhasil <br>";
		echo "Tolong segera lunasi pembayaran sebelum tenggak waktu. <br>";
		?>
		<p>Klik <a href="http://localhost/zenius/admin.php">link ini</a> untuk kembali ke halaman admin</p>
<?php
	}else{
		echo "gk bisa";
	}
}
?>