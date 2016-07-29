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
				'title': '我市大约有多少新生儿出生在市妇幼？',
				'answers': ['1/4', '1/2', '全部'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“地球之窗+X”综合旅游度假世界项目将在哪里开建？',
				'answers': ['六合', '高淳', '江宁'],
				'correct':0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '单位可以组织职工旅游吗？',
				'answers': ['不可以', '可以组织职工出去住一晚', '可以组织当天来回的旅游'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '铁心桥老桥拆除后，桥身将化为什么？',
				'answers': ['建筑垃圾', '再生砖', '纪念品'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '《我要做好孩子》是哪位作家的代表作？',
				'answers': ['张嘉佳', '黄蓓佳', '范小青'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
/*		 {
				'title': '第二十一届南京读书节于4月23日至9月多少日举行？',
				'answers': ['28日', '29日', '30日'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '本报“见证胜利之光”栏目照片中的参军姑娘陈燕生找到了，老人告诉记者，这张照片拍摄于哪一年？',
				'answers': ['1949年', '1950年', '1951年'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '昨天下午，中超联赛第6轮江苏苏宁与广州富力的比赛中，谁为苏宁射进一球？',
				'answers': ['特谢拉', '任航', '若'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '“五一”期间，宁安方向高铁动车公交化开行，南京平均多长时间40分钟就有一班始发往芜湖、安庆的动车组？',
				'answers': ['30分钟', '40分钟', '50分钟'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '国防科工局发布最新一组嫦娥三号和玉兔月球车拍摄什么高分辨率全彩照片？',
				'answers': ['月球', '火星', '木星'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
					 {
				'title': '我市多少家驾校推出“先培后付”学车新模式 ？',
				'answers': ['11家', '10家', '12家'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '去年法治南京建设群众满意率超百分之多少？',
				'answers': ['92%', '94%', '96%'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '南京一季度GDP同比增长百分之多少？',
				'answers': ['6.5%', '8.5%', '7.5%'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '中国探测器将在哪一年发射火星？',
				'answers': ['2020年', '2030年', '2026年'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '《南京市城市照明管理办法》几月几日召开听证会？',
				'answers': ['5月1日', '5月5日', '5月6日'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			 {
				'title': '中华虎凤蝶的寄主植物是什么？',
				'answers': ['杜蘅', '二月兰', '韭菜'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '最新一场省级机关公车拍卖何时举行？',
				'answers': ['今天', '本周六', '本周日'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '南京国际度假休闲及房车展览会简称什么？',
				'answers': ['车展会', '房展会', '旅展会'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '全市已有多少家法院签发过“人身安全保护令”？',
				'answers': ['1', '3', '5'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '渡江战役发生在哪一年？',
				'answers': ['1940年', '1949年', '1942年'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			
			 {
				'title': '国办印发文件，要求重大突发事件多长时间内举行新闻发布会？',
				'answers': ['12小时', '24小时', '48小时'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '哪位学者被誉为中国“慰安妇”问题研究第一人？',
				'answers': ['苏智良', '朱成山', '洪银兴'],
				'correct':0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '南京上月空气优良天数比例为多少？',
				'answers': ['58%', '59%', '60%'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '南京解放周年纪念日是哪一天？',
				'answers': ['4月20日', '4月23日', '5月23日'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '今年江苏高考哪天开始？',
				'answers': ['6月1日', '6月5日', '6月7日'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			/*
						 {
				'title': '4月16日，我省首票境外旅客购物离境退税完成，请问退税的商品是什么？',
				'answers': ['香水', '琉璃工艺品', '玩具'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '人类新发传染病近几成来源于动物？',
				'answers': ['近六成', '近八成', '近七成'],
				'correct':1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '有多少个国家和地区的选手参加了浦口国际女子半程马拉松？',
				'answers': ['17个', '10个', '15个'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '南京好人李慧兰20年来义务教大家什么？',
				'answers': ['跳舞', '唱歌', '绘画'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '中超第5轮，江苏苏宁几比几战胜申花？',
				'answers': ['1:0', '2:0', '3:0'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			/*	 {
				'title': '话剧《雨花台》专家研讨会何时在京举行？',
				'answers': ['前天', '昨天', '今天'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '“遇见·最美滨江”健步走活动哪天举行？',
				'answers': ['明天', '本周六', '本周日'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': ' 我市正在开展的全市水系打通计划，主要是将所有河道与什么水系贯通起来？',
				'answers': ['长江、外秦淮河', '玄武湖', '内外秦淮河'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '市国土局昨天再度公告出让7幅地块，起拍楼面价最高的地块在哪里？',
				'answers': ['麒麟', '河西南', '江北新区'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': ' 第九届江苏省园艺博览会将在哪里举行？',
				'answers': ['南京', '苏州', '无锡'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			{
				'title': '我市今年第一个臭氧超标污染天出现在何时？',
				'answers': ['4月4日', '4月7日', '4月9日'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '以下哪个是八卦洲本土芦蒿品种？',
				'answers': ['大叶青', '小叶青', '大叶白'],
				'correct':0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': ' 我市一季度CPI涨幅是多少？',
				'answers': ['1%', '2%', '3%'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '市工商局省市著名商标网上申报系统何时正式上线？',
				'answers': ['明天', '今天', '昨天'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '今年是渡江胜利暨南京解放多少周年纪念日？',
				'answers': ['65', '67', '70'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
		
		{
				'title': '南京“文化名人”吴汝俊是哪类戏剧艺术家？',
				'answers': ['京剧', '昆曲', '豫剧'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '甘家大院日前举办了什么民俗体验活动？',
				'answers': ['清明节', '上巳节', '踏青节'],
				'correct':1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '春牛首国际马拉松何时开跑？',
				'answers': ['昨天', '今天', '明天'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '目前我市存量可售商品房大约多少套？',
				'answers': ['1万套', '2万套', '3万套'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '南京将在何时实现生活污水全收集、全处理？',
				'answers': ['今年底前', '已经实现', '明年底前'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
		/*	
			{
				'title': '话剧《雨花台》全国高校巡演自哪天起在北大首演？',
				'answers': ['今天', '昨天', '4月4日 '],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '上月参加“省考”的12条黑臭河道中，过关多少条？',
				'answers': ['全过 ', '8条', '10条'],
				'correct':1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '上月南京人均房租支出全国第几？',
				'answers': ['第七', '第五', '第三 '],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '我国成功发射的首颗微重力科学实验卫星设计寿命为多久？',
				'answers': ['1年', '半年', '15天'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '昨晚，2016年亚冠联赛小组赛第四轮，江苏苏宁对阵日本东京FC，结果是？',
				'answers': ['赢', '输', '平'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			
				{
				'title': '目前，南京的职工基本养老保险，单位缴费比例为多少？',
				'answers': ['20%', '31.2%', '8%'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '根据最新出炉的调整方案，大桥封闭后，过江公交线路共计多少条？',
				'answers': ['29条', '25条', '12条'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '高淳日前关停最后一座露采矿山，至此，高淳已先后关停多少个矿区？',
				'answers': ['12个', '13个', '14个'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,
			{
				'title': '我市骨灰公墓的墓穴和其他骨灰处理设施的使用期限为多少年？',
				'answers': ['20年', '30年', '40年'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '机动车违法鸣笛将被处以什么处罚？',
				'answers': ['罚款50元', '罚款100元', '罚款200元'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}

		*/
		/*
		{
				'title': '省级机关公车改革取消车辆专场拍卖“收官之拍”将在何时进行？',
				'answers': ['4月10日', '5月10日', '6月10日'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '我市多家企业在欧美发达国家设立研发机构？',
				'answers': ['17家', '18家', '19家'],
				'correct':2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '鼓楼区滨江风光带由几段组成？',
				'answers': ['三段', '四段', '五段'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '《南京市住宅物业管理条例》何时实施？',
				'answers': ['6月1日', '7月1日', '8月1日'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '多少件珍贵文物在《张学良与抗日救国》专题展上一并展出？',
				'answers': ['11件', '12件', '13件'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
		*/
		/*
			{
				'title': '昨天有几位司机联手救下了一位要跳长江大桥的女子？',
				'answers': ['2位', '3位', '4位'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			},
			{
				'title': '先锋书店还将在哪些地方开新店？',
				'answers': ['园林', '窑洞', '戈壁'],
				'correct': 1,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '“林海录微画展”展览到几号？',
				'answers': ['4月20日', '5月1日', '4月15日'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '去年金图借阅图书最多的一名小读者一年借了几本书？',
				'answers': ['100本', '200本', '380本'],
				'correct': 2,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			,		
			{
				'title': '联合国安理会轮值主席国由多少个成员轮流担任？',
				'answers': ['15个', '10个', '20个'],
				'correct': 0,
				'des': '',
				'size': [24, 24, 24, 24]
			}
			*/
			// {
				// 'title': '80后帅气小伙乜冬冬，勇敢的跳入河中，踹破车玻璃救出被困在车里的驾驶员。请问“乜”这个姓怎么读？',
				// 'answers': ['niè', 'miē', ' mie'],
				// 'correct': 0,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// },
			// {
				// 'title': '4月1日，市民李先生出地铁站时被谁抢了包？',
				// 'answers': ['小偷', '好朋友', '坏人'],
				// 'correct': 1,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '“全息+VR”再现张国荣演唱会将在几月开演？',
				// 'answers': ['4月', '9月', '8月'],
				// 'correct': 2,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '“世界自闭症关注日”是几月几日？',
				// 'answers': ['4月2日', '4月1日', '4月3日'],
				// 'correct': 0,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '昨天南京的哪个商场开出了全省离境退税第一单？',
				// 'answers': ['中央', '新百', '德基'],
				// 'correct': 1,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// {
				// 'title': '每年长江南京段有几个刀鱼捕捞期？',
				// 'answers': ['1个', '2个', ' 3个'],
				// 'correct': 1,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// },
			// {
				// 'title': '江宁春牛首国际马拉松赛何时开跑？',
				// 'answers': ['4月10日', '4月11日', '4月12日'],
				// 'correct': 0,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '昨晚揭晓的第26届“白玉兰奖”中，南京演员李晓旭以哪个角色获奖？',
				// 'answers': ['《玉堂春》的王金龙', '《王老虎抢亲》的唐伯虎', '《彩球缘》的冯士元'],
				// 'correct': 0,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '红山动物园新出生的斑马宝宝叫什么名字？',
				// 'answers': ['Queen', '毛毛', 'Linda'],
				// 'correct': 2,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			// ,		
			// {
				// 'title': '我市首家区级公立儿童自闭症康复中心在哪里？',
				// 'answers': ['鼓楼区', '秦淮区', '江宁区'],
				// 'correct': 2,
				// 'des': '',
				// 'size': [24, 24, 24, 24]
			// }
			
			
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
		remixCount		= 5,
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
	var questionsTempIndexes 	= [0,1,2,3,4],
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
		$.getJSON('http://wxapp.njdaily.cn/2016/rjsn_dt/result.php?jsoncallback=?',
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
		initTimu();
		
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
		initTimu();
		
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
		initTimu();
		
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
		$('#section-score .userinfo-form').animate({'marginTop': '-330px'}, 600);
	});
	// 提交成绩表单
	$('#btn-submit').click(function() {
		var username	= $.trim($('#username').val());
			phone		= $.trim($('#phone').val());
			area = $("#area").find("option:selected").val();
			school		= $.trim($('#school').val());
			wxid	= "1";
			//alert(area);
		if(username == '') {
			formError('请填写您的姓名！');
			return false;
		} else if(!phone.match(/^1\d{10}$/)) {
			formError('请填写有效的手机号！');
			return false;
		}  else if(school == "") {
			formError('请填写学校！');
			return false;
		}else {
			curPhone = phone;
			$.cookie('phone', curPhone, { expires: 365, path: '/' });
			$.cookie('username', username, { expires: 365, path: '/' });
			
			$.ajax({
				url:"http://wxapp.njdaily.cn/2016/rjsn_dt/sign.php",
				dataType:'jsonp',
				//processData: false, 
				type:'get',
				data:{
					'username'	: username,
					'phone'		: phone,
					'area'     	:area,
					'school'     	:school,
					'answers'	: userAnswers,
					'wxid'		:wxid,
					'score'		: parseInt(score / totalTimus * 100) + (extraCorrect ? 20 : 0),
					// 'score'		: score / totalTimus * 100,
					'seconds'	: secondsUsed,
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
						formError('你刚刚提交过了，请2小时后再试！');
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
				url: 'http://vote.njdaily.cn/2015/mingzhu/sign.php',
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