<?
	include "dbconn.php";
?>
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
</style>
</head>
<body>
	<font face="">
	<table width="1250" border="0" align="center" cellspacing="0" style="border:0px #333333 solid;">
	<div class="wrap">
	<header>
	<div style="text-align:right; color:#3D3D3D;">
	<font style="font-size:10pt;font-weight:bolder;">
		<span class="right" style="padding: 30px 10px;">
	<?
		echo "안녕하세요 ".$_SESSION['id']."님! 환영합니다.";
	?>
<?
if(!$_SESSION['id']){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("login.php");
    </script>
    <?
}
?>
		<a href="./logout.php" target="_blank"> | 로그아웃 </a> 
		<a href="intro.html" target="_blank"> | 사이트소개</a>
		<a href="./form_list2.php" target="_blank"> | 가입인사</a> 
	</font>
	</div>
	
	<td align="center"><br/>
	<font style="font-size:25pt;font-weight:bolder;">
	<a href="./main.php" target="_blank">
		<h1>SHAR<font color="#FF5A5A">E</font>:AT</h1>
	</a>
	</font>
		</span>
	<br/>
	
</td>
</header>
</table>
	<table width="1000" border="0" align="center" cellpadding="5" cellspacing="0" style="border:0px #333333 solid;">
	<td align="center">
	<article class="menu"><font size="4">
	<a href="./pizza.php" target="_blank">피자&nbsp;|&nbsp;</a>
	<a href="./chicken.php" target="_blank">치킨&nbsp;|&nbsp;</a>
	<a href="./porkhocks.php" target="_blank">족발/보쌈&nbsp;|&nbsp;</a>
	<a href="./koreanfood.php" target="_blank">한식&nbsp;|&nbsp;</a>
	<a href="./japanesefood.php" target="_blank">일식&nbsp;|&nbsp;</a>
	<a href="./chinese.php" target="_blank">중식&nbsp;|&nbsp;</a>
	<a href="./flourfood.php" target="_blank">분식&nbsp;|&nbsp;</a>
	<a href="./nightsnack.php" target="_blank">야식&nbsp;|&nbsp;</a>
	<a href="./franchise.php" target="_blank">프랜차이즈&nbsp;&nbsp;</a>
	</font></div>
	</td>
	</table>
	<br>
	<table width="100%" border=0 cellspacing="0" cellpadding="0"">
	<tr><th height="379">
	<img src="img/치킨.png"/>
	<img src="img/피자.png"/>
	<img src="img/족발.png"/><br/>
	<img src="img/한식.png"/>
	<img src="img/일식.png"/>
	<img src="img/중국집.png"/><br/>
	<img src="img/분식.png"/>
	<img src="img/야식.png"/>
	<img src="img/프랜차이즈.png"/>
	</th></tr></table>

	
	<?php
		
		$sum = 0;
		$todayc = date("Y-m-d");
		$sql = "select * from counter where last_date = '.$todayc.'";
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
	
		if(!$row) {
			$sql1 = "insert into counter(last_date, visited) values ('.$todayc.', 1)";
			mysqli_query($connect, $sql1);
		}
		else {
			$sql2 = "update counter set visited=visited+1 where last_date='.$todayc.'";
			mysqli_query($connect, $sql2);
		}

		$sql = "select * from counter where last_date = '.$todayc.'";
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
		$visited = $row['visited'];
		$sqlt = "select * from counter";
		$resultt = mysqli_query($connect, $sqlt);
	
		while($rowt=mysqli_fetch_assoc($resultt)){
			$sum += $rowt['visited'];
		}
	?>		

	<table>
		<tr>
			<td bgcolor=#EEEEEE> 전체 <?=number_format($sum)?></td> 
			<td bgcolor=#EEEEEE> 오늘 <?=number_format($visited)?></td>
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
	
