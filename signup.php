<html>
<head>
	<title>회원가입</title>
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
</head>
<body>
	<font face="">
	<table width="1250" border="0" align="center" cellspacing="0" style="border:0px #333333 solid;">
	<div class="wrap">
	<header>
	<div style="text-align:right; color:#3D3D3D;">
	<font style="font-size:10pt;font-weight:bolder;">
		<span class="right" style="padding: 30px 10px;">

	</div>
	<td align="center"><br/>
	<font style="font-size:25pt;font-weight:bolder;">
	<a href="./main.php" target="_blank">
		<h1>SHAR<font color="#FF5A5A">E</font>:AT</h1>
	</a>
	</font>
<table width="650" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFE5C2" style="border:0px #333333 solid; border-top-width:3px;">
<td align="center"><h1>회원가입이 완료되었습니다.</h1> <h2><a href=./login.php>로그인하기</a></h2></td>
</table>


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
 
	$connect = mysqli_connect("localhost","root","autoset","delicious");
 
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


