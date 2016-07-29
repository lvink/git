<?php

require 'db.config.php';
//require 'utils.debug.php';

$status = true;
$aid = $_GET[aid] ? $_GET[aid] : $_POST[aid];
$aid = isset($aid) && is_numeric($aid) ? $aid : 0;

// 获得系统时间和投票的具体信息
$votetime = time();
$votetimeStr = date('Y-m-d H:i:s', $votetime);
$todayStartStr = substr($votetimeStr, 0, 10);
// 今天开始的时间戳
$todayStart = strtotime($todayStartStr);
// 今天结束的时间戳
$todayEnd = $todayStart + 60 * 60 * 24;
// 用户提交投票的来源地址
$fromurl = $_SERVER['HTTP_REFERER'];
// 用户提交投票的IP
$fromip = $_SERVER['REMOTE_ADDR'];

$sql = "select `l`.`id`,`l`.`title`,`l`.`vote_count`,`l`.`typeid`,`l`.`typename`,`l`.`vote_fromurl`,`l`.`vote_ip_distance`,`l`.`vote_ip_day`,`r`.`votetime`,`r`.`ip` " . 
		"from " . 
		"( " . 
			"SELECT `a`.`id`,`a`.`title`,`a`.`vote_count`,`a`.`typeid`,`t`.`typename`,`t`.`vote_fromurl`,`t`.`vote_ip_distance`,`t`.`vote_ip_day`  " . 
			"FROM `pk_archives` as `a`  " . 
			"join `pk_arctype` as `t`  " . 
			"WHERE `a`.`id`='{$aid}' and `t`.`id`=`a`.`typeid` " . 
		") as `l`  " . 
		"left join  " . 
		"( " . 
			"select `v`.`aid`, `v`.`votetime`,`v`.`ip`  " . 
			"from `votes` as `v` " . 
			"where `v`.`ip` = '{$fromip}' " . 
		") as `r` " . 
		"on (`l`.`id` = `r`.`aid`) " . 
		"order by `r`.`votetime` desc " . 
		"limit 1 ";

// 获得所投选项的具体信息
$item = $db->query($sql, 'one');

$checkFromurl = false;
$checkIPDistance = false;
$checkIPDay = false;
$tid = $item['typeid'];

// 判断来源网址是否是已设置的地址
$checkFromurl = !!$item['vote_fromurl'];
// 判断此IP之前是否已经投过票了
if($item['votetime'] > 0) {
	$checkIPDistance = $item['vote_ip_distance'] > 0;
	$checkIPDay = $item['vote_ip_day'] > 0;
}

if($checkFromurl) {
	if(!(strpos($fromurl, $item['vote_fromurl']) > 0)) {
		showMsg( '您的提交地址有误！' );
	}
}
if($checkIPDistance) {
	// 限制了同一IP两次投票时间间隔
	if($votetime - $item['votetime'] < $item['vote_ip_distance']) {
		showMsg( '您刚刚投过票了，请稍后再投！' );
	}	
}
if($checkIPDay) {
	// 限制了同一IP一天的总投票数
	$sql = "select count(*) as num from `votes` where `ip`='{$fromip}' and `tid`='" . $tid . "' and `votetime`>'{$todayStart}' and `votetime`<'{$todayEnd}' ";
	$count = $db->query($sql, 'one');
	$count = $count['num'];
	if($count >= $item['vote_ip_day']) {
		showMsg( '您今天的投票总数已满，请明天再投！' );
	}
}

// 验证完成，如果验证通过则增加投票
if($status) {
	$sqlUpdate = "update `pk_archives` set `vote_count`=`vote_count`+1 where `id`='{$aid}'";
	$sqlInsert = "insert into `votes`(`tid`,`aid`,`votetime`,`ip`,`fromurl`) values('{$tid}','{$aid}','{$votetime}','{$fromip}','{$fromurl}')";
	$db->execute($sqlUpdate);
	$db->execute($sqlInsert);
	
	showMsg( '恭喜您，投票成功！' );
}



// ==================================================================================================
// ==================================================================================================
function showMsg($msg) {
	$status = false;
	echo $msg;
	exit;
}


?>