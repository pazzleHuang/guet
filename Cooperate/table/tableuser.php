<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>用户中心</title>
	<link rel="stylesheet" type="text/css" href="style/table.css">
</head>
<body>
		<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		    #if($_SESSION['userflag'] == 1)
		       # echo "欢迎管理员".$_SESSION['username']."登陆";
		     #	if($_SESSION['userflag'] == 0)
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
<!-- 				<li><a href="tableformlist.php">历史表单</a></li>	 -->
				<li><a href="tableuser.php">用户中心</a></li>
				<li><a href="destroy_session_login.php">退出</a></li>
			</ul>
		</div>
	</div>
	<!-- 主体 -->
	<div class="main-box">
		<div class="main">
			<div id="user">
				<?php
					$now = $_SESSION['username'];
					# echo $now;
					include("../conn/conn.php");
					header('Content-Type:text/html; charset=utf-8');

					$sql = "SELECT * FROM `user` WHERE `name` = '$now'";
					$query = mysql_query($sql);
					$rs = mysql_fetch_array($query)
				?>
				<div class="userleft">
					<h3>我的信息</h3>
					<p><span>用户名：</span><input type="text" value="<?php echo $rs['name']; ?>" /></p>
					<p><span>密&nbsp;&nbsp;码：</span><input type="password" value="<?php echo $rs['passwd']; ?>" /></p>
					<p><span>公司名称：</span><input type="text" value="<?php echo $rs['company']; ?>" /></p>
					<p><span>电子邮件：</span><input type="text" value="<?php echo $rs['email']; ?>" /></p>
				</div>
				<div class="userright">
					<h3>修改密码</h3>
					<p><span>原密码：</span><input type="password"></p>
					<p><span>新密码：</span><input type="password"></p>
					<p><span>确认密码：</span><input type="password"></p>
				</div>
				<div class="userright">
					<h3>此区域正在开发中</h3>
				</div>
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="script/table.js"></script>
</html>