<?php
include 'koneksi.php';
?>
<?php 
$name=$_POST["email"];
$iki=$_POST["target"];
$mail = $_GET['target'];
echo "$iki ";
if (empty($name)) {
	echo "gagal";
}else{
	if(mysqli_query($db,"UPDATE member SET $iki ='$name' WHERE email ='$mail'")){
		echo "berhasil";
	}else{
		echo "gagal";
	}
}
echo " disimpan";

// if (mysqli_query($db,"UPDATE member SET email='$name' where email='$mail'") === true) {
// 	echo "berhasil kah?";
// 	# code...
// }else{
// 	echo "gagal update";
// }

 ?>