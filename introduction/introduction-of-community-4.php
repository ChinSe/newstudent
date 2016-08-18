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
echo "<a href='../index.php'><span>首页<</span></a><a href='introduction-of-community.php'><span>组织介绍<</span></a><span>学生会</span></div><div class='content_intro'>";

$c=<<<EOT
                <h2>华南农业大学资源环境学院学生会</h2>

                <p class="content_intro_p">
                <h3>公关部：</h3> 
                公关部是学生会对外交流的门户部门。主要负责学院活动的对外赞助洽谈以及院内外组织人员的交流促进，同时负责学生会的微信微博平台推文的发布。我们一直保持阳光向上的生活态度和严谨的工作作风，因为我们就是学生会精神面貌的体现。正如我们的口号“无兄弟不公关”一样，我们适合团结充满欢乐的部门，公关部有你更精彩！
   
                </p>

                <p class="content_intro_p">
                <h3>秘书部：</h3> 
                以协助学生会主席团处理学生会日常事务为工作中心，协调各部门的关系，促进学生会各项工作的顺利开展。
                <h4>部门职责：</h4> 
                <pre>1.协助主席工作，做好每次大型活动前的准备工作。</pre>
                <pre>2.做好各项会议的通知、记录和考勤登记。</pre>
                <pre>3.管理学生会各种文件、信函、报纸等，并对文件、信函登记，存档。</pre>   
                <pre>4.协助主席团调配人手、传达通知、撰写有关文件等。</pre>
                <pre>5.做好活动经费的预算、支出、收入登记，管理财务。</pre>
                </p>

                <p class="content_intro_p">
                <h3>权益与生活部：</h3>
                权益与生活部是和广大同学最密切贴近的一个部门，是学生会“服务”两字的最佳代表。
       它立足调研，了解同学需要；
       它通过交流，服务同学生活；
       通过“维权留言本，维权微博，维权热线”三维一体的维权途径，切实为广大同学解决大事、小事、身边事。
       它掌管着经常与外院交流的物资大权和宿舍卫生的评比，负责宿舍文化节和几院联合的权益广场策划。
       最最重要的是，这里除了是一个让你学习、锻炼的平台，还是你大学最温暖的港湾！    
                </p>

                <p class="content_intro_p">
                <h3>体育部：</h3> 
                体育部主要负责组织学院学生各项有益身心的体育活动，协助和组织好学院经典品牌活动，发挥创新意识和实践能力，组织开展院内各类体育赛事，并通过多种形式和途径宣传体育活动的重要性，提高同学们的综合素质。
                <h4>部门职责：</h4>
                1)协助校体育部组织各类体育活动；(2)在我院领导的指导下做好本部门的各项常规工作；(3)组织筹备资源环境学院运动会的开展；(4)组织管理各个院运动队；(5)协助举办活动的部门布置活动会场和相关工作；(6)及时了解我院同学对体育部的意见和建议并予以解决。   
                </p>

                <p class="content_intro_p">
                <h3>文娱部：</h3>   
                文娱部致力于筹办学院文娱活动，加强学院文化。班级风采大赛，十大歌手大赛，毕业晚会，跳蚤市场等等学生展示自己魅力与才华的舞台背后，总有文娱人忙前忙后的身影。我们不是舞台上光彩亮丽的演员，我们细心筹划每一次晚会，从前期准备到后期收场，不到最后一刻都不放松。
   学院的艺术团也归文娱部管理，文娱部是各队沟通与交流的桥梁。
   文娱人会玩，加入我们你将收获交心挚友。文娱人敢付出，懂得每个位置的重要性。
   有热情，有idea，敢想？我觉得我们一直在等的人就是你！ 
                </p>

                <p class="content_intro_p">
                <h3>宣传部：</h3>
                负责资源环境学院中学生会举办的各大活动的前期宣传（宣传海报设计，宣传展板制作等）以及各个大型活动的布场、收场……
宣传部以部门集体为中心，本着对内自我发展，对外树立良好形象的心态共创一个技术精良充满创意、快乐活泼的技术型部门。
秉承着“宣传出品，必属精品”的原则，用心设计。
欢迎有想法，有创意的你加入。    
                </p>

                <p class="content_intro_p">
                <h3>学习部：</h3>   
                学习部紧密联系学院学务教务，是学生和老师的桥梁。掌管所有学生的命脉——学习。 学习部不仅会学习，还会交流。新老生交流会。师兄师姐精彩演说，诚挚交流。为你们打开一扇了解大学的窗。促成学院一家融洽的氛围。 学习部不仅会交流还会策划。我们组织各类学术活动，可以得到各种提升，如组织策划能力，调遣能力，管理能力。也可以得到各种学习方法上的帮助，帮助同学，是学院必不可少的组织部门。 学习部不仅会策划，还会演讲辩论。爱好头脑风暴的你快快加入。 晨读、泰山区英语角、辩论赛，四六级模拟考各类活动需要你的参与。学习部不仅是个服务同学并且提升自己的平台，更有你可以认识一帮小伙伴。他们和你一样，给人以温暖,像家人一样。  
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