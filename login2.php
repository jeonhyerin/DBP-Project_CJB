<!DOCTYPE HTML>
<html>
<head>
	<title>login</title>
</head>
<body>

<?
   error_reporting(E_ALL ^ E_NOTICE); 
?>


<? session_start(); ?>

<?

	$id = $_POST["id"];
	$pw = $_POST["pw"];
	$name = $_POST["name"];
	if(!get_magic_quotes_gpc()) {
        	$id=addslashes($id);
		$pw=addslashes($pw);
		$name=addslashes($name);
	}
	$connect = mysqli_connect("localhost","root","autoset","login");

	
	if(mysqli_connect_errno($connect)){
    		echo "실패!";
	}
	else{
    		echo " ";
        }
         
        $sql = "select * from login where id = '$id' and pw = '$pw'";  
        $result = mysqli_query($connect,$sql) or die(mysqli_error());                                   

        $count=mysqli_num_rows($result);                                             

         

    if ($count==1){      
        $_SESSION['id']=$id;  
	    $_SESSION['log'] = 'YES';
            echo '<script type = "text/javascript">alert("LOGIN COMPLETE")</script> ';
	    //echo $_SESSION['name']."<h1>♡♡안녕하세요 ".$_SESSION['id']."님 환영합니다♡♡</h1>";
	      echo "<meta http-equiv='refresh' content='0; url=http://localhost/main.php'>";

	}
	
	 else {                 

            echo '<script type = "text/javascript">alert("ID/PASSWORD ERROR")</script> ';

           echo "<meta http-equiv='refresh' content='0; url=http://localhost/login.php'>";

        }

?>

	<form action="login.php" method="POST" >
		<input type=submit value="Back/Replay">
	</form>
	<br/>

	<form action="logout.php" method="POST">
		<input type=submit value="Logout">
	</form>

</body>
</html>