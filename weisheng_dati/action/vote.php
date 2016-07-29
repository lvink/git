<?php
die();
session_start();
$code = trim($_POST['code']);
if($code!=$_SESSION["helloweba_math"]){
	die('err2');
}
//各种过滤
function guolv($value){
	$value = preg_replace("/(javascript:)?on(click|load|key|mouse|error|abort|move|unload|change|dblclick|move|reset|resize|submit)/i","&111n\\2",$value);
	$value = preg_replace("/(.*?)<\/script>/si","",$value);
	$value = preg_replace("/(.*?)<\/iframe>/si","",$value);
	$value = preg_replace ("//iesU", '', $value);
	if (function_exists('htmlspecialchars')) return htmlspecialchars($value);
	$value =  str_replace(array("&", '"', "'", "<", ">"), array("&", "\"", "'", "<", ">"), $value);
	$sql = array("select", 'insert', "update", "delete", "\'", "\/\*",
		 "\.\.\/", "\.\/", "union", "into", "load_file", "outfile");
	$sql_re = array("","","","","","","","","","","","");
	$value =  str_replace($sql, $sql_re, $value);
	return $value;
}

if( !empty($_COOKIE['commercial']) && $_COOKIE['commercial'] == "house"){
 die('err');
}
//ini_set('date.timezone','Asia/Shanghai'); // 'Asia/Shanghai' 为上海时区 
date_default_timezone_set('PRC'); 
$data = $_POST['info'];

$data2 = $_POST['info'];

$ip = getIP();
$time = date("Y-m-d H:i:s",time());
$data = substr($data,0,strlen($data)-1);
$data = explode(",",$data);
$link = mysql_connect("127.0.0.1","springfestival","springfestival");
mysql_select_db("logo_vote",$link);
for($i=0;$i<count($data);$i++){
	$str.= "$data[$i],";
}
mysql_query("set names utf8");
$str = substr($str,0,strlen($str)-1);
$sql = "update logo_vote set number = number+1 where id in(".$str.")";
mysql_query($sql);


//执行动作记录
$sql2 = "insert into action (`ip`,`dtime`,`url`) values ('".$ip."', '".date("Y m d H:i:s",time())."', '".$data2."')";
mysql_query($sql2);


setcookie("commercial", "house" , time()+ 86400);
function filter($a){
	if (!get_magic_quotes_gpc()) {    // 判断magic_quotes_gpc是否为打开      
		$a = addslashes($a);    // 进行magic_quotes_gpc没有打开的情况对提交数据的过滤      
	  }           
	  $a = htmlspecialchars($a);    // html标记转换      
	  return $a; 
}
function getIP() {
	if (getenv('HTTP_CLIENT_IP')) {
		$ip = getenv('HTTP_CLIENT_IP');
	}
	elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif (getenv('HTTP_X_FORWARDED')) {
		$ip = getenv('HTTP_X_FORWARDED');
	}
	elseif (getenv('HTTP_FORWARDED_FOR')) {
		$ip = getenv('HTTP_FORWARDED_FOR');
	}
	elseif (getenv('HTTP_FORWARDED')) {
		$ip = getenv('HTTP_FORWARDED');
	}
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
} 
?>