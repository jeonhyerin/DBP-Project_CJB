<?
	include "dbconn.php";

	$num = $_GET['num'];
	$name = $_POST['name'];
	$regist_day = date('Y-m-d H:i:s');
	$password = $_POST['password'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	
	$files = $_FILES["upfile"];
	$count = count($files["name"]);
	$upload_dir = './img/';

	for($i=0; $i<$count; $i++)
	{
		$upfile_name[$i] = $files["name"][$i];
		$upfile_tmp_name[$i] = $files["tmp_name"][$i];
		$upfile_type[$i] = $files["type"][$i];
		$upfile_size[$i] = $files["size"][$i];
		$upfile_error[$i] = $files["error"][$i];

		$file = explode(".", $upfile_name[$i]);
		$file_name = $file[0];

		$file_ext = $file[1];

		if(!$upfile_error[$i]) 
		{
			$new_file_name = date("Y_m_d_H_i_s");
			$new_file_name = $new_file_name . "_" . $i;
			$copied_file_name[$i] = $new_file_name . ".".$file_ext;
			$uploaded_file[$i] = $uploaded_dir . $copied_file_name[$i];
			
			if($upfile_size[$i] > 500000)
			{
				echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(500KB)을 초과합니다! <br>
					파일 크기를 확인해주세요!');
				history.go(-1)
				</script>
				");
				exit;
			}

			if(($upfile_type[$i] != "image/gif") && ($upfile_type[$i] != "image/jpeg") && ($upfile_type[$i] != "image/pjpeg"))
			{
				echo("
				<script>
				alert('JPG와 GIF 이미지 파일만 업로드 가능합니다!');
				history.go(-1)
				</script>
				");
				exit;
			}

			if(!move_uploaded_file($upfile_tmp_name[$i], $uploaded_file[$i]))
			{
				echo("
				<script>
				alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
				history.go(-1)
				</script>
				");
				exit;
			}
		}
	}
			
	$sql = "insert into china_food(name, password, subject, content, hit, regist_day, file_name_0, file_copied_0, file_name_1, file_copied_1, file_name_2, file_copied_2, file_name_3, file_copied_3)
		 values('$name', '$password', '$subject', '$content', 0, '$regist_day', '$upfile_name[0]', '$copied_file_name[0]', '$upfile_name[1]', '$copied_file_name[1]', '$upfile_name[2]', '$copied_file_name[2]', '$upfile_name[3]', '$copied_file_name[3]')";

	$result = mysqli_query($connect, $sql);
		
?>
	$msg = "성공적으로 등록되었습니다.";

	echo ("
		<script>
		if('$msg' != ' ') {
			alert('$msg');
		}
		location.href='chinafood_list.php?num=$num';
		</script>
	");
