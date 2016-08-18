<?php
//error_reporting(0);
header("Content-Type:text/html;charset=utf-8");
$a=<<<EOD

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>资环迎新专题网</title>
    <link rel="stylesheet"  href="../css/PC.css">
    <!--<link rel="stylesheet"  href="../css/phone.css">-->
	<style type="text/css">
	   .content{height:auto;min-width:966px;border:5px solid #D8F7F2;margin-top:50px;margin-left:200px;border-radius:20px;}
	   .content_title{height:50px;background:#D8F7F2;}
	   .content_title span{font-size:28px;line-height:64px;}
	   .content_intro_p{margin-top:50px;width:55%;margin-left:50px;font-size:20px;font-family:微软雅黑;}
       .content_title a{color:black;}
       .content_intro{margin-left:159px;width:55%;}
       .content_intro h2{margin:50px auto;}
       .content_intro h3{margin-bottom:16px;}
       .content{min-height: 800px;}

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
EOD;
echo $a;
		echo "<a href='../introduction/introduction-of-academy.php'><img src='../image/left1a.png'></a><a href='../introduction/introduction-of-subjects.php'><img src='../image/left2a.png'></a><a href='../introduction/prepare-for-schoolbeiginning.php'><img src='../image/left3a.png'></a><a href='../introduction/introduction-of-community.php'><img src='../image/left4a.png'></a>";
$b=<<<EOF
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
    <div class="content" style="height:auto">
        <div class="content_title">
EOF;
echo $b;
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>红会</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院青年志愿者服务队</h2>

                <p class="content_intro_p">
                <h3>秘书部：</h3> 
                秘书部作为青志的中枢部门，负责统筹各部门分队的工作情况并及时将发现的问题向主席团反映，管理青志的物资和财务，负责新闻稿的撰写更新与归档工作，与宣传部合作管理博客的更新。
   
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3>  
                宣传部为资环青志的大大小小的活动进行形式多样的宣传。活动前期负责海报、视频、展板等的制作；活动期间负责场地布置、活动照片的拍摄等工作；活动后期进行活动后续宣传：在院网、博客、微信公众号等处与秘书部配合对活动进行归纳总结。  
                </p>

                <p class="content_intro_p">
                <h3>培训部：</h3>   
                培训部负责志愿者技能的培训，为志愿服务活动提供优质的志愿者。培训形式以培训会为主，其他培训为辅；培训内容主要有：粤语、手语、按摩、安全应急及探访技能。 
                </p>

                <p class="content_intro_p">
                <h3>环保队：</h3> 
                环保队是资环青志的特色小分队，致力于宣传环保知识和开展一系列环保活动，以行动美化环境，以自我带动他人，让环保观念深入我们的生活。我们有刮刮乐，物资回收，刷树，环保支教等常规活动，另外我们还积极参与学院以外的与环保相关的活动，比如：绿点助教，世界环境日宣教等。
                </p>

                <p class="content_intro_p">
                <h3>敬老队：</h3> 
                敬老队是一支以尊老爱老为宗旨的，以有组织有领导的形式定期进行敬老院、孤寡老人探访的队伍。我们的常规活动有：东山口红升颐养老院探访、孤寡老人地点探访；精品活动：“寿星大厦”敬老爱老活动、社区按摩服务。尽自己最大的努力去帮助那些孤寡老人，让老人们快乐，就是敬老队的奋斗的目标。   
                </p>

                <p class="content_intro_p">
                <h3>助残队：</h3> 
                助残队是一支尽心尽力为残疾人服务的队伍，我们有水清玉清，员村，盲校，喜智，以及周末喘息五个探访点。在这里，我们与小朋友开心地玩耍，我们与叔叔阿姨闲话家常，我们安静地为小朋友讲故事，“疯狂”地跟小朋友玩怪兽超人的游戏，我们文艺地剪纸，“癫狂”地玩老鹰捉小鸡。我们并不全能，但我们愿意尝试，只为了探访对象的一个笑容。   
                </p>

                <p class="content_intro_p">
                <h3></h3>    
                </p>

                <p class="content_intro_p">
                <h3></h3>    
                </p>

                <p class="content_intro_p">
                <h3></h3>    
                </p>
                
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
EOT;
echo $c;
?>