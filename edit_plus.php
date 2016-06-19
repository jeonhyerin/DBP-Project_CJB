<?php
	include "dbconn.php";

	$num = $_GET['num'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	
	$sql = "SELECT password FROM free WHERE num=".$num;
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);

	if($password == $row['password']) {
		$sql = "UPDATE free SET name='$name', subject='$subject', content='$content' WHERE num=".$num;
		$result = mysqli_query($connect, $sql);
	}

	else {
		echo ("
		<script>
		alert('비밀번호가 틀립니다.');
		history.go(-1);
		</script>
		");
		exit;
	}

	mysqli_close($connect);

	echo("<meta http-equiv='Refresh' content='1;URL=read.php?num=$num'>");
?>
<center>
<font size=2> 정상적으로 수정되었습니다.</font>