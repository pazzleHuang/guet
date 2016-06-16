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
				<div class="button"><a href="../../zhaopin.php">返回上一页</a></div>
				<div class="position">您现在的位置是：招聘管理&gt;&gt;编辑招聘信息</div>
			</div>
			<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `job` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);
		//print_r($rs);
		//echo $rs['id'];
	}
	
	if(!empty($_POST['userEdit'])){
		$hid = $_POST['id'];
		$style = $_POST['style'];
		$position = $_POST['position'];
		$gangwei = $_POST['gangwei'];
		$xueli = $_POST['xueli'];
		$zhuanye = $_POST['zhuanye'];
		$num = $_POST['num'];

	 	$sql = "UPDATE `job` SET `style`='$style', `position`='$position', `gangwei`='$gangwei', `xueli`='$xueli', `zhuanye`='$zhuanye', `num`='$num' WHERE `id`='$hid' LIMIT 1";		
		// $sql = "UPDATE `product` SET `产品分类`='$style', `产品编号`='$list', `产品名称`='$name', `产品图片`='$picture', `产品说明`='$explain' WHERE `id`='$hid' LIMIT 1";		
		mysql_query($sql);
		echo "<script>alert('更新成功');location.href='../../zhaopin.php'</script>";
	}
?>

			<form action="zhaopinedit.php" method="post" class="formEdit">
				<div class="newsgroup1">
					<label for="id">编&nbsp;&nbsp;号：</label>
					<input type="text" name="id" value="<?php echo $rs['id'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="style">类别：</label>
					<input type="text" name="style" value="<?php echo $rs['style'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="position">专业方向：</label>
					<input type="text" name="position" value="<?php echo $rs['position'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="gangwei">岗位：</label>
					<input type="text" name="gangwei" value="<?php echo $rs['gangwei'] ?>" />
				</div>
				<div class="newsgroup1">
					<label for="xueli">学历：</label>
					<input type="text" name="xueli" value="<?php echo $rs['xueli'] ?>"/>
				</div>
				<div class="newsgroup1">
					<label for="zhuanye">专业：</label>
					<input type="text" name="zhuanye" value="<?php echo $rs['zhuanye'] ?>"/>
				</div>
				<div class="newsgroup1">
					<label for="num">需求人数：</label>
					<input type="text" name="num" value="<?php echo $rs['num'] ?>"/>
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





