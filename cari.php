<?php
include 'backend/koneksi.php';
$ids=$_POST["ids"];
$res=mysqli_query($db,"SELECT * FROM search WHERE key = '$ids';");
if (mysqli_num_rows($res) == 1) {
	$data = mysqli_fetch_array($res);
	$link = $data['link'];
	if (empty($link)) {
		echo "Key tidak ditemukan.";
	}else{
		header("Location: $link");
	}
}else{
	echo "Key tidak ditemukan.";
}

?>