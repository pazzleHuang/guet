<?php
// 	include("../conn/conn.php");
// 	header("Content-type: text/html;charset=utf-8");

// 		$name = $_POST['name'];
// 		$caption = $_POST['caption'];
// 		$representative = $_POST['representative'];
// 		// $area = $_POST['area'];
// 		// $certificate = $_POST['certificate'];
// 		// $establish = $_POST['establish'];
// 		// $username = $_POST['username'];
// 		// $job = $_POST['job'];
// 		// $tel = $_POST['tel'];
// 		// $assetsize = $_POST['assetsize'];
// 		// $sales = $_POST['sales'];
// 		// $industry = $_POST['industry'];
// 		#,`法定代表人`,`占地面积`,`体系证书`,`成立时间`,`姓名`, `职务`,`电话`, `上年末资产规模`, `上年末销售额`，`行业地位`
// 		#'$representative', '$area', '$certificate', '$establish', '$username','$job','$tel','$assetsize', '$sales', '$industry'

// 	 	#$sql = "INSERT INTO `table`(`id`, `公司名称`,`注册资本`,`占地面积`,`体系证书`,`成立时间`,`姓名`, `职务`,`电话`, `上年末资产规模`, `上年末销售额`，`行业地位`) VALUES (null, '$name', '$caption','$representative', '$area', '$certificate', '$establish', '$username','$job','$tel','$assetsize', '$sales', '$industry')";
// 	 	$sql = "INSERT INTO`table1`(`id`,`公司名称`,`注册资本`,`法定代表人`) VALUES ('2','$name','$caption','$representative')";
// 	 	$sql1 = "SELECT * FROM `table`";
// 	 	mysql_query($sql1);
// 	 	print_r($sql1);		
// 	 	print_r($sql);	
// 	 	mysql_query($sql);		
// 		if(!mysql_query($sql)) die ('提交失败！请重新填写!');
// 		//print_r($_POST);
// 		else echo "<script>alert('提交成功！');location.href='tableindex.php'</script>";
include("../conn/conn.php");
	header("Content-type: text/html;charset=utf-8");
	
		$name = $_POST['namecompany'];
		$caption = $_POST['caption'];
		$representative = $_POST['representative'];

		// $email = $_POST['email'];
	 	$sql = "INSERT INTO`table1`(`id`,`name`,`caption`,`representative`) VALUES (null,'$name','$caption','$representative')" ;
	 			mysql_query($sql);
		print_r($_POST);		
		//if(!mysql_query($sql)) die ('注册失败！请重新填写!');
		//print_r($_POST);
		//else {echo "<script>alert('注册成功！');location.href='#'</script>";}
		
 ?>



<?php
	
		
?>