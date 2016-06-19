<?php
	include "dbconn.php";
		
	$num = $_GET['num'];

	$sql = 'SELECT * FROM free where num='.$num;
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<title> 맛집 공유 게시판</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<br>
<form action="edit_plus.php?id=<?php echo $num?>" method="post">
<table width=580 border=0 cellspadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height="20: align="center" bgcolor="#999999">
			<font color="white"><b>글 수정하기</b></font>
		</td>
	</tr>

	<tr>
		<td bgcolor="white">&nbsp;
		<table>
			<tr>
				<td width=60 align=left> 이름 </td>
				<td align=left>
					<input type="text" name="name" size="20" value="<?php echo $row['name']?>">
				</td>
			</tr>
			<tr>
				<td width=60 align=left> 비밀번호</td>
				<td align=left>
					<input type="password" name="password" size="8">
				</td>
			</tr>
			<tr>
				<td width=60 align=left> 제목</td>
				<td align=left>
					<input type="text" name="subject" size="60" value="<?php echo $row['subject']?>">
				</td>
			</tr>
			<tr>
				<td width=60 align=left> 내용</td>
				<td align=left>
					<textarea name="content" cols="65" rows="15"><?php echo $row['content']?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan=10 align=center>
					<input type="submit" value="글 저장하기">
					&nbsp;&nbsp;
					<input type="reset" value="다시 쓰기">
					&nbsp;&nbsp;
					<input type="button" value="되돌아가기" onclick="history.back(-1)">
				</td>
			</tr>
		</table>
	</td>
	</tr>
	</table>
	</form>
	</center>
</body>
</html>