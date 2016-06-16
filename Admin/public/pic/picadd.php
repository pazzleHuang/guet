<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$name = $_POST['name'];
		$url = $_POST['url'];
		$src = $_POST['src'];
	 	$sql = "INSERT INTO `wrappic`(`id`, `picname`, `urlpic`, `src`,`date`) VALUES (null,'$name','$url','$src','now()')";		
		// $sql = "INSERT INTO `wrappic`(`id`, `name`, `passwd`, `company`,`email`) VALUES (null,'$username','$password','$usercompany','$useremail')";	
		mysql_query($sql);
		//print_r($sql);
		echo "<script>alert('添加成功');location.href='../../picManage.php'</script>";	
	}
	
?>


