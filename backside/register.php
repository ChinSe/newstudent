<?php 
//error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
/*$MYSQL_HOST='192.168.1.11';
$MYSQL_USER='048791a1-8119';
$MYSQL_PASS='2447d4fb-5ccb';
$MYSQL_DB='ddc455fd68de44b1686d0ae096d09e55b';
$MYSQL_PORT=3306;
$link=mysqli_connect($MYSQL_HOST , $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB, $MYSQL_PORT);*/

if(@$_POST["submit"])
{
	$name=$_POST["username"];
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];

	if (empty ($name) || empty ($password)|| empty ($repassword))
	//(empty () 函数是用来判断里面的字符是否为空的。
	{
		echo " 填写有错误，请 <a href='register.html'> 重新填写 </a>";
	}
	if($password!=$repassword)
	{
		echo " 两次密码输入不同，请 <a href='register.html'> 重新填写 </a>";
	}
}
// 经上面的判断就可以去数据库进行操作了，这样做的目的是为了减轻服务器的负担。
$link=mysql_connect("localhost","root","");
mysql_select_db("yayu",$link);
$sql="SELECT id FROM user WHERE name='$name'";
$result=mysql_fetch_row(mysql_query($sql));
// mysql_fetch_row() 函数把得到的所有数据存到一个数组中去，这个数组是以数字为
// 引的。在这里，当返回有数据时， $result 相当于逻辑量 1 了。
// 检测用户提交的用户名是否被注册
if($result)
{
	echo " 已经有相同的用户名存在，请 <a href='register.html'> 重新填写 </a>";
}
else
{
// 如果一切正常，将数据加到数据库中
	$sql="insert into user(name,password) values('$name','$password')";
// 检测用户注册是否成功
	if(mysql_query($sql,$link))
	{
		echo " 注册成功，请立即 <a href='login.html'> 登陆 </a>";
	}
	else
	{
		echo " 注册失败，请 <a href='register.html'> 重试 </a>";
	}
}

?>