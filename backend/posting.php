<?php 
include "koneksi.php";
include "sesi.php";
$judul = $_POST["judul"];
$kutipan = $_POST["summary"];
$artikel = $_POST["artikel"];

if (empty($artikel) or empty($kutipan) or empty($judul)) {
	header("Location: Location: http://localhost/zenius/backend/article.php?gagal");
}else{
	$timenow = time();
	$sql = "INSERT INTO article(publidate, title, summary, content, view) VALUES ('$timenow','$judul','$kutipan','$artikel',0)";
	if(mysqli_query($db, $sql)){
		header("Location: http://localhost/zenius/admin.php?sukses");
	}else{
		header("Location: http://localhost/zenius/backend/article.php?gagal");
	}
}

?>