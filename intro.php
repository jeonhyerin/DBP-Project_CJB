
<html>
<head>
<title>맛집공유사이트</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">

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
</head>
<body>
<? session_start(); ?>
	<font face="">
	<table width="1250" border="0" align="center" cellspacing="0" style="border:0px #333333 solid;">
	<div class="wrap">
	<header>
	<div style="text-align:right; color:#3D3D3D;">
	<font style="font-size:10pt;font-weight:bolder;">
		<span class="right" style="padding: 30px 10px;">
	<? echo"안녕하세요 ".$_SESSION['id']." 님! 환영합니다.";?><a href="./main.php" target="_blank"> | 메인페이지 </a> 
		<a href="./form_list2.php" target="_blank"> | 가입인사</a>
		<a href="./logout.php" target="_blank"> | 로그아웃</a>
	</div>
	<td align="center"><br/>
	<font style="font-size:25pt;font-weight:bolder;">
	<a href="./main.php" target="_blank">
		<h1>SHAR<font color="#FF5A5A">E</font>:AT</h1>
	</a>
	</font>
	<div class="intro">
		<div class="bold">
		<h2>데이터베이스 맛집공유 SHARE:AT!
		</div><P><P></h1>
		<div class="text">
		[심플하게] : SHARE:AT만의 차별화된 양식에서 쉽고 빠르게 원하는 음식을 찾아볼 수 있습니다.<P>
		[공정하게] : SHARE:AT은 광고없이 사용자가 직접 맛집에 대해 리뷰를 남기는 사이트입니다.<P>
		[깔끔하게] : 정신없는 방대한 데이터보다 맛집공유에 있어 꼭 필요한 정보들만 담아놓았습니다.<P>
		</div>
		<div class="go"><a href="main.php">맛집 공유하러 가기
		</div>
		</div>
		</div>
	<br/>
	
</td>
</header>
</table>
	
	
	
			

	<table>
		<tr>
			<td bgcolor=#EEEEEE> 전체 28</td> 
			<td bgcolor=#EEEEEE> 오늘 5</td>
		</tr>
	</table>
	<footer>
	<div id="copyright">
	Copyright [채전방] 2016 Chae.Jeon.Bang. All rights reserved
	</div>
	</footer>
</font>
</body>
</html>
	
