<?php
//输出新闻
error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
$MYSQL_HOST='192.168.1.11';
$MYSQL_USER='048791a1-8119';
$MYSQL_PASS='2447d4fb-5ccb';
$MYSQL_DB='ddc455fd68de44b1686d0ae096d09e55b';
$MYSQL_PORT=3306;
$link=mysqli_connect($MYSQL_HOST , $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB, $MYSQL_PORT);
//$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
//$pdo=new PDO("mysql:host='localhost';dbname='yayu'","root","");



mysql_select_db(SAE_MYSQL_DB,$link);
if(isset($_GET["id"])){
$sql= "select * from news where id=".$_GET["id"]."";
$res= mysql_query($sql);

$eod=<<<EOT
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>资环迎新专题网</title>
    <link rel="stylesheet"  href="../css/PC.css">
    <!--<link rel="stylesheet"  href="../css/phone.css">-->
	<style type="text/css">
	   .content{min-width:966px;border:5px solid #D8F7F2;margin-top:50px;margin-left:200px;border-radius:20px;}
	   .content_title{height:50px;background:#D8F7F2;}
	   .content_title span{font-size:28px;line-height:64px;color:black;}
	   .content_news{margin:56px auto;}
	   .fontstyle{line-height:36px;}

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
            <div class="content_news">
EOT;


echo $eod;

while($rows=mysql_fetch_assoc($res))
{
$time=explode(" ",$rows["date"]);	
echo "<table width=750 cellpading=1 cellspacing=1 border=0 >";
echo "<tr>";
echo "<td colspan='3' valign='middle' align='center'><font size='+3' color='#32ced2;'><b>".$rows["title"]."</b></font></td>";
echo "</tr><br>";
echo "<tr>";
echo "<td width='100%' valign='middle' align='center'><font color='#32ced2;' size='4'>"."<span class='content_title_two'>日期：".$time[0]."</span><span class='content_title_two'>作者：".$rows["author"]."</span></font></td>";
echo "<tr>";
echo "<tr>";
echo "<td colspan='3'><hr></td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='3' valign='middle'><font class='fontstyle'> ".$rows["content"]."</font></td></tr>";
echo "<tr>";
echo "</table>";
}
  }
$d= <<<EOF


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
echo $d;

?>