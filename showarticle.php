<?php 
include "koneksi.php";

$ida = $_GET["id"];

if (empty($ida)) {
	header("Location: article.php?$ida");
}else{
	$sql = mysqli_query($db,"SELECT * FROM article WHERE id = '$ida'");
	$data = mysqli_fetch_array($sql);
	if($sql){
		echo "judul artikel -- >".$data["title"];
		echo "<br>";
		echo "Summary artikel -- >".$data["summary"];
		echo "<br>";
		echo "isi artikel -- >".$data["content"];
		echo "<br>";
	}else{
		header("Location: http://localhost/zenius/backend/article.php?gagal");
	}
}

?>