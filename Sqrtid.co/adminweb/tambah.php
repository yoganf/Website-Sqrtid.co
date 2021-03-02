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
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=kontak">KONTAK</a></li>
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

	<form action="..\act_tambah.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_berita" value="">
	
		<table border="0">
			<tr><td>Judul</td><td><input type="text" name="judul" size="50" required value=""></td></tr>
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
			<tr><td>Harga</td><td><input type="text" name="harga" size="10" required value=""></td></tr>
			<tr><td>File Gambar</td><td><input type="file" name="gambar" required></td></tr>
			<tr><td>Isi</td><td><textarea name="isi" rows="15" cols="40" required></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
		</table>
		
	</form>
</div>
	</div>
</div>
</body>
</html>