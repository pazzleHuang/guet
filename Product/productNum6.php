<!DOCTYPE html>
<html lang="zh-CN">
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>优利特-产品中心-医用电子产品</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/layout.css">
	<link rel="stylesheet" type="text/css" href="../styles/product.css">

</head>
<body>
	<!-- news.html -->
	<?php include ('../Common/header.html'); ?>
	<?php include ('../Common/productCommon.php'); ?>

		<span class="position">您现在的位置是：<span class="position1">产品中心</span> &gt;&gt;<span class="position2">医用电子产品</span></span>
	</div>				
	<!-- 清除浮动 -->
	<div class="clearboth"></div>
		
		<div class="product-box">
			<!-- start -->
			<div class="magnifier">
				<div class="m_image">
				    <img src="../images/products/461.jpg" width="300" height="300" />
				</div>
				<div class="m_thumb">
					<a href="javascript:;" class="m_prev">prev</a>
				    <a href="javascript:;" class="m_next">next</a>
				    <div  id="picnow" class="m_thumb_img">
				        <ol class="clearfix">

				        	<?php
							include('../conn/conn.php');						

							$sql = "SELECT * FROM `product` WHERE `产品分类` = '医用电子产品'  ";
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
							?>	
								<li>
				               <a href="javascript:;">
				                    <img src="<?php echo $rs['产品图片']; ?>" width="50" height="50" />
				                </a>
				            </li>
								
							<?php
							}
							?>

				         </ol>
				    </div>
				</div>
    		</div>
				<!-- end -->
				<div class="productText">

					<?php
							include('../conn/conn.php');						

							$sql = "SELECT * FROM `product` WHERE `产品分类` = '医用电子产品'  ";
							$query = mysql_query($sql);
							while($rs = mysql_fetch_array($query)){
							?>	
								<div class="show-text">
									<p><span>产品编号：</span><strong><?php echo $rs['产品编号']; ?></strong></p>
									<p><span>产品名称：</span><strong><?php echo $rs['产品名称']; ?></strong></p>
									<p><span>产品说明：</span><?php echo $rs['产品说明']; ?></p>						
								</div>
								
							<?php
							}
							?>
							
				</div>	
		</div>
		</div>
			<?php include ('../Common/sidebar.html'); ?>
		</div>
	</div>
	<?php include ('../Common/footer.html'); ?>
</body>
<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../script/layout.js"></script>
<script type="text/javascript" src="../script/enlarge.js"></script>
<script type="text/javascript" src="../script/product.js"></script>
</html>