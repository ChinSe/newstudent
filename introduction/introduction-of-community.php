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
       .content_title a{color:black;}
       .content_intro{margin-left:159px;}
       .content_intro_div{width:100%;height:420px;}
       .content_intro_img{width:240px;height:240px;}
       .content_intro_div_p{width:75%;float:left;line-height:34px}
       .content_intro_div_p span{font-size:20px;}

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
echo "<a href='../index.php'><span>首页<</span></a><span>组织介绍</span></div><div class='content_intro'>";

$c=<<<EOT
<div class="content_intro_div" style="margin-top:50px;">
<a href='introduction-of-community-1.php'><img class="content_intro_img" src="../image/红会.jpg"/></a>
<p class="content_intro_div_p">
资环红会在2005年正式成立，可以说是资环是最早创立红会这个组织的。资环红会主要的工作是协助校红会开展活动和传播医疗知识以及宣扬红会精神。与此同时，资环红会同时具有三个小分队——按摩队、血液队以及手语队，它们的智能就是奉献爱心。资环红会是一个充满凝聚力以及予人归属感的大家庭。
<a href='introduction-of-community-1.php'><span>更多>>></span></a>
</p>

</div>


<div class="content_intro_div">
<a href='introduction-of-community-2.php'><img class="content_intro_img" src="../image/青志.jpg"/></a>
<p class="content_intro_div_p">
华南农业大学资源环境学院青年志愿者服务队（简称“资环青志”）是由志愿从事社会公益与社会保障事业的大学生组成的群众组织，受共青团华南农业大学委员会和资源环境学院的领导，是华南农业大学资源环境学院院内十大独立组织之一。资环青志又称青韵，一直以来，青韵秉承“奉献、友爱、互助、进步”的志愿者精神，通过组织和指导全学院青年志愿者参加社会公德公益服务活动，以提高自身实践能力，拓展当代大学生的素质，增强当代大学生的社会责任意识。青韵的主要服务范围是敬老、助残和环境的保护。资环青志现有委员、干事约60人，队员约250人，约占资环本科生总人数的15%。 
目前，组织上以主席团为最高权力机构，下设“三部门三分队”，三分特色分队组织开展志愿服务活动，三部门协助开展高效的志愿服务活动。“三部门”指秘书部、宣传部和培训部，“三分队”指环保队、敬老队和助残队。
<a href='introduction-of-community-2.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-3.php'><img class="content_intro_img" src="../image/双创.jpg"/></a>
<p class="content_intro_div_p">
资环创新创业工作室，是联合资源环境学院本科生和研究生一同组建的院级组织，致力于推动资源环境学院创新创业工作的大力开展，提高学院的创新创业活力，通过举办创新创业讲座、组织与创新创业有关的竞赛、承办大学生科技创新与创业训练计划、加强校企合作、为学生寻找专业对口资源等，努力构建本科生与研究生、学生与教师、学生与社会企业之间的联系，真正做到为同学服务。
<a href='introduction-of-community-3.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-4.php'><img class="content_intro_img" src="../image/学生会.jpg"/></a>
<p class="content_intro_div_p">
资源环境学院学生会从建立伊始，便强调CI系统等专业、高效的管理意识，每任学生会继承以往的优良系统建设，并使其更加完善。不断完善直到本任期所形成的CI系统。
资环学生会举办的文体活动致力于展示出氛围融洽、特色明显的大学文化氛围。在保证学院良好学风建设的前提下，充分考虑资环学子的需求，紧扣时代主题以丰富同学的课余生活。
服务和维权使学生会的职责与义务，为学生服务维权既是学生会的原始宗旨也是学生会的发展动力。
学生会的使命：从同学中来，到同学中去。
学生会的宗旨：求实创新，服务同学。
学生会的文化氛围：以人为本，真诚理解，虚心学习，发扬专业。
学生会秉承“做人在先，做事在后。”的人才观。
<a href='introduction-of-community-4.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-5.php'><img class="content_intro_img" src="../image/工作室.jpg"/></a>
<p class="content_intro_div_p">
资源环境学院网络信息工作室成立于2002年末，是一个以院内外信息采集与发布、对学院各项活动的新闻报道、学院网页制作、网页内容的更新与维护，管理及解决学院师生的计算机故障为任务，以锻炼与培养学生写作、排版、网页制作、计算机维修等技能，提高学生的综合素质为目标，在学院党委的领导下开展工作的新型学生组织。旨在建设一个良好的网络空间，为学院内外的各界人士提供一个了解资环的平台。    
我们的宗旨是“服务同学，锻炼自我”，我们的理念是“专业 精湛 高效 权威 新颖”。
<a href='introduction-of-community-5.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-6.php'><img class="content_intro_img" src="../image/心灵驿站.png"/></a>
<p class="content_intro_div_p">
2006年3月12日，华南农业大学资源环境学院心灵驿站正式成立。本协会是在我校心理健康辅导中心和资环学院党委领导下的由我院学生自愿组成以公益为主的群众性团体，同时也是由全校热心于大学生心理健康教育与服务事业，帮助大学生提高心理水平的有志青年组成的学术性社团组织。本协会以马克思列宁主义、毛泽东思想、邓小平理论和“三个代表重要思想”和科学发展观作为自己的行动指南，本着“真诚、尊重、保密”的工作理念，在校园里开展丰富多彩的心理健康活动。
华南农业大学资源环境学院心灵驿站是在我校心理健康辅导中心和资环学院党委领导下的由我院学生自愿组成以公益为主的群众性团体，同时也是由全校热心于大学生心理健康教育与服务事业，帮助大学生提高心理水平的有志青年组成的学术性社团组织，本着“真诚、尊重、保密”的工作理念，在校园里开展丰富多彩的心理健康活动。
<a href='introduction-of-community-6.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-7.php'><img class="content_intro_img" src="../image/党务.jpg"/></a>
<p class="content_intro_div_p">
华南农业大学资源环境学院党务工作室以马克思列宁主义、毛泽东思想为指导，高举邓小平理论伟大旗帜，深入贯彻落实“三个代表”重要思想和科学发展观，切实加强各党支部建设，发挥各党支部的战斗堡垒作用。加强党员的理想信念教育，提高党员的思想政治素质，充分发挥党员的先锋模范作用。党务工作室隶属学院党委，设指导老师1名、主任1名、副主任3名，下设秘书部、宣传部、组织部、培训部4个部门，党务工作室在学院党委和学院党支部之间发挥着“桥梁”作用，是党建工作的一个重要核心。
<a href='introduction-of-community-7.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-8.php'><img class="content_intro_img" src="../image/团委.jpg"/></a>
<p class="content_intro_div_p">
共青团华南农业大学资源环境学院委员会(以下简称“团委”)以马克思列宁主义、毛泽东思想为指导，高举邓小平理论伟大旗帜，深入贯彻落实科学发展观，解放思想，实事求是，与时俱进，团结学院师生，在学院党委和校团委的正确领导下，秉持“团结创新，服务同学”的工作方针，充分发挥党的助手和后备军的作用，做好推优入党工作，加强团内的民主建设，倡导民主决策、民主监督和民主管理，保证团员行使民主权利，对重大问题有决定权。不断完善团的各种制度，主动关心青年的生活和工作，为青年多办实事，切实维护青年团员的利益，贯彻落实民主集中制的组织原则，使团的工作能有效地、有序地进行，努力把我院的团建工作推上一个新的台阶。同时指导我院学生会、网络信息工作室等学生组织开展工作。
<a href='introduction-of-community-8.php'><span>更多>>></span></a>
</p>
<span></span>
</div>


<div class="content_intro_div">
<a href='introduction-of-community-9.php'><img class="content_intro_img" src="../image/信委.png"/></a>
<p class="content_intro_div_p">
华南农业大学学生教学信息委员会（简称校信委会）直属于学校教务处教学质量监控科，旨在加强和提高学校的教学质量，是教师与学生的沟通桥梁，日常工作为收集与整理学生对任课教师、教学管理部门、学校设施以及其他方面的反馈意见，把反馈信息 传递到学校有关部门，让相应部门对所属的问题做出处理并给予同学们及时的回复。我们秉承“反馈教学信息，提高教学质量”的宗旨，作为一个全校性的学生组织，组织并监督各学院教学信息员的信息反馈工作。
其中资环信委会属于其中一个分会，设主席团、秘书部、调研部、宣传部、外联部，下教学信息员作为班委的组成部分，负责组织全班同学通过讨论或广泛深入调查，收集同学们反馈的教学意见，定期登陆“教学质量监控网（又称“教学信息反馈网”：校网首页-教务处-反馈网）”进行网上反馈或在课后直接反馈给任课教师。
<a href='introduction-of-community-9.php'><span>更多>>></span></a>
</p>
<span></span>
</div>







                <p class="content_intro_p">
                    
                </p>

                <p class="content_intro_p">
                    
                </p>

                <p class="content_intro_p">
                    
                </p>

                <p class="content_intro_p" style="margin-bottom:50px;">
                    
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