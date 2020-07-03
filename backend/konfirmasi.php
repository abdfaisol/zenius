<?php
include 'koneksi.php';
$code = $_POST['code'];
$cek = mysqli_num_rows(mysqli_query($db,"SELECT * FROM code_buy WHERE code='$code'"));
$cek2 = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM code_buy WHERE code='$code'"));
if (time() > $cek2["expr"]) {
	echo "kelewat";
}else{
	echo "aman";
}
// echo "string <br>";
// if ($cek2 <= date("Y-m-d")){
// 	echo "ok masih aman";
// }else{
// 	echo "gk aman";
// }
if ($cek == 1) {
	echo "Cek dulu expr <br>";
	if (time() <= $cek2["expr"]) {
		echo "aman";
		$a = $cek2["durasi"];
		$b = $cek2["email"];
		mysqli_query($db,"INSERT INTO aktivasi VALUES('$code','$a','$b')");
		mysqli_query($db,"DELETE FROM code_buy WHERE code ='$code'");
		header("Location: http://localhost/zenius/admin.php?sukses");
	}else{
		echo "kadaluarsa";
		mysqli_query($db,"DELETE FROM code_buy WHERE code ='$code'");
		header("Location: http://localhost/zenius/admin.php?gagal");
	}
	
}else{
	header("Location: http://localhost/zenius/admin.php?gagal");
}

?>