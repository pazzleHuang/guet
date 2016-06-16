<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面-新闻页面</title>
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
				<div class="col-md-3 search2" >
					<form method="get">
						<input type="hidden" id="select_content" name="selectContent" />
						<select name="select" onchange="fuzhi(this.options[this.selectedIndex].text)"> 
							<option>请选择</option>
							<option value="1">产品分类</option>
							<option value="2">产品编号</option>
							<option value="3">产品名称</option>
						</select>
						<input type="text" name="keys">
						<input type="submit" value="搜索" class="searchsub" />
					</form>

				</div>

			</div>
		</div>   

			<table id="table1" class="table table-striped">
			<caption>选择<span><?php $select=isset($_GET['selectContent'])?$_GET['selectContent']:NULL; echo $select; ?></span>的搜索结果显示如下：</caption>

				<thead>
					<tr>
						<th><input type="checkbox" /></th>
						<th>编号</th>
						<th>公司名称</th>
						<th>法定代表人</th>						
						<th>占地面积</th>
						<th>体系证书</th>
						<th>成立时间</th>
						<th>姓名</th>
						<th>职务</th>
						<th>电话</th>
						<th>上年末资产规模</th>
						<th>上年末销售额</th>
						<th>行业地位</th>
						<th>编辑</th>
						<th>删除</th>
					</tr>
				</thead>
				<tbody class="tbody">
				<?php 
					include("conn/conn.php"); //连接数据库

					$sql = "SELECT * FROM `table`";
					$query = mysql_query($sql);
					while($rs = mysql_fetch_array($query)){
					//print_r($rs);
				?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><?php echo $rs['id']; ?></td>
						<td><?php echo $rs['company']; ?></td>						
						<td><?php echo $rs['rep']; ?></td>
						<td><?php echo $rs['area']; ?></td>
						<td><?php echo $rs['cer']; ?></td>
						<td><?php echo $rs['establish']; ?></td>
						<td><?php echo $rs['username']; ?></td>						
						<td><?php echo $rs['job']; ?></td>
						<td><?php echo $rs['tel']; ?></td>
						<td><?php echo $rs['asset']; ?></td>
						<td><?php echo $rs['sales']; ?></td>
						<td><?php echo $rs['industry']; ?></td>
						<td><a href="public/user/userdel.php?del=<?php echo $rs['id'] ?>" class="del">删除</a></td>
						<td><a href="public/table/tableedit1.php?id=<?php echo $rs['id'] ?>" class="edit">编辑</a></td>
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
	<script type="text/javascript">
		function fuzhi(a){
			document.getElementById("select_content").value=a;
		}
	</script>
</html>