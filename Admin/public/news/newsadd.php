<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
	 	$sql = "INSERT INTO `new2`(`id`, `title`, `dates`, `content`,`click`) VALUES (null,'$title',now(),'$content','0')";		
		mysql_query($sql);
		print_r($sql);
		echo "<script>alert('添加成功');location.href='../../newsManage.php'</script>";	
	}
	
?>


