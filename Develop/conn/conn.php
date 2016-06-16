<?php
 
 	@mysql_connect("127.0.0.1","root","wsbd3bd") or die("mysql is connected faild.");
 	@mysql_select_db("school") or die("db is not exist.");
 	//mysql_set_charset("BGK");
 	mysql_query("set names 'utf8'");

?>