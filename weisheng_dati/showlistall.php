<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{ margin:0; padding:0; font-family:"微软雅黑"}
ul{ list-style-type:none; width:740px}
li{ font-size:22px; height:42px; line-height:42px}
p{ font-size:30px; color:#cc5054}
.name{ width:150px; margin-left:10px; display:block; float:left}
.tel{ width:150px; margin-left:10px; display:block; float:left}
.award{ width:180px; margin-left:10px; display:block; float:left}
.times{ width:220px; margin-left:10px; display:block; float:left}
</style>
</head>
<body>

<?php

if($_POST['user'] != $super  ||  $_POST['pwd'] != $pwd){
	die("请登录");
}
$DBuser = "springfestival";
$DBpwd = "springfestival";
$DBname = "springfestival";
$DBip = "127.0.0.1";
$link = mysql_connect($DBip, $DBuser, $DBpwd);
mysql_select_db($DBname ,$link);
mysql_query("set names utf8");

$sql = "select * from hhdt where award in (2,4,6)";
//echo $sql;
$source = mysql_query($sql);
$list = array();
while($data = mysql_fetch_array($source)){
	$data['4'] = date("Y-m-d", $data['4']);
	array_push($list,$data);
}//全部数据
//print_r($list);
?>
<div>
<ul>
	<li><a class='name'>姓名</a><span class='tel'>电话</span><span class='award'>奖项级别</span><span class='times'>时间</span></li>
	<?php for($i=0;$i<count($list);$i++){
		if($list[$i]['award']=="2"){$yours = "100M流量";}
		else if($list[$i]['award']=="4"){$yours = "100M流量";}
		else if($list[$i]['award']=="6"){$yours = "100M流量";}

		echo "<li><a class='name'>".$list[$i]['name']."</a><span class='tel'>".$list[$i]['tel']."</span><span class='award'>".$yours."</span><span class='times'>".date("Y/m/d H:i:s",$list[$i]['dtime'])."</span></li>";
	}
	?>
</ul>
</div>
</body>
</html>