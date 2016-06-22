<html>
<head>
<meta charset="utf-8">
<title> 맛집 공유 게시판 </title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<br>
<?php
	include "dbconn.php";
	
	$num = $_GET['num'];
	$sql = 'SELECT * FROM night_food WHERE num='.$num;
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
		<?php
			for($i=0; $i<=3; $i++) 
			{
				if($image_copied[$i])
				{
					$img_name = $image_copied[$i];
					$img_name = "./img/".$img_name;
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
		<td colspan=4 bgcolor=#999999>
		<table width=100%>
			<tr>
				<td width=200 align=left height=20>
					<a href="nightfood_list.php?num=<?php echo $num?>"><font color=white>
					[목록보기]</font></a>
					<a href="nightfood_write.php"><font color=white>
					[글 쓰기]</font></a>
					<a href="edit.php?num=<?php echo $num?>"><font color="white">
					[수정]</font></a>
					<a href="erase.php?num=<?php echo $num?>"><font color="white">
					[삭제]</font></a>
				</td>
				<td align=right>
				<?php
					$sql = "SELECT num FROM night_food WHERE num > $num LIMIT 1";
					$prev_num = mysqli_fetch_assoc($connect, $sql);
					
					if($prev_num['num'])
					{
						echo "<a href=\"nightfood_read.php?num=".$prev_num['num']."\"><font color='white'>[이전]</font></a>";
					}

					else
					{
						echo "[이전]";
					}

					$sql1 = "SELECT num FROM night_food WHERE num < $num ORDER BY num DESC LIMIT 1";
					$next_num = mysqli_fetch_assoc($connect, $sql1);

					
					if($next_num['num'])
					{
						echo "<a href=\"nightfood_read.php?num=".$next_num['num']."\"><font color='white'>[다음]</font></a>";;
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
	$sql = 'UPDATE night_food SET hit=hit+1 WHERE num='.$num;
	$result = mysqli_query($connect, $sql);

	mysqli_close($connect);
?>