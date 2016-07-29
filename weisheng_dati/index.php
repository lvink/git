<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>创建国家卫生城市知识有奖竞答</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
<meta name="keywords" content="南京日报,南京日报电子版,南京日报数字报,新闻,南京,南京新闻,国内新闻,国际新闻,金陵晚报,南京社区,南京生活,南京天气,南京媒体圈" />
<meta name="description" content="南报网是南京日报主办的新闻网站，致力于塑造南京区域报网融合新媒体品牌形象，是南京地区城市综合信息门户网站，为南京及南京都市圈人群提供新闻、资讯、社区、阅读、房产、汽车等多种网络服务。" />
<meta name="author" content="南报网" />
<meta name="copyright" content="南报网版权所有" />
<link href="images/css-3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:800px)" href="images/css-pc-3.css">

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="images/jquery.js"></script>
<script type="text/javascript" src="http://img.njdaily.cn/jui/plugin/jquery.cookie.js"></script>
<script src="images/alert/jquery.alerts.js"></script>

<link href="images/alert/jquery.alerts3.css" rel="stylesheet" type="text/css"/>
<?php
session_start();
//echo $_SESSION['nbw'];
	if($_SESSION['nbw']=="" || empty($_SESSION['nbw'])){
			echo '<script type="text/javascript" src="http://wxapp.njdaily.cn/nbw/js/open.js"></script>';
			die;
		}
?>
<script type="text/javascript">
	$(function(){

	})
</script>
<style type="text/css">
#section-index .index-rewards-link{color:#fff;display:block;width:100%;height:100%;}
</style>
</head>
<body class="f-ff1">
<div id="formError">
	<div class="msg"></div>
	<div class="close">X</div>
</div>
<div id="gameRules">
	<div class="rules">
		<h3><b>活动规则</b></h3>
		<ul>
			<li>活动时间从7月18日-7月22日,共5天。该竞答题共10题，每题10分，总分100分，答对60分以上可参与抽奖，获奖名单次日公布。</li>
		</ul>
		<h3><b>奖项设置</b></h3>
		<ul>
			<li>每天抽取20名中奖者，每人奖励50元话费。</li>
		</ul>
		<h3><b>领奖方式</b></h3>
		<ul>
			<li>活动结束后，中奖话费由工作人员统一充值。</li>
			<li>咨询电话：84686265</li>
		</ul>

	</div>
	<div class="close">X</div>
</div>
<div id="mask"></div>
<div class="wrap">
<div class="header"></div>
<div class="main">
	<div id="section-banner"></div>
	
	<!-- -------- 首页 -------- -->
	<div id="section-index">
		<img width="100%" height="100%" src="images/bj.jpg">
		<div class="startbtn">
			<ul>
				<li id="btn-start"><div><img src="images/start_03.png" style="width:210px;hheight:140px"></div></li>
				<li class="btn-board"><div><img src="images/wscs_03.png" style="width:210px;hheight:140px"></div></li>
				<li><a href="rewards1.php" class="index-rewards-link"><div><img src="images/ok_03.png" style="width:210px;hheight:140px"></div></a></li>
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
				<div class="text">又答对啦！</div>
			</div>
			<div class="icon icon-6">
				<div class="img gif"><img src="images/face/0-8.gif"></div>
				<div class="text">可以的嘛！</div>
			</div>
			<div class="icon icon-7">
				<div class="img gif"><img src="images/face/0-8.gif"></div>
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
				<div class="img gif"><img src="images/face/0-8.gif"></div>
				<div class="text">恭喜你答对了！<br/>我看好你哟！</div>
			</div>
			<div class="icon icon-13">
				<div class="img gif"><img src="images/face/0-8.gif"></div>
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
		
		<div id="btn-next">下一题</div>
		<div id="btn-cancel">跳 过 (┬＿┬)</div>

		<div class="result-des">
			<h3>正确答案</h3>
			<p></p>
		</div>

	</div>
	
	<!-- -------- 得分页 -------- -->
	<div id="section-score" style="display:none;">
		<div class="defen_info">
			<!--<div class="zftips" style="display:block;">击败了<b>0%</b>的选手</div>-->
			<div class="zongfen">总分：<span id="score-score">0</span></div>
			<div class="zongfen zongtime">时间：<span id="score-time">0:00</span></div>
		</div>
		<div class="words"></div>
		<div class="defen_btn">
			<div class="userinfo-form">
				<div class="form" style="display:none;" id="form">
					<h2>填写个人信息</h2>
					<div class="items">
						<div class="item">
							<label for="username">姓名：</label>
							<input class="input-text" type="text" name="username" id="username" value=""/>
						</div>
						<div class="item">
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
				<li id="btn-form">提交成绩 参与抽奖</li>
				<li id="btn-home">再玩一次</li>
			</ul>
		</div>
	</div>
	
	<!-- -------- 排行榜 -------- -->
	<div id="section-board" style="display:none;">
		<div class="board-content">
			<div class="label f-cb">
				<div class="label-title f-fl">每日排行榜</div>
				<div class="home f-fr">
					<a href="javascript:;" id="btn-board-home">返回首页</a>
				</div>
			</div>
			<div class="board-table">
				<table></table>
				<div class="btn-zp-line"><a href="zp/" id="btn-zp">我 要 抽 奖</a></div>
			</div>
			<div class="board-info">已有 <span id="joined-count">0</span> 人次参与竞答。</div>
			
		</div>
	</div>
	<div id="section-submit" style="display:none;">
		<div class="info">恭喜您，<br />提交成功！</div>
		<ul>
			<li id="lj">立即抽奖</li>
			<li id="btn-home-submit">返回首页</li>
		</ul>
	</div>
	
	
	
</div>

</div>
<div id="qrcode"></div>
<script type="text/javascript">
	$(function() {
	
	// 题目数据
	var QUESTIONS_A = [
	//1
					{
						'title': '国家卫生城市评审每_____年为一个周期，每周期第2年6月底前均可申报，原则上第三年集中命名。',
						'answers': ['5', '2', '3', '1'],
						'correct': 2,
						'des': '3',
						'size': [20, 20,20,20]
					}
	//2
					,
					{
						'title': '国家卫生城市自命名后每_____年复审一次。',
						'answers': ['2', '3', '4', '5'],
						'correct': 1,
						'des': '3',
						'size': [20, 20,20,20]
					}
	//3
					,
					{
						'title': '爱国卫生工作始终以解决人民群众生产生活中的突出卫生问题为主要内容。',
						'answers': ['作风问题', '品德问题', '浪费问题', '卫生问题'],
						'correct': 3,
						'des': '卫生问题',
						'size': [20, 20,20,20]
					}
	//4
					,
					{
						'title': '做好新时期的爱国卫生工作，是坚持以人为本、解决当前影响人民群众____突出问题的有效途径，是改善环境、加强生态文明建设的重要内容，是建设健康中国、全面建成小康社会的必然要求。',
						'answers': ['健康', '生活', '饮食', '文化'],
						'correct': 0,
						'des': '健康',
						'size': [20, 20,20,20]
					}
	//5
					,
					{
						'title': '新时期爱国卫生工作要坚持政府领导、部门协作、群众动手、社会参与、依法治理、科学指导，全面推进改革创新，充分发挥______运动的优势，着力治理影响群众健康的危害因素，不断改善城乡环境，切实维护人民群众健康权益，为经济社会协调发展提供有力保障。',
						'answers': ['环境', '社会', '群众', '政府'],
						'correct': 2,
						'des': '群众',
						'size': [20, 20,20,20]
					}
	//6
					,
					{
						'title': '通过广泛开展爱国卫生运动，城乡环境卫生条件明显改善，影响健康的主要环境危害因素得到有效治理；人民群众______素质显著提升，健康生活方式广泛普及；有利于健康的社会环境和政策环境进一步改善，重点传染病、慢性病、地方病和精神疾病等公共卫生问题防控干预取得明显成效，城乡居民健康水平明显提高。',
						'answers': ['思想道德', '身体健康', '生活习惯', '文明卫生'],
						'correct': 3,
						'des': '文明卫生',
						'size': [20, 20,20,20]
					}
	//7
					,
					{
						'title': '争取到2020年，国家卫生城市数量提高到全国城市总数的______，国家卫生乡镇（县城）数量提高到全国乡镇（县城）总数的50%',
						'answers': ['40%', '50%', '60%', '70%'],
						'correct': 0,
						'des': '40%',
						'size': [20, 20,20,20]
					}
	//8
					,
					{
						'title': '建立政府和市场有机结合的机制，通过政府转移职能和_____等方式，鼓励和吸引社会力量参与环境整治、改水改厕、病媒生物预防控制、健康教育等工作。',
						'answers': ['权力下放', '购买服务', '社会参与', '公益募集'],
						'correct': 1,
						'des': '购买服务',
						'size': [20, 20,20,20]
					}
	//9
					,
					{
						'title': '广泛开展全民健身活动，机关、企事业单位落实工作场所工间操制度。_____以上的社区建有体育健身设施。经常参加体育锻炼的人数比率达到30%以上。每千人口至少有2名社会体育指导员。',
						'answers': ['20%', '80%', '40%', '100%'],
						'correct': 1,
						'des': '80%',
						'size': [20, 20,20,20]
					}
	//10
					,
					{
						'title': '深入开展禁烟、控烟宣传活动，禁止烟草广告。开展无烟学校、无烟机关、无烟医疗卫生机构等无烟场所建设。室内公共场所、工作场所和公共交通工具设置______警语和标识。',
						'answers': ['公益宣传', '禁止吐痰', '吸烟有害健康', '禁止吸烟'],
						'correct': 3,
						'des': '禁止吸烟',
						'size': [20, 20,20,20]
					}
	//11
					,
					{
						'title': '城市主次干道和街巷路面平整，主要街道无______情况，无乱扔、乱吐现象，废物箱等垃圾收集容器配置齐全，城区无卫生死角。',
						'answers': ['乱张贴、乱涂写、乱设摊点', '乱停车、乱扔垃圾、乱张贴', '乱涂、乱画、赃乱差', '乱摆摊、乱倒垃圾、乱涂写'],
						'correct': 0,
						'des': '乱张贴、乱涂写、乱设摊点',
						'size': [20, 20,20,20]
					}
	//12
					
					,
					{
						'title': '城市河道、湖泊等水面清洁，岸坡整洁，无垃圾杂物。建成区绿化覆盖率≥_____，人均公园绿地面积≥8.5平方米。',
						'answers': ['20%', '60%', '36%', '70%'],
						'correct': 2,
						'des': '36%',
						'size': [20, 20,20,20]
					}
	//13
					,
					{
						'title': '生活垃圾收集运输体系完善，垃圾、粪便收集运输容器、车辆等设备设施全面实现_____，垃圾、粪便日产日清。',
						'answers': ['半敞开式', '敞开式', '半密闭化', '密闭化'],
						'correct': 3,
						'des': '密闭化',
						'size': [20, 20,20,20]
					}
	//14
					,
					{
						'title': '主要街道保洁时间不低于_____小时，一般街道保洁时间不低于12小时。',
						'answers': ['10', '16', '8', '24'],
						'correct': 1,
						'des': '16',
						'size': [20, 20,20,20]
					}
	//15
					,
					{
						'title': '省会城市和计划单列市实现生活垃圾______无害化处理,生活污水全部收集和集中处理；其他城市和直辖市所辖行政区生活垃圾无害化处理率≥90%，生活污水集中处理率≥85%。',
						'answers': ['全部', '50%', '75%', '60%'],
						'correct': 0,
						'des': '全部',
						'size': [20, 20,20,20]
					}
	//16
					,
					{
						'title': '活禽销售市场的卫生管理规范，设立相对独立的经营区域，按照动物防疫有关要求，实行_____宰杀，落实定期休市和清洗消毒制度，对废弃物实施规范处理。',
						'answers': ['半隔离', '敞开', '现场', '隔离'],
						'correct': 3,
						'des': '隔离',
						'size': [20, 20,20,20]
					}
	//17
					,
					{
						'title': '南京市垃圾分类分为几类？',
						'answers': ['一', '二', '三', '四'],
						'correct': 3,
						'des': '四',
						'size': [20, 20,20,20]
					}
	//18
					,
					{
						'title': '创建国家卫生城市需近______年辖区内未发生重大环境污染和生态破坏事故。',
						'answers': ['2', '6', '1', '3'],
						'correct': 3,
						'des': '3',
						'size': [20, 20,20,20]
					}
	//19
					,
					{
						'title': '创建国家卫生城市需贯彻落实《中华人民共和国大气污染防治法》，环境空气质量指数(AQI)或空气污染指数（API）不超过100的天数≥_____天，环境空气主要污染物年均值达到国家《环境空气质量标准》二级标准。',
						'answers': ['100', '300', '200', '400'],
						'correct': 1,
						'des': '300',
						'size': [20, 20,20,20]
					}
	//20
					,
					{
						'title': '创建国家卫生城市需贯彻落实《秸秆禁烧和综合利用管理办法》，秸秆综合利用率达到______，杜绝秸秆焚烧现象。',
						'answers': ['60%', '80%', '40%', '100%'],
						'correct': 3,
						'des': '100%',
						'size': [20, 20,20,20]
					}
	//21
					,
					{
						'title': '创建国家卫生城市需贯彻落实《中华人民共和国水法》、《中华人民共和国水污染防治法》等法律法规，集中式饮用水水源地一级保护区水质达标率100%，安全保障达标率_____，城区内水环境功能区达到要求，未划定功能区的无劣五类水体。',
						'answers': ['98%', '40%', '100%', '60%'],
						'correct': 2,
						'des': '100%',
						'size': [20, 20,20,20]
					}
	//22
					,
					{
						'title': '小餐饮店、小食品店、小浴室、小美容美发、小歌舞厅、小旅店等经营资格要合法，室内外环境整洁，硬件设施符合相应国家标准要求，从业人员需取得有效_____证明。',
						'answers': ['素质合格', '健康合格', '卫生合格', '技术合格'],
						'correct': 1,
						'des': '健康合格',
						'size': [20, 20,20,20]
					}
	//23
					
					,
					{
						'title': '开展健康学校建设活动，中小学健康教育开课率达_____。',
						'answers': ['40%', '60%', '90%', '100%'],
						'correct': 3,
						'des': '100%',
						'size': [20, 20,20,20]
					}
	//24
					,
					{
						'title': '按照《职业健康监护技术规范》要求，要对从事接触职业病危害作业的劳动者开展______检查，开展职业健康教育活动。近3年未发生重大职业病危害事故。',
						'answers': ['职业技术', '职业健康', '劳动能力', '文化素养'],
						'correct': 1,
						'des': '职业健康',
						'size': [20, 20,20,20]
					}
	//25
					,
					{
						'title': '创建国家卫生城市需贯彻落实《中华人民共和国食品安全法》，建立健全食品安全全程监管工作机制，近_____年未发生重大食品安全事故。',
						'answers': ['8', '1', '5', '3'],
						'correct': 3,
						'des': '3',
						'size': [20, 20,20,20]
					}



		],//文学题
		QUESTIONS_B = [
					
					{
						'title': '对餐饮业、集体食堂餐饮服务食品安全监督量化分级管理率要≥_____。食品从业人员取得有效的健康合格证明。落实清洗消毒制度，防蝇、防鼠等设施健全。',
						'answers': ['90% ', '50% ','80%','70%'],
						'correct': 0,
						'des': '90%',
						'size': [20, 20,20,20]
					},
					{
						'title': '以街道（乡、镇）为单位适龄儿童免疫规划疫苗接种率达到_____以上。',
						'answers': ['60% ', '20% ','90%','75%'],
						'correct': 2,
						'des': '90%',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '制订流动人口免疫规划管理办法，居住满3个月以上的适龄儿童建卡、建证率达到_____以上。 ',
						'answers': ['95% ', '85% ','65%','75%'],
						'correct': 0,
						'des': '95% ',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '每个街道办事处范围或3-10万服务人口设置一所社区卫生服务中心，每个乡镇设置一所政府举办的乡镇卫生院。基层医疗卫生机构标准化建设达标率达到_____以上。',
						'answers': ['95% ', '60% ','65%','70%'],
						'correct': 0,
						'des': '95% ',
						'size': [20, 20,20,20]
					}
		//30
					,
					{
						'title': '城市道路在新建、扩建、改建、养护、维修等施工作业时，应设置明显标志和_____设施。施工完毕后应及时平整现场、恢复路面、拆除防护设施。',
						'answers': ['绕行标志', '施工标志','噪音防护','安全防护'],
						'correct': 3,
						'des': '安全防护',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '道路机械化清扫或高压冲水率要≥_____。',
						'answers': ['50% ', '20%','60%','80%'],
						'correct': 0,
						'des': '50%',
						'size': [20, 20,20,20]
					}
		//32
					,
					{
						'title': '城市污水处理厂污水处理应达到_____处理量。',
						'answers': ['一级', '一级或一级以上','二级或二级以上','三级'],
						'correct': 2,
						'des': '二级或二级以上',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '下列情形哪些为重大环境污染和生态破坏事故：（a）发生10人以上死亡，或中毒（重伤）50人以上；（b）区域生态功能部分丧失或濒危物种生存环境受到污染；（c）因环境污染使当地经济、社会活动受到较大影响，疏散转移群众 １万人以上的；（d）1、2类放射源丢失、被盗或失控；（e）因环境污染造成重要河流、湖泊、水库及沿海水域大面积污染，或县级以上城镇水源地取水中断的污染事件。',
						'answers': ['abcd', 'adc','abd','bcd'],
						'correct': 0,
						'des': 'abcd',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '开展重要病媒生物监测调查，收集病媒生物侵害信息并及时进行处置。重点行业和单位防蚊蝇和防鼠设施合格率≥____。 ',
						'answers': ['60%', '80%','95%','90%'],
						'correct': 2,
						'des': '95%',
						'size': [20, 20,20,20]
					}
			//35
					
					,
					{
						'title': '在公共卫生与医疗服务方面，要求辖区婴儿死亡率≤_____,5岁以下儿童死亡率≤14‰，孕产妇死亡率≤22/10万。',
						'answers': ['20‰', '12‰','16‰','24‰'],
						'correct': 1,
						'des': '12‰',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '无偿献血能够满足临床用血需要，临床用血____来自自愿无偿献血。建成区无非法行医、非法采供血和非法医疗广告。',
						'answers': ['100%', '60%','90%','80%'],
						'correct': 0,
						'des': '100%',
						'size': [20, 20,20,20]
					}

					,
					{
						'title': '辖区内疾病预防控制机构设置合理，人员、经费能够满足工作需要，疾病预防控制中心基础设施建设达到《疾病预防控制中心建设标准》要求，实验室检验设备装备达标率达到_____以上。',
						'answers': ['80%', '70%','50%','90%'],
						'correct': 3,
						'des': '90%',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '贯彻落实《中华人民共和国精神卫生法》，健全工作机构，完善严重精神障碍救治管理工作网络，严重精神障碍患者管理率达到_____以上。',
						'answers': ['45%', '35%','75%','55%'],
						'correct': 2,
						'des': '75%',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '开展慢性病综合防控示范区建设。实施全民健康生活方式行动，建设健康步道、健康食堂（餐厅）、健康主题公园，推广_____等慢性病防控措施。 ',
						'answers': ['减糖、控油', '减盐、控油','减盐、减糖','控油、减辣'],
						'correct': 1,
						'des': '减盐、控油',
						'size': [20, 20,20,20]
					}
			//40
					,
					{
						'title': '集贸市场要求管理规范，配备卫生管理和保洁人员，环卫设施齐全。临时便民市场采取有效管理措施，保证周边市容环境卫生、交通秩序和群众正常生活秩序。达到《标准化菜市场设置与管理规范》要求的农副产品市场比例≥_____',
						'answers': ['70% ', '60%','50%','40%'],
						'correct': 0,
						'des': '70%',
					'size': [20, 20,20,20]
					}
					,
					{
						'title': '推行生活垃圾_____处理，餐厨垃圾初步实现分类处理和管理，建筑垃圾得到有效处置。',
						'answers': ['集中', '填埋','无害化','分类收集'],
						'correct': 3,
						'des': '分类收集',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '城市功能照明要求完善，城市道路装灯率达到_____。 ',
						'answers': ['80%', '100%','60%','90%'],
						'correct': 1,
						'des': '100%',
						'size': [20, 20,20,20]
					}
			//43
					
					,
					{
						'title': '畅通爱国卫生建议与投诉平台，认真核实和解决群众反映的问题。群众对卫生状况满意率≥_____。 ',
						'answers': ['80%', '100%','70%','90%'],
						'correct': 3,
						'des': '90%',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '培育和践行社会主义核心价值观，大力开展讲卫生、树新风、除陋习活动，摒弃乱扔、乱吐、乱贴、乱行等不文明行为，提高群众_____意识，营造社会和谐、精神文明的社会新风尚。',
						'answers': ['文明卫生 ', '思想道德','健康养生','公共安全'],
						'correct': 0,
						'des': '文明卫生',
						'size': [20, 20,20,20]
					}
		//45
					,
					{
						'title': '要求提高青少年体质，学生在校期间每天至少参加_____小时的体育锻炼活动。',
						'answers': ['3', ' 2','1','4'],
						'correct': 2,
						'des': '1',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '门前三包是哪三包？',
						'answers': ['包立面', '包卫生','包秩序','以上皆是'],
						'correct': 3,
						'des': '以上皆是',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '现行的《国家卫生城市标准》是哪一年版的? ',
						'answers': ['2013版', '2014版','2015版','2016版'],
						'correct': 1,
						'des': '2014版',
					'size': [20, 20,20,20]
					}	
					,
					{
						'title': '爱国卫生运动中说的除“四害”，是指哪“四害”？',
						'answers': ['蟑螂 蚊蝇 白蚁', '蚊蝇 老鼠 白蚁','蟑螂 蚊蝇 老鼠','白蚁 蟑螂 老鼠'],
						'correct': 2,
						'des': '蟑螂 蚊蝇 老鼠',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '灭鼠用的防鼠板的要求：在与外界相通门窗最好采用金属材质，门窗缝隙要小于多少？',
						'answers': ['0.5厘米', '0.6厘米','0.7厘米 ','0.8厘米'],
						'correct': 1,
						'des': '0.6厘米',
						'size': [20, 20,20,20]
					}
					,
					{
						'title': '培育和践行社会主义核心价值观，大力开展讲卫生、树新风、除陋习活动，摒弃_____等不文明行为。 ',
						'answers': ['乱扔 乱贴', '乱吐 乱扔','乱贴 乱吐 乱贴','乱行 乱贴 乱吐 乱扔'],
						'correct': 3,
						'des': '乱行 乱贴 乱吐 乱扔',
						'size': [20, 20,20,20]
					}
			
					
					
		],//常规知识题
		
		
		//附加题
		QUESTION = [],
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
		FROM                =$('.form'),
		
		WORDS			= [
			'好嘛，厉害的不得了！',
			'太腻害了,不要给我压力！',
			'不得了啊,你懂的很多啊！',
			'不行唉,60分都没到,没法抽奖喃'
		]
		
		TIPS		=["回答正确","回答错误"]
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
		totalTimus		= remixCount,// + QUESTIONS_3.length,
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
	//var questionsTempIndexes 	= [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43],
	var	questionsTemp			= [],
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
	
	
	//创建题目
	function remixQuestions() {
		var QAtp = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
		var QBtp = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
		var questionsTemp_A = [];
		var questionsTemp_B = [];

		
		var questionsTempIndexes_A = getArrayItems(QAtp, 3);
		for(var _i = 0; _i < 3; _i++) {
			questionsTemp_A[_i] = QUESTIONS_A[questionsTempIndexes_A[_i]];
		}
		var questionsTempIndexes_B = getArrayItems(QBtp, 7);
		for(var _i = 0; _i < 7; _i++) {
			questionsTemp_B[_i] = QUESTIONS_B[questionsTempIndexes_B[_i]];
		}
		
		//console.log(questionsTemp_E);
		questionsTemp = questionsTemp.concat(questionsTemp_B,questionsTemp_A);
		QUESTIONS = questionsTemp;
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
		$.getJSON('http://wxapp.njdaily.cn/2016/weisheng_dati/result.php?jsoncallback=?',
			{'action': 'board', 'phone': $.cookie('nphone'), 'random': Math.random()},
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
					$('.btn-zp-line').hide();
				} else {
					$('.btn-zp-line').hide();
				}
			}
		);
	}
	// 进入答题
	BTN_START.click(function() {
		/*
		 var timestamp1 = Date.parse(new Date());
			if(timestamp1>1464958800000){
				jAlert("活动已结束!", '提示信息');
			return false;
		}
		*/
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
		/*
		if(curTimu == totalTimus - 1) {
			BTN_NEXT.css('backgroundColor', '#49941f');
			BTN_NEXT.text('挑战附加题');
			BTN_CANCEL.show();
			SECTION_RESULT.find('.extra-des').show();
		}
		*/
		// 进入得分页面
 if(curTimu == totalTimus) {
			//BTN_NEXT.css('backgroundColor', '#ff6d6d');
			BTN_NEXT.text('答完了，查看得分');
			//SECTION_RESULT.find('.extra-des').hide();
		}
	}
	BTN_CANCEL.click(function() {
		stopTimer();
		var _score = parseInt(score / totalTimus * 100) + (extraCorrect ? 10 : 0);
		SCORE_SCORE.text(_score);
		SCORE_TIME.text(getSecondsUsedStr(secondsUsed));
		// 显示成绩祝语
		
		
		var _words = '';
		if(_score >= 100){ _words = WORDS[0];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.show()}
		else if(_score >= 90){ _words = WORDS[1];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.show()}
		else if(_score >= 60){ _words = WORDS[2];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.show()}
	//	else if(_score >= 35) _words = WORDS[3];
		else{
			_words = WORDS[3];
			SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.hide();
		}
		
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
		if(curTimu >= totalTimus-1) {
			var _score = parseInt(score / totalTimus * 100) + (extraCorrect ? 20 : 0);
			SCORE_SCORE.text(_score);
			SCORE_TIME.text(getSecondsUsedStr(secondsUsed));
			// 显示成绩祝语
			var _words = '';
			if(_score >= 100){ _words = WORDS[0];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show(); BTN_FORM.show()}
			else if(_score >= 90){ _words = WORDS[1];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show(); BTN_FORM.show()}
			else if(_score >= 60){ _words = WORDS[2];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show(); BTN_FORM.show()}
		//	else if(_score >= 35) _words = WORDS[3];
			else{
				_words = WORDS[3];
				SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.hide();
			}
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
		window.location.href='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect'
		
		BTN_NEXT.css('backgroundColor', '#49941f');
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
		initTimu();
		
		BTN_NEXT.css('backgroundColor', '#18a1ec');
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
		initTimu();
		
		BTN_NEXT.css('backgroundColor', '#18a1ec');
		LABEL_STEP.css('width', '0%');
		LABEL_TIMER.text('0:00');
		BTN_NEXT.text('下一题');
		BTN_CANCEL.hide();
		SECTION_SUBMIT.hide();
		SECTION_INDEX.show();
	});
	$("#getcode_math").click(function(){
		$(this).attr("src",'./action/code/code_math.php?' + Math.random());
	});
	// 显示与隐藏提交成绩表单
	BTN_FORM.click(function() {
		FROM.show();
		$('#section-score .userinfo-form').animate({'marginTop': '0px'}, 600);

	});
	BTN_BACK.click(function() {
		$('#section-score .userinfo-form').animate({'marginTop': '-260px'}, 600);
	});
	// 提交成绩表单
	$('#btn-submit').click(function() {
		var s = parseInt(score / totalTimus * 100) + (extraCorrect ? 20 : 0);
		if(s>60 && s<80){
			$.cookie('sc', "1", { path: "/"});
		}else if(s>79){
			$.cookie('sc', "2", { path: "/"});
		}else{
			$.cookie('sc', "0", { path: "/"});
		}
		var username	= $.trim($('#username').val()),
			phone		= $.trim($('#phone').val());
			wxid	= "<?php echo $_SESSION['nbw']?>";
		if(username == '') {
			formError('请填写您的姓名！');
			return false;
		} else if(!phone.match(/^1\d{10}$/)) {
			formError('请填写有效的手机号！');
			return false;
		} else {

			curPhone = phone;
			/*
			$.cookie('phone', curPhone, { expires: 365, path: '/' });
			*/
			$.cookie('phone', curPhone, { path: "/"});
			$.cookie('username', username, { path: "/"});
			
			$.ajax({
				url: 'http://wxapp.njdaily.cn/2016/weisheng_dati/sign.php',
				data: {
					'username'	: username,
					'phone'		: phone,
					'answers'	: userAnswers,
					'score'		: parseInt(score / totalTimus * 100) + (extraCorrect ? 20 : 0),
					// 'score'		: score / totalTimus * 100,
					'seconds'	: secondsUsed,
					'section'	: 1,
					'wxid'		:wxid,
					'random'	: Math.random()
				},
				dataType: 'text',
				success: function(text) {
					text = $.trim(text) + '';
					if(text == '1' || text == 1) {
						signSuccess();
						$.cookie('nphone', curPhone, { path: "/"});
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
		$('#mask').show();
		$('#formError').show().animate({'top': '0'} ,800);
	}
	function gameRules() {
		//$('#gameRules .msg').text(error);
		$('#mask').show();
		$('#gameRules').show().animate({'top': '0'} ,800);
	}
	$('#formError .close').click(function() {
		$('#formError').animate({'top': '-100%'} ,800, function() {
			$('#mask').hide();
			$('#formError').hide();
		});
	});
	$('#gameRules .close').click(function() {
		$('#gameRules').animate({'top': '-100%'} ,800, function() {
			$('#mask').hide();
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
	function startTimer() {	
		secondsUsed	= 0;
		timer		= false;
		timer		= window.setInterval(function() {
			secondsUsed++;
			//secondsUsed = secondsUsed/1000;
			secondsUsedStr = getSecondsUsedStr(secondsUsed);
			LABEL_TIMER.text(secondsUsedStr);
		}, 1000);
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
	$("#lj").click(function(){
		window.location.href='http://wxapp.njdaily.cn/2016/weisheng_dati/zp/'						
	})
});


</script>
<script type="text/javascript" src="http://wxapp.njdaily.cn/fenxiang/"></script>
<script type="text/javascript">
wx.ready(function () {	
	wx.onMenuShareTimeline({
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareAppMessage({
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		desc: '快来动动手指，长知识的机会来了！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
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
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		desc: '快来动动手指，长知识的机会来了！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
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