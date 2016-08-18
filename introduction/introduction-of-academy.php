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

	   .content_intro_p{margin-top:50px;width:55%;font-size:20px;font-family:微软雅黑;}
       .content_title a{color:black;}
       .content_intro{margin-left:105px;}

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
echo "<a href='../index.php'><span>首页<</span></a><span>学院简介</span></div><div class='content_intro'>";

$c=<<<EOT
                <p class="content_intro_p">
                    资源环境学院成立于1996年，由国土资源与环境科学系、植物保护系合并而成，2012年被
                中共广东省委、广东省人民政府授予“先进集体”称号。2015年1月学校学科与学院结构调整，
                由土壤科学系、环境科学与工程系、生态学系、地理信息系、测绘与遥感系组成新的资源环境
                学院。
                </p>

                <p class="content_intro_p">
                    农业资源与环境、生态学为一级学科博士学位授权点，环境科学与工程和地图学与地理
                信息系统为硕士学位授权点；设有农业资源利用、生态学2个博士后科研流动站；有生态学、
                资源环境科学、环境科学、环境工程、地理信息科学、测绘工程6个本科专业，其中生态学为
                广东省特色专业和广东省综合改革试点专业。有1个农科生态学系列课程国家级教学团队、3
                门国家级精品课程、4门省级精品课程和1门省级研究生示范课程。拥有国家级大学生理科（
                生态学）实践教育基地、广东省生态学人才培养模式创新实验区、广东省生态学应用型人才
                培养示范基地等10多个校内外教学实习基地。
                </p>

                <p class="content_intro_p">
                    学院现有教职工114人，其中正高职称18人，博导14人；副高职称51人，具有博士学位者
                占73%。有国家教学名师1人、全国优秀教师1人、广东省“千百十”人才工程国家级培养对象1
                人、广东省特聘教授2人、广东省“千百十”人才工程省级培养对象3人、广东省教学名师1人、
                教育部教学指导委员会委员1人。现有在校生1656人，其中研究生243人。
                </p>

                <p class="content_intro_p" style="margin-bottom:50px;">
                    学院拥有农业资源与环境、生态学两个广东省优势重点一级学科。建有农业部华南耕地保
                育重点实验室、农业部华南热带农业环境重点实验室、广东省土地利用与整治重点实验室、国
                土资源部建设用地再开发重点实验室、广东省现代生态农业与循环农业工程技术研究中心、广
                东省土地信息工程技术研究中心等7个省部级和3个广东省高等学校科技创新平台。在生态农业
                与循环农业、转基因作物与入侵生物的生态安全防控、工农业废弃物资源化利用、水土环境污
                染控制与修复、土壤改良与生物肥料研制、土地信息工程与综合整治、生态规划、土地规划等
                领域具有明显的优势。近五年来，承担国家级和省、部级各类科研项目以及国际合作项目200
                余项；发表SCI、EI等收录论文500多篇；授权发明专利10多项；主编出版专著及教材40余部；
                获得国家科技进步奖、广东省科学技术奖等10多项。与美英日德法等国的著名高校建立了学术
                交流合作关系，承担了商务部的面向发展中国家政府官员和高级专门人才的培训工作。
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