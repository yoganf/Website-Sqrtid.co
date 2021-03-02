<?php 
include "..\koneksi.php";
$query_ambil_berita	= mysql_query("SELECT * FROM berita WHERE id_berita = '".$_GET['id']."'"); //query ambil data berita.
$data_berita 		= mysql_fetch_array($query_ambil_berita); 
?>

<html>
<head>
<title>Edit berita</title>
</head>

<body>
	<form action="..\act_berita.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_berita" value="<?php echo $data_berita['id_berita']; ?>">
	
		<table border="0">
			<tr><td>Judul</td><td><input type="text" name="judul" size="50" required value="<?php echo $data_berita['judul']; ?>"></td></tr>
			<tr><td>Kategori</td><td>
				<select name="kategori" required>
					<option value="">-- Kategori --</option>
					<option value="Hodie">Hodie</option>
					<option value="Pants">Pants</option>
					<option value="T-shirt">T-shirt</option>
					<option value="Bag">Bag</option>\
					<option value="Hat">Hat</option>

				</select>
			</td></tr>
			<tr><td>Harga</td><td><input type="text" name="harga" size="10" required value="<?php echo $data_berita['harga']; ?>"></td></tr>
			<tr><td>File Gambar</td><td><input type="file" name="gambar"></td></tr>
			<tr><td>Isi</td><td><textarea name="isi" rows="15" cols="40" required><?php echo $data_berita['isi_berita']; ?>"</textarea></td></tr>
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
		</table>
		
	</form>
</body>
</html>