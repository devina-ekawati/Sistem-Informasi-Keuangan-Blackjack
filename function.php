<?php
	
	function getBeli(){
		include_once ('db.php');
		global $conn;
		$conn = connect();
		
		$query = "SELECT t_belanja.id, 
				t_finance_transaksi.keterangan, 
				t_belanja.harga, 
				t_belanja.waktu 
					FROM t_belanja, t_finance_transaksi
					WHERE t_belanja.id_finance_transaksi = t_finance_transaksi.id
						ORDER BY t_belanja.waktu DESC";
		$rquery = mysqli_query($conn, $query);			
		
		$Beli = array();
		
		while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
			$Beli[] = $row;
		}
		
		return $Beli;
	}
	
	function getJual(){
		include_once ('db.php');
		global $conn;
		$conn = connect();
		
		$query = "SELECT t_order.id, 
				t_finance_transaksi.keterangan, 
				t_order.harga, 
				t_order.waktu 
					FROM t_order, t_finance_transaksi
					WHERE t_order.id_finance_transaksi = t_finance_transaksi.id
						ORDER BY t_order.waktu DESC";
		$rquery = mysqli_query($conn, $query);			
		
		$Jual = array();
		
		while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
			$Jual[] = $row;
		}
		
		return $Jual;
	}
	
	function getMasuk(){
		include_once ('db.php');
		global $conn;
		$conn = connect();
		
		$query = "SELECT SUM(harga) AS pemasukan FROM t_order WHERE
					 waktu BETWEEN (CURDATE() - INTERVAL 30 DAY) AND SYSDATE()";	
		$rquery = mysqli_query($conn, $query);
		
		$row = $rquery->fetch_assoc();
		$harga = (int) $row['pemasukan'];
		
		return $harga;
	}
	
	function getKeluar(){
		include_once ('db.php');
		global $conn;
		$conn = connect();
		
		$query = "SELECT SUM(harga) AS pengeluaran FROM t_belanja WHERE
					 waktu BETWEEN (CURDATE() - INTERVAL 30 DAY) AND SYSDATE()";	
		$rquery = mysqli_query($conn, $query);
		
		$row = $rquery->fetch_assoc();
		$harga = (int) $row['pengeluaran'];
		
		return $harga;
	}
	
?>
