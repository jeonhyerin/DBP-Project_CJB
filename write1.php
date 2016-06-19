<html>
<head>
<title> 맛집 공유 게시판 </title> 
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<br>
<form action="insert.php" method="post" ENCTYPE='multipart/form-data'>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height=20 align-center bgcolor=#999999>
		<font color=white><b> 게시판 글쓰기 </b></font>
		</td>
	</tr>
	<tr>
		<td bgcolor="white">&nbsp;
		<table>
			<tr>
				<td width=60 align=left> 이름</td>
				<td align=left>
					<input type="text" name="name" size="20" maxlength="10">
				</td>
			</tr>
			<tr>
				<td width=60 align=left >비밀번호</td>
				<td align=left>
					<input type="password" name="password" size="8" maxlength="8"> 
				</td>
			</tr>
			<tr>
				<td width=60 align=left> 제목</td>
				<td align=left>
					<input type="text" name="subject" size="60" maxlength="35">
				</td>
			</tr>
			<tr>
				<td width=60 align=left> 내용</td>
				<td align=left>
					<textarea name="content" cols="65" rows="15"></textarea>
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
		<?php
			for($i=0; $i<=3; $i++) {
				$selectfile = "upfile".$num; 
		?>
		<tr>
			<td align="center"> 파일첨부 : <input type="file" name="<?php echo $selectfile?>" size="20"></td>
		</tr>
		<?
			}
		?>
	</td>
	</tr>	
	</table>
	</form>
	</center>
</body>
</html>