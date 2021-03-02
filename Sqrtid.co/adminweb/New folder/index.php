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
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TAMBAH ARTIKEL</a></li>
			<li><a href="index.php?page=kontak">EDIT & HAPUS</a></li>
		</ul>
	</div>

	<div class="badan">
<div class="halaman">
		<?php
include "..\koneksi.php";
?>

<?php
$query_ambil_sqrtid	= mysql_query("SELECT * FROM berita"); //query ambil data berita.
while ($data_sqrtid = mysql_fetch_array($query_ambil_sqrtid)) 
{
//perulangan untuk menampilkan berita 
?>
<table>
	<tr>
		<td><?php 
if (is_file("gambar/".$data_sqrtid['gambar']) == TRUE) {
?>
<img src="gambar/<?php echo $data_sqrtid['gambar']; ?>" style="width: 300px; height: auto; margin: 0 10px 10px 0; display: inline; float: center">
<?php 
} 
?></td>
	</tr>
	<tr>
		<td><b><a href="selengkapnya.php?id=<?php echo $data_sqrtid['id_berita']; ?>"><h2  style="margin-bottom: 0px; float: left;"><?php echo $data_sqrtid['judul']; ?></h2></a> </b>
</td>
	</tr>
	<tr>
		<td>
<?php echo substr($data_sqrtid['isi_berita'], 0, 300); ?> ... 

</td>
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