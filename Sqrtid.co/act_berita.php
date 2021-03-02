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
		//untuk keperluan upload gambar//
		$query_ambil_file_gambar_lama	= mysql_query("SELECT gambar FROM berita WHERE id_berita = '$id_berita'");
		$data_file_gambar_lama			= mysql_fetch_array($query_ambil_file_gambar_lama);
		
		unlink("gambar/".$data_file_gambar_lama['gambar']);
		//upload gambar selesai disini//
		
		$query_update	= mysql_query("UPDATE berita SET judul = '$judul', harga = '$harga', isi_berita = '$isi', gambar = '$nama_file' WHERE id_berita = '$id_berita'");
	
		header("Location: index.php");
	} else {
		$query_update	= mysql_query("UPDATE berita SET judul = '$judul', harga = '$harga', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
	
		header("Location: index.php");
	}
} else {
	$query_update	= mysql_query("UPDATE berita SET judul = '$judul', harga = '$harga', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
	
	header("Location: index.php");
}
?>