<?php 

$conn = mysqli_connect("localhost", "root", "", "inventaris");
$result = mysqli_query($conn, "SELECT * FROM tbl_barang");

foreach($data = mysqli_fetch_assoc($result) as $d){
	var_dump($d['nama_barang']);
}

echo "test";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard PTPN IV</title>
	<link rel="stylesheet" href="../style/mockup.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../Assets/logo.png">
	<script src="https://kit.fontawesome.com/58daf71a1e.js" crossorigin="anonymous"></script>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>
	<header>
		<nav>
			<div class="brand">
				<img class="logo" src="../Assets/logo.png" alt="">
			</div>
			<div class="input">
				<img src="../Assets/search.svg" alt="" width="15" height="15">
				<input type="text" placeholder="Cari sesuatu...?">
			</div>
			<div class="navigation">
				<ul>
					<li>
						<div class="content">
							<div class="triangle-down"></div>
							<div class="dropdown">
								<img src="../Assets/logout.svg" alt="">
								<a href="#logout">
									Logout
								</a>
							</div>
						</div>
					</li>
					<li>
						<img src="../Assets/admin.png" alt="" width="50">
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside>
		<ul>
			<li title="Dashboard">
				<!-- <img src="../Assets/search.svg" alt=""> -->
				<a href="dashboard.php">
					<img src="../Assets/home.svg" alt="" width="35">
				</a>
			</li>
			<li title="Barang Masuk">
				<a href="barang_masuk.php">
					<img src="../Assets/incoming.svg" alt="" width="35">
				</a>
			</li>
			<li title="Barang Keluar">
				<a href="barang_keluar.php">
					<img src="../Assets/outcoming.svg" alt="" width="35">
				</a>
			</li>
			<li class="laporan" title="Laporan">
				<a href="laporan.php">
					<img src="../Assets/report.svg" alt="" width="31">
				</a>
				<div class="laporan-menu active">
					<div><ion-icon name="bookmarks"></ion-icon>Laporan Stok Barang</div>
					<div><ion-icon name="bookmarks"></ion-icon>Laporan Barang Masuk</div>
					<div><ion-icon name="bookmarks"></ion-icon>Laporan Barang Keluar</div>
					
				</div>
			</li>
		</ul>
	</aside>
	<main>
		<div class="text-desc">
			<h2><b>HALAMAN STOK BARANG</b></h2>
		</div>
		<div class="table">
			<table class="demo" cellspacing="0" border="0">
				<caption>Tabel Stok Barang</caption>
				<thead>
				<tr class="grey">
					<th>No</th>
					<th>Nama Barang</th>
					<th>Spesifikasi Barang</th>
					<th>Qty<br></th>
					<th>No. Dok PP</th>
					<th>Tanggal Masuk</th>
					<th>Nama Supplier</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="grey">&nbsp;1</td>
					<td>&nbsp;Mouse Logitech</td>
					<td>Computer&nbsp;</td>
					<td>12 Kotak&nbsp;</td>
					<td>BK001</td>
					<td>20 Mei 2022</td>
					<td>Graha Komputer</td>
				</tr>
				<tr>
					<td class="grey">&nbsp;2</td>
					<td>&nbsp;Keyboard Mechanical</td>
					<td>Computer&nbsp;</td>
					<td>4 Kotak&nbsp;</td>
					<td>BK002</td>
					<td>24 Mei 2022</td>
					<td>Graha Komputer</td>
				</tr>
				</tbody>
			</table>
		</div>	
	</main>
</body>

<script>
	const button = document.querySelector('.button')
	const table = document.querySelector('table')
	const klik = document.querySelector('.klik')

	let cells = ["2",
		"Keyboard Mechanical",
		"Computer&nbsp",
		"4 Kotak&nbsp",
		"BK002",
		"24 Mei 2022",
		"Graha Komputer"
	]
	function createCell(jumlahCell,isiCell){
		let row = table.insertRow()
		for(let x = 0; x < jumlahCell; x++){
			let cell = row.insertCell()
			cell.innerHTML = isiCell[x]
		}
	}
	
	

</script>
</html>