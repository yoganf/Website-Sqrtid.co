<?php
include "..\koneksi.php";

$query_hapus = mysql_query("DELETE FROM berita WHERE id_berita = '".$_GET['id']."'");

header("Location: ..\adminweb/masuk.php");

?>