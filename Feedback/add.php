<?php
	include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
		$fbtitle = $_POST['title'];
		$fbcontent = $_POST['content'];
		$fbcontact = $_POST['contact'];
	 	$sql = "INSERT INTO`feedback`(`id`,`title`,`content`,`contact`,`time`) VALUES (null,'$fbtitle','$fbcontent','$fbcontact',now())";		
		if(!mysql_query($sql)) die('提交失败!');
		else echo "<script>alert('提交成功！');location.href='feedback.php'</script>";
		
?>