<html>
<head>
<style>
@import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
html, body, div, span, applet, table, caption, body, foot, head, tr, th, td, del, don, em, font, omg, ins, kid, q, s, samp, small, strike, strong, sub, sup, tt, var, h1, h2, h3, h4, h5, h6, p, block quote, pre, a, abbr, acronym, address, big, cite, code, dl, dt, dd, ol, ul, li, fields, form, label, legend {font-family:"본고딕", 'Noto Sans KR', sans-serif !important; font-weight: 400; }
body, h1, h2, h3, h4, input, button{font-family: 'Noto Sans KR', sans-serif;}
A:link {COLOR: black; TEXT-DECORATION: none}
A:visited {COLOR: black; TEXT-DECORATION: none}
A:hover {COLOR: red; TEXT-DECORATION: underline }
        ul, li{
            list-style: none;
        }
        ul.menu{
            float: right;
        }
        ul.menu li{
            float: left;
            margin-right: 10px;
        }
        ul.menu li ul{
            display: none;
        }
        ul.menu li:hover a{
            background-color: #ccc;
        }
        ul.menu li:hover ul{
            display: block;
            position: absolute;
            top: 18px;
            right: 0;
        }
	.intro { width:337px; height:400px; padding: 45px 44px 38px 44px; margin: 0 auto; background-color: #ffe5c2; 
                   border-radius:5px;}
	.intro .go {  
	width:80%; 
	height:20px; 
	background-color:#ffd5a6; 
	color:#a0a0a0; 
	font-size:16px; 
	padding:17px 0 16px; 
	margin-top:40px;
	border:0; 
	cursor:pointer; 
	font-family:'돋움';}
</style>
<meta charset="utf-8">
<title> PIZZA </title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<? session_start(); ?>
	<font face="">
	<table width="1250" border="0" align="center" cellspacing="0" style="border:0px #333333 solid;">
	<div class="wrap">
	<header>
	<div style="text-align:right; color:#3D3D3D;">
	<font style="font-size:10pt;font-weight:bolder;">
		<span class="right" style="padding: 30px 10px;">
	<? echo "안녕하세요".$_SESSION['id']."님! 환영합니다.";?>
		<a href="./main.php" target="_blank"> | 메인페이지 </a> 
		<a href="./intro.php" target="_blank"> | 사이트소개</a>
		<a href="./logout.php" target="_blank"> | 로그아웃</a>
	</div>
	<td align="center"><br/>
	<font style="font-size:25pt;font-weight:bolder;">
	<a href="./main.php" target="_parent">
		<h1>SHAR<font color="#FF5A5A">E</font>:AT</h1>
	</a>
	</font>
<br>
<table width="300" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#FFE5C2" style="border:0px #333333 solid; border-top-width:3px;">
	<tr>
	<td><b>비밀번호</b></td>
	</tr>
</table>
<table width="300" border=0 align="center" cellpadding=2 cellspacing=1 bgcolor=#FFE5C2>
	<tr>
		<td>
			<form action="pizza_erase.php" method="GET" align="center">
				<font color=black><b> 비밀번호: </b>
				<input type="hidden" name ="num" value="<?=$_GET['num']?>">
				<input type="password" name="password" size="8">
				<input type="submit" value="확인">
				<input type="button" value="취소" onclick="history.back(-1)">
			</form>
		</td>
	</tr>
</table>
</body>
</html>