<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>用户填写表单</title>
	<link rel="stylesheet" type="text/css" href="style/table.css">
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		    //if($_SESSION['userflag'] == 1){}
		       # echo "欢迎管理员".$_SESSION['username']."登陆";
		     //if($_SESSION['userflag'] == 0){}
		       #  echo "欢迎用户".$_SESSION['username']."登陆";
		}
		else
		{
		    echo "您没有权限访问此页面";
		}
	?>
	<div class="header">
		<div class="header-box">
			<h3>优利特经销商专区</h3>
			<ul>
				<li><a href="tableindex.php">首页</a></li>
				<li><a href="tableform.php">申请区</a></li>
<!-- 				<li><a href="tableformlist.php">历史表单</a></li> -->	
				<li><a href="tableuser.php">用户中心</a></li>
				<li><a href="destroy_session_login.php">退出</a></li>
			</ul>
		</div>
	</div>
	<!-- 主体 -->
	<div class="main-box">
		<div class="main">
			<div class="title">
				<div class="circle"></div>
				<h3>快速链接</h3>
			</div>
			<ul>
				<li><a href="tableform.php">立即填写表单</a></li>
				<li><a href="tableuser.php">查看用户信息</a></li>
				<li><a href="tableuser.php">修改密码</a></li>
			</ul>

		</div>
	</div>
</body>
	<script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="script/table.js"></script>
</html>