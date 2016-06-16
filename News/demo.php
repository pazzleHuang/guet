<title>PHP+ajax分页演示</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../script/jquery-1.8.3.min.js"></script>
<script language="javascript" src="ajaxpage.js"></script>
<div id="result">
<?php
    $terry=@mysql_connect("localhost","root","wsbd3bd")or die("连接数据库失败:".mysql_error());
    @mysql_select_db("school",$terry);
    @mysql_query("set NAMES 'utf8'");
    $sql = "SELECT * FROM `new2`";
    $result=mysql_query($sql);

    //print_r($sql);

    $total=mysql_num_rows($result) or die(mysql_error());
    $page=isset($_GET['page'])?intval($_GET['page']):1;
    $page_size=6;
    $url='demo.php';
    $pagenum=ceil($total/$page_size);
    $page=min($pagenum,$page);
    $prepage=$page-1;
    $nextpage=($page==$pagenum?0:$page+1);
    $pageset=($page-1)*$page_size;
    $pagenav='';
    $pagenav.="显示第<font color='red'>".($total?($pageset+1):0)."-".min($pageset+5,$total)."</font>记录 共<b><font color='yellow'>".$total."</font></b>条记录 现在是第 <b><font color='blue'>".$page."</font></b> 页 ";
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
<table align="center" border="2" width="300">
  <tr bgcolor="#cccccc" align="center">
    <td>编号</td>
    <td>标题</td>
  </tr>
<?php
$info=mysql_query("select * from new2 order by id asc limit $pageset,$page_size");
while($array=mysql_fetch_array($info)){
?>
  <tr align="center">
    <td><?php echo $array['id'];?></td>
    <td><?php echo $array['title'];?></td>
  </tr>
<?php   
}
?>
</table>
<?php
echo "<p align=center>$pagenav</p>";
?>
</div>