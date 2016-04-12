<?php
	include ('../db.php');

	global $conn;
	$conn = connect();
	
	$nama = $_GET["nama"];
	$jumlah = (int)$_GET["jumlah"];
	$harga = (int)$_GET["harga"];
	$a_modal = $harga * 4 / 5;
	$a_profit = $harga * 3 / 20;
	$a_tahan = $harga / 20;
	$kas = (int)$_GET["kas1"];
	if ($kas > 1)
		$alur = $kas + 1;
	else
		$alur = $kas;
		
	$query = "INSERT INTO t_finance_transaksi VALUES (NULL, '".$nama."', 1, NULL)";
	$rquery = mysqli_query($conn, $query);
	$idfinance = mysqli_insert_id($conn);
	
	$query = "INSERT INTO t_finance_transaksi_kas VALUES (NULL, '".$kas."', '".$harga."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_finance_transaksi_alokasi VALUES (NULL, 2, '".$a_modal."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	$query = "INSERT INTO t_finance_transaksi_alokasi VALUES (NULL, 3, '".$a_profit."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	$query = "INSERT INTO t_finance_transaksi_alokasi VALUES (NULL, 4, '".$a_tahan."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);
	
	$query = "INSERT INTO t_order VALUES (NULL, '".$harga."', '". date("Y/m/d h:i:sa") ."', '".$alur."', '".$idfinance."')";
	$rquery = mysqli_query($conn, $query);

	header("Location: ../jual-barang.php");
	die();
	
?>