<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>优利特-产品中心</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/layout.css">
	<link rel="stylesheet" type="text/css" href="../styles/product.css">

</head>
<body>
	<!-- news.html -->
	<?php include ('../Common/header.html'); ?>
	<div id="content" class="productbg">
		<div class="container">
			<div class="main">
				<div class="title">
					<div class="title-choose">
						<h3><img src="../images/12_04.png" alt="product">产品中心</h3>					
					</div>
					<span class="position">您现在的位置是：<span class="position1">产品中心</span> &gt;&gt;<span class="position2">生化分析</span></span>
				</div>				
				<!-- 清除浮动 -->
				<div class="clearboth"></div>
				<div class="product-box">
					<!-- start -->

					<div class="magnifier">
				        <div class="m_image">
				            <img src="../images/products/4001.jpg" width="300" height="300" />
				        </div>
				        <div class="m_thumb">
				            <a href="javascript:;" class="m_prev">prev</a>
				            <a href="javascript:;" class="m_next">next</a>
				            <div class="m_thumb_img">
				                <ol class="clearfix">
				                    <li>
				                        <a href="javascript:;" class="now">
				                            <img src="../images/products/4001.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                    <li>
				                        <a href="javascript:;">
				                            <img src="../images/products/4002.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                    <li>
				                        <a href="javascript:;">
				                            <img src="../images/products/4003.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                    <li>
				                        <a href="javascript:;">
				                            <img src="../images/products/4004.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                    <li>
				                        <a href="javascript:;">
				                            <img src="../images/products/4005.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                    <li>
				                        <a href="javascript:;">
				                            <img src="../images/products/4006.jpg" width="50" height="50" />
				                        </a>
				                    </li>
				                </ol>
				            </div>
				        </div>
    				</div>
				<!-- end -->
					<div class="productText">
						<p><span>产品编号：</span>URIT-8280</p>
						<p><span>产品名称：</span>分立式全自动生化分析仪</p>
						<p><span>产品说明：</span>
							<br/>恒速480测试/小时（纯生化），720测试/小时（带ISE）
							<br/>◎光栅后分光光学系统
							<br/>◎专用急诊位，急诊样本优先测试
							<br/>◎一体化自动恒温水清洗
							<br/>◎加样针液面感应，随量跟踪，立体防撞、试剂预加温功能
							<br/>◎美国原装进口陶瓷内芯定量器，保证取样精度和耐麿性
							<br/>◎支持多水平质控，自动分析质控数据，绘制质控分析图谱，提供线性、非线性多种定标模式
							<br/>◎试剂盘24小时不间断水循环制冷，静音、环保、高效
							<br/>◎反应盘采用终身免维护的固态恒温装置，确保37℃恒温
							<br/>◎实时显示所有波长测试曲线，为数据分析提供更全面的信息
							<br/>◎高污染项目间可插入独立清洗，杜绝项目间干扰
							<br/>◎支持LIS系统
							<br/>◎Windows XP全中文彩色图形化操作系统 
						</p>
					</div>
				</div>
			</div>
			<div class="sidebar">
				<ul>
					<li class="sidebar-color"></li>
					<li><a href="#">生化分析</a></li>
					<li><a href="#">血细胞分析</a></li>
					<li><a href="#">尿液分析</a></li>
					<li><a href="#">其他检测产品</a></li>
					<li><a href="#">POCT产品</a></li>
					<li><a href="#">医用电子产品</a></li>
				</ul>
			</div>

		</div>
	</div>
	<?php include ('../Common/footer.html'); ?>
</body>
<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../script/layout.js"></script>
<script type="text/javascript" src="../script/enlarge.js"></script>
<script type="text/javascript">
    $(function() {
        $('.magnifier').Plugins('magnifier', {
            zoomWidth: 100,
            zoomHeight: 100,
            largeImgWidth: 500,
            largeImgHeight: 500
        });
    })
    </script>
</html>