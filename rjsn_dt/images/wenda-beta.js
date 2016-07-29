$(function() {
	
	// 题目数据
	var SECTION		= 5,
		// 附加题
		QUESTION_EXTRA = {
			'title': '工行个人“逸贷”产品的协议不可以通过（）渠道签定',
			'answers': ['网上银行', '手机银行', '电话银行', '柜面'],
			'correct': 2,
			'des': '个人“逸贷”客户可以在消费前通过网上银行、手机银行、自助终端、柜面等渠道自行签定《个人“逸贷”产品协议，也可在初次办理贷款时签定协议。电话银行不适用该协议的签定。',
			'size': [24, 24, 24, 24]
		},
		// 固定的三题
		QUESTIONS_3	= [
			// 1
			{
				'title': '“青奥会”全称是青少年奥林匹克运动会，英文的缩写是：',
				'answers': ['TYOG', 'YOG', 'OLY', 'AYH'],
				'correct': 1,
				'des': '青奥会英文名称：Youth Olympic Games，英文缩写：YOG。',
				'size': [24, 24, 24, 24]
			},
			// 2
			{
				'title': '7月16日，《南京日报》百人百天专栏专访了南京青奥组委副主席兼秘书长、市长缪瑞林，缪市长透露，不久前国际奥委会执行主任菲利一行代表国际奥委会来宁进行第四次项目评估，如果满分是100分，南京能得多少分？',
				'answers': ['90', '95', '96', '98'],
				'correct': 3,
				'des': '国际奥委会执行主任菲利当时评价：“如果满分是100分，南京青奥会现在的准备工作可以得98分。”',
				'size': [24, 24, 24, 24]
			},
			// 3
			{
				'title': '为提高双语服务水平，青奥期间工行江苏省分行营业部将增设______,提供24小时双语服务。',
				'answers': ['青奥热线', '青奥专线', '砳砳专线', '砳砳热线'],
				'correct': 1,
				'des': '青奥期间工行江苏省分行营业部将增设青奥专线,提供24小时双语服务。',
				'size': [24, 24, 24, 24]
			}
		],
		QUESTIONS_ALL	= 
		[
			// 4
			{
				'title': '2010年首届青奥会会徽的名字叫做什么？',
				'answers': ['未来之星', '希望之星', '少年之星', '青春之星'],
				'correct': 3,
				'des': '2009年1月10日，2010年首届青奥会会徽在新加坡公布，该新加坡青奥会会徽的名字叫做“青春之星”（spirit of youth）。',
				'size': [24, 24, 24, 24]
			}
			,
			// 5
			{
				'title': '首届吉祥物是什么？',
				'answers': ['利奥和梅利', '杰瑞和梅利', '利奥和莉莎', '杰瑞和莉莎'],
				'correct': 0,
				'des': '利奥（Lyo）是“青奥之狮”（Lion of the Youth Olympics）的缩写。梅利（Merly）的名字取自“mer”（表示海）和 “ly”， 代表着青春与活力。',
				'size': [24, 24, 24, 24]
			},
			// 6
			{
				'title': '中国递交申办2014年第二届青年奥运会的申请城市为？',
				'answers': ['北京', '南京', '青海', '镇江'],
				'correct': 1,
				'des': '国际奥委会第122届全会2010年2月11日凌晨在温哥华决定，将2014年第二届夏季青年奥林匹克运动会的承办权授予中国南京市。',
				'size': [24, 24, 24, 24]
			},
			// 7
			{
				'title': '青奥会有夏季和冬季之分吗？',
				'answers': ['有', '没有', '不确定', '暂时没有'],
				'correct': 0,
				'des': '青奥会与奥运会一样也是每4年举办一届，分为冬季青奥会和夏季青奥会。2010年8月，新加坡举办首届夏季青年奥运会。2014年的夏季青奥会举办权花落南京。',
				'size': [20, 20, 20, 20]
			},
			// 8
			{
				'title': '梅利(Merly)的名,代表什么？',
				'answers': ['希望与未来', '青春与活力', '健康与追求', '快乐与成长'],
				'correct': 1,
				'des': '梅利（Merly）的名字取自“mer”（表示海）和 “ly”， 代表着青春与活力。',
				'size': [24, 24, 24, 24]
			},
			// 9
			{
				'title': '“青奥会”全称是青少年奥林匹克运动会，英文的缩写是：',
				'answers': ['TYOG', 'YOG', 'OLY', 'AYH'],
				'correct': 1,
				'des': '青奥会英文名称：Youth Olympic Games，英文缩写：YOG。',
				'size': [24, 24, 24, 24]
			},
			// 10
			{
				'title': '与奥运会一样，青奥会分夏季青奥会和冬季青奥会，夏季青奥会和冬季青奥会每几年举行一次。',
				'answers': ['1', '2', '3', '4'],
				'correct': 3,
				'des': '青奥会与奥运会一样也是每4年举办一届，分为冬季青奥会和夏季青奥会。',
				'size': [24, 24, 24, 24]
			},
			// 11
			{
				'title': '青奥会包括武术、摔跤、举重等几个大项？',
				'answers': ['28', '25', '26', '27'],
				'correct': 0,
				'des': '夏季青奥会项目包括游泳、划船、帆板、射击、乒乓球、跆拳道、网球、铁人三项、、摔跤（女子自由式摔跤、男子古典式摔跤）高尔夫、橄榄球等28个大项。',
				'size': [24, 24, 24, 24]
			},
			// 12
			{
				'title': '以下哪个不是南京的曾用名？',
				'answers': ['上京', '建安', '金陵', '白下'],
				'correct': 0,
				'des': '南京历史上的曾用名很多，官方认定有44种曾用名，上京为辽国都城，故址在今内蒙古巴林左旗东镇南',
				'size': [24, 24, 24, 24]
			},
			// 13
			{
				'title': '紫金山海拔是多少？',
				'answers': ['448.9米', '445.7米', '443.4米', '442.6米'],
				'correct': 0,
				'des': '紫金山主峰海拔448.9米，周围约30公里，三峰相连形如巨龙，山、水、城浑然一体，雄伟壮丽，气势磅礴，古有“钟山龙蟠，石城虎踞”之称，早在三国与汉朝就极负盛名。',
				'size': [24, 24, 24, 24]
			},
			// 14
			{
				'title': '国际奥委会主席罗格在哪座城市宣布南京获得2014年青奥会主办权？',
				'answers': ['布鲁塞尔', '温哥华', '伯尔尼', '巴黎'],
				'correct': 1,
				'des': '国际奥委会第122届全会2010年2月11日凌晨在温哥华决定，将2014年第二届夏季青年奥林匹克运动会的承办权授予中国南京市。',
				'size': [24, 24, 24, 24]
			},
			// 15
			{
				'title': '青奥会的“文化和教育项目”的英文单词缩写是（），它是青奥会的一个特色。',
				'answers': ['EDE', 'CEP', 'COD', 'EDA'],
				'correct': 1,
				'des': '青奥会的“文化和教育项目”的英文单词缩写是CEP。源自于国际奥委会在创建青奥会时的构想，就是希望通过“文化和教育项目”，选手在青奥会上不仅能获得比赛经验，而且能获得更多的文化知识和文化体验，使运动员获得全面的发展。',
				'size': [24, 24, 24, 24]
			},
			// 16
			{
				'title': '南京铺几条地铁献礼青奥会？',
				'answers': ['3条', '5条', '7条', '9条'],
				'correct': 2,
				'des': '南京将铺7条地铁献礼青奥会。青奥会前南京地铁除了已开工的三号线、一号线西延线外，还有望开工建设5条线。四年内，南京将通车和开建7条地铁线。',
				'size': [24, 24, 24, 24]
			},
			// 17
			{
				'title': '首届青年冬奥会在哪个国家举办？',
				'answers': ['奥地利', '布鲁塞尔', '巴黎', '瑞典'],
				'correct': 0,
				'des': '国际奥委会主席罗格在洛桑国际奥委会总部宣布，奥地利的因斯布鲁克获得2012年首届青年冬季奥运会举办权。',
				'size': [24, 24, 24, 24]
			},
			// 18
			{
				'title': '首届青奥会原则上定有多少个比赛项目？',
				'answers': ['22个', '24个', '26个', '28个'],
				'correct': 2,
				'des': '首届青奥会比赛为期12天，比赛项目已经原则上确定为26个大项。同时，所有国家和地区奥委会还将在青年夏奥会的教育和文化计划中派出代表。',
				'size': [24, 24, 24, 24]
			},
			// 19
			{
				'title': '南京青奥会官网不包括下列哪种语言的版本？',
				'answers': ['中文', '英文', '法文', '韩文'],
				'correct': 3,
				'des': '南京青奥会官网有中、英、法文版。',
				'size': [24, 24, 24, 24]
			},
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
			'好嘛，下一届奥委会主席就是你了！',
			'你的智商除以二，也够得上聪明了！',
			'错的好像有点多，要不再来一次？',
			'像你这“智商”，基本已经告别自行车了！',
			'我觉得我们还是聊聊世界杯吧~'
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
		remixCount		= 7,
		// 题目总数
		totalTimus		= remixCount + QUESTIONS_3.length,
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
	var questionsTempIndexes 	= [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],
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
		//console.log(QUESTIONS);
		
		
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
		QUESTIONS = QUESTIONS_3.concat(_QUESTIONS);
		QUESTIONS = QUESTIONS.concat(QUESTION_EXTRA);
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
		$.getJSON('http://vote.njdaily.cn/2014/wenda/result.php?jsoncallback=?',
			{'action': 'board', 'phone': phone, 'random': Math.random()},
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
		if(curTimu == totalTimus - 1) {
			BTN_NEXT.css('backgroundColor', '#ff6d6d');
			BTN_NEXT.text('挑战附加题');
			BTN_CANCEL.show();
			SECTION_RESULT.find('.extra-des').show();
		}
		// 进入得分页面
		else if(curTimu == totalTimus) {
			//BTN_NEXT.css('backgroundColor', '#ff6d6d');
			BTN_NEXT.text('答完了，查看得分');
			SECTION_RESULT.find('.extra-des').hide();
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
		else if(_score >= 70) _words = WORDS[1];
		else if(_score >= 55) _words = WORDS[2];
		else if(_score >= 35) _words = WORDS[3];
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
			if(rightCount >= 5) rightCount = 5;
			ICON_RIGHT.find('.icon').hide();
			// 附加题的答题结果
			if(curTimu >= totalTimus) {
				ICON_RIGHT.find('.icon.icon-' + parseInt(6 + 10 * Math.random())).show();
				//ICON_RIGHT.find('.icon.icon-' + 12).show();
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
			if(wrongCount >= 5) wrongCount = 5;
			ICON_WRONG.find('.icon').hide();
			// 附加题的答题结果
			if(curTimu >= totalTimus) {
				ICON_WRONG.find('.icon.icon-' + parseInt(6 + 10 * Math.random())).show();
				//ICON_WRONG.find('.icon.icon-' + 11).show();
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
		if(curTimu >= totalTimus) {
			var _score = parseInt(score / totalTimus * 100) + (extraCorrect ? 15 : 0);
			SCORE_SCORE.text(_score);
			SCORE_TIME.text(getSecondsUsedStr(secondsUsed));
			// 显示成绩祝语
			var _words = '';
			if(_score >= 90) _words = WORDS[0];
			else if(_score >= 70) _words = WORDS[1];
			else if(_score >= 55) _words = WORDS[2];
			else if(_score >= 35) _words = WORDS[3];
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
		
		BTN_NEXT.css('backgroundColor', '#18a1ec');
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
	// 显示与隐藏提交成绩表单
	BTN_FORM.click(function() {
		$('#section-score .userinfo-form').animate({'marginTop': '0px'}, 600);
	});
	BTN_BACK.click(function() {
		$('#section-score .userinfo-form').animate({'marginTop': '-260px'}, 600);
	});
	// 提交成绩表单
	$('#btn-submit').click(function() {
		var username	= $.trim($('#username').val()),
			phone		= $.trim($('#phone').val());
		if(username == '') {
			formError('请填写您的姓名！');
			return false;
		} else if(!phone.match(/^1\d{10}$/)) {
			formError('请填写有效的手机号！');
			return false;
		} else {
			curPhone = phone;
			$.cookie('phone', curPhone, { expires: 365, path: '/' });
			$.cookie('username', username, { expires: 365, path: '/' });
			$.ajax({
				url: 'http://vote.njdaily.cn/2014/wenda/sign.php',
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
});