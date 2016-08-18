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
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>工作室</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院网络信息工作室</h2>

                <p class="content_intro_p">
                <h3>主席团：</h3> 
                负责全工作室内部事务管理发展，以及对外交流合作，指导下属各部门工作，协调工作围着“高效、专业、权威、精湛”开展，并为学院策划网络宣传重大工作。
   
                </p>

                <p class="content_intro_p">
                <h3>秘书部：</h3>    
                人事协调以"权威"为理念。各秘书除开展本部门基本工作外，还要分派到各个部门中负责秘书管理工作，集策划，外联，公关等于一体。对工作能力有一定要求。
                <h4>职能：</h4>
                是本组织的核心管理机构，参与管理和组织本组织各项活动，负责档案的管理，制度的修订，财务的管理及财务报销 ，一些公文的起草，会议的记录、学生干部的值班，学生干部的考勤等。对于各工作实体的沟通、联系、管理起重要的作用，保证所有工作的高效运作。
                </p>

                <p class="content_intro_p">
                <h3>技术部:</h3> 
                以"专业"为理念。部门工作宗旨在于通过各项部门内部工作提高学生网页、多媒体制作以及美工排版等各方面的能力。
                <h4>职能：</h4>

                主要负责学院网站及大型活动专题网站的开发、建设、更新、维护，向学生活动提供技术支持，培训学生对于平面媒体、海报设计、 多媒体制作，网站开发以及美工排版等各方面的能力。
                </p>

                <p class="content_intro_p">
                <h3>撷彩通讯社：</h3> 
                以"高效"为理念。旨在培训学生的写作以及编辑能力，加强学生的沟通交流能力（有一定的写作水平和摄影技术，有责任心，工作效率有保证）。

                <h4>职能：</h4>
                负责对工作室内部刊物，及学院有关报刊的编排；学院网页新闻的编辑以及学校网页的供稿、院校各大型活动的新闻写作；与其他学生组织及校内各个媒体的交流与合作；学院报刊出版等


                </p>

                <p class="content_intro_p">
                <h3>计算机维修部：</h3>
                以“精湛”为理念。旨在通过培训和义修提高大学生计算机应用和日常维护能力，并解决师生的燃眉之急。
                <h4>职能：</h4>
                维修学院师生故障的电脑，主要负责基本硬件的故障判断；重装系统；驱动程序的安装；常用软件的安装等。

                </p>

                <p class="content_intro_p">
                <h3>新媒体中心：</h3>
                以“新颖”为理念。将新媒体技术任意玩转，通过微信公众号、微博与广大学生互动，实时发送组织动态，介绍近期热点，分享摄影技巧、电脑技术，内容丰富，种类多样灵活。
                <h4>职能：</h4>
                负责编辑推文，日常对官方公众号和微博以及资环学院公众号进行管理。 

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