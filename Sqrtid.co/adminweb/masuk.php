
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
	

<!DOCTYPE html>
<html>
<head>
	<title>SQRTID.CO OFFICIAL</title>
	<link rel="stylesheet" type="text/css" href="..\style.css">
</head>
<body>

<div class="content">
	<header>
		<img width="100%" src="..\gambar/head.jpg">
	</header>

	<div class="menu">
		<ul>
			<li><a href="masuk.php">HOME</a></li>
			<li><a href="tambah.php">TAMBAH</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</div>
<div style="font-family: Arial Black; font-size: 30px;
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
		<div class="Halaman"></div>


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tambah':
				include "hal/tambah.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}
	 ?>

	 <center><h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	 	<?php
include "..\koneksi.php";
?>

<?php
$query_ambil_sqrtid	= mysql_query("SELECT * FROM berita"); //query ambil data berita.
while ($data_sqrtid = mysql_fetch_array($query_ambil_sqrtid)) 
{
//perulangan untuk menampilkan berita 
?>

<table width="100%" border="1">
	<tr>
		<td><?php 
if (is_file("..\gambar/".$data_sqrtid['gambar']) == TRUE) {
?>
<img src="..\gambar/<?php echo $data_sqrtid['gambar']; ?>" style="width: 100px; height: auto; margin: 0 10px 10px 0; display: inline; float: center">
<?php 
} 
?></td><td><a href="selengkapnya.php?id=<?php echo $data_sqrtid['id_berita']; ?>"><h2  style="margin-bottom: 0px; float: left;"><?php echo $data_sqrtid['judul']; ?></h2></a></td>
	</tr>
	<tr>
		<td>
</td><td><?php echo substr($data_sqrtid['isi_berita'], 0, 300); ?> ... </td>
	</tr>
	<tr>
		<td><a href="edit.php?id=<?php echo $data_sqrtid['id_berita']; ?>">Edit</a></td>
		<td><a href="hapus.php?id=<?php echo $data_sqrtid['id_berita']; ?>" onclick="return confirm('Anda yakin..?')">Hapus</a></td>
	</tr>
</table>
<?php 
}
//penutup perulangan while
?>


</div>
	</div>
</div>
</body>
</html>
