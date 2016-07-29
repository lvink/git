$(function() {
	
	// 题目数据
	var QUESTIONS_A = [
	//1
					{
						'title': '《江苏省新型墙体材料发展条例》中所称新型墙体材料，是指符合国家产业政策和省产业导向，以非粘土为主要原料生产的，有利于节约土地和资源综合利用，有利于环境保护和改善建筑功能的，用于建筑物墙体的建材产品。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//2
					,
					{
						'title': '《江苏省绿色建筑发展条例》中所称绿色建筑，是指在全寿命期内，最大限度地节约资源、保护环境和减少污染，为人们提供健康、适用和高效的使用空间，与自然和谐的民用建筑。绿色建筑分为一星、二星、三星三个等级。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//3
					,
					{
						'title': '追求时尚是绿色建筑设计理念。',
						'answers': ['√', '×'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
	//4
					,
					{
						'title': '《江苏省新型墙体材料发展条例》中规定，城镇范围内禁止使用粘土实心砖，框架（含框剪、剪力墙、筒体等）结构的建筑工程，可以使用粘土空心砖。',
						'answers': ['√', '×'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
	//5
					,
					{
						'title': '《江苏省新型墙体材料发展条例》中规定，新建、改建、扩建建筑工程使用经认定的新型墙体材料的，按照国家和省的规定享受新型墙体材料专项基金返退政策。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//6
					,
					{
						'title': '《江苏省新型墙体材料发展条例》中规定，企业生产经认定的新型墙体材料，按照国家有关规定享受税收优惠。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//7
					,
					{
						'title': '在绿色建筑进行废弃物处理的过程中，对于废弃物的处置应遵循无害化、减量化、资源化的原则。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//8
					,
					{
						'title': '符合绿色建筑标准的居民小区，人均公共绿地面积要达到1平方米。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//9
					,
					{
						'title': '符合绿色建筑标准的居民小区，必须在步行500米的范围内有公交车。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//10
					,
					{
						'title': '在取得国家绿色建筑一星级（二星级）认证的保障房小区中，公租房使用的都是太阳能热水器或空气能热水器。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//11
					,
					{
						'title': '符合绿色建筑标准的居民小区，周边要有学校、商业、社区中心等配套设施。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//12
					
					,
					{
						'title': '对建筑进行装修时不得破坏原有的围护结构、用能设备、可再生能源利用系统等设施。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//13
					,
					{
						'title': '公租房需要装修后才能入住。',
						'answers': ['√', '×'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
	//14
					,
					{
						'title': '城市道路、地面停车场等应优先使用透水性再生建筑材料。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	//15
					,
					{
						'title': '我省鼓励在建筑的外立面、结构层、屋面、地下空间和城市立交桥、护坡等构筑物上进行立体绿化。',
						'answers': ['√', '×'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
	


		],//文学题
		QUESTIONS_B = [
					{
						'title': '《南京市建筑节能示范项目管理暂行办法》中指出“建筑节能示范项目引导资金专项用于全市建筑节能示范项目的补助，重点支持：______',
						'answers': ['节能建筑示范项目、旧窗改造示范项目、绿色建筑示范项目、建筑节能监管体系建设示范项目', '既有建筑节能改造示范项目、绿色建筑示范项目、可再生能源建筑应用示范项目、建筑节能监管体系建设示范项目','既有建筑节能改造示范项目、绿色建筑示范项目、新墙材应用示范项目、建筑节能监管体系建设示范项目','既有建筑节能改造示范项目、绿色建筑示范项目、太阳能应用示范项目、建筑节能监管体系建设示范项目'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '南京市绿色建筑设计标识三星级示范项目按照建筑面积予以补助，补助标准为：______,最高不超过 ______。',
						'answers': ['8元/平方米、20万元 ', '5元/平方米、10万元 ','8元/平方米、10万元 ','5元/平方米、20万元'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					},
					{
						'title': '绿色建材是指在全生命期内减少对自然资源消耗和生态环境影响，具有“ ______ ”特征的建材产品。',
						'answers': ['节能、降耗、安全、便利和可循环', '清洁生产、减排、安全、便利和可循环','节能、减排、安全、便利和资源综合利用','节能、减排、安全、便利和可循环'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '以下哪个项目屋顶绿化面积最大？ ',
						'answers': ['江宁科技展览馆 ', '紫东创业园','朗诗钟山绿郡','苏宁易购总部'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '使用住房公积金贷款购买二星级以上绿色建筑的，贷款额度可以上浮百分之______，具体比例由住房公积金管理委员会确定。',
						'answers': ['30', '10','20','15'],
						'correct': 2,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '《绿色建筑行动方案》中提出“推进可再生能源建筑规模化应用”。可再生能源是指从自然界获取的、可以再生的非化石能源，以下哪些属于可再生能源？',
						'answers': ['火能、风能、太阳能等', '太阳能、浅层地能、生物质能等','太阳能、天然气、生物质能等','太阳能、浅层地能、核能等'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '以下说法正确的是______',
						'answers': ['绿色建筑不一定是节能建筑 ', '节能建筑一定是绿色建筑','低碳建筑一定是绿色建筑','绿色建筑一定是低碳建筑'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
		//8
					,
					{
						'title': '绿色建筑的核心内容是______',
						'answers': ['减少建筑对环境造成的污染', '减少能源资源消耗，减少对环境的破坏','减少对土地资源的的浪费','加强对资源的充分利用，减少浪费'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑中节约资源是指______',
						'answers': ['节能、节地、节水、节材', '节能、节地、节水、节时','节能、省钱、节水、节材','节能、省事、节水、节材'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '下列哪些产品不属于新型墙体材料? ',
						'answers': ['加气混凝土砌块', '小型混凝土空心砌块','烧结粘土砖','轻质隔墙板'],
						'correct': 2,
						'des': '',
						'size': [24, 24,24,24]
					}
			//11
					
					,
					{
						'title': '《江苏省绿色建筑发展条例》自______起实施。',
						'answers': ['2015年7月1日', '2015年1月1日','2016年1月1日','2015年7月1日'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '新建、改建、扩建建筑工程的建设单位，应当在办理______前按照国家和省的规定，向所在地墙体材料管理机构预缴新型墙体材料专项基金。建筑工程的主体工程竣工后，墙体材料管理机构应当根据国家和省的规定，按照建筑工程（含基础部分）使用新型墙体材料总量予以清算。',
						'answers': ['规划设计许可 ', '建筑工程施工许可','施工图审查','工程质量监督'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
		//13
					,
					{
						'title': '装修房子时，下列行为中属于绿色消费的是______',
						'answers': ['优先考虑价格，再考虑健康安全', '选择“绿色”建材，如水性涂料、节水洁具等','装修过程中买便宜的非环保性油漆','不考虑任何因素'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '建筑工程的 ______应当遵守建筑节能标准。',
						'answers': ['建设、设计、施工和监理单位', '建设单位','设计单位','施工和监理单位'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '节约资源是我国的基本国策，国家实施______能源发展战略。 ',
						'answers': ['开发为主，合理利用', '利用为主，加强开发','开发节约并举，把开发放在首位','开发节约并举，把节约放在首位'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
			//16
					,
					{
						'title': '南京市最大的屋顶光伏示范工程是：______',
						'answers': ['京沪高铁南京南站 ', '江宁科技展览馆','奥体新城紫薇园','南京众彩农副产品物流中心'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '下列属于不属于节能技术的是______。',
						'answers': ['通风采光设计', '带热回收装景的送排风系统','太阳能光热系统','采用高性能材料'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑和绿色建材评价等级划分为______级。 ',
						'answers': ['3', '5','7','9'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
			//19
					
					,
					{
						'title': '属于清洁又无污染的能源是______ ',
						'answers': ['太阳能', '天然气','核能','地能'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '近年来，建筑工业化板材在我市的建筑中被大量地应用，请问以下哪个建筑使用了建筑工业化板材：______',
						'answers': ['青奥场馆 ', '银城广场','江宁科技展览馆','江苏仙林生命科技创新园'],
						'correct': 0,
						'des': '',
						'size': [24, 24,24,24]
					}
		//21
					,
					{
						'title': '2010年，我市新规划建筑的迈皋桥创业园、马群花岗、西善桥岱山西侧、江宁上坊四个保障性住房，总面积约966万平方米，目前已有______万平方米以上的项目通过国家一星（部分二星）级绿色建筑认证。',
						'answers': ['400', ' 500','600','700'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '下列选项中不属于绿色建筑技术的有______',
						'answers': ['充分利用可再生能源', '尽量就地取材','合理利用非传统水源','使用黏土实心砖'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑设计评价标识有效期为______年? ',
						'answers': ['1年', '2年','3年','5年'],
						'correct': 2,
						'des': '',
						'size': [24, 24,24,24]
					}	
				//24	
				
				,
					{
						'title': '以下对绿色建筑表述不准确的是______',
						'answers': ['对环境无害', '能充分利用环境自然资','不破坏环境基本生态平衡条件','在建筑物旁种植绿色植被'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '下列选项中不属于建筑节材技术的是______。',
						'answers': ['采用高强、高性能建筑材料', '非传统水源利用的景观水体水质保障技术','材料生态化技术的应用 ','提高材料耐久性'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '下列不属于建筑节水措施的有______。 ',
						'answers': ['降低供水管网漏损率', '强化节水器具的推广应用','再生利用、中水回用和雨水回灌','采用地源热泵技术'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
			//27
					,
					{
						'title': '在促进绿色建筑发展的过程中的核心激励对象是______。',
						'answers': ['政府和购买者 ', '房地产投资单位和消费者','购买者和消费者','建设单位、购买者、消费者'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '住宅项目中未实行水、电、燃气分户分类计量收费，______获得绿色建筑评价标识',
						'answers': ['一定能', '一定不能','不一定能','以上都不对'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑节能材料的特点不包括______ 。 ',
						'answers': ['轻质', '高强','多功能','体积小'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
			//30
					
					,
					{
						'title': '下列哪种建筑材料放射性较高？ ',
						'answers': ['大理石', '花岗岩','瓷砖','木地板'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '可再生能源利用技术中不包括______',
						'answers': ['太阳能光电系统 ', '太阳能光热系统','地源热泵系统','节能灯具与照明控制系统'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
		//32
					,
					{
						'title': '绿色建筑设计理念不包括______。',
						'answers': ['回归自然', ' 节约资源','与人文历史环境相结合','乐观的生活态度'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑规划设计原则不包括______',
						'answers': ['节约生态环境资源', '使用可再生能源','追求最大经济利益','保护生态环境'],
						'correct': 2,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '绿色建筑市场发展阶段应采用______激励模式。 ',
						'answers': ['供给激励为主，需求激励为辅', '供给需求激励并重','需求激励为主，供给激励为辅','供给和需求都无足轻重'],
						'correct': 1,
						'des': '',
						'size': [24, 24,24,24]
					}
					,
					{
						'title': '以下不属于节约材料的措施是______。 ',
						'answers': ['使用可循环利用的建筑材料', '因地制宜，就地取材','减少二次搬运，最大限度降低材料损耗','采用铝合金门窗'],
						'correct': 3,
						'des': '',
						'size': [24, 24,24,24]
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
		var QAtp = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
		var QBtp = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34];
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
		$.getJSON('http://wxapp.njdaily.cn/2016/lsjz/result.php?jsoncallback=?',
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
		else if(_score >= 80){ _words = WORDS[2];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show();  BTN_FORM.show()}
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
			else if(_score >= 80){ _words = WORDS[2];SECTION_SCORE.find('.words').text(_words);	SECTION_RESULT.hide();		SECTION_SCORE.show(); BTN_FORM.show()}
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
		window.location.href='http://wxapp.njdaily.cn/2016/lsjz/'
		
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
			wxid	= "<?php echo $_SESSION['ID'] = 1?>";
			alert(wxid);
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
				url: 'http://wxapp.njdaily.cn/2016/lsjz/sign.php',
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
		window.location.href='./zp/'						
	})
});

