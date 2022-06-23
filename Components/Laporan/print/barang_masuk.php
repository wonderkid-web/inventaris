<?php 
require '../../koneksi.php';
$result = query("SELECT * FROM tbl_barang_keluar");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<!-- https://code.jquery.com/jquery-3.5.1.js

 -->



</head>
<body>
	<div class="container mt-5">
		
		<table id="myTable" class="table table-striped" style="width:100%">
	        <thead>
	            <tr>
	                <th>No</th>
					<th>Nama Barang</th>
					<th>Spesifikasi Barang</th>
					<th>Qty<br></th>
					<th>Satuan</th>
					<th>Jumlah_stock</th>
					<th>Dibuat</th>
	            </tr>
	        </thead>
	        <tbody>
	       <?php foreach($result as $r) : ?>
				<tr>
					<td class="grey"><?= $r["id_barang"]; ?></td>
					<td><?= $r["nama_barang"]; ?></td>
					<td><?= $r["spesifikasi_barang"]; ?></td>
					<td><?= $r["qty"]; ?> </td>
					<td><?= $r["satuan"]; ?></td>
					<td><?= $r["jumlah_stock"]; ?></td>
					<td><?= $r["createdAT"]; ?></td>
				</tr>
			<?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
	
</body>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable( {
	    dom: 'Bfrtip',
	    buttons: [
	        'copy', 'excel', 'pdf'
	    ]
	} );
} );
</script>
</html>