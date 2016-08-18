<?php
//从数据库获取文件
header("Content-Type:text/html;charset=utf-8");
$link=mysql_connect('localhost','root','');
if(!$link)
{
	die('can not concect to mysql:'.mysql_error());
}
echo 'Connection OK!'.'</br>';

mysql_select_db('yayu',$link);

$a= <<<EOD
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet"  href="css/PC.css">
    <!--<link rel="stylesheet"  href="css/phone.css">-->
	<style type="text/css">
	*{margin:0;padding:0;}
    .content{height:460px;min-width:966px;border:5px solid #D8F7F2;margin-top:50px;margin-left:200px;border-radius:20px;position:relative;}
    .content_title{height:50px;background:#D8F7F2;}
    .content_title span{font-size:28px;line-height:44px;}
    .content_li a{text-decoration:none;color:#0e9aa3;}
    .content_li a:visited{color:#32ced2;}
    .content_li li{list-style-type:none;margin-left:10px;}
    .content_li table{position:absolute;bottom:0px;} 
    .content_li span{float:right;}

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
		<img class="pictureleft" src="image/a.png">
		<img class="pictureright" src="image/b.png">
	</div>
	<div class="headline">
		<img src="image/c.png">
	</div>
</div>
<div class="container">
	<div class="headshadow">
		
	</div>
    <div class="item" id="item1">
		<a href='#''><img src="image/left1a.png"></a>
		<a href="#"><img src="image/left2a.png"></a>
		<a href="#"><img src="image/left3a.png"></a>
		<a href="#"><img src="image/left4a.png"></a>
	</div>	
   
    <div class="navigation">
        <div class="nav_btn"><span>导航</span></div>
        <!--<button class="nav_btn" value="">导航</button>-->
        <div>
            <ul class="nav_ul">
                <a href="#"><li class="nav_ul_li">学院简介</li></a>
                <a href="#"><li class="nav_ul_li">专业介绍</li></a>
                <a href="#"><li class="nav_ul_li">入学准备</li></a>
                <a href="#"><li class="nav_ul_li">组织介绍</li></a>
            
            </ul>
        </div>
    </div><!--手机版的-->
    <div class="content">
        <div class="content_title"><span>校园资讯</span></div>
            <div class="content_li">
				
EOD;
echo $a;


$respage = mysql_query("SELECT COUNT(*) FROM news;"); //$num 是数据库中总纪录数
$num = 0;
while($row = mysql_fetch_row($respage))
{
	$num = $row[0];
}
$recordnum =10;
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
$rows=mysql_fetch_assoc($res);

while($rows=mysql_fetch_assoc($res))
{
	echo "<ul>";
	echo "<li><a href='addnews.php?id=".$rows["id"]."' target=_blank>".$rows["title"]."<span>[".$rows["date"]."]</span></a></li>";
	echo "</ul>";
}



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
		<img src="image/end1.png">
		<img src="image/foottell.png">
	</div>
	<div class="footcenter">
		<img src="image/end1.png">
		<img src="image/end2.png">
		<img src="image/end3.png">
	</div>
</div>
<div class="lefttop">
	<img src="image/z.png">
</div>	
</body>
</html>
EOF;

echo $b;


mysql_close($link);
?>