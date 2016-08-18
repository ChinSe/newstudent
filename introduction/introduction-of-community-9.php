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
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>信委会</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院教学信息委员会</h2>

                <p class="content_intro_p">
                <h3>秘书部：</h3> 
                以协助委员会主席团处理委员会日常事务为工作中心，协调各部门的关系，促进委员会各项工作的顺利开展。
                <h4>主要工作：</h4>
                <pre>
1.做好会议的通知、记录和考勤；
2.管理委员会各种文件、信函等；
3.协助主席团调配人手、撰写有关文件；
4.做好活动经费的预算、支出、收入登记；
5.负责组织委员会新成员的培训；
6.网络归档：对委员会以及分会的文档资料进行网络化整理；
7.期中反馈：协助调研部复查期中反馈反馈信；
8.评优：与调研部合作，负责委员会内部考核评优。
                </pre>
                
   
                </p>

                <p class="content_intro_p">
                <h3>调研部：</h3>
                核心部门。主要是以教学工作调研为主，负责各学院信息员反馈信息的收集、整理，把信息传到给相应部门等。
                <h4>主要工作：</h4>
                <pre>
1.安排日常值班工作；
2.平时反馈：整理网上反馈信息，把信息反馈给学校相关管理部门，并收集各部门的回复，及时传达给同学；
3.月反馈：整理每月的反馈信息，统计整个月的回复率等数据，制成分析报告交给相关部门及领导；
4.期中反馈：每学期期中，通过收集半学期以来同学们对老师的意见，由分会协助调研部整理成纸质版信件并装信封，由信息员直接送到相应老师的手上，再把回执单上交给调研部；
5.学院挂钩：每个学院安排委员会的成员和学院主席直接沟通，起到考核、监督、传达信息、联系学院分会的作用；
6.评优：负责委员会以及各学院分会、信息员的考核评优；
7.其他工作：进行问卷调查，监督各学院的信息反馈工作等。</pre>    
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3>
                是委员会树立形象、公开信息、开展活动的重要部门。
                <h4>主要工作：</h4> 
                <pre>
1.通过各种宣传渠道，对内和对外宣传，配合学校进行教学精神文明建设方面的宣传；
2.负责委员会活动的采编和报道；
3.负责制作委员会的微信推送；
4.协助其他部门组织组内活动。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>外联部：</h3>
                主要以开展对外活动、挂钩会议和组内活动为主，加强和促进各部门之间的沟通和联系，学院和委员会的联系等。
                <h4>主要工作：</h4>
                <pre>
1.做好与各学院的沟通和交流工作；
2.与校内外兄弟组织建立密切的联系，扩大委员会的影响力；
3.筹集活动经费；
4.负责组织组内外活动，增强委员会与各学院之间的联系；
6.帮助委员会及各学院分会借用课室；
7.积极参与各大活动的开展。
                </pre>    
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