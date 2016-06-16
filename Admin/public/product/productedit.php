<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面-编辑产品</title>
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
				<div class="button"><a href="../../productManage.php">返回上一页</a></div>
				<div class="position">您现在的位置是：产品管理&gt;&gt;编辑产品信息</div>
			</div>
			<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `product` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);
		//print_r($rs);
		//echo $rs['id'];
	}
	
	if(!empty($_POST['userEdit'])){
		$hid = $_POST['id'];
		$style = $_POST['style'];
		$list = $_POST['list'];
		$name = $_POST['name'];
		$picture = $_POST['picture'];
		$explain = $_POST['explain'];
	 	$sql = "UPDATE `product` SET `产品分类`='$style', `产品编号`='$list', `产品名称`='$name', `产品图片`='$picture', `产品说明`='$explain' WHERE `id`='$hid' LIMIT 1";		
		mysql_query($sql);
		echo "<script>alert('更新成功');location.href='../../productManage.php'</script>";
	}
?>

			<form action="productedit.php" method="post" class="formEdit">
				<div class="newsgroup1">
					<label for="id">编&nbsp;&nbsp;号：</label>
					<input type="text" name="id" value="<?php echo $rs['id']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="style">产品分类：</label>
					<input type="text" name="style" value="<?php echo $rs['产品分类']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="list">产品编号：</label>
					<input type="text" name="list"  value="<?php echo $rs['产品编号']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="name">产品名称：</label>
					<input type="text" name="name"  value="<?php echo $rs['产品名称']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="picture">产品图片：</label>
					<input type="text" name="picture" value="<?php echo $rs['产品图片']; ?>" />
				</div>
				<div class="newsgroup1">
					<label for="explain">产品说明：</label>
					<input type="text" name="explain" value="<?php echo $rs['产品说明']; ?>" />
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





