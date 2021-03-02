

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
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

	
	</div>
</div>
	<div class="badan">
<div class="Halaman">

	 <br/>
	<br/>
	<center><form method="post" action="cek.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" ></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" ></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form></center>
</div>
<br>
<br>
	</div>
</div>
</body>
</html>