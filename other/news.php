<!DOCTYPE html>
<html lnag="zh-CN">
<head>
	<meta charset="utf-8">
	<title>优利特-新闻快讯</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/layout.css">
	<link rel="stylesheet" media="all" type="text/css" href="../styles/content.css">
	

</head>
<body>
	<!-- news.html -->
	<?php include ('../header.html'); ?>
	<div id="content" class="newsbg">
		<div class="container">
			<div class="main">
				<div class="title">
					<div class="news-title-choose title-choose">
						<h3><img src="images/12_03.png" alt="news">新闻快讯</h3>					
					</div>
					<span class="position">您现在的位置是：<span class="position1">新闻快讯</span> &gt;&gt;<span class="position2">公司简介</span></span>
				</div>
				<!-- 清除浮动 -->
				<div class="clearboth"></div>
					<div class="news-box maintext">
						<div class="news-content ">

							<?php
							include('../conn/conn.php');						

							$sql = "SELECT * FROM `news1`";
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
							?>
								<div class="news-cont">
									<img src="<?php echo $rs['imgurl']; ?>" alt="优利特新闻" />
									<p><?php echo $rs['title'] ?></p>
								</div>
							<?php
							}
							?>
							
						</div>
						
					</div>
					<div class="exhibition maintext">
						<p class="news-title2">新闻标题 <span>发表时间</span></p>
			
						<?php
							include('../conn/conn.php');

							//搜索功能：
							if(!empty($_GET['keys'])){
								$w = "`title` LIKE '%".$_GET['keys']."%'";
							}
							else{
								$w = 1;
							}							

							$sql = "SELECT * FROM `new2` WHERE $w ORDER BY id DESC";
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
						?>
						<p><?php echo $rs['title'] ?><span><?php echo $rs['dates'] ?></span></p>
						<?php
						}
						?>
					</div>
					<div class="exhibition maintext">
						<p class="news-title2">新闻标题 <span>发表时间</span></p>
						<?php
							include('../conn/conn.php');

							//搜索功能：
							if(!empty($_GET['keys'])){
								$w = "`title` LIKE '%".$_GET['keys']."%'";
							}
							else{
								$w = 1;
							}							

							$sql = "SELECT * FROM `new3` WHERE $w ORDER BY id DESC";
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
						?>
						<p><?php echo $rs['title'] ?><span><?php echo $rs['dates'] ?></span></p>
						<?php
						}
						?>
						
					</div>
			</div>
			<div class="sidebar">

				<ul>
					<li class="sidebar-color"></li>
					<li><a>企业新闻</a></li>
					<li><a>展会公告</a></li>
					<li><a>媒体报道</a></li>
				</ul>
			</div>

		</div>
	</div>

</body>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/layout.js"></script>
</html>