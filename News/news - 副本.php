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
					<span class="position">您现在的位置是：<span class="position1">新闻快讯</span> &gt;&gt;<span class="position2">企业新闻</span></span>
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
						<input type="text" name="page">
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