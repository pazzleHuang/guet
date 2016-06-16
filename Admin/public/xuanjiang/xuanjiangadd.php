<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$city = $_POST['city'];
		$xuexiao = $_POST['xuexiao'];
		$shijian = $_POST['shijian'];
		$didian = $_POST['didian'];
		$logo = $_POST['logo'];
	 	$sql = "INSERT INTO `xuanjiang`(`id`, `city`, `xuexiao`, `shijian`,`didian`,`logo`) VALUES (null,'$city','$xuexiao','$shijian','$didian','$logo')";		
		mysql_query($sql);
		//print_r($sql);
		echo "<script>alert('添加成功');location.href='../../xuanjiang.php'</script>";	
	}
	
?>


