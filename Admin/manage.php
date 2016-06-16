<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/manage.css" />

<body>
	<?php include ('Common/common.html'); ?>
		<div class="hidebackground"></div>     
		<!-- 隐藏的内容 end -->  
			
			<table id="table1" class="table table-striped">
				<thead>
					<tr>
						<th><input type="checkbox" /></th>
						<th>编号</th>
						<th class="wtdfirst">新闻标题</th>
						<th>发表时间</th>						
						<th>内容</th>
						<th>删除</th>
						<th>编辑</th>
					</tr>
				</thead>
				<tbody>
<?php 
	include("conn/conn.php"); //连接数据库

	$sql = "SELECT * FROM `new3`";
	$query = mysql_query($sql);
	while($rs = mysql_fetch_array($query)){
	//print_r($rs);
?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><?php echo $rs['id'] ?></td>
						<td><?php echo $rs['title'] ?></td>						
						<td><?php echo $rs['dates'] ?></td>
						<td><?php echo iconv_substr($rs['content'],0,100) ?>...</td>
						<td><a href="newsdel.php?del=<?php echo $rs['id'] ?>" class="del">删除</a></td>
						<td><a href="newsview.php?del=<?php echo $rs['id'] ?>" >编辑</a></td>
					</tr>					
<?php
}
?>
				</tbody>
			</table>
		
		<!-- 系统信息更新 -->
		<div id="info">


		</div>
	</div>


	
</body>
	<script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="scripts/manage.js"></script>
</head>
</html>