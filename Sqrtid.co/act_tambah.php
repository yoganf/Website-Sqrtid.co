<?php
include "koneksi.php";

//get variabel yg dikirimkan dari form

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$harga	= $_POST['harga'];
$isi		= $_POST['isi'];

//get variabel file upload
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
				
		$query_tambah	= mysql_query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$harga', '$isi', NOW(), '$nama_file')");
	
		header("Location: adminweb/masuk.php");
	} else {
		$query_tambah	= mysql_query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$harga', '$isi', NOW(), '-')");
	
		header("Location: adminweb/masuk.php");
	}
} else {
	$query_tambah	= mysql_query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$harga', '$isi', NOW(), '-')");
	
	header("Location: adminweb/masuk.php");
}
?>