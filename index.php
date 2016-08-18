<?php
error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
$MYSQL_HOST='192.168.1.11';
$MYSQL_USER='048791a1-8119';
$MYSQL_PASS='2447d4fb-5ccb';
$MYSQL_DB='ddc455fd68de44b1686d0ae096d09e55b';
$MYSQL_PORT=3306;
$link=mysqli_connect($MYSQL_HOST , $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB, $MYSQL_PORT);
// $db = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$link)
{
	die('can not connect to mysql:'.mysql_error());
}


//mysql_select_db(SAE_MYSQL_DB,$link);
$a=<<<EOD

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>资环迎新专题网</title>
    <link type="text/css" rel="stylesheet"  href="css/PC.css" media="screen and (min-width:480px)">
    <!--<link type="text/css" rel="stylesheet"  href="css/phone.css" media="screen and (min-width:480px)">-->
	<style>
	a{text-decoration:none;color:#32ced2;}
	li{list-style-type:none;}
	.itemnew_content_news span{float:right;} 
	.itemnew_content_news{overflow:hidden;}
	.container{min-height:600px;} 
	</style>
	<script>
	window.onload=function(){
		var browser_name = navigator.appName;
		if(browser_name=='Microsoft Internet Explorer'){
			$(document).ready(function(){
				$('.container').css('min-height','720');
			})
		}

		
	}
	</script>
    <script src="js/jquery.js"></script>

   
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
EOD;
echo $a;
echo "<a href='introduction/introduction-of-academy.php'><img src='image/left1a.png'></a><a href='introduction/introduction-of-subjects.php'><img src='image/left2a.png'/></a><a href='introduction/prepare-for-schoolbeiginning.php'><img src='image/left3a.png'></a><a href='introduction/introduction-of-community.php'><img src='image/left4a.png'></a>";
$b=<<<EOF
	</div>	
   
    <div class="navigation">
        <div class="nav_btn"><span>导航</span></div>
        <!--<button class="nav_btn" value="">导航</button>-->
        <div>
            <ul class="nav_ul">
<a href='introduction/introduction-of-academy'><li class='nav_ul_li'>学院简介</li></a>
<a href='introduction/introduction-of-subjects'><li class='nav_ul_li'>专业介绍</li></a><a href='introduction/prepare-for-schoolbeiginning.php'><li class='nav_ul_li'>入学准备</li></a><a href='introduction/introduction-of-community.php'><li class='nav_ul_li'>组织介绍</li></a>
EOF;
echo $b;

$c=<<<End
</ul>
        </div>
    </div><!--手机版的-->
    
	<div class="item" id="item2">
		<div class="itemnews">
			<div class="itemnew">
End;
echo $c;
echo "<a href='news/list-of-schoolnews.php'><img  class='itemtitle' src='image/new1.png'></a><br><img class='itemline' src='image/newa.png'>";
echo "<div class='itemnew_content_news'>";
$sql="SELECT * FROM news order by id desc";
$res=mysql_query($sql);
echo "<ul>";

for($j=0;$j<9;$j++)
{
    $rows=mysql_fetch_assoc($res);
	$time=explode(" ",$rows["date"]);
	
	echo "<li><a href='news/content-of-schoolnews.php?id=".$rows["id"]."' target=_self>".$rows["title"]."<span>[".$time[0]."]</span></a></li>";
	
}   
echo "</ul>";                     
    echo "</div></div>";
            
echo "<div class='itemnew' id='itemnew2'><a-><img class='itemtitle' src='image/new2.png'></a><br><img class='itemline' src='image/newb.png'>";
$d=<<<EOD
                     <div class="itemnew_content_an">
                     
                     </div>
            </div>
		</div>
        <div class="item" id="item3_1">
          <div class="itemphoto"></div>
          <div class="about"> 
              <span><img src="image/about.png"></span>
              <div class="itemabout"></div>
		  </div>
	</div>
		<div class="itemnav">
EOD;
echo $d;
echo "<a href='guide/study.php' id='nav1'><img src='image/na1.png'></a><a href='guide/food.php'><img src='image/na2.png'></a><a href='guide/live.php'><img src='image/na3.png'></a><a href='guide/move.php'><img src='image/na4.png'></a>";
echo '</div><div class="itemnav1"><!--手机版的-->';
echo "<a href='guide/study.php' id='nav'><img src='image/na11.png'></a><a href='guide/food.php'><img src='image/na21.png'></a><a href='guide/live.php'><img src='image/na31.png'></a><a href='guide/move.php'><img src='image/na41.png'></a>";
echo '</div></div><div class="item" id="item3"><div class="itemphoto"></div><div class="about"> <span><img src="image/about.png"></span><div class="itemabout">';

$e=<<<ETO
        </div>
		</div>
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
<div class="lefttop"><!--手机版没有-->
	<img src="image/z.png">
</div>	
</body>
</html>
ETO;
echo $e;




?>