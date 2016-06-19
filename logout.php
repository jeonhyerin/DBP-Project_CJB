<html>
<head>
</head>
<body>
<?
	session_start();
	$logout = $_SESSION["id"];
	if($_SESSION["id"]!=NULL)
	{
		session_destroy();
	}
?>
	<form action="login.php" method="POST" align=center>
		<h1>로그아웃 되었습니다.</h1>
		<input type=submit value="Login">
	</form>
</body>
</html>
