<html>
<head>
<title> 맛집 공유 게시판 </title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<br>
<?php
	include "dbconn.php";
	
	$num = $_GET['num'];
	$sql = 'SELECT * FROM free WHERE num='.$num;
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<table width=580 border=0 cellpaddig=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height="20" colspan="4" align=center bgcolor=#999999>
			<font color=white><b><?php echo $row['subject']?></b></font>
		</td>
	</tr>
	<tr>
		<td width=50 height=20 align=center bgcolor=#EEEEEE> 글쓴이</td>
		<td width=240 bgcolor=white><?php echo $row['name']?></td>
	</tr>
	<tr>
		<td width=50 height=20 align=center bgcolor=#EEEEEE> 날&nbsp;&nbsp;&nbsp;짜</td>
		<td width=240 bgcolor=white><?php echo $row['regist_day']?></td>
		<td width=50 height=20 align=center bgcolor=#EEEEEE> 조회수</td>
		<td width=240 bgcolor=white><?php echo $row['hit']?></td>
	</tr>
	<tr>
		<td bgcolor=white colspan=4>
		<font color=black>
		<pre><?php echo $row['content']?></pre>
		</font>
		</td>
	</tr>
	<tr>
		<td colspan=4 bgcolor=#999999>
		<table width=100%>
			<tr>
				<td width=200 align=left height=20>
					<a href="list1.php?num=<?php echo $num?>"><font color=white>
					[목록보기]</font></a>
					<a href="write1.php"><font color=white>
					[글 쓰기]</font></a>
					<a href="edit.php?num=<?php echo $num?>"><font color="white">
					[수정]</font></a>
					<a href="erase.php?num=<?php echo $num?>"><font color="white">
					[삭제]</font></a>
				</td>
				<td align=right>
				<?php
					$sql = "SELECT num FROM free WHERE num > $num LIMIT 1";
					$prev_num = mysqli_fetch_assoc($connect, $sql);
					
					if($prev_num['num'])
					{
						echo "<a href=\"read.php?num=".$prev_num['num']."\"><font color='white'>[이전]</font></a>";
					}

					else
					{
						echo "[이전]";
					}

					$sql1 = "SELECT num FROM free WHERE num < $num ORDER BY num DESC LIMIT 1";
					$next_num = mysqli_fetch_assoc($connect, $sql1);

					
					if($next_num['num'])
					{
						echo "<a href=\"read.php?num=".$next_num['num']."\"><font color='white'>[다음]</font></a>";;
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
	$sql = 'UPDATE free SET hit=hit+1 WHERE num='.$num;
	$result = mysqli_query($connect, $sql);

	mysqli_close($connect);
?>