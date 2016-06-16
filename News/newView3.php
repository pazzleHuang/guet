<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>	
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
					<span class="position">您现在的位置是：<span class="position1">新闻快讯</span> &gt;&gt;<span class="position2">媒体报道</span></span>
				</div>
				<!-- 清除浮动 -->
				<div class="clearboth"></div>
					<div class="news-box maintext view1">
						<?php
						include("../conn/conn.php");

						if(!empty($_GET['id'])){
							$sql = "SELECT * FROM `new3` WHERE `id`='".$_GET['id']."'";
							$query = mysql_query($sql);
							$rs = mysql_fetch_array($query);

							$sqlUpdate = "UPDATE new3 SET `click`= `click`+ 1 WHERE `id`='".$_GET['id']."'";
							mysql_query($sqlUpdate);
							//print_r($rs);
							//echo $rs['id'];
						}
					?>
						<h2><?php echo $rs['title'] ?></h2>
						<p class="newstime">
							<span>发表时间：<?php echo $rs['dates'] ?></span>
							<span>点击量：<?php echo $rs['click'] ?></span>
						</p>
						<div class="newsview">
							<?php echo $rs['content'] ?>
					</div>
					</div>
			</div>
			
		<?php include ('../Common/newSidebar.html'); ?>
		</div>
	</div>
	<?php include ('../Common/footer.html'); ?>
</body>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/layout.js"></script>
</html>