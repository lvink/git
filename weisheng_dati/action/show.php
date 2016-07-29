<?php
	$DBuser = "springfestival";
	$DBpwd = "springfestival";
	$DBname = "logo_vote";
	$DBip = "127.0.0.1";
	$link = mysql_connect($DBip, $DBuser, $DBpwd);
	mysql_select_db($DBname ,$link);
	mysql_query("set names utf8");

$sql = "select * from logo_vote";
$data = mysql_query($sql);
$sql2 = "SELECT SUM(number) as allnum ,Max(number) as maxnum FROM `logo_vote`";
$data2 = mysql_query($sql2);
$allnumber =  mysql_result($data2,0);
$maxnumber =  mysql_result($data2,0,1);

//格式输出
$i=1;
while($row=mysql_fetch_array($data)){
	$rs[$i]['number']=round($row['number']/$maxnumber*100,2)."%";
	$rs[$i]['text']=round($row['number']/$allnumber*100,2)."%";
	$i++;
}
$rs = json_encode($rs);
mysql_close($link);
print_r($rs);

?>