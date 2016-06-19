<?php
	include "dbconn.php";
	
	$num = $_GET['num'];
	$password = $_POST['password'];

	$sql = "SELECT password FROM free WHERE num=".$num;
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);

	if($password == $row['password'])
	{
		$sql = "DELETE FROM free WHERE num=".$num;
		$result = mysqli_query($connect, $sql);
	}

	else 
	{
		echo("
		<script>
		alert('비밀번호가 틀립니다.');
		history.go(-1);
		</script>
		");
		exit;
	}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list1.php'>
<FONT size=2> 삭제되었습니다. </FONT>