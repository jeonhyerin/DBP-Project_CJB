<?php
	$connect = mysqli_connect("localhost", "root", "autoset", "delicious");

	if(!$connect) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		exit;
	}

	mysqli_set_charset($connect, 'euc-kr');
?>