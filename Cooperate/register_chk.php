<?php
	include_once 'conn/conn.php';
	//$reback = '0';

	$name = trim($_GET['username']);
	$passwd = trim($_GET['passwd1']);

	 $sql = "insert into user(name,passwd) values ('$name','$passwd')";
		$num = $conne->uidRst($sql);
		if($num == 1){
			$reback = '1';
		}
	echo $reback;

	
?>