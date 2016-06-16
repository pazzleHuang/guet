<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
		$name = $_POST['username'];
		$passwd = $_POST['passwd1'];
		$passwd = md5($passwd);
		$company = $_POST['companyname'];
		$email = $_POST['email'];
	 	$sql = "INSERT INTO`user`(`name`,`passwd`,`company`,`email`) VALUES ('$name','$passwd','$company','$email')" ;		
		if(!mysql_query($sql)) die ('注册失败！请重新填写!');
		//print_r($_POST);
		else echo "<script>alert('注册成功！');location.href='userogin.php'</script>";
		
?>