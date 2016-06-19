<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
html, body, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;	
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}
body {
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}

	.logo { width:235px; margin:0 auto; padding: 30px 70px 30px 0px;}
    .logo img { width:320px; height:80px;}
    .login_box { width:337px; height:300px; padding: 45px 44px 38px 44px; margin: 0 auto; background-color: #FFE5C2; 
                 opacity: 0.7; border-radius:5px;}
	.login_box .input_login { border-bottom: 2px solid #c4c5c4; padding: 20px 0 9px 0;}
    .login_box .input_login input { width: 100%; color: #828180; font-size: 15px; font-family:'돋움'; border:none;}
	.login_box  .login input {  
	width:100%; 
	height:55px; 
	background-color:#F6F6F6; 
	color:#595959; 
	font-size:16px; 
	padding:17px 0 16px; 
	margin-top:40px;
	border:0; 
	cursor:pointer; 
	font-family:'돋움';}
	.login_box .last{ 
	width:100%; 
	margin-top:10px; 
	border-top:1px solid #ebebeb; 
	padding-top:20px;}
	.login_box .last .join {float:right;}
	.login_box .last .join a { color:#bebebe;}



</style>
</head>
<body>
    <div class="wrapper">
        <div class="main">
	<td align="center">
	<font style="font-size:50pt;font-weight:bolder;">
		<br/>
		<br/>
		<h1 style="margin: 0 auto; text-align: center;">SHAR<font color="red">E</font>:AT</h1>
	</font>
	</td>
	<br/>
		<form action="login2.php" method="POST">
            <div class="login_box">
                <div class="input_login">
                    <input type="text" name="id" placeholder="아이디를 입력하세요">
                </div>
                <div class="input_login">
                    <input type="password" name="pw" placeholder="비밀번호를 입력하세요">
                </div>
				<div class="login">
					<input type="submit" value="로그인">
				</div>
				<br>
				<div class="last">
					<div class="join"><a href="sign.php">회원가입</a><div>
            </div>
        </div>
    </div>
</body>
</html>
