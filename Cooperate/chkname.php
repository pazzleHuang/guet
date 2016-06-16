<?php
include_once "conn/conn.php";
$sql = "select * from user where name='".$_GET['name']."'";
//获取查询的结果：用户名是否已存在.
$num = $conne->getRowsNum($sql);
if($num == 1){
	echo '2';
}else if($num == 0){
	echo '1';
}else{
	echo $conne->msg_error();
}
?>
