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
<center>
<br>
<?php
	include "dbconn.php";
	
	$num = $_GET['num'];
	$sql = 'SELECT * FROM pizza WHERE num='.$num;
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);

	$image_name[0] = $row['file_name_0'];
	$image_name[1] = $row['file_name_1'];
	$image_name[2] = $row['file_name_2'];
	$image_name[3] = $row['file_name_3'];

	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];
	$image_copied[2] = $row['file_copied_2'];
	$image_copied[3] = $row['file_copied_3'];


	for($i=0; $i<=3; $i++) 
	{
		if($image_copied[$i]) 
		{
			$imageinfo = GetImageSize("./img/".$image_copied[$i]);
			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i] = $imageinfo[2];
		
			if($image_width[$i] > 785)
				$image_width[$i] = 785; 
		}
		else {
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i] = "";
		}
	}

?>
<table width=580 border=0 cellpaddig=2 cellspacing=1 bgcolor=#FFE5C2>
	<tr>
		<td height="20" colspan="4" align=center bgcolor=#FFE5C2>
			<font color=black><b><?php echo $row['subject']?></b></font>
		</td>
	</tr>
	<tr>
		<td width=50 height=20 align=center bgcolor=#FFE5C2> 글쓴이</td>
		<td width=240 bgcolor=white><?php echo $row['name']?></td>
	</tr>
	<tr>
		<td width=50 height=20 align=center bgcolor=#FFE5C2> 날&nbsp;&nbsp;&nbsp;짜</td>
		<td width=240 bgcolor=white><?php echo $row['regist_day']?></td>
		<td width=50 height=20 align=center bgcolor=#FFE5C2> 조회수</td>
		<td width=240 bgcolor=white><?php echo $row['hit']?></td>
	</tr>
	<tr>
		<td bgcolor=white colspan=4>
		<?php
			for($i=0; $i<=3; $i++) 
			{
				if($image_copied[$i])
				{
					$img_name = $image_copied[$i];
					$img_name = "./AutoSet10/public_html/img".$img_name;
					$img_width = $image_width[$i];

					echo "<img src='$img_name' width='$img_width'>"."<br><br>";
				}
			}
		?>
		<font color=black>
		<pre><?php echo $row['content']?></pre>
		</font>
		</td>
	</tr>
	<tr>
		<td colspan=4 bgcolor=#FFE5C2>
		<table width=100%>
			<tr>
				<td width=200 align=left height=20>
					<a href="pizza_list.php?num=<?php echo $num?>"><font color=black>
					[목록보기]</font></a>
					<a href="pizza_write.php"><font color=black>
					[글 쓰기]</font></a>
					<a href="pizza_erase_form.php?num=<?php echo $num?>"><font color="black">
					[삭제]</font></a>
				</td>
				<td align=right>
				<?php
					$sql = "SELECT num FROM pizza WHERE num > $num LIMIT 1";
					$prev_num = mysqli_fetch_assoc($connect, $sql);
					
					if($prev_num['num'])
					{
						echo "<a href=\"pizza_read.php?num=".$prev_num['num']."\"><font color='white'>[이전]</font></a>";
					}

					else
					{
						echo "[이전]";
					}

					$sql1 = "SELECT num FROM pizza WHERE num < $num ORDER BY num DESC LIMIT 1";
					$next_num = mysqli_fetch_assoc($connect, $sql1);

					
					if($next_num['num'])
					{
						echo "<a href=\"pizza_read.php?num=".$next_num['num']."\"><font color='white'>[다음]</font></a>";;
					}
					else
					{
						echo "[다음]";
					}
				?>

				</td>
			</tr>
			</table>
			</b></font>
			</td>
		</tr>
		</table>
	</center>
</body>
</html>
<?php
	$sql = 'UPDATE pizza SET hit=hit+1 WHERE num='.$num;
	$result = mysqli_query($connect, $sql);

	mysqli_close($connect);
?>