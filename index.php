<?php 
$conn = mysqli_connect('localhost', 'root', '', 'inventaris');
$result = mysqli_query($conn, "SELECT * FROM barang");
$data = mysqli_fetch_assoc($result);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login PTPN IV</title>
	<link rel="stylesheet" href="style/main.css">
</head>
<body>

<form action="components/main/dashboard.php">
	<section>
		<img src="Assets/logo.png" alt="">
		<h1>Login Pegawai</h1>
		<div class="input">
			<input type="email" name="email" placeholder="Username">
			<input type="password" name="password" placeholder="Password" title="Password minimal 4 huruf dan maksimal 8 huruf" pattern="[a-z], {4,8}">	
		</div>
		<button type="submit">Masuk</button>
		<a href="#">Lupa Password? Hubungi admin</a>
	</section>		
</form>
	
</body>
</html>