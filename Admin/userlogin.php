<?php
		include("conn/conn.php");
		session_start();
		header('Content-Type:text/html; charset=utf-8');
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		//session_register($username);


		//获取session的值
		$query = @mysql_query("select username,userflag from admin where username = '$username' and passwd = '$passwd'")
		or die("SQL语句执行失败");
		//判断用户以及密码
		if($row = mysql_fetch_array($query))
		{
		    //session_start();
		    //判断权限
		    if($row['userflag'] == 1){
		        $_SESSION['username'] = $row['username'];
		        $_SESSION['userflag'] = $row['userflag'];
		        echo "<a href='newsManage.php'>欢迎访问优利特官网</a>";
		    }else{
		        echo "userflag不正确";
		    }

		}else{
		    echo "username或者usercode";
		}
		
		// if($username && $passwd){
		// 	if(strpos($username, "``") !== false)	 echo "用户名非法！";
		// 	else{
		// 		$sql = "SELECT `passwd` FROM `admin` WHERE `username`='$username'";
		// 		$query = mysql_query($sql);
		// 		$rows = mysql_fetch_array($query);
		// 		mysql_free_result($query);
		// 		if($rows['passwd'] == $passwd) echo "<script>alert('登录成功');location.href='manage.php'</script>";
		// 		else echo "登录失败";
		// 	}
		// }

	?>
