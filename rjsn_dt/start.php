<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>答题</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="expires" content="0" />
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery.cookie.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="http://wxapp.njdaily.cn/fenxiang/"></script>
<script src="alert/jquery.alerts.js"></script>
<link href="alert/jquery.alerts3.css" rel="stylesheet" type="text/css"/>

<?php session_start();
	//echo $_SESSION['ID'];
	//if($_SESSION['ID']=="" || empty($_SESSION['ID'])){
			//echo '<script type="text/javascript" src="http://wxapp.njdaily.cn/xjz/js/err.js"></script>';
			//die;
		//}
				
			if(time() >1459007970){
				echo("活动已结束!");
				die;
			}
?>
<link href="images/css-3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:800px)" href="images/css-pc-3.css">
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="images/css-pc.css">
<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#section-index .index-rewards-link{color:#fff;display:block;width:100%;height:100%;}
.icon .img{ display:none;}
.logo{width:1px}
.wrap{background:url(images/bg.jpg) 0 0 no-repeat #e9e5e0;background-size:cover;background-size:100% 100%;}
.result-des p{ font-size:14px;}
.startbtn{ position:relative; bottom:20px} 
#section-result .result-des {}
</style>
<script type="text/javascript">
	$(function(){
	
		 function browserRedirect() {  
            var sUserAgent = navigator.userAgent.toLowerCase();  
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";  
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";  
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";  
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";  
            var bIsAndroid = sUserAgent.match(/android/i) == "android";  
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";  
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";  
            if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {  
                return true;
            } else {  
               return false;
            }
        }  
		if(browserRedirect()){
			var w = document.documentElement.clientWidth;
			$(".logo").height((((w/660)*945)-215)+"px")
		}else{
			$(".logo").height("600px")
		}
				
		$("#btn-start").click(function(){
			$(".wrap").css("background-image","none")
		})
		$(".btn-board").click(function(){
			$(".wrap").css("background-image","none")
		})
		
		$("#btn-home-submit").click(function(){
			$(".wrap").css("background-image","url(images/bg.jpg)")
		})
		
		$("#btn-board-home").click(function(){
			$(".wrap").css("background-image","url(images/bg.jpg)")
		})
		$("#btn-home").click(function(){
			$(".wrap").css("background-image","url(images/bg.jpg)")
		})
	})
</script>
</head>
<body class="f-ff1">
<div id="formError">
	<div class="msg"></div>
	<div class="close">X</div>
</div>
<div id="gameRules">
	<div class="rules">
		<h3>活动说明</h3>
		<ul>
			<li>1、活动时间：2016年4月28日—5月25日</li>
			<li>2、组委会每天选择答题正确率最高、速度最快的前10名选手，颁发“儒雅少年”之“国学知识小能手”荣誉证书。</li>
			<li>3、每天的前3名将获得价值200元的“课本上的马鞍山”亲子研学一日游体验（1名学生+1位家长）。4-10名选手随机抽取3名，送出价值100元的书券。</li>
			<li>备注：每周四官方微信公布当周的研学游获奖名单和100元书券获奖名单。</li>
		</ul>
	</div>
	<div class="close">X</div>
</div>
<div id="mask"></div>
<div class="wrap">
	<div class="header">&nbsp;</div>
	<div class="main">
		<div id="section-banner"></div>
		<!-- -------- 首页 -------- -->
		<div id="section-index">
			<div class="logo"></div>
			<div class="startbtn">
				<ul>
					<li id="btn-start"></li>
					<!--li class="btn-board">排行榜</li>
					<!--li><a href="rewards.php" class="index-rewards-link">获奖名单</a></li-->
				</ul>
			</div>
		</div>
		
		<!-- -------- 进度条 -------- -->
		<div id="section-info" style="display:none;">
			<div class="progress-bar"><div class="step"></div></div>
			<div class="progress-info f-cb">
				<div class="timer f-fl">0:00</div>
				<div class="q-index f-fr">1 / 20</div>
			</div>
		</div>
		
		<!-- -------- 答题页 -------- -->
		<div id="section-timu" style="display:none;">
			<h2></h2>
			<ul class="daan-btn f-cb"></ul>
		</div>
		
		<!-- -------- 答题结果 -------- -->
		<div id="section-result" style="display:none;">
			<div class="result-right" style="display:none;">
				<div class="icon icon-1">
					<div class="img"><img src="images/face/0-1.jpg"></div>
					<div class="text">哎哟，不错哦！~</div>
				</div>
				<div class="icon icon-2">
					<div class="img"><img src="images/face/0-2.jpg"></div>
					<div class="text">棒棒哒，这你都知道！</div>
				</div>
				<div class="icon icon-3">
					<div class="img"><img src="images/face/0-3.jpg"></div>
					<div class="text">懂的很多哟！</div>
				</div>
				<div class="icon icon-4">
					<div class="img"><img src="images/face/0-4.jpg"></div>
					<div class="text">再接再厉，继续保持！</div>
				</div>
				<div class="icon icon-5">
					<div class="img"><img src="images/face/0-5.jpg"></div>
					<div class="text">看来大奖就是你的了！</div>
				</div>
				<div class="icon icon-6">
					<div class="img gif"><img src="images/face/0-7.gif"></div>
					<div class="text">可以的嘛！</div>
				</div>
				<div class="icon icon-7">
					<div class="img gif"><img src="images/face/0-7.gif"></div>
					<div class="text">棒极了！</div>
				</div>
				<div class="icon icon-8">
					<div class="img gif"><img src="images/face/0-8.gif"></div>
					<div class="text">你这么聪明外星人造嘛？</div>
				</div>
				<div class="icon icon-9">
					<div class="img gif"><img src="images/face/0-9.gif"></div>
					<div class="text">再接再厉噢！</div>
				</div>
				<div class="icon icon-10">
					<div class="img gif"><img src="images/face/0-10.gif"></div>
					<div class="text">好样的，加油！</div>
				</div>
				<div class="icon icon-11">
					<div class="img gif"><img src="images/face/0-11.gif"></div>
					<div class="text">恭喜你答对了！<br/>今儿个老百姓啊，今儿个真高兴！</div>
				</div>
				<div class="icon icon-12">
					<div class="img gif"><img src="images/face/0-7.gif"></div>
					<div class="text">恭喜你答对了！<br/>我看好你哟！</div>
				</div>
				<div class="icon icon-13">
					<div class="img gif"><img src="images/face/0-7.gif"></div>
					<div class="text">恭喜你答对了！<br/>感觉整个人都精神了是吧？！</div>
				</div>
				<div class="icon icon-14">
					<div class="img gif"><img src="images/face/0-9.gif"></div>
					<div class="text">恭喜你答对了！<br/>你是我的小呀小苹果！</div>
				</div>
				<div class="icon icon-15">
					<div class="img gif"><img src="images/face/0-9.gif"></div>
					<div class="text">恭喜你答对了！<br/>你是我的小呀小苹果！</div>
				</div>
			</div>
			<div class="result-wrong" style="display:none;">
				<div class="icon icon-1">
					<div class="img"><img src="images/face/1-1.jpg"></div>
					<div class="text">哎呀，这都答错。。。</div>
				</div>
				<div class="icon icon-2">
					<div class="img"><img src="images/face/1-2.jpg"></div>
					<div class="text">亲，答案不是这样啦！~</div>
				</div>
				<div class="icon icon-3">
					<div class="img"><img src="images/face/1-3.jpg"></div>
					<div class="text">答错啦！</div>
				</div>
				<div class="icon icon-4">
					<div class="img"><img src="images/face/1-4.jpg"></div>
					<div class="text">完了完了，大奖看来危险了(┬＿┬)~</div>
				</div>
				<div class="icon icon-5">
					<div class="img"><img src="images/face/1-5.jpg"></div>
					<div class="text">矮油~介个都不知道呀！</div>
				</div>
				<div class="icon icon-6">
					<div class="img gif"><img src="images/face/1-6.gif"></div>
					<div class="text">诶，大奖又少了一丝希望。</div>
				</div>
				<div class="icon icon-7">
					<div class="img gif"><img src="images/face/1-7.gif"></div>
					<div class="text">答案可不是这个哟！</div>
				</div>
				<div class="icon icon-8">
					<div class="img gif"><img src="images/face/1-6.gif"></div>
					<div class="text">错啦，不要泄气噢！</div>
				</div>
				<div class="icon icon-9">
					<div class="img gif"><img src="images/face/1-9.gif"></div>
					<div class="text">咕~~(╯﹏╰)b 怎么错了！</div>
				</div>
				<div class="icon icon-10">
					<div class="img gif"><img src="images/face/1-10.gif"></div>
					<div class="text">很抱歉，答案错了噢~~</div>
				</div>
				<div class="icon icon-11">
					<div class="img gif"><img src="images/face/1-12.gif"></div>
					<div class="text">答错了啊！悲剧啊！<br/>长得再帅也得多学点知识嘛！~~~</div>
				</div>
				<div class="icon icon-12">
					<div class="img gif"><img src="images/face/1-12.gif"></div>
					<div class="text">答错了啊！悲剧啊！<br/>好像就差那么一点点奥~~~</div>
				</div>
				<div class="icon icon-13">
					<div class="img gif"><img src="images/face/1-12.gif"></div>
					<div class="text">答错了啊！悲剧啊！<br/>壮士！壮士你别想不开啊壮士！！~~~</div>
				</div>
				<div class="icon icon-14">
					<div class="img gif"><img src="images/face/1-13.gif"></div>
					<div class="text">答错了啊！悲剧啊！<br/>个败家玩意，喵了个咪的！~~~</div>
				</div>
				<div class="icon icon-15">
					<div class="img gif"><img src="images/face/1-13.gif"></div>
					<div class="text">答错了啊！悲剧啊！<br/>长得再帅也得多学点知识嘛！~~~</div>
				</div>
			</div>
			<div class="extra-des">附加题一题15分！<br />抓住机遇，实现华丽的逆转！</div>
			<div id="btn-next">下一题</div>
			<div id="btn-cancel">跳 过 (┬＿┬)</div>
<!-- -------- 
			<div class="result-des">
				<h3>延伸阅读</h3>
				<p></p>
			</div>
-------- -->
		</div>
		
		<!-- -------- 得分页 -------- -->
		<div id="section-score" style="display:none;">
		
			<div class="words" style="font-size:20px; font-weight:bold; padding:0 20px"></div>
			<div class="defen_info">
				<!--<div class="zftips" style="display:block;">击败了<b>0%</b>的选手</div>-->
				<div class="zongfen">总分：<span id="score-score">0</span></div>
				<div class="zongfen zongtime">时间：<span id="score-time">0:00</span></div>
			</div>
			
			<div class="defen_btn">
				<div class="userinfo-form">
					<div class="form">
						<h2>填写个人信息</h2>
						<div class="items">
							<div class="item" style="text-align:center">
								<label for="username">学生姓名：</label>
								<input class="input-text" type="text" name="username" id="username" value="" style="width:116px" />
							</div>
							<div class="item" style="text-align:center">
								<label for="area">学区：</label>
								<select style="border: 1px solid #ccc;padding: 3px 5px;width:164px"id="area">
								   <option>鼓楼区</option>
								   <option>玄武区</option>
								   <option>建邺区</option>
								   <option>六合区</option>
								   <option>秦淮区</option>
								   <option>高淳区</option>
								   <option>栖霞区</option>
								   <option>溧水区</option>
								   <option>江宁区</option>
								   <option>雨花区</option>
								   <option>浦口区</option>
								</select>
							</div>
							<div class="item" style="text-align:center">
								<label for="school">学校：</label>
								<input class="input-text" type="text" name="school" id="school" value=""/>
							</div>
							<div class="item" style="text-align:center">
								<label for="grade">班级：</label>
								<input class="input-text" type="text" name="grade" id="grade" value=""/>
							</div>
							<div class="item" style="text-align:center">
								<label for="phone">手机：</label>
								<input class="input-text" type="text" name="phone" id="phone" value=""/>
							</div>
							
						</div>
						<div class="score-links f-cb">
							<a href="javascript:;" class="score-link f-fl" id="btn-submit">提 交</a>
							<a href="javascript:;" class="score-link f-fr" id="btn-back">返 回</a>
						</div>
					</div>
				</div>
				<ul>
					<li id="btn-form">提交成绩</li>
					<li id="btn-home">返回首页</li>
				</ul>
			</div>
		</div>
		
		<!-- -------- 排行榜 -------- -->
		<div id="section-board" style="display:none;">
			<div class="board-content">
				<div class="label f-cb">
					<div class="label-title f-fl">本期排行榜</div>
					<div class="home f-fr">
						<a href="javascript:;" id="btn-board-home">回首页</a>
					</div>
				</div>
				<div class="board-table">
					<table></table>
					<!--div class="btn-zp-line"><a href="zp/" id="btn-zp">我 要 抽 奖</a></div-->
				</div>
				<div class="board-info">已有<span id="joined-count">0</span>人参与擂台。</div>
				
			</div>
		</div>
		<div id="section-submit" style="display:none;">
			<div class="info">恭喜您,提交成功！</div>
			<ul>
				<!--li class="btn-board">查看排行</li-->
				<li id="btn-home-submit">返回首页</li>
			</ul>
		</div>
		
		
		
	</div>
</div>
<div id="qrcode"></div>
<script type="text/javascript">
	$(function() {
	
	// 题目数据
	var SECTION		= 1,
		// 附加题
		QUESTION_EXTRA = {
		},
		QUESTIONS_ALL	= 
		[
			// 1
			{
				'title': '谁去世后，孔子悲呼“噫！天丧予！天丧予！”',
				'answers': ['颜征在', '孔鲤', '子路', '颜回'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“一门三父子，都是大文豪，诗赋传千古，峨眉共比高。”这首诗中的“三父子”指的是',
				'answers': ['曹操、曹丕、曹植', '苏洵、苏轼、苏辙', '班彪、班固、班超', '杜甫、杜牧、杜荀鹤'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '被赞誉为“诗中有画，画中有诗”的唐代诗人是？',
				'answers': ['曹植', '苏轼', '王维' ,'杜甫'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '“何处招魂，香草还生三户地；当年呵壁，湘流应识九歌心”这副对联说的是 ',
				'answers': ['贾谊', '诸葛亮', '屈原', '文天祥'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '太极拳讲究“以柔克刚、以静制动、以弱胜强”，这和哪位思想家的观点不谋而合？',
				'answers': ['老子', '孟子', '荀子','孔子'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//6
		 	{
				'title': '孟子说：“君子有三乐”，下列哪项不在其“三乐”之列?',
				'answers': ['父母俱存，兄弟无故', '仰不愧于天，俯不怍于人', '乡里无不称其善也','得天下英才而教育之'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '下列哪一句诗描写的场景最适合采用水墨画来表现？',
				'answers': ['落霞与孤鹜齐飞，秋水共长天一色', '返景入深林，复照青苔上', '孤舟蓑笠翁，独钓寒江雪','接天莲叶无穷碧，映日荷花别样红'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '假如你的一首五绝诗被杂志社采用，按照正文部分每字5元来计算，你应得多少稿费',
				'answers': ['50元', '100元', '200元','400元'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '孔子提倡的中庸之道的理论基础是：',
				'answers': ['阴阳五行', '天人合一 ', '道法自然','顺其自然'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '古人创作讲究精益求精，唐代诗人贾岛就曾有过辛苦的创作经历，他“二句三年得，一吟双泪流”的两句诗是：',
				'answers': ['“独行潭底影，数息树边身”', '“鸟宿池边树，僧敲月下门”', '“不见复关，泣涕涟涟”','“昔我往矣，杨柳依依”'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//11
					 {
				'title': '下面不是出自《论语》的成语是哪一个？',
				'answers': ['朽木粪土', '杯水车薪', '祸起萧墙','一匡天下'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '古人用“父母教，须敬听；父母责，须顺承”来劝谕人们要尊敬父母，这句话出自：',
				'answers': ['《弟子规》', '《三字经》', '《千字文》','《论语》'],
				'correct':0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“月上柳梢头，人约黄昏后”描写的是哪个传统节日？',
				'answers': ['中秋节', '元宵节', '端午节', '七夕节'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '孔子为什么“三月不知肉滋味”？',
				'answers': ['读到一本好书', '听到一段好乐曲', '看到一篇好书法' ,'看一场好戏'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '与《木兰诗》合称“乐府双璧”的诗歌是 ',
				'answers': ['《陌上桑》', '《长歌行》', '《孔雀东南飞》','《子夜歌》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//16
			 {
				'title': '如果你想到图书馆借阅寓言性质的书，在下列书籍中应优先选择哪一本？',
				'answers': ['《史记》', '《论语》', '《庄子》', '《老子》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“冬则温，夏则清。晨则省，昏则定。”——《弟子规》这句话是说',
				'answers': ['要坚持锻炼身体', '要注意天气的变化。', '子女要孝敬父母。', '要加紧时间学习。'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“词苑千载，群芳竞秀，盛开一枝女儿花”说的是哪位历史上的哪位才女？  ',
				'answers': ['朱淑真', '秦良玉', '李清照', '蔡琰'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '“老吾老以及人之老”是中华民族的传统美德，这句话是谁最早提出的？ ',
				'answers': ['孔子', '孟子', '老子', '韩非子'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '苏轼在《念奴娇赤壁怀古》中提到了“羽扇纶巾，谈笑间，樯橹灰飞烟灭”，“羽扇纶巾”形容的是下面哪位历史人物？',
				'answers': ['诸葛亮', '周瑜', '曹操', '关羽'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//21
			 {
				'title': '“名不正则言不顺”是哪家的思想？',
				'answers': ['儒家', '道家', '法家', '佛家'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“会当凌绝顶，一览众山小”是杜甫的名句，诗人登上了哪座山发出了这样的感慨？',
				'answers': ['黄山', '泰山', '华山', '衡山'],
				'correct':1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '民间的端午节，相传是为了纪念哪一个人物？',
				'answers': ['孔子', '司马迁', '屈原', '汉武帝'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '下面哪句诗的作者离开家的时间更长？ ',
				'answers': ['人归落雁后，思发在花前', '儿童相见不相识，笑问客从何处来', '人生得意须尽欢，莫使金樽空对月', '曾经沧海难为水，除却巫山不是云'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“近朱者赤，近墨者黑”所蕴含的道理和下列哪句话最相似？',
				'answers': ['青出于蓝，而胜于蓝', '蓬生麻中，不扶而直', '公生明，偏生暗', '氓之蚩蚩，抱布贸丝'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//26			
			{
				'title': '“穷则独善其身，达则兼济天下” 历来是中国文人的理想，这句话出自',
				'answers': ['《论语》', '《庄子》', '《孟子》', '《大学》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '《红楼梦》是我国古代著名的长篇小说之一，它的别名是',
				'answers': ['《金陵记》', '《石头记》', '《西厢记》', '《琵琶记》'],
				'correct':1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“夕阳无限好，只是近黄昏”是谁的诗句？',
				'answers': ['李商隐', '骆宾王', '李白', '杨炯'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '《百家姓》共记录多少个姓氏？',
				'answers': ['404', '504', '604', '524'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '请用一个字揭示中国传统道德概念的核心',
				'answers': ['信', '儒', '义', '仁'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			//31
			{
				'title': '中国历史上首部完整的哲学著作是什么？',
				'answers': ['《论语》', '《孟子》', '《道德经》', '《庄子》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '《道德经》的作者是谁？',
				'answers': ['老子', '孔子', '庄子', '孟子'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“爆竹声中一岁除，春风送暖入屠苏”，这里的“屠苏”指的是：',
				'answers': ['苏州', '房屋', '酒', '庄稼'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '“床前明月光”是李白的千古名句，其中 “床”指的是什么？',
				'answers': ['窗户', '卧具', '井上的围栏', '桌子'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': ' “月上柳梢头，人约黄昏后”描写的是哪个传统节日？',
				'answers': ['中秋节', '元宵节', '端午节', '七夕节'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//36
			{
				'title': '下列哪个成语典故与项羽有关？',
				'answers': ['隔岸观火', '暗度陈仓', '背水一战', '破釜沉舟'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '《百家姓》中没有下面哪个姓？',
				'answers': ['乌', '巫', '肖', '萧'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': ' 古人的婚礼在什么时间举行？',
				'answers': ['早上', '中午', '傍晚'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '京剧《贵妃醉酒》是根据哪部古代戏曲改编而成的？',
				'answers': ['《桃花扇》', '《长生殿》', '《牡丹亭》', '《南柯梦》'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '下列哪个不是北京的别称？',
				'answers': ['大都', '中都', '上都', '南京'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//41
			,
			{
				'title': '“桃花潭水深千尺，不及汪伦送我情”诗中的“我”指的是谁？',
				'answers': ['杜甫', '李白', '杜牧', '苏轼'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '下列选项中与“亡羊补牢”意思最接近的是：',
				'answers': ['人无远虑，必有近忧', '祸兮，福之所倚，福兮，祝之所伏', '往者不可谏，来者犹可追', '失之东隅，收之桑榆'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '下列哪项不是端午节的习俗？',
				'answers': ['挂香包', '插艾蒿', '登高采菊', '喝雄黄酒'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//44
			{
				'title': '“少壮不努力，老大徒伤悲”出自：',
				'answers': ['《长歌行》', '《短歌行》'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '吃年糕的习俗与下列哪位历史人物有关？',
				'answers': ['伍子胥', '范蠡', '屈原'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//46
	
			{
				'title': '“醉里挑灯看剑，梦回吹角连营”出自谁的作品？',
				'answers': ['陆游', '岳飞', '辛弃疾', '李清照'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '下列植物中，不应当出现在《岁寒三友图》中的是：',
				'answers': ['菊 ', '梅', '竹', '松'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“楚河”和“汉界”在今天的哪个省？',
				'answers': ['湖北', '河南', '河北', '湖南'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '中国历史上被誉为“药王“的是：',
				'answers': ['扁鹊', '华佗', '孙思邈', '李时珍'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '《三字经》开篇前两句是什么？',
				'answers': ['养不教，父之过', '性相近，习相远', '人之初，性本善'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//51
			,
				{
				'title': '文学史上被称作“小李杜”的是杜牧和谁?',
				'answers': ['李贺', '李商隐'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“大禹治水”的故事家喻户晓，大禹治理的是哪个流域的洪水?',
				'answers': ['长江流域', '黄河流域'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '唐代诗人中别称为“诗鬼”的诗人是',
				'answers': ['李白', '李贺', '白居易', '杜甫'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '“生旦净末丑”是京剧的行当，其中“净”是？',
				'answers': ['男角', '女角', '儿童', '男女均可'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '古汉语中，关于“阴”、“阳”的说法正确的是？',
				'answers': ['山南为阳，水北为阳', '山南为阴，水北为阳', '山南为阳，水北为阴', '山南为阴，水北为阴'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//56
			{
				'title': '按我国传统风俗，在农历哪一天喝“腊八粥”。',
				'answers': ['二月初八', '十二月初八', '正月初八', '三月初八'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '李白笔下的“飞流直下三千尺，疑是银河落九天”指的是哪个风景区。',
				'answers': ['庐山', '华山', '泰山', '峨眉山'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '古人对“六十岁”年龄的人的称呼是',
				'answers': ['而立', '不惑', '知天命', '花甲'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '在“夸父逐日”中，“夸父”是怎样追逐太阳的？',
				'answers': ['驾车', '骑马', '奔跑', '飞行'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '古代六艺，“礼、乐、射、御、书、数”中的“御”是指？',
				'answers': ['下棋', '种花', '武术', '驾车'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//61
			{
				'title': '中国古代创造了望、闻、问、切四诊法的名医是？',
				'answers': ['华佗', '扁鹊', '张仲景', '李时珍'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '《咏鹅》作者是谁？',
				'answers': ['骆宾王', '李白', '贺知章', '杜甫'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//63开始
			,		
			{
				'title': '春节是我国最重要的一个节日，下列习俗不属于春节习俗的是',
				'answers': ['贴春联', '燃放爆竹', '悬艾蒿', '包饺子'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '被称为"画圣"的古代画家是:',
				'answers': ['吴道子', '顾恺之', '韩干', '张择端'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '天下第一书"《兰亭集序》"是哪一位古代书法家的杰作?',
				'answers': ['张旭', '王献之', '王羲之', '张芝'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//66
			{
				'title': '“山重水复疑无路,柳暗花明又一村"是谁的诗句?',
				'answers': ['李白', '辛弃疾', '苏轼', '陆游'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '"破釜沉舟"这个成语出于哪次战争?',
				'answers': ['赤壁之战', '长平之战', '巨鹿之战', '官渡之战'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '我国第一部纪传体通史是:',
				'answers': ['《汉书》', '《后汉书》', '《史记》', '《春秋》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '我国最早的一部医学理论著作是:',
				'answers': ['《本草纲目》', '《黄帝内经》', '《千金方》', '《伤寒杂病论》'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '人们常说：“无事不登三宝殿”你知道“三宝”是指哪三宝？',
				'answers': ['纸、砚、笔', '书、剑、琴', '佛、法、僧', '金、银、玉'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//71
			{
				'title': '世界上最大的古代士石建筑工程是哪一个？',
				'answers': ['中国的万里长城', '埃及的金字塔', '古罗马的斗兽场', '中的的故宫'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“豆寇年华”是指几岁？',
				'answers': ['13岁', '14岁', '15岁', '16岁'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//73开始
			,		
			{
				'title': '唐代诗人有称“诗圣”的杜甫“诗仙”的李白等，你可知道被人颂称“诗魔”的是谁？',
				'answers': ['白居易', '王维', '刘禹锡', '李商隐'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“天生我材必有用，千金散尽还复来”出自哪首诗？',
				'answers': ['《饮中八仙歌》', '《将进酒》', '《致酒行》'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“文章本无成，妙手偶得之”出自谁之口？',
				'answers': ['杜甫', '李白', '陶渊明'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//76
			{
				'title': '被称为"画圣"的古代画家是',
				'answers': ['吴道子', '顾恺之', '韩干', '张择端'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '著名古迹"秦始皇兵马俑"位于我国哪个省份:',
				'answers': ['湖北', '湖南', '河南', '陕西'],
				'correct': 3,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '科举制在中国影响深远，乡试录取者称为“举人”，会试录取者称为“贡生”，那么殿试录取者称为:',
				'answers': ['大元', '解元', '进士', '榜眼'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“西出阳关无故人”中的“阳关”位于现在哪个省:',
				'answers': ['新疆', '甘肃', '宁夏', '陕西'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//80		
			{
				'title': '我国第一所创办国学研究机构的大学是',
				'answers': ['北京大学', '清华大学', '厦门大学', '东南大学'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//81
			{
				'title': '“文章合为时而著，歌诗合为事而作”是由谁提出的',
				'answers': ['白居易', '柳宗元', '周敦颐', '刘禹锡'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '下面哪个选项是”四书”的构成',
				'answers': ['《大学》、《中庸》、《论语》、《尔雅》', '《大学》、《中庸》、《论语》、《孟子》', '《大学》、《孝经》、《论语》、《尔雅》', '《大学》、《孝经》、《论语》、《孟子》'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//83开始
			,		
			{
				'title': '现存《论语》多少篇',
				'answers': ['10 ', '20 ', '30 ', '40'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '古人用“父母教，须敬听；父母责，须顺承”来劝谕人们要尊敬父母，这句话出自：',
				'answers': ['《弟子规》', '《三字经》', '《千字文》', '《论语》'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“春眠不觉晓，处处闻啼鸟。夜来风雨声，花落知多少？”这首诗的名字叫什么？',
				'answers': ['《静夜思》', '《古朗月行》', '《春晓》', '《凉州词》'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,

			{
				'title': '“弟子规，圣人训，首孝悌，次谨信”的后面一句是什么？',
				'answers': ['泛爱众', '而亲仁', '有余力', '则学文'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '鲁迅先生称（____）为“史家之绝唱，无韵之离骚”',
				'answers': ['史记', '汉书', '三国志', '资治通鉴'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '下列各诗句不是陆游所作的是:',
				'answers': ['塞上长城空自许，镜中衰鬓已先斑', '山重水复疑无路，柳暗花明又一村', '折腰曾愧五斗米，负郭元无三顷田', '京华结交尽奇士，意气相期共生死'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '孟浩然是哪个朝代的诗人？',
				'answers': ['宋朝', '元朝', '唐朝', '清朝'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//90		
			{
				'title': '下面哪个成语典故和棋文化有关？',
				'answers': ['势如破竹', '出奇制胜', '专心致志'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//91
			{
				'title': '现在我们常用“阳春白雪”和“下里巴人”指代高雅和通俗的文艺作品，请问这两个成语最初指的是什么？',
				'answers': ['文章', '画作', '乐曲'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“水”字属于下列哪种汉字构成方式？',
				'answers': ['象形字', '表意字'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//93开始
			,		
			{
				'title': '“讳疾忌医”典故中的君王是',
				'answers': ['齐桓公 ', '蔡桓公 '],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“文章千古事，得失寸心知”是谁的名句？',
				'answers': ['李白', '杜甫', '陶渊明', '李清照'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“金戈铁马，气吞万里如虎“是谁的词句？',
				'answers': ['岳飞', '辛弃疾', '王之涣', '贺知章'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			//96
			{
				'title': '《本草纲目》的作者是',
				'answers': ['孙思邈', '李时珍', '韩非子'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '著名的《清明上河图》是作于',
				'answers': ['清代', '宋代', '隋唐'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			//98开始
			,		
			{
				'title': '我国古代的四大发明是',
				'answers': ['指南针、火药、天文仪、造纸术 ', '指南针、活字印刷术、织布、造纸术 ', ' 火药、指南针、活字印刷术、造纸术 '],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '下列不属于被国内外人士誉为“中国三大国粹”的是',
				'answers': ['川剧', '国画', '中医'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '被称为“文房四宝”的是',
				'answers': ['笔墨纸砚', '棋琴画书', '诗画茶琴', '琴棋茶书'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			QUESTIONS = []
		],
		
		// 所有版块
		// 首页版块
		SECTION_INDEX	= $('#section-index'),
		// 信息版块
		SECTION_INFO	= $('#section-info'),
		// 题目版块
		SECTION_TIMU	= $('#section-timu'),
		// 结果版块
		SECTION_RESULT	= $('#section-result'),
		// 得分版块
		SECTION_SCORE	= $('#section-score'),
		// 排行版块
		SECTION_BOARD	= $('#section-board'),
		// 提交版块
		SECTION_SUBMIT	= $('#section-submit'),
		
		ICON_WRONG		= SECTION_RESULT.find('.result-wrong'),
		ICON_RIGHT		= SECTION_RESULT.find('.result-right'),
		
		LABEL_TIMER		= $('.progress-info .timer'),
		LABEL_QINDEX	= $('.progress-info .q-index'),
		LABEL_STEP		= $('.progress-bar .step'),
		
		SCORE_SCORE		= $('#score-score'),
		SCORE_TIME		= $('#score-time'),
		// 开始按钮
		BTN_START		= $('#btn-start'),
		// 下一题按钮
		BTN_NEXT		= $('#btn-next'),
		BTN_CANCEL		= $('#btn-cancel'),
		BTN_HOME		= $('#btn-home'),
		BTN_FORM		= $('#btn-form'),
		BTN_SUBMIT		= $('#btn-submit'),
		BTN_BACK		= $('#btn-back'),
		
		WORDS			= [
			'强悍！博古通今！快发朋友圈炫耀吧！',
			'乖乖，知道的真多哦！牛！快发朋友圈炫耀吧！',
			'哟，知道的算不少了，不错哦！快发朋友圈炫耀吧!',
			'哎，知道的不多呀，重考一次吧！',
			'哎，知道的不多呀，重考一次吧！'
		]
	;
	
	var
		// 当前答题手机号
		curPhone		= false,
		curPhone		= '',
		// 当前题号，从0开始
		curTimu			= 0,
		// 当前题目的正确答案，0-A,1-B,2-C,3-D
		curCorrect		= 0,
		extraCorrect	= false,
		remixCount		= 10,
		// 题目总数
		totalTimus		= remixCount ,//+ QUESTIONS_3.length,
		// 目前得分
		score			= 0,
		// 当前连续答对数
		rightCount		= 0,
		// 当前连续答错数
		wrongCount		= 0,
		// 当前题目数据
		question		= {},
		// 用户答题字符串
		userAnswers		= '',
		// 花费时间，秒数
		secondsUsed		= 0,
		// 花费时间字符串形式
		secondsUsedStr	= '',
		// 计时器
		timer			= false
	;
	
	var remixIndexes	= [],
		_QUESTIONS		= [];
	
	// 随机题库及答案顺序
	var questionsTempIndexes 	= [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99],
		questionsTemp			= [],
		questionsTempIndex		= 0;
	
	function getArrayItems(arr, num) {
		var temp_array = new Array();
		for (var index in arr) {
			temp_array.push(arr[index]);
		}
		var return_array = new Array();
		for (var i = 0; i < num; i++) {
			if(temp_array.length > 0) {
				var arrIndex = Math.floor(Math.random() * temp_array.length);
				return_array[i] = temp_array[arrIndex];
				temp_array.splice(arrIndex, 1);
			} else {
				break;
			}
		}
		return return_array;
	}
	
	function remixQuestions() {
		// 从QUESTIONS中抽取7题作为题目
		questionsTempIndexes = getArrayItems(questionsTempIndexes, remixCount);
		for(var _i = 0; _i < remixCount; _i++) {
			questionsTemp[_i] = QUESTIONS_ALL[questionsTempIndexes[_i]];
		}
		QUESTIONS = questionsTemp;
		
		//console.log(QUESTIONS_ALL);
		
		
		remixIndexes	= [];
		_QUESTIONS		= [];
		var _index = 0, _answers = [], _correct = 0, _correctS = '', _question = {};
		for(i = 0; i < remixCount; i++) {
			// 生成随机数，决定顺序
			_index = _getRandomIndex();
			//_index = i;
			//alert(_correct);
			_answers 	= QUESTIONS[_index].answers;
			_correct 	= QUESTIONS[_index].correct;
			_correctS	= QUESTIONS[_index].answers[_correct];
			//console.log(_correct);
			_question = QUESTIONS[_index];
			_answers = _answers.sort(function(a, b) {
				return Math.random() > 0.5 ? -1 : 1;
			});
			for(var j = 0; j < _answers.length; j++) {
			//	console.log(_answers[j]);
				//console.log(_correctS);
				if(_answers[j] == _correctS) {
					_correct = j;
					break;
				}
			}
			//console.log(_correct);
			_question.answers = _answers;
			_question.correct = _correct;
			_QUESTIONS[_QUESTIONS.length] = _question;
		}
	//	QUESTIONS = QUESTIONS_3.concat(_QUESTIONS);
		//QUESTIONS = QUESTIONS.concat(QUESTION_EXTRA); 不把附加题加载到题库
	}
	function _getRandomIndex() {
		var index	= parseInt(remixCount * Math.random()),
			exists	= false;
		for(var i = 0; i < remixIndexes.length; i++) {
			if(index == remixIndexes[i]) {
				exists = true;
				break;
			}
		}
		if(exists) return _getRandomIndex();
		else {
			remixIndexes[remixIndexes.length] = index;
			return index;
		}
	}
	
	//formError('该手机已参与过本期问答！');
	$('.btn-board').click(function() {
		curPhone = $.cookie('phone');
		loadBoard(curPhone);
		SECTION_INDEX.hide();
		SECTION_SUBMIT.hide();
		SECTION_BOARD.show();
	});
	// 加载排行榜
	function loadBoard(phone) {
		$.getJSON('result.php?jsoncallback=?',
			{'action': 'board', 'phone': phone, 'name': $.cookie('username'), 'random': Math.random()},
			function(json) {
				// 获得参与人数
				var joinedCount = json.joinedCount,
					boardArr	= json.board;
				$('#joined-count').text(joinedCount);
				$('.board-table table').html('<tr><th>排名</th><th>姓名</th><th>得分</th><th>时间</th></tr>');
				for(var i = 0; i < boardArr.length; i++) {
					if(boardArr[i]['my'] == '1' || boardArr[i]['my'] == 1) {
						$(
							'<tr class="my">' +
							'	<td>' + boardArr[i]['rownum'] + '</td>' +
							'	<td>' + boardArr[i]['username'] + '</td>' +
							'	<td>' + boardArr[i]['score'] + '</td>' +
							'	<td>' + getSecondsUsedStr(boardArr[i]['seconds']) + '</td>' +
							'</tr>'
						).appendTo($('.board-table table'));
					} else {
						$(
							'<tr>' +
							'	<td>' + boardArr[i]['rownum'] + '</td>' +
							'	<td>' + boardArr[i]['username'] + '</td>' +
							'	<td>' + boardArr[i]['score'] + '</td>' +
							'	<td>' + getSecondsUsedStr(boardArr[i]['seconds']) + '</td>' +
							'</tr>'
						).appendTo($('.board-table table'));
					}
				}
				if(phone) {
					$('.btn-zp-line').show();
				} else {
					$('.btn-zp-line').hide();
				}
			}
		);
	}
	// 进入答题
	BTN_START.click(function() {
		var timestamp1 = Date.parse(new Date());
			if(timestamp1>1459007970000){
				formError("活动已结束!");
				return false;
			}
		remixQuestions();
		curTimu = 0;
		initTimu();
		
		SECTION_INDEX.hide();
		SECTION_INFO.show();
		SECTION_TIMU.show();
		gameRules();
	});
	// 加载题目
	function initTimu() {
		question 		= QUESTIONS[curTimu];
		
		//console.log(question);
		var title		= question.title,
			answers		= question.answers,
			correct		= question.correct,
			des			= question.des,
			size		= question.size
		;
		
		//console.log(title);
		SECTION_TIMU.find('h2').html(title);
		SECTION_TIMU.find('.daan-btn').html('');
		for(var i = 0; i < answers.length; i++) {
			$('<li data-index="' + i + '" style="font-size:' + size[i] + 'px;">' + answers[i] + '</li>').appendTo(SECTION_TIMU.find('.daan-btn'));
		}
		SECTION_RESULT.find('.result-des p').html(des);
		if(curTimu < totalTimus) {
			LABEL_QINDEX.text((curTimu + 1) + ' / ' + totalTimus);
		}
		SECTION_RESULT.find('.extra-des').hide();
		// 常规题答完，进入附加题
		// 这里去掉附加题 
	//	if(curTimu == totalTimus - 1) {
		//if(curTimu == totalTimus + 1) {
		//	BTN_NEXT.css('backgroundColor', '#ff6d6d');
		//	BTN_NEXT.text('挑战附加题');
		//	BTN_CANCEL.show();
	//	BTN_NEXT.text('答完了，查看得分');
		//	SECTION_RESULT.find('.extra-des').show();
	//	}
		// 进入得分页面
	//	else 
	if(curTimu == totalTimus) {
			//BTN_NEXT.css('backgroundColor', '#ff6d6d');
			BTN_NEXT.text('答完了，查看得分');
		//	SECTION_RESULT.find('.extra-des').hide();
		}
	}
	BTN_CANCEL.click(function() {
		stopTimer();
		var _score = parseInt(score / totalTimus * 100) + (extraCorrect ? 15 : 0);
		SCORE_SCORE.text(_score);
		SCORE_TIME.text(getSecondsUsedStr(secondsUsed));
		gettime = secondsUsed;
		// 显示成绩祝语
		var _words = '';
		if(_score >= 90) _words = WORDS[0];
		else if(_score >= 65) _words = WORDS[1];
		else if(_score >= 35) _words = WORDS[2];
		else if(_score >= 5) _words = WORDS[3];
		else _words = WORDS[4];
		SECTION_SCORE.find('.words').text(_words);
		SECTION_RESULT.hide();
		SECTION_SCORE.show();
	});
	// 点击每题的选项后，加载答题结果
	SECTION_TIMU.delegate('.daan-btn li', 'click', function() {
		var _answer		= $(this).data('index');
		if(curTimu == 0) {
			userAnswers		+= _answer;
		} else {
			userAnswers		+= ',' + _answer;
		}
		question		= QUESTIONS[curTimu];
		var answers		= question.answers,
			correct		= question.correct,
			correctVal	= answers[correct]
		;
		var btn_clicked = $(this),
			btn_label = btn_clicked.text()
		;
		SECTION_TIMU.hide();
		// 回答正确
		if(btn_label == correctVal) {
			if(wrongCount != 0) {
				wrongCount = rightCount = 0;
			}
			rightCount++;
		//	if(rightCount >= 5) rightCount = 5;
			ICON_RIGHT.find('.icon').hide();
			// 附加题的答题结果
			if(curTimu >= totalTimus) {
				//ICON_RIGHT.find('.icon.icon-' + parseInt(6 + 10 * Math.random())).show();
				ICON_RIGHT.find('.icon.icon-' + 12).show();
				//score++;
				extraCorrect = true;
			} else {
				ICON_RIGHT.find('.icon.icon-' + rightCount).show();
				score++;
			}
			ICON_WRONG.hide();
			ICON_RIGHT.show();
		// 回答错误
		} else {
			if(rightCount != 0) {
				wrongCount = rightCount = 0;
			}
			wrongCount++;
		//	if(wrongCount >= 5) wrongCount = 5;
			ICON_WRONG.find('.icon').hide();
			// 附加题的答题结果
			if(curTimu >= totalTimus) {
				//ICON_WRONG.find('.icon.icon-' + parseInt(6 + 10 * Math.random())).show();
				ICON_WRONG.find('.icon.icon-' + 12).show();
			} else {
				ICON_WRONG.find('.icon.icon-' + wrongCount).show();
			}
			ICON_WRONG.show();
			ICON_RIGHT.hide();
		}
		LABEL_STEP.css('width', ((curTimu + 1) / totalTimus * 100) + '%');
		if(curTimu == totalTimus) {
			BTN_CANCEL.hide();
		}
		SECTION_RESULT.show();
		if(curTimu == totalTimus) {
			stopTimer();
		}
	});
	// 进入下一题，并判断是否最后一题
	BTN_NEXT.click(function() {
		// 最后一题，点击后显示附加题
		//去掉附加题
		if(curTimu >= totalTimus - 1 ) {
			var _score = parseInt(score / totalTimus * 100) + (extraCorrect ? 15 : 0);
			SCORE_SCORE.text(_score);
			SCORE_TIME.text(getSecondsUsedStr(secondsUsed));
					gettime = secondsUsed;
			// 显示成绩祝语
			var _words = '';
			if(_score >= 79) _words = WORDS[0];
			else if(_score >= 59) _words = WORDS[1];
			else if(_score >= 39) _words = WORDS[2];
			else if(_score >= 0) _words = WORDS[3];
			else _words = WORDS[4];
			SECTION_SCORE.find('.words').text(_words);
			SECTION_RESULT.hide();
			SECTION_SCORE.show();
		// 未到最后一题，点击后加载下一题
		} else {
			curTimu++;
			initTimu();
			
			SECTION_RESULT.hide();
			SECTION_TIMU.show();
		}
	});
	
	// 返回首页
	BTN_HOME.click(function() {
		curTimu			= 0;
		score			= 0;
		secondsUsed		= 0;
		extraCorrect	= false;
		wrongCount 		= rightCount = 0;
		remixQuestions();
		window.location.href='start.php'
		//initTimu();
		
		BTN_NEXT.css('backgroundColor', '#e09447');
		LABEL_STEP.css('width', '0%');
		LABEL_TIMER.text('0:00');
		BTN_NEXT.text('下一题');
		BTN_CANCEL.hide();
		SECTION_INFO.hide();
		SECTION_SCORE.hide();
		SECTION_INDEX.show();
	});
	// 返回首页
	$('#btn-board-home').click(function() {
		curTimu			= 0;
		score			= 0;
		secondsUsed		= 0;
		extraCorrect	= false;
		wrongCount 		= rightCount = 0;
		remixQuestions();
		//initTimu();
		window.location.href='start.php'
		BTN_NEXT.css('backgroundColor', '#e09447');
		LABEL_STEP.css('width', '0%');
		LABEL_TIMER.text('0:00');
		BTN_NEXT.text('下一题');
		BTN_CANCEL.hide();
		SECTION_BOARD.hide();
		SECTION_INDEX.show();
	});
	// 返回首页
	$('#btn-home-submit').click(function() {
		curTimu			= 0;
		score			= 0;
		secondsUsed		= 0;
		extraCorrect	= false;
		wrongCount		= rightCount = 0;
		//initTimu();
		window.location.href='start.php'
		BTN_NEXT.css('backgroundColor', '#e09447');
		LABEL_STEP.css('width', '0%');
		LABEL_TIMER.text('0:00');
		BTN_NEXT.text('下一题');
		BTN_CANCEL.hide();
		SECTION_SUBMIT.hide();
		SECTION_INDEX.show();
	});
	// 显示与隐藏提交成绩表单
	BTN_FORM.click(function() {
		$('#section-score .userinfo-form').animate({'marginTop': '0px'}, 600);
	});
	BTN_BACK.click(function() {
		$('#section-score .userinfo-form').animate({'marginTop': '-400px'}, 600);
	});
	// 提交成绩表单
	$('#btn-submit').click(function() {
		var username	= $.trim($('#username').val());
			phone		= $.trim($('#phone').val());
			grade		= $.trim($('#grade').val());
			area = $("#area").find("option:selected").val();
			school		= $.trim($('#school').val());
			wxid	= "<?php echo $_SESSION['ID']?>";
			//alert(gettime);
		if(username == '') {
			formError('请填写您的姓名！');
			return false;
		} else if(!phone.match(/^1\d{10}$/)) {
			formError('请填写有效的手机号！');
			return false;
		} else if(school == "") {
			formError('请填写学校！');
			return false;
		}else if(grade == "") {
			formError('请填写班级！');
			return false;
		}else {
			curPhone = phone;
			$.cookie('phone', curPhone, { expires: 365, path: '/' });
			$.cookie('username', username, { expires: 365, path: '/' });
			
			$.ajax({
				url:"sign.php",
				dataType:'jsonp',
				//processData: false, 
				type:'get',
				data:{
					'username'	: username,
					'phone'		: phone,
					'grade'		: grade,
					'area'     	:area,
					'school'     	:school,
					'answers'	: userAnswers,
					'wxid'		:wxid,
					'score'		: parseInt(score / totalTimus * 100) + (extraCorrect ? 20 : 0),
					// 'score'		: score / totalTimus * 100,
					'seconds'	: gettime,
					'section'	: 1,
					'random'	: Math.random()
				}, 
				dataType: 'text',
			  	success: function(text) {
					text = $.trim(text) + '';
					if(text == '1' || text == 1) {
						signSuccess();
					} else if(text == '2' || text == 2) {
						formError('提交参数不正确！');
					} else if(text == '3' || text == 3) {
						formError('您的提交地址有误！');
					} else if(text == '4' || text == 4) {
						formError('你已参与过本期擂台！');
					} else if(text == '7' || text == 7) {
						formError('该手机已参与过本期擂台！');
					}
				},
			 	error:function() {
				   ajaxError('Ajax出错！');
				}
			});
			
			
			/*
			$.ajax({
				url: 'sign.php',
				data: {
					'username'	: username,
					'phone'		: phone,
					'answers'	: userAnswers,
					'score'		: parseInt(score / totalTimus * 100) + (extraCorrect ? 15 : 0),
					// 'score'		: score / totalTimus * 100,
					'seconds'	: secondsUsed,
					'section'	: SECTION,
					'random'	: Math.random()
				},
				dataType: 'jsonp',
				jsonp: "callbackparam",
				jsonpCallback:"success_jsonpCallback",
				success: function success_jsonpCallback(json) {
					text = json[0];
					alert(json)
					if(text == '1' || text == 1) {
						signSuccess();
					} else if(text == '2' || text == 2) {
						formError('提交参数不正确！');
					} else if(text == '3' || text == 3) {
						formError('您的提交地址有误！');
					} else if(text == '4' || text == 4) {
						formError('您刚刚提交过了！');
					} else if(text == '7' || text == 7) {
						formError('该手机已参与过本期擂台！');
					}
				},
				error: function() {
					ajaxError('Ajax出错！');
				}
			});
			*/
		}
	});
	function signSuccess() {
		SECTION_INFO.hide();
		SECTION_SCORE.hide();
		SECTION_SUBMIT.show();
	}
	function ajaxError(error) {
		// alert(error);
	}
	function formError(error) {
		$('#formError .msg').text(error);
		$('#mask').empty().show();
		$('#formError').show().animate({'top': '0'} ,800);
	}
	function gameRules() {
		//$('#gameRules .msg').text(error);
		$('#mask').empty().show();
		$('#gameRules').show().animate({'top': '0'} ,800);
	}
	$('#formError .close').click(function() {
		$('#formError').animate({'top': '-100%'} ,800, function() {
			$('#mask').empty().hide();
			$('#formError').hide();
		});
	});
	$('#gameRules .close').click(function() {
		$('#gameRules').animate({'top': '-100%'} ,800, function() {
			$('#mask').empty().hide();
			$('#gameRules').hide();
			if(!timer) {
				startTimer();
			}
		});
	});
	
	$('#mask').click(function() {
		$('#formError .close').trigger('click');
		$('#gameRules .close').trigger('click');
	});
		// 开始计时
	/*
	function startTimer() {
		secondsUsed	= 0;
		timer		= false;
		timer		= window.setInterval(function() {
			secondsUsed++;
			secondsUsedStr = getSecondsUsedStr(secondsUsed);
			LABEL_TIMER.text(secondsUsedStr);
		}, 10);
	}
	// 停止计时
	function stopTimer() {
		timer = window.clearInterval(timer);
	}
	function getSecondsUsedStr(secondsUsed) {
		var seconds = secondsUsed % 60,
			minutes = (secondsUsed - seconds) / 60;
		seconds = seconds < 10 ? '0' + seconds : seconds;
		return minutes + ':' + seconds;
	}
	
*/
var interval, reg = /^\d$/,
            sleep = 10,
            secondsUsed = 0;
	function startTimer() {
		interval = setInterval(function() {
                        secondsUsed++;

                       secondsUsedStr =getSecondsUsedStr(secondsUsed);
				LABEL_TIMER.text(secondsUsedStr);
                    }, sleep);
	}
	function stopTimer() {
		interval = window.clearInterval(interval);
		interval = null;
	}
	function getSecondsUsedStr(secondsUsed) {
		var d = new Date("1111/1/1,0:0:0");
                        var d = new Date("1111/1/1,0:0:0");
                        d.setSeconds(secondsUsed);
                        var h = d.getHours();
                        h = reg.test(h) ? "0" + h + ":" : h + ":"
                        var m = d.getMinutes();
                        m = reg.test(m) ? "0" + m + ":" : m + ":"
                        var s = d.getSeconds();
                        s = reg.test(s) ? "0" + s : s;
                        //oT.value = h + m + s;
                       return h + m + s;
	}
	
	//分享
	$("#fenxiang").click(function(){
		$("#mask").show();
		$("#mask").append("<img src='images/share.png' style='float:right'/>")				  
	})
});
</script>
<script type="text/javascript" src="http://wxapp.njdaily.cn/fenxiang/"></script>
<script type="text/javascript">
wx.ready(function () {	
	wx.onMenuShareTimeline({
		title: '答题', // 分享标题
		link: 'http://wxapp.njdaily.cn/2016/rjsn_dt/', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/rjsn_dt/images/300.png', // 分享图标
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareAppMessage({
		title: '答题', // 分享标题
		desc: '答题', // 分享描述
		link: 'http://wxapp.njdaily.cn/2016/rjsn_dt/', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/rjsn_dt/images/300.png', // 分享图标
		type: '', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareQQ({
		title: '答题', // 分享标题
		desc: '答题', // 分享描述
		link: 'http://wxapp.njdaily.cn/2016/rjsn_dt/', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/rjsn_dt/images/300.png', // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
		   // 用户取消分享后执行的回调函数
		}
	});
});
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7f32aed534f2da344768184078540b91' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>