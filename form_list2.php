<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?

	$connect = mysqli_connect("localhost","root","autoset","list");
	$no = $_POST['no'];	
        $sql = 'select * from list';  
        $result = mysqli_query($connect,$sql); 
	$row = mysqli_fetch_array($result);	                                                        
	
?>
<br>
<br>
<table width="650" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#CFEAEB" style="border:0px #333333 solid; border-top-width:3px;">
	<tr>
	<td><b>방명록</b></td>
	<td align="right">
		[<a href="add_form.php">등록</a>]
	</td>
	</tr>
</table>
<table width="650" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" style="border:0px #333333 solid;">
	<tr>
	   <td>
      <th align="center" class="no">번호<td class="no" align="right"> <?php echo $row['no'] ?> </td></th>
      <th align="center" class="name">이름<td class="name" align="center" > <?php echo $row['name'] ?> </td></th>
      <th align="center" class="comment">내용<td class="comment" align="center"> <a href="list_view.php"><?php echo $row['comment'] ?></a></td>
</th>
   </td>
	</tr>
</table> 
	
<table width="650" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" style="border:0px #333333 solid;">
	<tr>
	<td>
		
	<?
		while($row = mysqli_fetch_array($result)){
		$pw = htmlspecialchars(stripslashes($row['pw']));
  	        $name = htmlspecialchars(stripslashes($row['name']));
  	        $email = htmlspecialchars(stripslashes($row['email']));
  	        $comment = htmlspecialchars(stripslashes($row['comment']));
		$no = htmlspecialchars(stripslashes($row['no'])); 
	?>


<?
}
?>

	</td>
	</tr>
</table>

<table width="650" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#CFEAEB" style="border:0px #333333 solid;">
	<tr>
	<td>page</td>
	<td align="right">
		<form action="list.php" method="POST">
			<select name="list" size="1">
				<option value="select" selected>선택</option>
				<option value="name">이름</option>
				<option value="email">이메일</option>	
			</select>
			<inpput type="text" name="text"/>
			<input type="submit" value="검색하기">
		</form>

	</td>
	</tr>
</table>

	
</body>
</html>