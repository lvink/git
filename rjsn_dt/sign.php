<?php

// echo 8;
// exit;

// ====================================
include 'plus/db.config.php';
include 'plus/utils.net.php';

$_status = true;

// ------------------------------------
// Configerations
// ------------------------------------
$plugin_votes_table	= 'plugin_sign_rjsn';

$limit_distance 	= 86400;
$limit_fromurl 		= 'wxapp.njdaily.cn/';

$check_fromurl 		= true;
$check_ipdistance 	= true;
// ------------------------------------
// Response Status Code
// ------------------------------------
$status_ok 			= 1;
$status_param 		= 2;
$status_url 		= 3;
$status_distance 	= 4;
$status_used 		= 7;
// ------------------------------------
// Request Parameters
// ------------------------------------
$username 			= leen_sql_escape(leen_getParameter('username'));
$phone 				= leen_sql_escape(leen_getParameter('phone'));
$answers 			= leen_sql_escape(leen_getParameter('answers'));
$score 				= leen_sql_escape(leen_getParameter('score'));
$area				= leen_sql_escape(leen_getParameter('area'));
$wxid				= leen_sql_escape(leen_getParameter('wxid'));
$school 			= leen_sql_escape(leen_getParameter('school'));
$grade 			= leen_sql_escape(leen_getParameter('grade'));
$section 			= 1;// 活动期数
$seconds 			= leen_sql_escape(leen_getParameter('seconds'));
if($seconds < 10 && $score == 115) showMessage($status_param);

// ------------------------------------
// Vote Informations
// ------------------------------------
$signtime = time();
$signtimes = date('Y-m-d H:i:s', $signtime);
$fromurl = $_SERVER['HTTP_REFERER'];
$fromip = leen_getClientIP();

$yesterday = strtotime(date('Y-m-d',time()));//当前day的时间戳转义两次得到0点时间戳
$oneday = 86400;//一天的时间
$tmpimte = $yesterday + $oneday; 
$yesterday = $yesterday;
$tmpimte =  $tmpimte - 1;

// ------------------------------------
// Start Validate
// ------------------------------------
$sql1 = "SELECT count(sid) as num from `{$plugin_votes_table}` WHERE `wxid`='{$wxid}'";
$item1 = $db->query($sql1, 'one');
if($item1['num'] >=1){
	showMessage( $status_distance );
}
$sql = "SELECT `signtime`,`wxid` FROM `{$plugin_votes_table}` WHERE `wxid`='{$wxid}' ORDER BY `signtime` DESC LIMIT 1";
$item = $db->query($sql, 'one');

$lastsigntime = isset($item['signtime']) ? $item['signtime'] : 0;
if($check_fromurl) {
	if(!(strpos($fromurl, $limit_fromurl) > 0)) {
		showMessage( $status_url );
	}
}
//if($check_ipdistance) {
	//if($lastsigntime > $yesterday && $lastsigntime < $tmpimte) {
		//showMessage( $status_distance );
	//}
//}
/*
$sql = "SELECT `signtime`,`phone` FROM `{$plugin_votes_table}` WHERE `phone`='{$phone}' AND `section`='{$section}' AND `status`>'0' ORDER BY `signtime` DESC LIMIT 1";
$item = $db->query($sql, 'one');
$_phone = $item['phone'] ? $item['phone'] : '';
if($_phone !== '') {
	showMessage( $status_used );
}
*/
if($_status) {
	$status = 1;
	//$sqlUpdate = "UPDATE `pk_archives` SET `vote_count`=`vote_count`+1 WHERE `id`={$vote}";
	$sqlInsert = "INSERT INTO `{$plugin_votes_table}`" . 
		"(`username`,`phone`,`answers`,`score`,`seconds`,`section`,`signtime`,`signtimes`,`ip`,`status`,`tearm`,`wxid`,`school`,`grade`) VALUES " . 
		"('{$username}','{$phone}','{$answers}','{$score}','{$seconds}','{$section}','{$signtime}','{$signtimes}','{$fromip}','{$status}','{$area}','{$wxid}','{$school}','{$grade}')";
	//$db->execute($sqlUpdate);
	$db->execute($sqlInsert);
	//$sqlInsert = "INSERT INTO `plugin_sign_26` (`username`,`phone`,`answers`,`score`,`seconds`,`section`,`signtime`,`signtimes`,`ip`,`status`) VALUES ('砳砳','13100000000','10000','95','34','{$section}','{$signtime}','{$signtimes}','127.0.0.1','1')";
	//$db->execute($sqlInsert);
	//$db->execute($sqlInsert);
	//$db->execute($sqlInsert);
	
	
	showMessage( $status_ok );
}

// ----------------------------------
function showMessage($message) {
	$_status = false;
	echo $message;
	exit;
}