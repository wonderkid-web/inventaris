<?php 
$db = 'inventaris';
$conn = mysqli_connect('localhost', 'root', '', $db);
function query($q){
	global $conn;
	$rows = [];
	$query = mysqli_query($conn, $q);
	while($result = mysqli_fetch_assoc($query)){
		$rows[] = $result;
	}
	return $rows;
}
function showTables(){
	$procedure = "
	DELIMITER//
	CREATE PROCEDURE showTables()
	BEGIN
		INSERT * FROM 
	END
	//
	";

}

 ?>