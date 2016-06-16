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
						<!-- 页码 -->
						<?php
						    include('../conn/conn.php');	
						    $sql = "SELECT * FROM `news1`";
						    $result=mysql_query($sql);

						    //print_r($sql);

						    $total=mysql_num_rows($result) or die(mysql_error());
						    $page=isset($_GET['page'])?intval($_GET['page']):1;
						    $page_size=9;
						    $url='news.php';

						    $pagenum=ceil($total/$page_size);
						    $page=min($pagenum,$page);
						    $prepage=$page-1;
						    $nextpage=($page==$pagenum?0:$page+1);
						    $pageset=($page-1)*$page_size;

						    $pagenav='';
						    $pagenav.="显示第<font color='red'>".($total?($pageset+1):0)."-".min($pageset+9,$total)."</font>记录 共<b><font color='yellow'>".$total."</font></b>条记录 现在是第 <b><font color='blue'>".$page."</font></b> 页 ";
						    if($page<=1)
						    $pagenav.="<a style=cursor:not-allowed;>首页</a> ";
						    else
						    $pagenav.="<a onclick=javascript:dopage('result','$url?page=1') style=cursor:pointer;>首页</a> ";
						    if($prepage)
						    $pagenav.="<a onclick=javascript:dopage('result','$url?page=$prepage') style=cursor:pointer;>上一页</a> ";
						    else
						    $pagenav.="<a style=cursor:not-allowed;>上一页</a> ";
						    if($nextpage)
						    $pagenav.="<a onclick=javascript:dopage('result','$url?page=$nextpage') style=cursor:pointer;>下一页</a> ";
						    else
						    $pagenav.="<a style=cursor:not-allowed;>下一页</a> ";
						    if($pagenum)
						    $pagenav.="<a onclick=javascript:dopage('result','$url?page=$pagenum') style=cursor:pointer;>尾页</a> ";
						    else
						    $pagenav.="<a style=cursor:not-allowed;>尾页</a> ";
						    $pagenav.="共".$pagenum."页";
						    if($page>$pagenum){
						        echo "error:没有此页".$page;
						        exit();
						  }
						?>						
						<div class="news-content ">
							<?php
							include('../conn/conn.php');						

							$sql = "SELECT * FROM `news1` ORDER BY `id` ASC LIMIT $pageset,$page_size";
							
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
							?>
								<div class="news-cont">									
									<img src="<?php echo $rs['imgurl']; ?>" alt="优利特新闻" />
									<p><a href="newView1.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?></a></p>
									<!-- <div id='shade'><div> -->
								</div>
							<?php
							}
							?>

						</div>
						<!-- 显示页数 -->
						<?php echo "<p align=center>$pagenav</p>";?>
					</div>
			</div>
			
		<?php include ('../Common/newSidebar.html'); ?>
		</div>
	</div>
	<?php include ('../Common/footer.html'); ?>
</body>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/layout.js"></script>
	<script language="javascript" src="ajaxpage.js"></script>
</html>