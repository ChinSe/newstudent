<?php
//从数据库获取文件
error_reporting(0); 
header("Content-Type:text/html;charset=utf-8");
$MYSQL_HOST='192.168.1.11';
$MYSQL_USER='048791a1-8119';
$MYSQL_PASS='2447d4fb-5ccb';
$MYSQL_DB='ddc455fd68de44b1686d0ae096d09e55b';
$MYSQL_PORT=3306;
$link=mysqli_connect($MYSQL_HOST , $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB, $MYSQL_PORT);
//$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$link)
{
	die('can not concect to mysql:'.mysql_error());
}


mysql_select_db(SAE_MYSQL_DB,$link);

$a= <<<EOD
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>资环迎新专题网</title>
    <link rel="stylesheet"  href="../css/PC.css">
    <!--<link rel="stylesheet"  href="../css/phone.css">-->
	<style type="text/css">
	*{margin:0;padding:0;}
	.container{min-width: 1366px;}
    .content{min-width:966px;border:5px solid #D8F7F2;margin-top:50px;margin-left:200px;border-radius:20px;}
    .content_title{height:50px;background:#D8F7F2;}
    .content_title span{font-size:28px;line-height:64px;}
    .content_li a{text-decoration:none;color:#32ced2;}
    .content_li a:visited{color:#0e9aa3;}
    .content_li li{list-style-type:none;margin-left:5px;margin-top:5px;}
    .content_li ul{display:block;}
    .content_li span{float:right;}
    .content_title a{text-decoration:none;color:black;}
    .content_li table{margin-top:100px;margin-left:45px;}
	</style>
	<script>
	window.onload=function(){
		$(document).ready(function(){
			$('.nav_btn').click(function(){
				$('.nav_ul').animate({top:"40px"});
			});
		});
	}
	</script>
    <script src="../js/jquery.js"></script>
    
</head>
<body>
<div class="head">
	<div class="headpicture">
		<img class="pictureleft" src="../image/a.png">
		<img class="pictureright" src="../image/b.png">
	</div>
	<div class="headline">
		<img src="../image/c.png">
	</div>
</div>
<div class="container">
	<div class="headshadow">
		
	</div>
    <div class="item" id="item1">
		<a href='../introduction/introduction-of-academy.php'><img src="../image/left1a.png"></a>
		<a href='../introduction/introduction-of-subjects.php'><img src="../image/left2a.png"></a>
		<a href='../introduction/prepare-for-schoolbeiginning.php'><img src="../image/left3a.png"></a>
		<a href='../introduction/introduction-of-community.php'><img src="../image/left4a.png"></a>
	</div>	
   
    <div class="navigation">
        <div class="nav_btn"><span>导航</span></div>
        <!--<button class="nav_btn" value="">导航</button>-->
        <div>
            <ul class="nav_ul">
                <a href='../introduction/introduction-of-academy.php'><li class="nav_ul_li">学院简介</li></a>
                <a href='../introduction/introduction-of-subjects.php'><li class="nav_ul_li">专业介绍</li></a>
                <a href='../introduction/prepare-for-schoolbeiginning.php'><li class="nav_ul_li">入学准备</li></a>
                <a href='../introduction/introduction-of-community.php'><li class="nav_ul_li">组织介绍</li></a>
            
            </ul>
        </div>
    </div><!--手机版的-->
    <div class="content">
        <div class="content_title"><a href='../index.php'><span>首页<</span></a><span>校园资讯</span></div>
            <div class="content_li">
				
EOD;
echo $a;


$respage = mysql_query("SELECT COUNT(*) FROM news;"); //$num 是数据库中总纪录数
$num = 0;
while($row = mysql_fetch_row($respage))
{
	$num = $row[0];
}
$recordnum =15;
$pages = ceil($num/$recordnum); // $recordnum 是每页显示多少条记录， $pages 是一共有多少页
if (@$_GET["page"]) // 获取 url 中的参数 page
{
//$current 是当前页 ,$pre 是前一页的， $next 是后一页， $pre 和 $next 为后面前一页和后一页的连接参数 page 的值
// 如果 url 中的参数为 1 ，把当前页置为 1 前一页， $pre 也为一， $next 为 2
	if($_GET["page"]==1)
	{
		$current = 1;
		$pre = 1;
		$next = 2;
	}else{
// 如果 url 中的参数不为一（不是第一页），就把当前页取值为 url 中获得的参数， $pre 为当前页减 1 ， $next 为加 1
		$current = $_GET["page"];
		$pre = $current-1;
		$next = $current+1;
	}
}else {
// 如果 url 中没有参数 page ，当前页置为 1 ， $pre=1,$next=2
	$current = 1;
	$pre = '1';
	$next = 2;
}
$now = ($current-1)*$recordnum;

$sql="SELECT * FROM news order by id desc LIMIT $now,$recordnum";
$res=mysql_query($sql);
//$rows=mysql_fetch_assoc($res);
echo "<ul>";
while($rows=mysql_fetch_assoc($res))
{
	$time=explode(" ",$rows["date"]);
	echo "<li><a href='content-of-schoolnews.php?id=".$rows["id"]."' target=_self>".$rows["title"]."<span>[".$time[0]."]</span></a></li>";
	
}
echo "</ul>";


$echopage = "<table width=450 cellpadding=0 cellspacing=0><tr>";
$echopage .= "<td><font>".$pages." 页 </font></td>";
$echopage .= "<td><font><a href=".$_SERVER["PHP_SELF"]."?page=1> 第一页 </a><font></td><td><font><a href=".$_SERVER["PHP_SELF"]."?page=".$pages."> 最后一页 </a></font></td>";
$echopage .= "<td><font><a href=".$_SERVER["PHP_SELF"]."?page=$pre> 前一页 </a> <a href=".$_SERVER["PHP_SELF"]."?page=$next> 后一页 </a></font></td>";
$echopage .= "<td><font> 到第 <select name='topage' size='1' onchange='window.location=".$_SERVER["PHP_SELF"]."?page=this.value>";
for($i=1;$i<=$pages;$i++)
{
	if($i==$current)
	$echopage .= "<option value='$i' selected>$i</option>n";
	else
	$echopage .= "<option value='$i'>$i</option>n";
}
$echopage .= "</select> 页 </font></td>";
$echopage .= "</tr></table>";
echo "<td align='center'>".$echopage."</td>";


$b= <<<EOF
</div>
	
</div>
<div class="foot">
    <div class="footcenter1"><!--手机版的-->
		<img src="../image/end1.png">
		<img src="../image/foottell.png">
	</div>
	<div class="footcenter">
		<img src="../image/end1.png">
		<img src="../image/end2.png">
		<img src="../image/end3.png">
	</div>
</div>
<div class="lefttop">
	<img src="../image/z.png">
</div>	
</body>
</html>
EOF;

echo $b;


mysql_close($link);
?>