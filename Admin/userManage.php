<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/manage.css" />
</head>
<body>
		<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		    //if($_SESSION['userflag'] == 1)
		       # echo "欢迎管理员".$_SESSION['username']."登陆";
		    // if($_SESSION['userflag'] == 0)
		    //     echo "欢迎用户".$_SESSION['username']."登陆";
		}
		else
		{
		    echo "您没有权限访问此页面";
		}
	?>
	<div id="header">
		<p >hi,<?php echo "欢迎管理员".$_SESSION['username']."登陆";?>欢迎来到桂林优利特医疗电子有限公司网站管理系统</p>

	<?php include ('Common/common.html'); ?>
	<!-- 主要内容显示 -->
		<div id="mainthings" class="container-fluid">
			<div class="row">
				<div class="col-md-3 button" id="add">添加</div>
				<div class="col-md-3 search2" >
					<form method="get">
						<input type="hidden" id="select_content" name="selectContent" />
						<select name="select" onchange="fuzhi(this.options[this.selectedIndex].text)"> 
							<option>请选择</option>
							<option value="1">用户名</option>
							<option value="2">公司名称</option>
							<option value="3">电子邮件</option>
						</select>
						<input type="text" name="keys">
						<input type="submit" value="搜索" class="searchsub" />
					</form>

				</div>			
			</div>
		</div>
		<div class="hidebackground"></div>     

		<!-- 隐藏的内容 start-->
		<div  id="addcontent"  class="hideContent col-md-12 ">
			<div class="addcontText" >
				<div class="addTitle"><span>添加一条用户信息</span><span class="close1">x</span></div>

				<div class="addContentNews">
					<form action="public/user/useradd.php" method="post" class="formEdit">
						<div class="newsgroup1">
							<label for="username">用户名：</label>
							<input type="text" name="username" id="username" />
							<span class="namespan reginfo">&nbsp;*&nbsp;用户名由字母数字下划线组成</span>
						</div>
						<div class="newsgroup1">
							<label for="userpasswd">密&nbsp;码：</label>
							<input type="text" name="userpasswd" id="pwd"  />
							<span class="pwd1span reginfo">&nbsp;*&nbsp;密码大于6个字符</span>
						</div>
						<div class="newsgroup1">
							<label for="usercompany">公司名称：</label>
							<input type="text" name="usercompany" id="company" />
							<span class="companyspan reginfo">&nbsp;*&nbsp;只能输入汉字</span>
						</div>
						<div class="newsgroup1">
							<label for="userEmail">电子邮件：</label>
							<input type="email" name="userEmail" id="email" />
							<span class="emailspan reginfo">&nbsp;*&nbsp;请输入邮件</span>
						</div>
						<div class="newsgroup1">
							<input type="submit" id="userSub" name="usersub" class="subbtn" value="添加" disabled="disabled" />
						</div>
					</form>
				</div>
			</div>
		</div> 
<!-- 隐藏的内容 end --> 

			<table id="table1" class="table table-striped">
			<caption>选择<span><?php $select=isset($_GET['selectContent'])?$_GET['selectContent']:NULL; echo $select; ?></span>的搜索结果显示如下：</caption>
				<thead>
					<tr>
						<th><input type="checkbox" /></th>
						<th>编号</th>
						<th class="wtdfirst">用户名</th>
						<th>用户密码</th>						
						<th>公司名称</th>
						<th>电子邮件</th>
						<th>删除</th>
						<th>编辑</th>
					</tr>
				</thead>
				<tbody class="tbody">
				<?php 
					include("conn/conn.php"); //连接数据库
					# 搜索功能：
					 $select=isset($_GET['selectContent'])?$_GET['selectContent']:NULL;
					 $s=isset($_GET['keys'])?$_GET['keys']:NULL;
						$w = "`name` LIKE '%".$s."%'";	
						if(!empty($_GET['keys'])){	
							switch ($select) {
								case '用户名':
									$w = "`name` LIKE '%".$_GET['keys']."%'";
									break;
								case '公司名称':
									$w = "`company` LIKE '%".$_GET['keys']."%'";
									break;
								case '电子邮件':
									$w = "`email` LIKE '%".$_GET['keys']."%'";
									break;
								
								default:
									# code...
									break;
							}															
						}
						else{
							$w = 1;
						}

					$sql = "SELECT * FROM `user` WHERE $w  ORDER BY `id` asc";
					$query = mysql_query($sql);
					while($rs = mysql_fetch_array($query)){
					//print_r($rs);
				?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><?php echo $rs['id']; ?></td>
						<td><?php echo $rs['name']; ?></td>						
						<td><?php echo $rs['passwd']; ?></td>
						<td><?php echo $rs['company']; ?></td>
						<td><?php echo $rs['email']; ?></td>
						<td><a href="public/user/userdel.php?del=<?php echo $rs['id'] ?>" class="del">删除</a></td>
						<td><a href="public/user/useredit.php?id=<?php echo $rs['id'] ?>" class="edit">编辑</a></td>
					</tr>					
				<?php
				}
				?>
				</tbody>
			</table>
	</div>
	
</body>
	<script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="scripts/manage.js"></script>
	<script type="text/javascript" src="scripts/xmlhttprequest.js"></script>
	<script type="text/javascript" src="scripts/userManage.js"></script>
		<script type="text/javascript">
		function fuzhi(a){
			document.getElementById("select_content").value=a;
		}
	</script>

</html>