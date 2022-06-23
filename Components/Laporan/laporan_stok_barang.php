<?php 
require '../koneksi.php';
$result = query('SELECT * FROM tbl_stok_barang');
	
 ?>

<?php require '../header/header.php'; ?>
<?php require '../aside/aside.php'; ?>
	<main>
		<div class="text-desc">
			<h2><b>HALAMAN LAPORAN STOK BARANG</b></h2>
		</div>
		<div class="table">
			<div class="container">
				
			
			<table class="demo " cellspacing="0" border="0" id="myTable">
				<div class="date">
					<p>Dari Tanggal : 20 Mei 2022</p>
					<p>Sampai Tanggal : 24 Mei 2022</p>
				</div>
				<caption>Tabel Laporan Stok Barang</caption>
				<thead>
					<br>
				<tr class="grey">
					<th>No id</th>
					<th>Nama Barang</th>
					<th>Spesifikasi Barang</th>
					<th>Qty<br></th>
					<th>Satuan</th>
					<th>Jumlah Barang Masuk</th>
					<th>Jumlah Barang Keluar</th>
					<th>Jumlah Stok Barang</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($result as $r) : ?>
				<tr>
					<td class="grey"><?= $r['id_barang']; ?></td>
					<td><?= $r['nama_barang']; ?></td>
					<td><?= $r['spesifikasi_barang']; ?></td>
					<td><?= $r['qty']; ?> Kotak&nbsp;</td>
					<td><?= $r['satuan']; ?></td>
					<td><?= $r['jumlah_barang_masuk']; ?></td>
					<td><?= $r['jumlah_barang_keluar']; ?></td>
					<td><?= $r['jumlah_stok_barang']; ?></td>
				</tr>
			    <?php endforeach; ?>
				</tbody>
			</table>
			</div>
			<div class="add">
				<button><a href="print/stok_barang.php"
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