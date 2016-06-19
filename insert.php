<?
	include "dbconn.php";

	$num = $_GET['num'];
	$name = $_POST['name'];
	$regist_day = date('Y-m-d H:i:s');
	$password = $_POST['password'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	
	$target_dir = "up";

	for($i=0; $i<=3; $i++) {
		$upfile = ${"upfile".$num};
		$upfile_name = ${"upfile".$num."_name"};
		
		if(!(strcmp($upfile,"") && strcmp($upfile, "none"))) {
			continue;
		}
		else {
			$filename = explode(".", $upfile_name);
			$extension = $filename[sizeof($filename)-1];

		if(!strcmp($extension, "html")|| !strcmp($extension, "htm") || !strcmp($extension, "php") || !strcmp($extension, "inc"))
		{
			$msg = "업로드가 금지된 파일입니다";
		}

		$target = $target_dir . "/" . $upfile_name;
		${"target".$num} = $target;
		if(file_exists($target)) {
			$msg = "동일한 파일이 있습니다.";
		}

		if(!copy($upfile, $target)) {	
			$msg = "파일 저장 실패";
		}

		if(!unlink($upfile)) {
			$msg = "임시 파일 삭제 실패";
		}
	}
}
	$sql = "insert into free(name, password, subject, content, hit, regist_day, file_name_0, file_copied_0, file_name_1, file_copied_1, file_name_2, file_copied_2, file_name_3, file_copied_3)
		 values('$name', password('$password'), '$subject', '$content', 0, '$regist_day', '$target0', '$upfile0_name', '$target1', '$upfile1_name', '$target2', '$upfile2_name', '$target3', '$upfile3_name')";

	$result = mysqli_query($connect, $sql);

	mysqli_close($connect);
	
	echo ("<meta http-equiv='Refresh' content='1; URL=list1.php'>");
		
?>
<center> 
<font size=2>정상적으로 저장되었습니다.</font>