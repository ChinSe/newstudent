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
	   .content_intro p{margin-top:50px;width:55%;margin-left:50px;font-size:20px;font-family:微软雅黑;}
       .content_title a{color:black;}
       .content_intro{margin-left:159px;width:55%;}
       .content_intro h2{margin:50px auto;}
       .content_intro pre{width:55%;}
       .content_intro_p{width:55%;}
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
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>团委</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>共青团华南农业大学资源环境学院委员会</h2>

                <p class="content_intro_p">
                <h3></h3> 
                <h4>书记、副书记：</h4>
                全面主持团委的工作，对团委工作进行方向指引与指导。
                <h4>执行秘书长：</h4>
                协助副书记制定团委的工作计划、总结、报告、通知等文件以及与其他组织之间的交流等工作，以及审核团委活动策划。
                <h4>常务秘书长：</h4>
                掌握团内工作的基本情况，并及时向书记、副书记反映；负责相关会议的召集、主持等工作。

                
   
                </p>

                <p class="content_intro_p">
                <h3>秘书部：</h3> 
                秘书部既是团委的“管家”部门又是“桥梁”部门，其工作职责如下：
                <pre>
(一)起草团委的工作计划、总结、报告、通知等文件；
(二)组织基层团干部培养教育工作，建立健全团内各项考核制度；
(三)协助领导组织安排团委的各种会议，做好会议记录和其他会务工作；
(四)负责文件、资料的收发，传递、清理、立卷和归档工作；
(五)负责对外联络及接待工作；
(六)负责财物保管及报销；
(七)负责团委办公室值班和管理；
(八)负责校团委、院团委工作任务的上传下达，以及与院各支部的沟通联系。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>思想建设部：</h3> 
                思想建设部是组织团员开展思想建设活动的部门，其工作职责如下：
                <pre>
(一)开展团课，对团员思想进行教育和提高;
(二)引导学院团员思想前进方向，组织开展学院形势政策教育，引导学院各年级团总支开展形势政策教育工作。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>实践部：</h3>
                实践部是校团委、校科联、院团委与学院团员之间的沟通枢纽，主要负责信息的上传与下达，同时带领学院团员进行社会实践活动的部门。其工作职责如下：
                <pre>
(一)管理学院青年志愿者，带领学院团员和青年志愿者开展志愿服务活动，如暑假三下乡社会实践活动，千乡万村环保科普行活动；
(二)鼓励学院学生参与各类环保科技大赛，各种社会实践活动，如广东省科技项目挑战赛，“心环保 新生活”环保科技创意大赛，寒暑假社会实践活动；
(三)在思想上指导学院青年志愿者服务队及红十字会开展志愿公益活动，如学雷锋特色活动；
(四)联系组织各类实践技能培训工作。
                </pre>    
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3> 
                宣传部是思想教育和舆论导向的重要部门，其工作职责如下：
                <pre>
(一) 组织宣传党的路线、方针、政策和上级团委的决议。围绕团委中心工作，抓好日常的宣传工作及思想教育工作，承担宿舍电子屏管理工作；
(二)负责团委对内、对外的宣传报道工作，承担院刊《莽野》供稿工作；管理团内的各种出版物；下设新媒体中心，管理团委的新媒体平台线上工作；(详情参考新媒体中心的部门职能)
(三)了解团员、青年的思想动态，进行综合分析，有针对性的进行教育；
(四)协助党委宣传部抓好其他有关宣传工作。
                </pre>   
                </p>

                <p class="content_intro_p">
                <h3>新媒体中心： </h3> 
                新媒体中心是华南农业大学资源环境学院为顺应新媒体潮流发展，掌握舆论宣传的主动性，拓宽学院宣传工作，监督与管理学院新媒体联盟运作，由团委宣传部积极开辟的宣传机构。
                <pre>
(一)围绕多媒体宣传转型、向广大学生传播正能量的整体要求，建设完善学院消息传播平台，负责对内、对外的宣传报道工作；
(二)了解校团委的工作思想及工作方针，及时更新动态，为广大学子传递有价值的校园资讯和最及时便捷的信息服务；
(三)监督与管理资环九大组织的有关新媒体宣传工作，统一奖惩制度，完善资源环境学院新媒体联盟运作；
(四)掌握舆论宣传的主动性，抓好有关宣传工作。
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