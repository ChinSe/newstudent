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
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>心灵驿站</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院心灵驿站</h2>

                <p class="content_intro_p">
                <h3>站长团：</h3> 
                <h4>站长：</h4>
                <pre>
1.全面整体指导学生驿站日常工作开展。
2.协调各部门之间的关系，特别是工作分配的协调。
3.对驿站内部决策有决定权。
4.负责协调辅导员以及老师与驿站的沟通。
                </pre>
                <h4>副站长:</h4>
                <pre>
1、协助站长开展工作。
2、协管四个部门，带领其所协管的部门开展工作。
3、参与重大决策。
4、主持召开驿站内部的会议。
                </pre>
   
                </p>

                <p class="content_intro_p">
                <h3>秘书部：</h3>  
                <pre>
1.处理驿站的日常事务，协调各部门工作。
2.负责起草，整理，保管驿站所需的各种文件、档案和资料。
3.管理驿站公共财物以及对驿站活动经费的预算和审核。
4.负责驿站的考勤，以及驿站会议的召开、会议记录，并整理归案。
5.负责外联，与学校其他相关组织沟通交流。
6.撰写新闻稿。
                </pre>  
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3> 
                <pre>
1.面向全学院宣传心理健康知识，负责宣传栏的及时更新。
2.对相关活动的宣传策划和制作。
3.负责心灵驿站所有活动的报道和摄影。
4.对心灵驿站的网站，Q群，博客的管理、更新与维护。
5.制作宣传，会议PPT。
6.负责驿站微信公共平台的管理与建设。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>咨询室：</h3> 
                <pre>
1.心语屋值班，接听热线和接待来访者，登记来访信息和个案等。
2.负责简单的接待和预约老师。
3.每个星期收集心委反馈表的信息，进行系统的回复。
4.将每周的反馈表进行存档，以回执为依据汇总给辅导员反馈情况。
5.不定期举行朋辈辅导员工作经验交流会及个案讨论会。
6.主动联系老师安排心理委员开展培训。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>培训部：</h3> 
                <pre>
1、对驿站的干事，委员与各班心理委员进行培训，促进驿站团队建设。
2、活动的策划书撰写和组织驿站的活动。
3、在驿站内部组织形式多样的集体活动。
4、密切配合其他部门开展活动。
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