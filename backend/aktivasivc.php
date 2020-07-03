<?php
include 'koneksi.php';
include 'sesi.php';

$code = $_POST['code'];
$email = $_SESSION['email'];
echo "$code | ";
$cek_code= mysqli_query($db,"SELECT * FROM aktivasi WHERE code = '$code' AND email='$email'");
if(mysqli_num_rows($cek_code) == 1){
	$cek1 = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM aktivasi WHERE code = '$code' AND email='$email'"));
	$cek2 = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM member WHERE email='$email'"));
	$durasi0 = (int)$cek2["timeoff"];
	$durasi0 = $durasi0 - time();
	$durasi = (int)$cek1["durasi"];
	$durasi = time()+60*60*$durasi;
	$durasi = $durasi + $durasi0;
	$durasi = (float)$durasi;
	echo "$durasi0 | ";
	echo "$durasi | ";
	echo "$code";
	if(mysqli_query($db,"UPDATE member SET timeoff ='$durasi' WHERE email ='$email'")){
		echo "Berhasil update";
		mysqli_query($db,"DELETE FROM `aktivasi` WHERE code ='$code'");
		echo "Sukses";
		header("Location: http://localhost/zenius/");
	}else{
		echo "Hiks hiks gagal :(";
		header("Location: http://localhost/zenius/aktivasi.php");
	}
}else{
	echo "gagal";
}
?>