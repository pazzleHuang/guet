<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>用户填写表单</title>
	<link rel="stylesheet" type="text/css" href="style/table.css">
</head>
<body>
	

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
	<?php
	include("conn/conn.php");
	
	if(!empty($_POST['user'])){
		$company = $_POST['company'];
		$caption = $_POST['caption'];
		$rep = $_POST['rep'];
		$area = $_POST['area1'];
		$cer = $_POST['cer'];
		$establish = $_POST['establish'];
		$username = $_POST['username'];
		$job = $_POST['job'];
		$tel = $_POST['tel'];
		$asset = $_POST['asset'];
		$sales = $_POST['sales'];	
		$industry = $_POST['industry'];
	 	$sql = "INSERT INTO `table`(`id`,`company`,`caption`,`rep`,`area`,`cer`,`establish`,`username`,`job`,`tel`,`asset`,`sales`,`industry`) VALUES (null,'$company','$caption','$rep','$area', '$cer', '$establish', '$username','$job','$tel','$asset', '$sales', '$industry')";		
		//mysql_query($sql);
		//print_r($sql);
		//echo "插入成功！";
		if(!mysql_query($sql)) die ('提交失败！请重新填写!');
		//print_r($_POST);
		echo "<script>alert('提交成功！');location.href='#'</script>";
	}
?>
	<div class="main-box" >
		<div class="main">
			<form  method="post" action="tableform.php">
			<table class="table" border="0" cellpadding="0" cellspacing="0">
				<caption>经销商申请表格</caption>
					<tr class="header1" >
						<td colspan ="8">公司基本情况</td >
					</tr>					
						<td>企业名称：</td>
						<td><input type="text" name="company"/><span>&nbsp;*&nbsp;</span></td>
						<td>注册资本：</td>
						<td><input type="text" name="caption"/><span>&nbsp;*&nbsp;</span></td>
						<td>法定代表人：</td>
						<td><input type="text" name="rep"/><span>&nbsp;*&nbsp;</span></td>
					<tr>
						<td>占地面积：</td>
						<td><input type="text" name="area1"/><span>&nbsp;*&nbsp;</span></td>
						<td>体系证书：</td>
						<td><input type="text" name="cer"/><span>&nbsp;*&nbsp;</span></td>
						<td>成立时间：</td>
						<td><input type="text" name="establish"/><span>&nbsp;*&nbsp;</span></td>
					</tr>
					<tr class="header1">
						<td colspan ="8">业务联系人情况</td>
					</tr>
					<tr>
						<td>姓名：</td>
						<td><input type="text" name="username"/><span>&nbsp;*&nbsp;</span></td>
						<td>职务：</td>
						<td><input type="text" name="job"/><span>&nbsp;*&nbsp;</span></td>
						<td>电话：</td>
						<td><input type="text" name="tel"/><span>&nbsp;*&nbsp;</span></td>
					</tr>		
					<tr class="header1">
						<td colspan ="8">公司经营情况</td>
					</tr>
					<tr>
						<td>上年末资产规模：</td>
						<td><input type="text" name="asset"/></td>
						<td>上年末销售额：</td>
						<td><input type="text" name="sales"/></td>
						<td>行业地位：</td>
						<td><input type="text" name="industry"></td>
					</tr>
				</table>
				<input type="submit" value="提交" name="user" id="submit" />
			</form>
		</div>
	</div>
</body>
	<script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="script/table.js"></script>

</html>