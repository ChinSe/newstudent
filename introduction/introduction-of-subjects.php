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
       .content_intro_p_h{margin-top:0;width:55%;margin-left:50px;font-size:20px;font-family:微软雅黑;}
	   .content_intro_p{margin-top:50px;width:55%;margin-left:50px;font-size:20px;font-family:微软雅黑;}
       .content_title a{color:black;}
       .content_intro{margin-left:159px;}
       .content_intro h2{margin-top:100px;}

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
echo "<a href='../index.php'><span>首页<</span></a><span>专业介绍</span></div><div class='content_intro'>";

$c=<<<EOT
                <p class="content_intro_p">
                 学院下设土壤科学系、环境科学与工程系、生态学系、地理信息系、测绘与遥感系等5个系，有生态学、资源环境科学、环境工程、环境科学、测绘工程和地理信息6个专业；有2个一级学科博士学位授权点（农业资源与环境、生态学），2个博士后科研流动站（农业资源利用、生态学），2个硕士学位授权点（环境科学与工程、地图学与地理信息系统）；有生态学、资源环境科学、环境科学、环境工程、地理信息科学、测绘工程6个本科专业，其中生态学为广东省特色专业和广东省综合改革试点专业。   
                </p>



                <h2>环境工程专业</h2>

                <p class="content_intro_p_h">
                 【培养目标】培养具备城乡及工业环境工程与管理的基本理论、基本知识，掌握水污染控制、大气污染控制、废物处理与资源化、环境工程设备与自动控制、土壤污染修复技术原理和工程设计方法，具有环境监测、环境质量评价、环境规划与管理的初步能力，能从事设计、施工、规划、管理、教育和研发工作的环境工程技术人才。   
                </p>

                <p class="content_intro_p">
                【主要课程】环境化学、环境监测、环境工程原理、环境工程微生物、大气污染控制工程、水污染控制工程、固体废弃物处理与处置、环境土壤学、环境工程设备、环境工程仪表与自动化、环境质量评价、环境规划与管理、清洁生产、环境工程设计等。    
                </p>

                <p class="content_intro_p" >
                【就业方向】毕业生能在政府环保部门、规划部门、经济管理部门、设计单位、工矿企业、科研单位、学校等从事设计、施工、规划、管理、教育和研究开发方面的工作。   
                </p> 



                <h2>环境科学专业</h2>

                <p class="content_intro_p_h">
                【培养目标】培养具备环境保护的基本理论、基本知识，掌握环境监测、环境质量评价、环境规划与管理的技术方法，具备水、大气、土壤、噪声污染控制和废物处理与利用技术原理和工程运营的能力，能从事环境监测、评价、规划、管理、工程运营、教育和研发工作的环境保护专门人才。    
                </p>

                <p class="content_intro_p">
                【主要课程】环境科学概论、环境化学、环境监测、环境质量评价、土壤污染与防治、环境规划与管理、环境法学、环境微生物学、环境工程学（大气污染与防治、水污染与防治、固体废物处理）、清洁生产与循环经济等。   
                </p>

                <p class="content_intro_p" >
                【就业方向】毕业生能在政府环保部门、规划部门、经济管理部门、工矿企业、科研单位、学校等从事环境保护、生态建设、资源利用、绿色产品生产等领域的开发、管理、教学、研究等工作。   
                </p> 



                <h2>资源环境科学专业</h2>

                <p class="content_intro_p_h">
                【培养目标】培养掌握资源环境科学的基本理论、基本知识和基本技能，熟悉我国的水土资源、生物资源与环境质量状况等基本国情；能够进行资源与环境质量的定性与定量分析及评价；掌握提高土壤、水分、养分、生物等资源利用效率的理论、技术与方法；学会利用信息技术进行资源高效利用、环境保护及退化防治等宏观管理与决策能力的高级人才。   
                </p>

                <p class="content_intro_p">
                【主要课程】土壤学、植物营养学、土壤-植物-环境分析、地质地貌学、土壤资源调查与评价、养分资源管理、水资源利用与管理、资源环境信息技术、环境生态学、环境微生物学、生物统计学、环境资源遥感、环境生物技术、环境监测与评价、土壤污染与防治等。    
                </p>

                <p class="content_intro_p" >
                【就业方向】毕业生可到资源和环境领域的高等院校和科研院所从事教学、科研工作；各级农业、环境、国土、生态等行政和事业单位从事管理和技术推广工作；农业、肥料、绿色食品、土壤修复等企业从事管理和技术工作。    
                </p> 



                <h2>生态学专业</h2>

                <p class="content_intro_p_h">
                【培养目标】培养系统掌握生态学的基础理论、基本知识和基本方法，具备环境生态学、生态农业与循环农业、生态工程、自然保育与生态修复、景观生态规划与设计、生态安全与生态管理等应用生态学专业技能的复合型高级人才。   
                </p>

                <p class="content_intro_p">
                【培养目标】培养系统掌握生态学的基础理论、基本知识和基本方法，具备环境生态学、生态农业与循环农业、生态工程、自然保育与生态修复、景观生态规划与设计、生态安全与生态管理等生态学科学研究与实践应用专业技能的复合型高级人才。    
                </p>

                <p class="content_intro_p" >
                【主要课程】普通生物学、普通生态学、环境学、农业生态学、生态工程技术及应用、环境经济与生态管理、3S技术及应用、生态规划学、环境监测、生态学综合实验、环境学综合实验、生态学野外综合实习等。    
                </p> 

                <p class="content_intro_p">
                【就业方向】毕业生可从事政府决策管理、生态农业与循环农业、农产品安全生产、生态工程、生态规划、生态旅游、环境监测、资源调查与生态环境评价、生态环境保护与建设、生态管理等方面的教学、科研、技术推广与开发工作。   
                </p>



                <h2>测绘工程专业</h2>

                <p class="content_intro_p_h">
                【培养目标】培养德、智、体全面发展，掌握现代测绘科学的基本理论、基本知识与专业技能，具有从事地形控制与测量、工程测量、摄影测量与遥感以及地图编制等方面的知识和技能，能在国民经济各部门从事国家基础测绘建设、城市和工程建设、矿产资源勘察与开发、国土资源调查与管理等测量工程、专题地理信息系统的应用与设计、能胜任市政及交通工程建设中测绘工作，并能从事测绘研究、管理、教学等工作的高素质应用型人才。   
                </p> 
                
                <p class="content_intro_p">
                【主要课程】测量学基础、控制测量学、误差理论与测量平差基础、数字化成图原理与应用、工程测量学、遥感原理与应用、GPS原理与应用、地理信息系统、摄影测量学等。     
                </p>

                <p class="content_intro_p" >
                【就业方向】毕业生可在各级政府部门、信息产业部门、相关测绘企业、教育与科研等单位从事测绘工作与管理、信息系统和应用软件开发及相关学科的科学研究或专业教学工作。    
                </p> 



                <h2>地理信息科学专业</h2>

                <p class="content_intro_p_h">
                【培养目标】培养具备地理信息科学基本理论方法和地理信息系统应用开发技能，能在国土资源、城市规划、环境保护、交通建设、市政城管等行业的政府部门和企事业单位，从事与地理信息技术有关的应用研究、技术开发、生产管理和行政管理等工作的专业人才。   
                </p>

                <p class="content_intro_p">
                【主要课程】自然地理、经济地理、测量学、地图学、地理信息系统概论、C语言、软件开发基础、遥感导论、空间数据库、GIS应用、空间分析原理与应用、GIS二次开发、土地利用规划、城市规划原理、土地调查与评价、遥感地学分析等。    
                </p>

                <p class="content_intro_p" style="margin-bottom:100px;" >
                【就业方向】毕业生可在国土资源、城乡规划、环境保护、城管市政与农林管理等相关的政府机构、科研和教学单位，以及相关的事业单位、IT企业和技术咨询企业等从事GIS应用与开发方面的技术工作，也可继续攻读地图学与地理信息系统、土地资源管理、城乡规划、自然地理和人文地理等专业的硕士学位。    
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