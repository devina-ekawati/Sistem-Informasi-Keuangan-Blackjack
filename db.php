<?php

	function connect() {
		$conn = new mysqli("localhost", "root", "", "blackjack_vaporizer_db");
		if ($conn->connect_error) {
			die($conn->connect_error);
		}
		return $conn;
	}
	
	function close($conn) {
		$conn->close();
	}
	
	function query($conn, $sql) {
		return $conn->query($sql);
	}
	
	
?>