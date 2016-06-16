<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理员登陆界面</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">	
</head>
<body>	

	<!-- login start -->
	<div id="login">
		<h4 class="ltitle">欢迎来到管理员登陆界面</h4>
		<!-- logincont start -->
		<div id="logincont">
			<p>本页面仅用于管理员登录，如需要帮助，请点击<u><a href="../../Contact/contact.php"></a>联系我们</u></p>
			<form action="userlogin.php" class="loginform" method="POST">
				<div class="lgroup">
					<label for="username">用户名：</label>
					<input type="text" name="username" id="userName" />
				</div>
				<div class="lgroup">
					<label for="passwd">密&nbsp;码：</label>
					<input type="password" name="passwd" id="userName"  />
				</div>
				<div class="lgroup identy">
					<label for="identify">验证码：</label>
					<input type="ptext" name="identify" id="identify" />
					<img src="code_num.php" id="getcode_num" title="看不清，点击换一张" align="absmiddle" />
				</div>
				<div class="lgroup subgroup">
					<input type="submit" id="chk_num" value="登&nbsp;录" />
				</div>
			</form>
		</div>
		<!-- logincont end -->
	</div>
	
</body>
	<script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="scripts/login.js"></script>
</html>