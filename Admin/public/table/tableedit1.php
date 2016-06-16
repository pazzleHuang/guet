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
				<div class="button"><a href="../../tableManage.php">返回上一页</a></div>
				<div class="position">您现在的位置是：用户管理&gt;&gt;编辑用户信息</div>
			</div>
			<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `table` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);
		//print_r($rs);
		//echo $rs['id'];
	}
	
	if(!empty($_POST['userEdit'])){
		$hid = $_POST['userid'];
		$name = $_POST['name'];
		$caption = $_POST['caption'];
		$representative = $_POST['representative'];
		$area = $_POST['area'];
		$certificate = $_POST['certificate'];
		$establish = $_POST['establish'];
		$username = $_POST['username'];
		$job = $_POST['job'];
		$tel = $_POST['tel'];
		$assetsize = $_POST['assetsize'];
		$sales = $_POST['sales'];
		$industry = $_POST['industry'];

	 	$sql = "UPDATE `table` SET `company`='$name', `caption`='$caption', `rep`='$representative', `area`='$area' ,`cer`= '$certificate', `establish`='$establish',`username`='$username', `job`='$job', `tel`='$tel', `asset`='$assetsize', `sales`='$sales', `industry`='$industry' WHERE `id`='$hid' LIMIT 1";		
	 	# $sql = "UPDATE `table` SET `公司名称`='$name', `注册资本`='$caption', `法定代表人`='$representative', `占地面积`='$area' ,`体系证书`= '$certificate', `成立时间`='$establish' WHERE `id`='$hid' LIMIT 1";		
		mysql_query($sql);
		echo "<script>alert('修改成功');location.href='../../tableManage.php'</script>";
	}
?>

			<form action="tableedit1.php" method="post" class="formEdit">
				<div class="newsgroup2">
					<label for="userid">编&nbsp;&nbsp;号：</label>
					<input type="text" name="userid" value="<?php echo $rs['id']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="name">公司名称：</label>
					<input type="text" name="name" value="<?php echo $rs['company']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="caption">注册资本：</label>
					<input type="text" name="caption" value="<?php echo $rs['caption']; ?>" />
				</div>				
				<div class="newsgroup2">
					<label for="representative">法定代表人：</label>
					<input type="text" name="representative" value="<?php echo $rs['rep']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="area">占地面积：</label>
					<input type="text" name="area" value="<?php echo $rs['area']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="certificate">体系证书：</label>
					<input type="text" name="certificate" value="<?php echo $rs['cer']; ?>"/>
				</div>
				<div class="newsgroup2">
					<label for="establish">成立时间：</label>
					<input type="text" name="establish" value="<?php echo $rs['establish']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="username">姓名：</label>
					<input type="text" name="username" value="<?php echo $rs['username']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="job">职务：</label>
					<input type="text" name="job" value="<?php echo $rs['job']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="tel">电话：</label>
					<input type="text" name="tel" value="<?php echo $rs['tel']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="assetsize">上年末资产规模：</label>
					<input type="text" name="assetsize" value="<?php echo $rs['asset']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="sales">上年末销售额：</label>
					<input type="text" name="sales" value="<?php echo $rs['sales']; ?>" />
				</div>
				<div class="newsgroup2">
					<label for="industry">行业地位：</label>
					<input type="text" name="industry" value="<?php echo $rs['industry']; ?>" />
				</div>
				
				<div class="newsgroup2">
					<input type="submit" id="userEdit" name="userEdit" value="保存修改" />
				</div>
			</form>


	</div>
</body>	
	<script type="text/javascript" src="../../scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../../scripts/manage.js"></script>
</html>





