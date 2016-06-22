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
<link rel="stylesheet" href="./css/style.css">
	<script language="javascript">
	function check_input()
	{
		if(!document.myForm.name.value)
		{
			alert("이름을 입력하세요!");
			document.myForm.name.focus();
			return;
		}

		if(!document.myForm.subject.value)
		{
			alert("제목을 입력하세요!");
			document.myForm.subject.focus();
			return;
		}
	
		if(!document.myForm.content.value)
		{
			alert("내용을 입력하세요!");
			document.myForm.content.focus();
			return;
		}

		if(!document.myForm.password.value)
		{
			alert("비밀번호를 입력해야 글을 수정하거나 삭제할 수 있습니다.");
			document.myForm.password.focus();
			return;
		}
		document.myForm.submit();
	}
	</script>
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
		<a href="./main.php" target="_parent"> | 메인페이지 </a> 
		<a href="./intro.php" target="_parent"> | 사이트소개</a>
		<a href="./logout.php" target="_parent"> | 로그아웃</a>
	</div>
	<td align="center"><br/>
	<font style="font-size:25pt;font-weight:bolder;">
	<a href="./main.php" target="_parent">
		<h1>SHAR<font color="#FF5A5A">E</font>:AT</h1>
	</a>
	</font>
<center>
<br>
<form name="myForm" action="pizza_insert.php" method="post" ENCTYPE='multipart/form-data'>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#FFE5C2>
	<tr>
		<td height=20 align-center bgcolor=#FFE5C2>
		<font color=black><b> 게시판 글쓰기 </b></font>
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
					<input type="submit" value="글 저장하기" onclick="javascript:check_input();">
					&nbsp;&nbsp;
					<input type="reset" value="다시 쓰기">
					&nbsp;&nbsp;
					<input type="button" value="되돌아가기" onclick="history.back(-1)">
				</td>
			</tr>
		</table>
		<?php
			for($i=0; $i<=3; $i++) {
				$selectfile = "upfile[$i]";
		?>
			
			<tr>
				<input type="hidden" name="MAX_FILE_SIZE" value="500000" /><br /> 
				<td align="center">파일 첨부: <input type="file" name="upfile[]" size="20"></td>
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