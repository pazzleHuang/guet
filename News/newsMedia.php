<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
	<title>优利特-新闻快讯</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/layout.css">
	<link rel="stylesheet" media="all" type="text/css" href="../styles/news.css">
</head>
<body>
	<!-- news.html -->
	<?php include ('../Common/header.html'); ?>
	<div id="content" class="newsbg">
		<div class="container">
			<div class="main">
				<div class="title">
					<div class="news-title-choose title-choose">
						<h3><img src="../images/12_03.png" alt="news">新闻快讯</h3>					
					</div>
					<span class="position">您现在的位置是：<span class="position1">新闻快讯</span> &gt;&gt;<span class="position2">新闻媒体</span></span>
				</div>
				<!-- 清除浮动 -->
				<div class="clearboth"></div>					
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
						<p><a href="newView3.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?><span><?php echo $rs['dates'] ?></span></a></p>
						<?php
						}
						?>
					</div>					
				</div>
				<?php include ('../Common/newSidebar.html'); ?>
			</div>
		</div>
	</div>
	<?php include ('../Common/footer.html'); ?>
</body>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/layout.js"></script>
</html>