<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>后台管理页面-宣讲页面</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/manage.css" />

<body>
	<?php
		session_start();
		if(isset($_SESSION['username']))
		{
		    if($_SESSION['userflag'] == 1){}
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
				<!-- <div class="col-md-3 button" id="search">更新</div> -->
				<div class="col-md-3 search2" >
					<form method="get">
						<input type="hidden" id="select_content" name="selectContent" />
						<select name="select" onchange="fuzhi(this.options[this.selectedIndex].text)"> 
							<option>请选择</option>
							<option value="1">城市</option>
							<option value="2">地点</option>
							<option value="3">学校</option>
							<option value="4">时间</option>
						</select>
						<input type="text" name="keys">
						<input type="submit" value="搜索" class="searchsub" />
					</form>

				</div>
				<!-- <div class="col-md-3 button">搜索 </div> -->
			</div>
		</div>
		<div class="hidebackground"></div>     

		<!-- 隐藏的内容 start-->
		<div  id="addcontent"  class="hideContent col-md-12 ">
			<div class="addcontText" >
				<!-- 搜索结果 start-->
				<div class="addTitle"><span>添加一条宣讲信息</span><span class="close1">x</span></div>
				<!-- 搜索结果 end -->
				<div class="addContentNews">
					<form action="public/xuanjiang/xuanjiangadd.php" method="post" class="formEdit">
						<div class="newsgroup1">
							<label for="city">城市：</label>
							<input type="text" name="city" />
						</div>
						<div class="newsgroup1">
							<label for="xuexiao">学校：</label>
							<input type="text" name="xuexiao" />
						</div>
						<div class="newsgroup1">
							<label for="shijian">时间：</label>
							<input type="text" name="shijian" />
						</div>
						<div class="newsgroup1">
							<label for="didian">地点：</label>
							<input type="text" name="didian" />
						</div>
						<div class="newsgroup1">
							<label for="logo">logo：</label>
							<input type="text" name="logo" />
						</div>

						<div class="newsgroup1">
							<input type="submit" id="userSub" name="usersub" class="subbtn" value="添加" />
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
						<th>城市</th>
						<th>学校</th>						
						<th>时间</th>
						<th>地点</th>
						<th>logo</th>
						<th>删除</th>
						<th>编辑</th>
					</tr>
				</thead>
				<tbody class="tbody">
				<?php 
					include("conn/conn.php"); //连接数据库

					# 搜索功能：
					 $select=isset($_GET['selectContent'])?$_GET['selectContent']:NULL;
					# echo "$select";
					 $s=isset($_GET['keys'])?$_GET['keys']:NULL;
					# $s = $_GET['keys'];
					# echo "$s";	
					$w = "`title` LIKE '%".$s."%'";	
						if(!empty($_GET['keys'])){	
							switch ($select) {
								case '城市':
									$w = "`city` LIKE '%".$_GET['keys']."%'";
									break;
								case '学校':
									$w = "`xuexiao` LIKE '%".$_GET['keys']."%'";
									break;
								case '地点':
									$w = "`didian` LIKE '%".$_GET['keys']."%'";
									break;
								case '时间':
									$w = "`shijian` LIKE '%".$_GET['keys']."%'";
									break;
								
								default:
									# code...
									break;
							}															
						}
						else{
							$w = 1;
						}

					$sql = "SELECT * FROM `xuanjiang` WHERE $w  ORDER BY `id` asc";
					$query = mysql_query($sql);
					while($rs = mysql_fetch_array($query)){
					//print_r($rs);
				?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><?php echo $rs['id']; ?></td>
						<td><?php echo $rs['city']; ?></td>						
						<td><?php echo $rs['xuexiao']; ?></td>
						<td><?php $v = $rs['shijian']; mb_internal_encoding('utf-8'); echo mb_substr($v, 0,25); ?>...</td>
						<td><?php echo $rs['didian']; ?></td>
						<td><?php echo $rs['logo']; ?></td>
						<td><a href="public/xuanjiang/xuanjiangdel.php?del=<?php echo $rs['id'] ?>" class="del" onclick="doaction()">删除</a></td>
						<td><a href="public/xuanjiang/xuanjiangedit.php?id=<?php echo $rs['id'] ?>" class="edit">编辑</a></td>
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
		function doaction(){
			if(confirm("确定要删除吗？"))
			{	<?php include('public/news/newsdel.php'); ?>
				alert('删除成功！');
				return true;
			}else
			{
				return false;
			}
		}
	</script>
</head>
</html>