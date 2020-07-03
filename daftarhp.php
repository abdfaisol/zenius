<?php
include 'backend/koneksi.php';
include 'backend/sesi.php';
$email = $_SESSION['email'];
$hp=$_POST["hp"];
$hp = "+62 $hp";
if(mysqli_query($db,"UPDATE member SET hp ='$hp' WHERE email ='$email'")){
	header("Location: profil.php");
}else{
	echo "hp.php?gagal";
}

?>