<html>
<head>
	<title>회원가입</title>
</head>

<body>
	<form action="signup.php" method="POST">
		<table width=550 border=1 align=center>
		<tr>
			<td colspan=2 bgcolor=#99cc00 align=center>Sign Up
		<tr>
			<td>ID
			<td><input type=text name=id size=10 maxlength=20>

		<tr>
			<td>PASSWORD
			<td><input type=password name=pw size=10 maxlength=20>
		<tr>
			<td>NAME
			<td><input type=text name=name size=10 maxlength=20>
		<tr>
			<td>EMAIL
			<td><input type=text name=email size=30 maxlength=30>
		<tr>
			<td>PHONE NUMBER
			<td><input type=text name=phonenum size=20 maxlength=20>
		<tr>
			<td bgcolor=#eeeeee colspan=2 align=center>
			<input type=submit value="Submit">
		</table>
	</form>
</body>
</html>