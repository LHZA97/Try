
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="registers.css">
	<?php include 'dbR.php'; ?>
</head>
<body>

<div class="header">
	<h2>Selamat Datang Bakal Ahli !</h2>
</div>

<br>





<!--End Verify table from database-->

<!--From-->

<form method="post" action="register.php">
	<?php include 'error.php'; ?>
	<div class="input-group">
		<label>Nama Pengguna</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<br>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
	<br>
	<div class="input-group">
		<label>Kata Laluan</label>
		<input type="password" name="password1">
	</div>
	<br>
	<div class="input-group">
		<label>Semak Kata Laluan</label>
		<input type="password" name="password2">
	</div>
	<br>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Daftar</button>
	</div>
	<p>
	Sudah menjadi ahli?<a href="login.php"> Log masuk sekarang</a>
	</p>
</form>

<!--End of form-->

<div class="content">
	<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
			</h3>
		</div>
	<?php endif ?>

	<?php if (isset($_SESSION['username'])): ?>
		<p>Selamat Datang <?php echo $_SESSION["username"];?></p>
		<p><a href="index.php?logout='1'" style="color:red;">Log keluar</a></p>
	<?php endif ?>

	

</div>

</body>
</html>