<?php 
header('Content-Type:text/html; charset=utf-8');
		session_start();
		if(isset($_SESSION['username']))
		{
		    //if($_SESSION['userflag'] == 1)
		       # echo "欢迎管理员".$_SESSION['username']."登陆";
		     //if($_SESSION['userflag'] == 0)
		       #  echo "欢迎用户".$_SESSION['username']."登陆";
		}
		else
		{
		    echo "您没有权限访问此页面";
		}


	unset($_SESSION['name']);
	unset($_SESSION['passwd']);
	unset($_SESSION['userflag']);
	echo "<script>alert('注销成功');location.href='../userlogin.php'</script>";

?>