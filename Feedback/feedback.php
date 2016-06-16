<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8" >
<head>
	<title>意见反馈</title>
	<link rel="stylesheet" media="all" type="text/css" href="../styles/layout.css">
	<link rel="stylesheet" media="all" type="text/css" href="../styles/feedback.css">
</head>
<body>
	<?php include ('../Common/header.html'); ?>
	<div class="feedbacg-bg">
		<div class="title">意见反馈</div>
		<form action="add.php" method="post" class="form1">
			<p><span>标题：</span><input type="text" name="title" placeholder="问题标题">&nbsp;*&nbsp;</p>
			<p><span>内容：</span><textarea rows="6" cols="69" name="content" placeholder="问题描述"></textarea>&nbsp;*&nbsp;</p>
			<p><span>联系方式：</span><input type="text" name="contact" placeholder="请输入您经常使用的邮箱">&nbsp;*&nbsp;</p>
			<p><input type="submit" id="submit" value="提交"></p>
		</form>
	</div>
</body>
</html>