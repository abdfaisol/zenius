<?php 
include "koneksi.php";
$key = $_POST["key"];
$target = $_POST["target"];

if (empty($key) or empty($target)) {
	header("Location: Location: http://localhost/zenius/admin.php?gagal");
}else{
	$sql = "INSERT INTO search VALUES ('$key','$target')";
	if(mysqli_query($db, $sql)){
		header("Location: http://localhost/zenius/admin.php?sukses");
	}else{
		header("Location: http://localhost/zenius/admin.php?gagal");
	}
}

?>