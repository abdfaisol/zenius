<?php
include 'koneksi.php';
include 'sesi.php';

$code = $_POST['vcode'];
$email = $_SESSION['email'];
echo "$code | ";
$cek_code= mysqli_query($db,"SELECT * FROM aktivasi WHERE code = '$code' AND email='$email'");
if(mysqli_num_rows($cek_code) == 1){
	$cek1 = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM aktivasi WHERE code = '$code' AND email='$email'"));
	$cek2 = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM member WHERE email='$email'"));
	$timeoffku = (int)$cek2["timeoff"];
	$durasi = (int)$cek1["durasi"];
	$durasi = $timeoffku+(60*60*24*$durasi);
	$durasi = (float)$durasi;
	if(mysqli_query($db,"UPDATE member SET timeoff ='$durasi' WHERE email ='$email'")){
		echo "Berhasil update";
		mysqli_query($db,"DELETE FROM `aktivasi` WHERE code ='$code'");
		echo "Sukses";
		header("Location: http://localhost/zenius/profil.php?aktivasi berhasil");
	}else{
		echo "Hiks hiks gagal :(";
		header("Location: http://localhost/zenius/aktivasi.php");
	}
}else{
	echo "gagal";
}
?>