<?php
$yesterday = strtotime(date('Y-m-d',strtotime('-1 day')));//当前day的时间戳转义两次得到0点时间戳
$oneday = 86400;//一天的时间
$tmpimte = $yesterday + $oneday; 
$yesterday = $yesterday - 1;
$tmpimte =  $tmpimte + 1;

$DBuser = "root";
$DBpwd = "123qwe";
$DBname = "pk";
$DBip = "localhost";
$link = mysql_connect($DBip, $DBuser, $DBpwd);
mysql_select_db($DBname ,$link);
mysql_query("set names utf8");

$sql = "select name,tel,award from qhdh2016 where award <> 1 and award <> 3 and award <> 5 and award <> 7 and dtime > $yesterday and dtime < $tmpimte";

$source = mysql_query($sql);
$list = array();
while($data = mysql_fetch_array($source)){
	if($data['award']=="2"){$data['award'] = "中得将可领取由“秦淮发布”提供的夫子庙大成殿观灯门票1张";}
	else if($data['award']=="4"){$data['award'] = "中得将可领取由“秦淮发布”提供的夫子庙大成殿观灯门票1张";}
	else if($data['award']=="6"){$data['award'] = "中得将可领取由“秦淮发布”提供的夫子庙大成殿观灯门票1张";}
	else if($data['award']=="8"){$data['award'] = "中得将可领取由“秦淮发布”提供的夫子庙大成殿观灯门票1张";}
	$data['tel'] = substr_replace($data['tel'],'****',3,4);
	array_push($list,$data);
}
$data = array(
	'list' 		=> $list,
	'date'		=> $yesterday
);
$result 		= json_encode($data);
echo $json . '(' . $result . ')';

