<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面</title>
	<link rel="stylesheet" type="text/css" href="../../styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../../styles/manage.css" />
	<link rel="stylesheet" type="text/css" href="../../styles/formEdit.css">
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['username']))
		{
			//做点什么
		}
		else
		{
		    echo "您没有权限访问此页面";
		}
	?>
	<div id="header">
		<p >hi,<?php echo "欢迎管理员".$_SESSION['username']."登陆";?>欢迎来到桂林优利特医疗电子有限公司网站管理系统</p>

	<?php include ('../../Common/common.html'); ?>
	<!-- 主要内容显示 -->
		<div id="mainthings" class="container-fluid">
			<div class="row">
				<div class="button"><a href="../../userManage.php">返回上一页</a></div>
				<div class="position">您现在的位置是：用户管理&gt;&gt;编辑用户信息</div>
			</div>
			<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `user` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);
		//print_r($rs);
		//echo $rs['id'];
	}
	
	if(!empty($_POST['userEdit'])){
		$hid = $_POST['userid'];
		$username = $_POST['username'];
		$userpassword = $_POST['userpasswd'];
		$usercompany = $_POST['usercompany'];
		$useremail = $_POST['userEmail'];
	 	$sql = "UPDATE `user` SET `name`='$username', `passwd`='$userpassword', `company`='$usercompany', `email`='$useremail' WHERE `id`='$hid' LIMIT 1";		
		mysql_query($sql);
		echo "<script>alert('修改成功');location.href='../../userManage.php'</script>";
	}
?>

			<form action="useredit.php" method="post" class="formEdit">
				<div class="newsgroup1">
					<label for="userid">编&nbsp;&nbsp;号：</label>
					<input type="text" name="userid" value="<?php echo $rs['id']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="username">用户名：</label>
					<input type="text" name="username" value="<?php echo $rs['name']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="userpasswd">密&nbsp;&nbsp;码：</label>
					<input type="text" name="userpasswd" value="<?php echo $rs['passwd']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="usercompany">公司名称：</label>
					<input type="text" name="usercompany" value="<?php echo $rs['company']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="userEmail">电子邮件：</label>
					<input type="email" name="userEmail" value="<?php echo $rs['email']; ?>"/>
				</div>
				<div class="newsgroup1">
					<input type="submit" id="userEdit" name="userEdit" value="保存修改" />
				</div>
			</form>


	</div>
</body>	
	<script type="text/javascript" src="../../scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../../scripts/manage.js"></script>
</html>





