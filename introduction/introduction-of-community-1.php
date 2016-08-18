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
	   .content_intro p{margin-top:50px;width:55%;margin-left:50px;font-size:20px;font-family:微软雅黑;text-indent:2em;line-height:32px}
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
                <h2>华南农业大学资源环境学院红十字会</h2>

                <p class="content_intro_p">
                <h3>组织部：</h3> 
                组织部主要工作就是负责策划并落实资环红会的活动。同时协助资环红会其他部门开展他们策划的活动。组织部是一个充满高度策划能力以及创新性的部门。
   
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3>   
                顾名思义就是进行宣传工作，资源环境学院红十字会宣传部不仅是资环红会对外宣传的主要部门，而且是展现资环红会风貌的一个窗口，一扇大门。我们宣传部的主要工作涵盖了宣传海报，视频的设计制作，活动场地的布置，积极配合其它部门等。我们也利用网络等新媒体来对资环红会的一些重要事情及活动进行大的宣传，让活动扩大影响力，加深印象，留下深远的影响。在宣传部，我们一起工作时勤勤恳恳，认真负责，每个人都能发挥自己的重要作用，大家相互合作，相互学习，共同进步。每一次的活动都离不开宣传部，而我们宣传部也在每一次的活动中得到团队合作和个人能力的提升，加深彼此的友谊。工作之余，我们在生活中也是互相关心，彼此嬉戏打闹，也聊人生，聊情感，十分有爱。宣传部，一个展现大家才能的部门，一个充满优雅气质的部门，一个有节操有爱有温暖的部门。这，很宣传部。 
                </p>

                <p class="content_intro_p">
                <h3>培训部：</h3>    
                想学会CPR？想看帅哥（美女）打篮球？想学点基本医疗知识保护你的那个他（她）？想参与活动的组织策划？come come come!!!交给那个最可爱、最暖心、最有爱的大家庭——培训部吧。培训部，主要负责基本医疗知识的组织、策划；各个比赛现场的医疗救护值班以及负责下学期的三个赞赞的特色活动，绝对让你收获满满。你的大学你做主，还等什么，快到师兄师姐碗里来吧!(*^__^*)
                </p>

                <p class="content_intro_p">
                <h3>外联部：</h3>
                外联部在资环红会中起着对内和对外联系的作用。对外，就是与外界的商家及其他商业机构联系；对内就是负责红会内部的沟通交流；是红会中不可或缺的一个重要的部门。
外联部，顾名思义，最重要的就是对外界的联系。要想弘扬红会“人道、博爱、奉献”的精神，光靠红会内部的活动也是不够的，因此，外联部承担了“走出去”的任务。其中最重要的就是拉赞助以及外出服务了。在与商家联系的时候，除了商谈赞助的事宜，还会跟商家介绍红会的活动，让商家对红会的活动有所了解。至于外出服务，就有老人院出队和按摩服务队出队。通过出队活动，我们可以更好的提供公益服务，并宣扬红会精神。
而在红会内部，外联部可是负责主持人的挑选和培训的，所以，外联部里的干事都是高颜值的帅哥美女啊！    
                </p>

                <p class="content_intro_p" style="margin-bottom:50px;">
                <h3>秘书部：</h3>
                秘书部负责学生理事会公文的写作,会员的会籍管理,发放活动通知,课室和宣传栏的申请，会议记录和活动资料的整理归档,协调各部门的工作．负责与校红十字会保持联系,并校对资料,会费的收取,保管、预支、支出及一些日常事务，掌管红会的财政大权。足够细心与有才华的你快快到碗里来吧！阳光温热，岁月静好，你若不来，我怎敢老去！    
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