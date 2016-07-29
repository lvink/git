$(function() {
	
	//loadRewards();
	// 加载排行榜
	function loadRewards() {
		$.getJSON('http://vote.njdaily.cn/2014/yiliao/zp.php?jsoncallback=?',
			{'action': 'listRewardsToday', 'random': Math.random()},
			function(json) {
				var list = json.list, date = json.date;
				if(!list || list.length == 0) {
					$('#section-rewards h3').text(date + ' 获奖名单');
					$('#section-rewards ul').html('<div style="padding:30px 20px;">昨日还没有人中奖~</div>');
				} else {
					$('#section-rewards h3').text(date + ' 获奖名单');
					var _html = '';
					for(var i = 0; i < list.length; i++) {
						_html +=
							'<li class="f-cb">' +
							'	<div class="f-fl">' + list[i]['username'] + '</div>' +
							'	<div class="f-fr">' + list[i]['phone'] + '</div>' +
							'</li>'
						;
					}
					$('#section-rewards ul').html(_html);
				}
			}
		);
	}
});