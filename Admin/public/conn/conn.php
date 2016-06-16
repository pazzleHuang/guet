<?php
	@mysql_connect("127.0.0.1","root", "wsbd3bd") or die("can not find mysql");
	@mysql_select_db("school") or die("db is not exit.");
	mysql_query("set names utf8");
?>