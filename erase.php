<html>
<head>
<title> 맛집 공유 게시판 </title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<br>
<form action="erase_plus.php?num=<?=$_GET['num']?> method="post">
<table width="300" border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height=20  align= center bgcolor=#999999>
			<font color=white><b> 비밀번호 확인</b></font>
		</td>
	</tr>
	<tr>
		<td align=center>
			<font color=white><b> 비밀번호: </b>
			<input type="password" name="password" size="8">
			<input type="submit" value="확인">
			<input type="button" value="취소" onclick="history.back(-1)">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>