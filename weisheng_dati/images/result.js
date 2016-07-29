$(function() {
	
	var phone = $.cookie('phone');
	loadBoard(phone);
	// 加载排行榜
	function loadBoard(phone) {
		$.getJSON('http://vote.njdaily.cn/2015/meishan/result.php?jsoncallback=?',
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
			}
		);
	}
	
	function getSecondsUsedStr(secondsUsed) {
		var seconds = secondsUsed % 60,
			minutes = (secondsUsed - seconds) / 60;
		seconds = seconds < 10 ? '0' + seconds : seconds;
		return minutes + ':' + seconds;
	}
});