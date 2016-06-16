<?php
		include("conn/conn.php");
		session_start();
		header('Content-Type:text/html; charset=utf-8');

		$username = $_POST['username'];
		$passwd = $_POST['passwd'];

		
		if($username && $passwd){
			if(strpos($username, "``") !== false)	 echo "用户名非法！";
			else{
				$sql = "SELECT `passwd` FROM `admin` WHERE `name`='$username'";
				$query = mysql_query($sql);
				$rows = mysql_fetch_array($query);
				mysql_free_result($query);
				if($rows['passwd'] == $passwd) echo "<script>alert('登录成功');location.href='newsManage.php'</script>";
				else echo "登录失败";
			}
		}
		

	?>

