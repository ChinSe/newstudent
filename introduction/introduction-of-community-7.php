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
		echo "<a href='introduction-of-academy.php'><img src='../image/left1a.png'></a><a href='introduction-of-subjects.php'><img src='../image/left2a.png'></a><a href='prepare-for-schoolbeiginning.php'><img src='../image/left3a.png'></a><a href='introduction-of-community.php'><img src='../image/left4a.png'></a>";
$b=<<<EOF
</div>	
   
    <div class="navigation">
        <div class="nav_btn"><span>导航</span></div>
        <!--<button class="nav_btn" value="">导航</button>-->
        <div>
            <ul class="nav_ul">

                <a href='introduction-of-academy.php'><li class="nav_ul_li">学院简介</li></a>
                <a href='introduction-of-subjects.php'><li class="nav_ul_li">专业介绍</li></a>
                <a href='prepare-for-schoolbeiginning.php'><li class="nav_ul_li">入学准备</li></a>
                <a href='introduction-of-community.php'><li class="nav_ul_li">组织介绍</li></a>
            
            </ul>
        </div>
    </div><!--手机版的-->
    <div class="content" style="height:auto">
        <div class="content_title">
EOF;
echo $b;
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>党务</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院党务工作室</h2>

                <p class="content_intro_p">
                <h3>秘书部：</h3>
                
<h4>具体职能如下：</h4>
<pre>
1.起草党务工作室的工作计划、总结、报告、通知等文件；
2.协助领导组织安排党务工作室的各种会议，做好会务工作；
3.负责传达校党委和院党委的工作，协调沟通各党支部；
4.负责完善党务工作室相关制度；
5.负责党费收缴及党务工作室经费管理；
6.负责党务工作室与院校各项工作的对外交流；
7.负责对各基层党支部的干部培训和对内相关党建知识的培训
                </pre> 
                
   
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3> 
                
<h4>具体职能如下：</h4>
<pre>
1.负责对上级部门或组织所作出的决策方针政策等进行深入探究并以多种途径（包括网络、海报、文件等）进行宣传和推进。
2.负责联络各支部宣传委员，按期收集新闻稿，给与更改和评定，及时跟进组织内部的先进个人或集体并将所涉及的事迹进行总结、宣传，扩大党组织影响力。
3.建立党务工作室宣传栏并及时维护和更新，负责党务工作室内部的聘书、招新海报、工作证的制作。
4.负责学院党建网平台、党务工作室微信公众号的网络宣传，以及党务工作室和支部微信、微博、Q群的管理。
负责党务工作室各种活动、会议的宣传、布场工作。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>组织部：</h3>
                
<h4>具体职能如下：</h4>
<pre>
1.负责统筹学院发展学生党员；
2.负责学生党员档案的管理，各党支部新发展党员材料的审核；
3.负责对学生党员组织关系的接收，毕业，转学院和退学等相应组织关系的转接；
4.负责《中国共产党党务管理信息系统》的管理；
负责先进党支部及优秀共党员的推选。
                </pre>    
                </p>

                <p class="content_intro_p">
                <h3>培训部：</h3>
                
                <h4>具体职能如下：</h4>
<pre>
1.协助学院党委组织开展党校培训工作，规范培训班的各种规章制度。如课程系列活动的策划、开展党课前期宣传、党课学员的名单收集及组织党课学员进行党课培训等
2.负责对学院学生党员再教育工作，分析党员思想动态，结合实际，制定党员再教育计划，提高党员意识，加强党性修养。
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