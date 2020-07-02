<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php 

	 ?>
	<ul>
		<p id="apa">Anda Berhasil Login</p>
		<li>Email</li>
		<li><input type="text" name="" class="email"></li>
		<li>Password</li>
		<li><input type="Password" name="pass" class="pass"></li>
		<li><button class="login">Login</button></li>
	</ul>
	<a href="member.php">daftar</a>
	<p>
		<a href="belicode.php">beli code</a> --> konfirmasi pembayaran --> <a href="login.php">login</a> --> <a href="aktivasi-voucher.php">aktivasi kode</a> ---> sukses ---> untuk aktivasi wajib login jika tidak maka tombol tidak berfungsi --> <a href="logout.php">logout</a>
	</p>
	<script type="text/javascript">
	$("#apa").hide();
	$(".login").click(function(){
		var email = $(this).parent().parent().find(".email").val();
		var pass = $(this).parent().parent().find(".pass").val();
		console.log(email);
		console.log(pass);
		$.ajax({
			url:'ceklogin.php',
			method:'POST',
			data:{
				email:email,
				pass:pass
			},
			success:function(response){
				console.log(response);
				if(response === "true"){
					$("#apa").text();
					$("#apa").text("bisa?");
					$("#apa").append("<a>link</a>");
					$("#apa").find("a").attr("href","<?=$_GET['return'] ?>")
					$("#apa").show();
				}else{
					$("#apa").text();
					$("#apa").text("gagal");
					$("#apa").show();
				}
				
			}
		});
	})
	</script>
</body>
</html>