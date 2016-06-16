<?php

	//删除页
	include('../conn/conn.php');
	header("Content-type: text/html;charset=utf-8");

	if(!empty($_GET['del'])){
		$d = $_GET['del'];
		$sql = "DELETE FROM `job` WHERE `id`='$d'";
		mysql_query($sql);
		//echo "delete successful";
		echo "<script>alert('删除成功');location.href='../../zhaopinManage.php'</script>";
	}
?>