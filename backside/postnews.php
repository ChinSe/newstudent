<?php
//传送文件到数据库
error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
$link=mysql_connect('localhost','root','');
if(!$link)
{
	die('can not concect to mysql:'.mysql_error());
}
//echo 'Connection OK!'.'</br>';




mysql_select_db('yayu',$link);

$sql="insert into news (author,title,source,date,content)
value
('$_POST[author]','$_POST[title]','$_POST[source]','$_POST[date]','$_POST[content]')";
if(!mysql_query($sql,$link))
{
	echo die ('error:'.mysql_error());
}
echo 'one record added!';
mysql_close($link);
?>