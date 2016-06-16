<!-- edit.php -->
<?php
	include("conn.php");

	if(!empty($_GET['id'])){
		$sql = "SELECT * FROM `new` WHERE `id`='".$_GET['id']."'";
		$query = mysql_query($sql);
		$rs = mysql_fetch_array($query);

		$sqlUpdate = "UPDATE new SET `click`= `click`+ 1 WHERE `id`='".$_GET['id']."'";
		mysql_query($sqlUpdate);
		//print_r($rs);
		//echo $rs['id'];
	}

?>