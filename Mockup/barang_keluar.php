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
			<li>
				<!-- <img src="../Assets/search.svg" alt=""> -->
				<a href="dashboard.php">
					<img src="../Assets/home.svg" alt="" width="35">
				</a>
			</li>
			<li>
				<a href="barang_masuk.php">
					<img src="../Assets/incoming.svg" alt="" width="35">
				</a>
			</li>
			<li>
				<a href="barang_keluar.php">
					<img src="../Assets/outcoming.svg" alt="" width="35">
				</a>
			</li>
			<li class="laporan">
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
			<h2><b>HALAMAN BARANG KELUAR</b></h2>
		</div>
		<div class="table">
			<table class="demo" cellspacing="0" border="0">
				<caption>Tabel Barang Keluar</caption>
				<thead>
				<tr class="grey">
					<th>No</th>
					<th>Nama Barang</th>
					<th>Spesifikasi Barang</th>
					<th>Qty<br></th>
					<th>No. Dok Serah Terima</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal Keluar</th>
					<th>Opsi</th>
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
					<td>23 Mei 2022</td>
					 <td>
						<div class="button">
							<button class="edit">Edit</button>
							<button class="delete">Delete</button>
						</ div>
					</td>
				</tr>
				<tr>
					<td class="grey">&nbsp;2</td>
					<td>&nbsp;Keyboard Mechanical</td>
					<td>Computer&nbsp;</td>
					<td>4 Kotak&nbsp;</td>
					<td>BK002</td>
					<td>24 Mei 2022</td>
					<td>28 Mei 2022</td>
					<td>
						<div class="button">
							<button class="edit">Edit</button>
							<button class="delete">Delete</button>
						</div>
					</td>
				</tr>
				</tbody>
			</table>
			<div class="add">
				<button>Tambah</button>
			</div>

		</div>
		
	</main>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
	const laporan =document.querySelector('.laporan')
	const menu = document.querySelector('.laporan-menu')
	laporan.onclick = function(e){
		e.preventDefault()
		menu.classList.toggle('active')
	}
</script>

</html>