<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>供销商注册</title>
	<link rel="stylesheet" type="text/css" href="../styles/register.css">
</head>
<body>	
	
	<div class="l-box">
		<div class="header">
			<img src="../images/logo.png" alt="logo">
			<span><a href="../index.php">返回首页</a></span>
			<span class="regis"><a href="userlogin.php">已有帐号立即登录</a></span>
		</div>
		<div class="title">			
			<h3>优利特供应商注册页面</h3>
		</div>
		<div id="register">
			<form class="loginInfo" method="post" action="add.php" >
				<p class="border1">
					<span id="bordertop">用户名：</span>
					<input type="text" name="username" id="regname" placeholder="请输入用户名" />
					<span class="namespan reginfo">用户名由字母数字下划线组成</span>
				</p>
				<p>
					<span>密码：</span>
					<input type="password" name="passwd1" id="regpwd1" placeholder="请输入密码" />
					<span class="pwd1span reginfo">密码大于6个字符</span>
				</p>
				<p>
					<span>确认密码：</span>
					<input type="password" name="passwd2" id="regpwd2" placeholder="请输入密码" />
					<span class="pwd2span reginfo">再次输入密码</span>
				</p>
				<p>
					<span>公司名称：</span>
					<input type="text" name="companyname" id="regcompany" placeholder="请输入公司名称" />
					<span class="companyspan reginfo">只能输入汉字</span>
				</p>
				<p>
					<span>电子邮件：</span>
					<input type="text" name="email" id="email" placeholder="请输入常用的电子邮件" />
					<span class="emailspan reginfo">请输入邮件</span>
				</p>
				<div class="iden">
					<p>
						<span>验证码：</span>
						<input type="text" neme="identify" id="regide"  placeholder="请输入验证码" />
						<img src="code_num.php" id="regcheck" title="看不清，点击换一张" align="absmiddle" />
						<span class="idespan reginfo">&nbsp;*&nbsp;请输入验证码</span>
					</p>
				</div>	
   				<input id="regbtn" type="submit" value="立即注册" />
			</form>
		</div>
	</div>
	
</body>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/reg.js"></script>
	<script type="text/javascript" src="../script/xmlhttprequest.js"></script>
</html>
