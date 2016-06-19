<html>
<head>
	<title>add_form2</title>
</head>
<body>

<? session_start(); ?>
	<form action="main.php" method="POST" align="center">
		<h1>작성완료</h1>
		<h2>메인으로 돌아가기</h2>
		<input type=submit value="Main">
	</form>
<?

   error_reporting(E_ALL ^ E_NOTICE); 
?>
<?php
	
	$pw = $_POST["pw"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
	$no = $_POST["no"];

	$_SESSION['name']=$name;
	$_SESSION['no']=$no;
	$_SESSION['comment']=$comment;

	if(!get_magic_quotes_gpc()) {
		$pw=addslashes($pw);
		$name=addslashes($name);
		$email=addslashes($email);
		$comment=addslashes($comment);
		$no=addslashes($no);
   }
 
	$connect = mysqli_connect("localhost","root","autoset","list");
 
	if(mysqli_connect_errno($connect)){
    		echo "실패!";
	}
 
	else{
    		echo " ";
        }
	 $query = "INSERT INTO list(no,pw,name,email,comment)
	 	VALUES(null,'$pw','$name','$email','$comment')";
  	 $result = mysqli_query($connect,$query);
  	 $result = mysqli_query($connect, "SELECT * FROM list");
 
          while($row = mysqli_fetch_array($result)){
  	        $pw = htmlspecialchars(stripslashes($row['pw']));
  	        $name = htmlspecialchars(stripslashes($row['name']));
  	        $email = htmlspecialchars(stripslashes($row['email']));
  	        $comment = htmlspecialchars(stripslashes($row['comment']));
		$no = htmlspecialchars(stripslashes($row['no']));
		echo "$no: $name $email $pw $comment<br/>";
		echo $_SESSION['name'];
		echo $_SESSION['comment'];
            
          }   
 
	mysqli_close($connect);
?>
</body>
</html>

