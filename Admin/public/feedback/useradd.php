<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
	if(!empty($_POST['usersub'])){
		$username = $_POST['username'];
		$password = $_POST['userpasswd'];
		$usercompany = $_POST['usercompany'];
		$useremail = $_POST['userEmail'];
	 	$sql = "INSERT INTO `user`(`id`, `name`, `passwd`, `company`,`email`) VALUES (null,'$username','$password','$usercompany','$useremail')";		
		mysql_query($sql);
		print_r($sql);
		//echo "<script>alert('添加成功');location.href='../userManage.php'</script>";	
	}
	
?>


