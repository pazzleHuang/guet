<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面-回复反馈</title>
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
				<div class="button"><a href="../../feedbackManage.php">返回上一页</a></div>
				<div class="position">您现在的位置是：反馈管理&gt;&gt;编辑反馈信息</div>
			</div>
			<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `feedback` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);
		//print_r($rs);
		//echo $rs['id'];
	}
	
	if(!empty($_POST['userEdit'])){
		$feedcontact = $_POST['feedcontact'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$useremail = $_POST['userEmail'];
	 	$sql = "UPDATE `user` SET `contact`='$feedcontact', `title`='$feedtitle', `content`='$feedcontent' WHERE `id`='$hid' LIMIT 1";		
		mysql_query($sql);
		echo "<script>alert('更新成功');location.href='../../feedbackManage.php'</script>";
	}
?>

			<form action="" method="post" class="formEdit">
				<div class="newsgroup1">
					<label for="feedcontact">收件人：</label>
					<input type="text" name="feedcontact" value="<?php echo $rs['contact'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="feedtitle">回复标题：</label>
					<input type="text" name="feedtitle" value="<?php echo $rs['title'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="feedcontent">回复内容：</label>
					<input type="text" name="feedcontent" value="<?php echo $rs['content'] ?>" />
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





