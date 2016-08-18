<?php
$a=<<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Stict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang = "zh-CN">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head><body>
EOT;
echo $a;
if(@$_POST["submit"])
{
	if(empty ($_POST["username"]))
	die (" 请填写用户名 ");
	// 这里用了 die() 函数，作用是名字为空时向用户提出提示信息。
	else
	$username = $_POST["username"];
// 记录用户名。
	if(empty ($_POST["password"]))
	die (" 请填写密码 ");
	else
	$password = $_POST["password"];

$link=mysql_connect("localhost","root","");
$selectdb = mysql_select_db("yayu",$link);
$sql="select id,password,name from user where name='$username'";
$result=mysql_query($sql)or die (mysql_error ());
while($pa = mysql_fetch_assoc($result))
{ // mysql_fetch_assoc() 函数是把返回的数据以数组的方式保存，数组的下标与字段名 // 相对应
	$pwd = $pa[password];
	$userid = $pa[id];
	// 检测用户名是否正确
	if(!$result)
	{
		echo " 错误的用户名 ";
		echo "<br><a href='login.html'> 重新登陆 </a>";
		mysql_close($link);
		exit;
	}
	// 检测密码是否正确
	if($pwd != $password )
	{
		echo " 亲爱的 ".$username."<br>";
		echo " 您输入了错误的密码 ";
		echo "<br> 请您 <a href='login.html'> 重新登陆 </a>";
		mysql_close($link);
		exit;
	}
		setcookie("username",$_POST["username"]);
		header("Location:../index.php");
}
if(@$_GET["action"]=="logout")
{
	setcookie("username","");
	header("Location:../index.php");
}

echo "</body></html>";
?>
