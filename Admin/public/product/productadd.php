<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$style = $_POST['style'];
		$list = $_POST['list'];
		$name = $_POST['name'];
		$picture = $_POST['picture'];
		$explain = $_POST['explain'];
	 	$sql = "INSERT INTO `product`(`id`,`产品分类`, `产品编号`, `产品名称`, `产品图片`,`产品说明`) VALUES (null,'$style','$list','$name','$picture','$explain')";		
		mysql_query($sql);
		print_r($sql);
		echo "<script>alert('添加成功');location.href='../../productManage.php'</script>";	
	}
	
?>


