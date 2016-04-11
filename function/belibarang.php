<?php
	include ('../db.php');

	global $conn;
	$conn = connect();
	
	$nama = $_GET["nama"];
	$jumlah = (int)$_GET["jumlah"];
	$harga = (int)$_GET["harga"];
	$harga *= -1;
	
	$query = "INSERT INTO t_finance_transaksi VALUES (NULL, NULL, 2, '". date("Y/m/d h:i:sa") ."')";
	$rquery = mysqli_query($conn, $query);
	$idfinance = $this->db->insert_id();
	
	$query = "INSERT INTO t_finance_transaksi_kas VALUES (NULL, 2, '".$harga."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_finance_transaksi_alokasi VALUES (NULL, 2, '".$harga."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_belanja VALUES (NULL, '".$harga."', '". date("Y/m/d h:i:sa") ."', 2, '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
?>