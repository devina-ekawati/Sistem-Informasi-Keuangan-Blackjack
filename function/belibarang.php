<?php
	include ('../db.php');

	global $conn;
	$conn = connect();
	
	$nama = $_GET["nama"];
	$jumlah = (int)$_GET["jumlah"];
	$harga = (int)$_GET["harga"];
	$harga_akhir = $harga * -1;
	$kas = (int)$_GET["kas1"];
	if ($kas > 2)
		$alur = $kas + 1;
	else
		$alur = $kas;
		
	$query = "INSERT INTO t_finance_transaksi VALUES (NULL, '".$nama."', 2, NULL)";
	$rquery = mysqli_query($conn, $query);
	$idfinance = mysqli_insert_id($conn);
	
	$query = "INSERT INTO t_finance_transaksi_kas VALUES (NULL, '".$kas."', '".$harga_akhir."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_finance_transaksi_alokasi VALUES (NULL, 2, '".$harga_akhir."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_belanja VALUES (NULL, '".$harga."', '". date("Y/m/d h:i:sa") ."', '".$alur."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);

	header("Location: ../beli-barang.php");
	die();
?>