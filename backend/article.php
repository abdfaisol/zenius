<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Articel</title>
</head>
<body>
	<?php 
	$halaman = 2;
	echo "hah";
	$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	echo "hah 1 | ";
	echo "$page | ";
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	echo "hah 2 | ";
	echo "$mulai | ";
	$query = mysqli_query($db,"SELECT * FROM article LIMIT $mulai, $halaman");
	echo "hah 3";
	$sql = mysqli_query($db,"SELECT * FROM article");
	echo "hah 4 <br>";
	$total = mysqli_num_rows($sql);
	$pages = ceil($total/$halaman); 
	?>
	<ul>
		<?php 
		$no = $mulai + 1;
		while ($data = mysqli_fetch_array($query)) {
			?>
			<li><?= $no++ ?></li>
			<li><a href="showarticle.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a></li>
			<?php
		}
		?>
	</ul>

	<?php
	for ($i=1; $i<=$pages ; $i++){ 
		?>
	<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } 
	?>
	<p>Pupoler Post</p>
	<ul>
		<?php 
		$halaman = 2;
		$query = mysqli_query($db,"SELECT * FROM article ORDER BY view DESC LIMIT 2");
		$no = 1;
		while ($data = mysqli_fetch_array($query)) {
			?>
			<li><?= $no++ ?></li>
			<li><a href="showarticle.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a></li>
			<?php
		}
		?>
	</ul>
	<p>Post Terbaru</p>
	<ul>
		<?php 
		$halaman = 2;
		$query = mysqli_query($db,"SELECT * FROM article ORDER BY publidate DESC LIMIT 2");
		$no = 1;
		while ($data = mysqli_fetch_array($query)) {
			?>
			<li><?= $no++ ?></li>
			<li><a href="showarticle.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a></li>
			<?php
		}
		?>
	</ul>
</body>
</html>
