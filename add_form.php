<html>
<head>
<title></title>
<meta http-equiv=Content-Type" content="text/html"; charset=euc-kr">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<br>
	<br>
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFE5C2" style="border:0px #333333 solid; border-top-width:3px;">
	<tr>
	<td><b>방명록 등록</b></td>
	<td align="right">

		[<a href="form_list.php">목록</a>]

		</td>

	</tr>
</table>
<br>
	<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
<tr>
	<td align="center">
		정확히 입력하신 후 등록하세요! <br> &quot;*&quot;는 필수 입력사항입니다.</td>
</tr>
</table>
<br>
	<form action="add_form2.php" method="POST" name="add_form2" id="add_form2" style="margin:0px;" onSubmit="return checkForm(this)">

	<table width="500" border="0" align="center" cellpadding="5" cellspacing="1">
<tr>
	<td width="100" bgcolor="#FFE5C2">&nbsp;*이름</td><td bgcolor="#E8E8E8">
	<input name="name" id="name" type="text" size="30"></td>

</tr>
<tr>
	<td bgcolor="#FFE5C2">&nbsp;*이메일</td><td bgcolor="#E8E8E8">
	
	<input name="email" id="email" type="text" size="30">예)userid@domain.com</td>
</tr>
<tr>
	<td bgcolor="#FFE5C2"> &nbsp;남기실 말</td><td bgcolor="#E8E8E8">
	<textarea name="comment" id="comment" cols="50" rows="10" wrap="VIRTUAL"></textarea>
</td>
</tr>
<tr>
	<td bgcolor="#FFE5C2">&nbsp;*글 암호</td><td bgcolor="#E8E8E8">
	<input name="pw" id="pw" type="pw" size="20">
</td>
</tr>
</table>
<br>
	<table width="500" height="40" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFE5C2" style="border:0px #333333 solid; border-bottom-width:3px;">
<tr>
	<td align="center">
	
	<input type="submit" name="Submit" value="등록">
	<input type="reset" name="Reset" value="취소">
</td>
</tr>
</table>
</form>

</body>
</html>
		