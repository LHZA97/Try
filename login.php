<?php\
include 'dbR.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="registers.css">
</head>
<body>

<div class="header">
	<h2>Selamat Kembali Ahli !</h2>
</div>

<br>

<form method="post" action="login.php">
	<!--display data error here-->
	<?php include 'error.php'; ?>
	<div class="input-group">
		<label>Nama Pengguna</label>
		<input type="text" name="username">
	</div>
	<br>
	<div class="input-group">
		<label>Kata Laluan</label>
		<input type="password" name="password">
	</div>
	<br>
	<div class="input-group">
		<button type="submit" name="login" class="btn">Log Masuk</button>
	</div>
	<p>
	Belum menjadi ahli?<a href="register.php"> Daftar sekarang!</a>
	</p>
</form>

</body>
</html>