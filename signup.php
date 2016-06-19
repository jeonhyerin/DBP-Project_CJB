<html>
<head>
	<title>set up</title>
</head>
<body>
	<form action="login.php" method="POST" align="center">
		<h1>로그인하러가기</h1>
		<input type=submit value="LOGIN">
	</form>
<?

   error_reporting(E_ALL ^ E_NOTICE); 
?>
<?php
	
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phonenum = $_POST["phonenum"];

	if(!get_magic_quotes_gpc()) {
        	$id=addslashes($id);
		$pw=addslashes($pw);
		$name=addslashes($name);
		$email=addslashes($email);
		$phonenum=addslashes($phonenum);
   }
 
	$connect = mysqli_connect("localhost","root","autoset","login");
 
	if(mysqli_connect_errno($connect)){
    		echo "실패!";
	}
 
	else{
    		echo " ";
        }
	 $query = "INSERT INTO login(id,pw,name,email,phonenum)
	 	VALUES('$id','$pw','$name','$email','$phonenum')"; // 데이터삽입
  	 $result = mysqli_query($connect,$query);
  	 $result = mysqli_query($connect, "SELECT * FROM login");
 
          while($row = mysqli_fetch_array($result)){
  	        $id = htmlspecialchars(stripslashes($row['id']));
  	        $pw = htmlspecialchars(stripslashes($row['pw']));
  	        $name = htmlspecialchars(stripslashes($row['name']));
  	        $email = htmlspecialchars(stripslashes($row['email']));
  	        $phonenum = htmlspecialchars(stripslashes($row['phonenum']));
            
          }   
 
	mysqli_close($connect);
?>
</body>
</html>


