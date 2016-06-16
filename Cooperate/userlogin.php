<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>经销商登录</title>
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
</head>
<body>
	<div class="login-box">
		<div class="header">
			<img src="../images/logo.png" alt="logo">
			<span><a href="../index.php">返回首页</a></span>
			<span class="regis"><a href="register.php">立即注册新帐号</a></span>
		</div>
		<div class="title">			
			<h3>优利经销商登录页面</h3>
		</div>
		<div id="login">
			<form class="loginInfo" method="POST" action="chk_login.php" >
				<p class="info">
					<span id="borderbottom">用户名：</span>
					<input type="text" name="username" id="logname" placeholder="请输入用户名">
					<span class="namespan log">&nbsp;*&nbsp;请输入用户名</span>
				</p>
				<p class="info">
					<span>密&nbsp;&nbsp;码：</span>
					<input type="password" name="passwd" id="passwd" placeholder="请输入密码">
					<span class="pwdspan log">&nbsp;*&nbsp;请输入密码</span>
				</p>
				<!-- <p class="border2">
					<label><input type="radio"/>下次自动登录</label> 
					<span>忘记密码？</span>	
				</p> -->
				<div class="iden">
					<p>
						<span>验证码：</span>
						<input type="text" name="identify" id="ide"  placeholder="请输入验证码" />
						<img src="code_num.php" id="getcode_num" alt="验证码" align="absmiddle"/>
						<span class="idespan log">&nbsp;*&nbsp;请输入验证码</span>
					</p>
					
				</div>
				<input type="submit" value="立即登录" id="login-sub" />
			</form>
		</div>
	</div>

</body>
	<script type="text/javascript"></script>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/login.js"></script>
	<script type="text/javascript" src="../script/xmlhttprequest.js"></script>

</html>

