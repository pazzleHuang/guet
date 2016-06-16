<!DOCTYPE html>
<html lang="zh-CN">
	<meta charset="utf-8">
<head>
	<title>校园招聘首页</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/capindex.css">
	<link rel="stylesheet" type="text/css" href="../styles/classify.css">
</head>
<body>
	<!-- 2015-05-13 -->
	<div id="header">
		<div id="logo" class="width1 height1"><a href="../index.php"><img src="../images/logo.png" alt="logo" /></a></div>
	<div class="audio">
		<audio preload="auto" autoplay="autoplay" controls="controls" loop="loop">
				<source src="../audio/song.mp3">
				<source src="../audio/song.ogg">
					你的浏览器不支持播放音乐
		</audio>
	</div>
		<div id="nav">
			<div class="width1 height2">
				<div class="sidebar leftNavFont"><h2>2016年校园招聘</h2></div>
				<ul>
					<li><a href="#首页">首页</a></li>
					<li><a href="#在招职位">在招职位</a></li>
					<li><a href="#招聘流程">招聘流程</a></li>
					<li><a href="#宣讲日期">宣讲日期</a></li>
					<li><a href="#公司福利">公司福利</a></li>
					<li><a href="#人文风采">人文风采</a></li>			
					<li><a href="#问与答">问与答</a></li>
				</ul>
			</div>
		</div>
	</div>

<!-- ================================================ -->

<!-- 2015.06.10 -->


	<div class="box">
		<!-- 首页 -->
		<div id="pic1"  class="pic">
			<!-- <canvas id="myCanvas" width="800" height="400" style="border:1px solid #c3c3c3;">
				Your browser does not support the canvas element.
			</canvas> -->

		</div>
		<!-- 在招职位 start -->
		<div id="pic2"  class="pic">
			<div class="num2 num">
				<ul>
					<li><a href="#">研发类</a></li>
					<li><a href="#">工程类</a></li>
					<li><a href="#">营销类</a></li>
				</ul>
				<div class="tab-menu">
					<div class="tab">
						<table>
							<thead>
								<tr>
									<th>专业方向</th>
									<th>岗位名称</th>
									<th>学历</th>
									<th>专业</th>
									<th>需求人数</th>
								</tr>
							</thead>
							<tbody class="tab1">
								<?php
									include('conn/conn.php');

									//搜索功能：
									if(!empty($_GET['keys'])){
										$w = "`title` LIKE '%".$_GET['keys']."%'";
									}
									else{
										$w = 1;
									}							

									$sql = "SELECT * FROM `job` WHERE `style` = '研发类'";
									$query = mysql_query($sql);
									//print_r($sql);
									//echo "$sql";
									while($rs = mysql_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $rs['position'];?></td>
									<td><?php echo $rs['gangwei'];?></td>
									<td><?php echo $rs['xueli'];?></td>
									<td><?php echo $rs['zhuanye'];?></td>
									<td><?php echo $rs['num'];?></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						
							<tbody class="tab2">
								<?php
									include('conn/conn.php');

									//搜索功能：
									if(!empty($_GET['keys'])){
										$w = "`title` LIKE '%".$_GET['keys']."%'";
									}
									else{
										$w = 1;
									}							

									$sql = "SELECT * FROM `job` WHERE `style` = '工程类'";
									$query = mysql_query($sql);
									//print_r($sql);
									//echo "$sql";
									while($rs = mysql_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $rs['position'];?></td>
									<td><?php echo $rs['gangwei'];?></td>
									<td><?php echo $rs['xueli'];?></td>
									<td><?php echo $rs['zhuanye'];?></td>
									<td><?php echo $rs['num'];?></td>
								</tr>
								<?php
								}
								?>

							</tbody>
							<tbody class="tab3">
								<?php
									include('conn/conn.php');

									//搜索功能：
									if(!empty($_GET['keys'])){
										$w = "`title` LIKE '%".$_GET['keys']."%'";
									}
									else{
										$w = 1;
									}							

									$sql = "SELECT * FROM `job` WHERE `style` = '营销类'";
									$query = mysql_query($sql);
									//print_r($sql);
									//echo "$sql";
									while($rs = mysql_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $rs['position'];?></td>
									<td><?php echo $rs['gangwei'];?></td>
									<td><?php echo $rs['xueli'];?></td>
									<td><?php echo $rs['zhuanye'];?></td>
									<td><?php echo $rs['num'];?></td>
								</tr>
								<?php
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>			
		</div>
		<!-- 招聘流程 end -->
		<div id="pic3" class="pic">


		</div>
		<!-- 宣讲日期 -->
		<div id="pic4" class="pic">
			<div class="num4 num">

				

				<ul>
					<li><h1>桂林</h1><img src="../images/capture/4_02.jpg"></li>
					<li class="middle"><h1>南宁</h1><img src="../images/capture/4_01.jpg"></li>
					<li><h1>成都</h1><img src="../images/capture/4_01.jpg"></li>
				</ul>
				<div class="hiretext">
					<div class="now"></div>
					<?php
					include('conn/conn.php');

					//搜索功能：
				if(!empty($_GET['keys'])){
					$w = "`title` LIKE '%".$_GET['keys']."%'";
				}
				else{
					$w = 1;
				}							

				$sql = "SELECT * FROM `xuanjiang` WHERE `city` = '桂林'";
				$query = mysql_query($sql);
				//print_r($sql);
				//echo "$sql";
			while($rs = mysql_fetch_array($query)){
			?>
					<div class="school">
						<img src="<?php echo $rs['logo']?>" alt="学校logo" />
						<div class="shooltext">
							<p>学校：<?php echo $rs['xuexiao']?></p>
							<p>时间：<?php echo $rs['shijian']?></p>
							<p>地点：<?php echo $rs['didian']?></p>
						</div>
					</div>
					<?php
					}
					?>
					
				</div>
				<!-- 第二组 -->
				<div class="hiretext">
					<div class="now"></div>
										<?php
					include('conn/conn.php');

					//搜索功能：
				if(!empty($_GET['keys'])){
					$w = "`title` LIKE '%".$_GET['keys']."%'";
				}
				else{
					$w = 1;
				}							

				$sql = "SELECT * FROM `xuanjiang` WHERE `city` = '南宁'";
				$query = mysql_query($sql);
				//print_r($sql);
				//echo "$sql";
			while($rs = mysql_fetch_array($query)){
			?>
					<div class="school">
						<img src="<?php echo $rs['logo']?>" alt="学校logo" />
						<div class="shooltext">
							<p>学校：<?php echo $rs['xuexiao']?></p>
							<p>时间：<?php echo $rs['shijian']?></p>
							<p>地点：<?php echo $rs['didian']?></p>
						</div>
					</div>
					<?php
					}
					?>

				</div>
				<!-- 第三组 -->
				<div class="hiretext">
					<div class="now"></div>
										<?php
					include('conn/conn.php');

					//搜索功能：
				if(!empty($_GET['keys'])){
					$w = "`title` LIKE '%".$_GET['keys']."%'";
				}
				else{
					$w = 1;
				}							

				$sql = "SELECT * FROM `xuanjiang` WHERE `city` = '成都'";
				$query = mysql_query($sql);
				//print_r($sql);
				//echo "$sql";
			while($rs = mysql_fetch_array($query)){
			?>
					<div class="school">
						<img src="<?php echo $rs['logo']?>" alt="学校logo" />
						<div class="shooltext">
							<p>学校：<?php echo $rs['xuexiao']?></p>
							<p>时间：<?php echo $rs['shijian']?></p>
							<p>地点：<?php echo $rs['didian']?></p>
						</div>
					</div>
					<?php
					}
					?>

				</div>

			</div>
		</div>
		<!-- 公司福利 -->
		<div id="pic5" class="pic">
			<div class="num5">
				<p>1、富有竞争力的薪资，以及完善的薪酬体系。</p>
				<p>2、向员工提供公司内部股份、低息借贷等长期激励计划。</p>
				<p>3、完善的培训体系，为每位员工量身制定职业生涯发展规划。</p>
				<p>4、完善的社会保险（包括养老、医疗、失业、工伤、生育、公积金）及商业保险（人身意外等），每年定期进行体检。</p>
				<p>5、公司为员工组织健康丰富的业余文体活动，每年定期举办春、秋季运动会，定期组织篮球、羽毛球、足球、气排球、户外拓展等活动。</p>
				<p>6、配套齐全的单身公寓。</p>
				<p>7、免费提供工作用餐。</p>
			</div>
		</div>
		<!-- 人文风采 -->
		<div id="pic6" class="pic">
			<div class="num6 num">
				<ul>
					<li><img src="../images/capture/6_01.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_02.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_03.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_04.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_05.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_06.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_07.jpg" alt=""><span>销售团队</span></li>
					<li><img src="../images/capture/6_01.jpg" alt=""><span>销售团队</span></li>
				</ul>
			</div>
		</div>
		<!-- 问与答 -->
		<div id="pic7" class="pic">
			<div class="num7 num">
				<h1>Q<span>&</span>A</h1>
				<div class="qnalist">
					<h5>优利特公司的职位名额分布是怎么样的？</h5>
					<p><span>答：</span>招聘的各类岗位只设置总体名额限制，在各所院校没有具体的名额限制。在统一的选拔标准基础上适当考虑各城市各院校的平衡。 </p>
					<h5>如何知道是否获得了公司的笔试及面试资格？</h5>
					<p><span>答：</span>公司会及时以短信、邮件的方式通知参加笔试及面试人选，请收到通知信息的应聘者及时回复确认是否参加我们的笔试和面试，以便公司统一安排。</p>
					<h5>外地应聘者如何到桂林笔试或复试？</h5>
					<p><span>答：</span>外地的应聘者到桂林市参加公司统一安排的笔试或复试，公司报销往返的硬座火车票费用及在途公交车费用，免费提供2天的住宿。<br/>从火车站下车后，可乘坐公交10路车至解放东路站转乘206路车至终点站下车即到。公司地址：桂林市国家高新区信息产业园D-02号。 </p>
					<h5>工作地点及住宿问题</h5>
					<p><span>答：</span>本次招聘职位工作地点均在桂林市内（有特别说明的除外），公司为外地籍员工提供配套齐全的单身公寓。</p>
					<h5>劳动合同签订的服务期限是几年？协议签订后违约如何处理？</h5>
					<p><span>答：</span>3年。期间如有违约，依情况而定，需付违约金。凡是考取硕士、博士的毕业生，凭学校录取通知书解除就业协议，无需承担违约责任。由于其它原因需解除就业协议者，应征得公司同意并按约定支付违约金。</p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../script/jquery-mousewheel.js"></script>
	<script type="text/javascript" src="../script/jquery.bgckgroundXY.js"></script>
	<script type="text/javascript" src="../script/capindex.js"></script>
</body>
</html>