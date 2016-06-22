<?php
	include "dbconn.php";
	
	$num = $_GET['num'];
	$password = $_GET['password'];

	$sql = "select num, password from chicken where num=$num and password = '$password'";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);

	if($password == $row['password']) {
		$sql = "DELETE FROM chicken WHERE num=$num";
		$result = mysqli_query($connect, $sql);
		
		echo "<meta http-equiv='refresh' content='0; url=./chicken_list.php'>";
	}
	
	else {
		echo "삭제 실패 하였습니다.";
	}

$mysqli->close();

?>