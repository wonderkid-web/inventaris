<?php require '../header/header.php'; ?>
<?php require '../aside/aside.php'; ?>
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
	const button = document.querySelector('.button')
	const table = document.querySelector('.table')
	const klik = document.querySelector('.klik')
	const laporan = document.querySelector('.laporan-icon');
	const laporanMenu = document.querySelector('.laporan-menu')
	const aWhite = document.querySelectorAll('.a-active');
	const divA = document.querySelectorAll('.divA')

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
	
	laporan.onclick = function(){
		laporanMenu.classList.toggle('active')
	}

	table.onclick = function(){
		laporanMenu.classList.remove('active')
	}

	divA.forEach(div =>{
		div.onmouseover = function(){
			div.children[0].style.color = 'white'
		}
		div.onmouseout = function(){
			div.children[0].style.color = 'black'
		}
	})


</script>

</html>