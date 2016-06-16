<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>	
	<title>优利特首页</title>
	<link rel="stylesheet" media="all" type="text/css" href="styles/layout.css">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/flexslider.css">
	<script type="text/javascript"></script>
	
</head>
<body>
	<div id="header" class="index-header">
		<div class="innerhead">
			<div class="logo"><a href="index.html"><img src="images/logo.png" alt="logo" /></a></div>
			<!-- 一级导航 -->
			<div class="mainNav">
				<ul class="navigation">
					<li><a href="index.php">首页</a></li>
					<li><a href="About/about.php">关于我们</a></li>
					<li><a href="News/news.php">新闻快讯</a></li>
					<li><a href="Product/productnow.php">产品中心</a></li>
					<li><a href="Cooperate/cooperate.php">与您合作</a></li>
					<li><a href="Develop/develop.php">人才发展</a></li>
					<li><a href="Contact/contact.php">联系我们</a></li>
				</ul>
				
				<!-- 二级导航 -->
				<?php include ('Common/sidelink.html'); ?>
			</div>
			<!-- <div class="language">
				<select>
					<option>&nbsp中文&nbsp</option>
					<option>&nbspeglish&nbsp</option>
				</select>
			</div> -->
			<div class="tel">				
				<img src="images/tel.png" alt="400-727-2288"  />
			</div>
		</div>
		<div class="subnavbg"></div>
	</div>
	<div id="content1">
		<div class="flexslider">
			<ul class="slides">
				<li><a href="About/about.php"><img src="images/index/1_03.jpg" alt="第1张" /></a></li>
				<li><a href="Product/productnow.php"><img src="images/index/1_01.jpg" alt="第2张" /></a></li>
				<li><a href="Develop/develop.php"><img src="images/index/1_02.jpg" alt="第3张" /></a></li>
			</ul>
		</div>
		
	</div>
	<!-- 首页第一栏内容 -->
	<div class="companyAbout">
		<!-- 第一组 -->
		<div class="mainInfo info-com">
			<div class="mainInfoText">
				<p>优利特集团是中国一流的医学诊断产品制造商、供应商和服务商，国家火炬计划重点高新技术企业、<br/>全国CAD(计算机辅助设计)应用工程示范企业，国家发改委授牌“免疫诊断试剂国家地方联合工程实验室”。
					<br/>20多年来，优利特集团从未停止过临床医疗设备研发的脚步。我们始终把握医学检验世界领先技术的脉搏。</p>
				<a href="About/about.php"><input type="button" class="showDetail" value="点击查看详情" /></a>
			</div>
			<img src="images/index/6_02.jpg" alt="优利特公司" />
		</div>
		<!-- 第二组 -->
		<div class="mainInfo info-operate">
			<div class="mainInfoText">
				<p>在国内，公司拥有四万多个稳定的客户群和数千家合作良好的经销商。优利特产品以卓越的品质和服务<br/>赢得各级医疗机构的青睐。尿液分析仪系列产品在国内装机量达40000多台，稳居国内榜首，生化分析仪在<br/>国内装机量达2000多台，优利特产品已成为临床检验医疗设备行业内最具影响力的品牌之一。</p>
				<a href="Product/productnow.php"><input type="button" class="showDetail" value="点击查看详情" /></a>
			</div>
			<img src="images/index/6_03.jpg" alt="优利特公司" />
		</div>
		<!-- 第三组 -->
		<div class="mainInfo  info-com">
			<div class="mainInfoText">
				<p>优利特集团一直放眼于全球市场的拓展，产品批量出口欧洲、中东、非洲等国际市场，在海外市场的销售已发展到60多个国家和地区，同时进行40个国家在内的OEM服务，得以广泛认可和销售。如今，公司逐步建立起集产品销售、零配件供应、售后服务、用户信息反馈、用户回访和用户档案管理“六位一体”的服务体系。</p>
				<a href="Product/productnow.php"><input type="button" class="showDetail" value="点击查看详情" /></a>
			</div>
			<img src="images/index/6_04.jpg" alt="优利特公司" />
		</div>
	</div>
	<!-- 隐藏的内容 -->
	<div class="hidebackground"></div> 
	<div class="footer">
		<div class="footer-box">
			<ul>
				<a href="About/about.php">关于优利特</a><span>-</span>
				<a href="Develop/capindex.html">加入我们</a><span>-</span>
				<a href="Contact/contact.php">联系我们</a><span>-</span>
				<a href="Navigation/navigation.php">网站导航</a><span>-</span>
				<a href="Feedback/feedback.php">意见反馈</a>
			</ul>
			<blockquote>优利特版权所有©1997-2015桂网文[2015]03344-031号</blockquote>
		</div>		
	</div>

</body>
	<script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="script/layout.js"></script>
	<script type="text/javascript" src="script/index.js"></script>
	<script type="text/javascript" src="script/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
		function fuzhi(a){
				document.getElementById("select_content").value=a;
			}
		}
	</script>

</html>