<?php 
$conn = mysqli_connect("localhost", "root", "", "inventaris");
$result = mysqli_query($conn, "SELECT * FROM tbl_barang_keluar");




?>
<?php require '../header/header.php'; ?>
<?php require '../aside/aside.php'; ?>
	<main>
		<div class="text-desc">
			<h2><b>HALAMAN LAPORAN BARANG KELUAR</b></h2>
		</div>
		<div class="table">
			<div class="date">
					<p>Dari Tanggal : 20 Mei 2022</p>
					<p>Sampai Tanggal : 24 Mei 2022</p>
				</div>
			<table class="demo" cellspacing="0" border="0">
				<caption>Tabel Barang Keluar</caption>
				<thead>
				<tr class="grey">
					<th>No</th>
					<th>Nama Barang</th>
					<th>Spesifikasi Barang</th>
					<th>Qty<br></th>
					<th>Satuan</th>
					<th>Tanggal_keluar</th>
					<th>Nomor tanda terima</th>
					<th>Nama penerima</th>
					<th>Dibuat Kapan</th>
				</tr>
				</thead>
				<tbody>
				<?php while($barang = mysqli_fetch_assoc($result)) :?>
				<tr>
					<td class="grey"><?= $barang["id_barang"]; ?></td>
					<td><?= $barang["nama_barang"]; ?></td>
					<td><?= $barang["spesifikasi_barang"]; ?></td>
					<td><?= $barang["qty"]; ?> </td>
					<td><?= $barang["satuan"]; ?></td>
					<td><?= $barang["tanggal_keluar"]; ?></td>
					<td><?= $barang["nomor_tanda_terima"]; ?></td>
					<td><?= $barang["nama_penerima"]; ?></td>
					<td><?= $barang["createdAT"]; ?></td>
				</tr>
				<?php endwhile; ?>
				</tbody>
			</table>
			<div class="add">
					<button><a href="print/barang_keluar.php"
					style="text-decoration: none; color: white;">Print</a></button>
			</div>
		</div>
		
	</main>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable({
    	button: [
    		'pdf', 'excel', 'print'
    	]
    });
} );
</script>
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