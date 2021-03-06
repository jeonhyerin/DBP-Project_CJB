﻿<?php
	include 'dbconn.php';
	
	/* 페이징 시작 */
	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	
	$sql = 'select count(*) as cnt from japan_food order by num desc';
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$allPost = $row['cnt']; //전체 게시글의 수
	

	$onePage = 15; // 한 페이지에 보여줄 게시글의 수.
	$allPage = ceil($allPost / $onePage); //전체 페이지의 수

	if($page < 1 && $page > $allPage) {
?>
		<script>
			alert("존재하지 않는 페이지입니다.");
			history.back();
		</script>
	<?php
			exit;
		}
	
		$oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
		$currentSection = ceil($page / $oneSection); //현재 섹션
		$allSection = ceil($allPage / $oneSection); //전체 섹션의 수
		
		$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지
		
		if($currentSection == $allSection) {
			$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
		} 
		else {
			$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
		}
		
		$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
		$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.
		
		$paging = '<ul>'; // 페이징을 저장할 변수
		
	
		//첫 페이지가 아니라면 처음 버튼을 생성
		if($page != 1) { 
			$paging .= '<li class="page page_start"><a href="./japanfood_list.php?page=1">처음</a></li>';
		}
		//첫 섹션이 아니라면 이전 버튼을 생성
		if($currentSection != 1) { 
			$paging .= '<li class="page page_prev"><a href="./japanfood_list.php?page=' . $prevPage . '">이전</a></li>';
		}
	
		for($i = $firstPage; $i <= $lastPage; $i++) {
			if($i == $page) {
				$paging .= '<li class="page current">' . $i . '</li>';
			} 
			else {
				$paging .= '<li class="page"><a href="./japanfood_list.php?page='.$i.'">'.$i.'</a></li>';
		}
	}
	
	//마지막 섹션이 아니라면 다음 버튼을 생성
	if($currentSection != $allSection) { 
		$paging .= '<li class="page page_next"><a href="./japanfood_list.php?page='.$nextPage.'">다음</a></li>';
	}
	
	//마지막 페이지가 아니라면 끝 버튼을 생성
	if($page != $allPage) { 
		$paging .= '<li class="page page_end"><a href="./japanfood_list.php?page='.$allPage.'">끝</a></li>';
	}
	$paging .= '</ul>';
	
	/* 페이징 끝 */
	$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문
	
	$sql = 'select * from japan_food order by num desc'.$sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> 맛집 공유 게시판</title>
	<link rel="stylesheet" href="./css/list_style.css" />
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<h3> 맛집 공유 게시판 </h3>
<br>
<br>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr height=20 bgcolor=#999999>
		<td width=30 align=center>
			<font color=white> 번호 </font>
		</td>
		<td width=370 align=center>
			<font color=white> 제목</font>
		</td>
		<td width=50 align=center>
			<font color=white> 글쓴이 </font>
		<td width=60 align=center>
			<font color=white> 날짜 </font>
		</td>
		<td width=40 align=center>
			<font color=white> 조회수 </font>
		</td>
	</tr>		
	<?php
		if(isset($emptyData)) {
			echo $emptyData;
		} else {
			while($row = mysqli_fetch_assoc($result))
			{
				$datetime = explode(' ', $row['regist_day']);
				$date = $datetime[0];
				$time = $datetime[1];
				if($date == Date('Y-m-d'))
					$row['regist_day'] = $time;
				else
					$row['regist_day'] = $date;
	?>
		<tr>
			<td height=20 bgcolor=white align=center>
			<a href="./japanfood_read.php?num=<?php echo $row['num']?>"> </a>
			</td>
		
			<td height=20 bgcolor=white> &nbsp;
			<a href="./japanfood_read.php?num=<?php echo $row['num']?>"><?php echo $row['subject']?></a>
			</td>
			
			<td align=center height=20 bgcolor=white>
			<font color=black><?php echo $row['name']?></font>
			</td>

			<td align=center height=20 bgcolor=white>
			<font color=black><?php echo $row['regist_day']?></font>
			</td>
			
			<td align=center height=20 bgcolor=white>
			<font color=black><?php echo $row['hit']?></font>
			</td>
		</tr>
		<?php
			}
		}
		?>
		</table>
		<div id="btnSet">
			<a href="./japanfood_write.php" class="btnWrite btn">글쓰기</a>
		</div>
		<div id="paging">
			<?php echo $paging ?>
		</div>
		<div id="searchBox">
			<form action="./japanfood_list.php" method="get">
					<select name="searchColumn">
						<option <?php echo $searchColumn=='subject'?'selected="selected"':null?> value="subject">제목</option>
						<option <?php echo $searchColumn=='content'?'selected="selected"':null?> value="content">내용</option>
						<option <?php echo $searchColumn=='name'?'selected="selected"':null?> value="name">작성자</option>
					</select>
					<input type="text" name="searchText" value="<?php echo isset($searchText)?$searchText:null?>">
					<button type="submit">검색</button>
			</form>
		</div>
</body>
</html>