<?php

// ====================================
include 'db.config.php';
include 'utils.net.php';
$_TOTAL				= 10;
$_SECTION			= 1; // 活动期数
$_table				= 'plugin_sign_weisheng_dati';
$json 				= leen_sql_escape(leen_getParameter('jsoncallback'));
$action	 			= leen_sql_escape(leen_getParameter('action'));
//$phone	 			= leen_sql_escape(leen_getParameter('phone'));
$uname 				= leen_sql_escape(leen_getParameter('name'));

// 获得参与人数
$sql				= "SELECT count(*) AS `num` FROM `{$_table}` WHERE `status`>'-1'";
$item				= $db->query($sql, 'one');
$joinedCount		= $item['num'];

// 获得前8名数据
$sql				= "SELECT @rownum:=@rownum+1 AS rownum,`username`,`phone`,`score`,`seconds` FROM  (SELECT @rownum:=0) r,`{$_table}` WHERE `status` > '-1' AND `section`='{$_SECTION}'  ORDER BY `score` DESC,`seconds` ASC,`signtime` ASC LIMIT {$_TOTAL}";
$board				= $db->query($sql);

for($i = 0; $i < count($board); $i++) {
	$board[$i]['my'] = '0';
}
if($uname) {
		// 获得指定手机号的排名
		$sql			= "SELECT `rownum`,`username`,`phone`,`score`,`seconds` FROM (SELECT @rownum:=@rownum+1 AS rownum,`username`,`phone`,`score`,`seconds` FROM (SELECT @rownum:=0) r,`{$_table}` WHERE `status` > '-1' AND `section`='{$_SECTION}' ORDER BY `score` DESC,`seconds` ASC,`signtime` ASC) t WHERE `username`='{$uname}'";
		$user			= $db->query($sql, 'one');
		$userOrder		= $user['rownum'];
		$user['my']		= '1';
		// 能排进前几
		if($userOrder <= $_TOTAL) {
			$board[$userOrder - 1] = $user;
		} else {
			$board[$_TOTAL - 1] = $user;
		}
}
$data = array(
	'joinedCount' 	=> $joinedCount + 1500,
	'board'			=> $board
);
$result 			= json_encode($data);
echo $json . '(' . $result . ')';