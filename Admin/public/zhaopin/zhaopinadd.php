<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$style = $_POST['style'];
		$position = $_POST['position'];
		$gangwei = $_POST['gangwei'];
		$xueli = $_POST['xueli'];
		$zhuanye = $_POST['zhuanye'];
		$num = $_POST['num'];
	 	$sql = "INSERT INTO `job`(`id`, `style`, `position`, `gangwei`,`xueli`,`zhuanye`,`num`) VALUES (null,'$style','$position','$gangwei','$xueli','$zhuanye','$num')";		
		mysql_query($sql);
		//print_r($sql);
		echo "<script>alert('添加成功');location.href='../../zhaopin.php'</script>";	
	}
	
?>


