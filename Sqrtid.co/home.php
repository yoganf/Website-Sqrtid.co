<div class="halaman">
	<?php
include "koneksi.php";
?>

<?php
$query_ambil_sqrtid	= mysql_query("SELECT * FROM berita"); //query ambil data berita.
while ($data_sqrtid = mysql_fetch_array($query_ambil_sqrtid)) 
{
//perulangan untuk menampilkan berita 
?>
<table class="bg" width="100%" border="1">
	<tr>
		<td><a href="selengkapnya.php?id=<?php echo $data_sqrtid['id_berita']; ?>"><h2  style="margin-bottom: 0px; float: left;"><?php echo $data_sqrtid['judul']; ?></h2></a></td>
	</tr>
	<tr>
		<td><a style="margin-bottom: 0px; float: left;">Harga : <b><?php echo $data_sqrtid['harga']; ?></b></a></td>
	</tr>
	<tr>
		<td><?php 
if (is_file("gambar/".$data_sqrtid['gambar']) == TRUE) {
?>
<img src="gambar/<?php echo $data_sqrtid['gambar']; ?>" style="width: 350px; height: auto; margin: 0 10px 10px 0; display: inline; float: center">
<?php 
} 
?></td>
	</tr>
</table>


<hr style="border: dashed 1px #e9e9e9">

<?php 
}
//penutup perulangan while
?>
</div>