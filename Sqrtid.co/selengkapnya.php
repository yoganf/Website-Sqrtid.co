<!DOCTYPE html>
<html>
<head>
	<title>SQRTID.CO OFFICIAL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
	<header>
		<img width="100%" src="gambar/head.jpg">
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=kontak">KONTAK</a></li>
			<li>
<form role="form" action="hasil.php" method="get">
<input type="text" name="cari">						
<button type="submit">Search</button>
</form>	
			</li>
		</ul>
	</div>
<<div style="font-family: Arial Black; font-size: 30px;
-webkit-text-stroke: 1px white; color: black;"><marquee direction="Left" loop="infinity">SQRTID.CO         -HAVE A NICE DAY!-
<script type='text/javascript'>

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

</script> </marquee></div>
	<div class="badan">
<div class="Halaman">

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "hal/tentang.php";
				break;
			case 'kontak':
				include "hal/kontak.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

	 
<?php
include "koneksi.php";
?>
<?php
$query_ambil_berita	= mysql_query("SELECT * FROM berita WHERE id_berita = '".$_GET['id']."'"); //query ambil data berita.
$data_berita = mysql_fetch_array($query_ambil_berita); 
?>
<table width="100%">
	<tr>
		<td><h1><a style="margin-bottom: 0px; float: left;"><?php echo $data_berita['judul']; ?></a></h1></td>
	</tr>
	<tr>
		<td>Kategori : <b><?php echo $data_berita['kategori']; ?></b></td>
	</tr>
	<tr>
		<td>Harga : Rp.<b><?php echo $data_berita['harga']; ?></b></td>
	</tr>
	<tr>
		<td width="2%"><?php 
if (is_file("gambar/".$data_berita['gambar']) == TRUE) {
?>
<img src="gambar/<?php echo $data_berita['gambar']; ?>" style="width: 300px; height: 275px; margin: 0 10px 10px 0; display: inline; float: left">
<?php 
} 
?><td><?php echo $data_berita['isi_berita']; ?></td>
</td>
	</tr>
</table>
<center><form method="post" action="https://api.whatsapp.com/send?phone=6285200871492&text=Halo%20Admin%20Saya%20Mau%20Order%20Baju">
		<button type="submit">Pesan</button>
	</form></center>
</div>
	</div>
</div>
</body>
</html>