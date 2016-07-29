<?php
date_default_timezone_set('Asia/Shanghai');
//当前小时数
$h = date("H",time());
$Y = date("Y",time());
$m = date("m",time());
$d = date("d",time());



if(time()>"1469203140"){
	$result['err']="3";
	echo json_encode($result); //活动完毕
	exit;	
}



$DBuser = "springfestival";
$DBpwd = "springfestival";
$DBname = "springfestival";
$DBip = "127.0.0.1";
$link = mysql_connect($DBip, $DBuser, $DBpwd);
mysql_select_db($DBname ,$link);
mysql_query("set names utf8");
//数据库   ID name tel ip dtime award status

$username = guolv($_REQUEST['name']);
$tel = guolv($_REQUEST['tel']);
$d_wxopenid = guolv($_REQUEST['wx_id']);

//验证用户输入信息完整性
if(strlen($tel) != 11){
	$result['err']="0";
	echo json_encode($result); //数据不完整
	exit;	
}

if(empty($username) || empty($tel)){
	$result['err']="0";
	echo json_encode($result); //数据不完整
	exit;
}
if($username=="" || $tel==""){
	$result['err']="0";
	echo json_encode($result); //数据不完整
	exit;
}

if(empty($d_wxopenid) || $d_wxopenid==""){
	$result['err']="0";
	echo json_encode($result); //数据不完整
	exit;
}

//计算当天的时间戳跨度
$yesterday = strtotime(date('Y-m-d',time()));//当前day的时间戳转义两次得到0点时间戳
$oneday = 86400;//一天的时间
$tmpimte = $yesterday + $oneday; 
$yesterday = $yesterday;
$tmpimte =  $tmpimte - 1;

$sql = "select * from wsdt where award in (2,4,6)  and wxid = '".$d_wxopenid."'";
$data1 = mysql_query($sql);
$dos = mysql_affected_rows();
if($dos>=1){
	$result['err'] = "4";
	echo json_encode($result);//中过奖的不能中了
	exit;
}
/*
$sql = "select dtime from wsdt where wxid = '".$d_wxopenid."' order by id desc LIMIT 1 ";
$data2 = mysql_query($sql);
$rs = mysql_fetch_assoc($data2);
$signtime = time();

if($signtime - $rs['dtime'] <7200){
	$result['err'] = "5";
	echo json_encode($result);//两个小时
	exit;
}
*/

$sql = "select count(id) as an from wsdt where dtime > $yesterday and dtime < $tmpimte and wxid = '".$d_wxopenid."'";
$data = mysql_query($sql);
$rs = mysql_fetch_array($data);

if($rs['an']>=1){
	$result['err']="1";
	echo json_encode($result);//每天只允许抽奖1次
	exit;
}


//中奖信息

$prize_arr = array( 
    '0' => array('id'=>1,'min'=>1,'max'=>55,'prize'=>'x1','v'=>40), 		//瓣一	无奖
    '1' => array('id'=>2,'min'=>65,'max'=>110,'prize'=>'x2','v'=>10), 		//瓣二	50元
    '2' => array('id'=>3,'min'=>125,'max'=>170,'prize'=>'x1','v'=>10), 		//瓣三	无奖
    '3' => array('id'=>4,'min'=>185,'max'=>240,'prize'=>'x3','v'=>10),		//瓣四	50元
    '4' => array('id'=>5,'min'=>255,'max'=>300,'prize'=>'x1','v'=>10),		//瓣五	无奖
    '5' => array('id'=>6,'min'=>310,'max'=>355,'prize'=>'x4','v'=>20)		//瓣六	50元
);

function getRand($proArr) { 
    $result = ''; 
    //概率数组的总概率精度 
    $proSum = array_sum($proArr); 
    //概率数组循环 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $result = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        } 
    } 
    unset ($proArr); 
    return $result; 
} 

foreach ($prize_arr as $key => $val) { 
    $arr[$val['id']] = $val['v']; 
} 


$j1 = "0";
$j2 = "0";
$j3 = "0";
$j4 = "0";
$j5 = "0";
$j6 = "0";

$sql2 = "select award from wsdt where  (dtime > $yesterday and dtime < $tmpimte) and (award <> 1 and award <> 3 and award <> 5)";
$data = mysql_query($sql2);
$list = array();
while($rs = mysql_fetch_array($data)){
	array_push($list,$rs);
}//全部数据

foreach($list as $val){
	if($val['award']==1){$j1++;}
	else if($val['award']==2){$j2++;}//1等奖
	else if($val['award']==3){$j3++;}
	else if($val['award']==4){$j4++;}//特等奖
	else if($val['award']==5){$j5++;}
	else if($val['award']==6){$j6++;}//3等奖

}

$rid = getRand($arr); //根据概率获取奖项id 

$six = $yesterday + 21600;
$twelve = $yesterday + 43200;
$eighteen = $yesterday + 64800;
$time = time();

if($yesterday<$six){		//0点---6点
	$deb2 = "2";
	$deb4 = "2";
	$deb6 = "2";
}
if($six<$time && $time<$twelve){ 		//6点----12点
	$deb2 = "4";
	$deb4 = "3";
	$deb6 = "4";
}
if($twelve<$time && $time<$eighteen){	//12点----18点
	$deb2 = "4";
	$deb4 = "4";
	$deb6 = "7";
}
if($eighteen<$time && $time<$tmpimte){//18点---24点
	$deb2 = "6";
	$deb4 = "5";
	$deb6 = "9";
}

//奖项统计
if(time()<"1468796400"){
	$rid=3;
}
if($j2>=$deb2){
	if($rid==2){$rid=1;}
}
if($j4>=$deb4){
	if($rid==4){$rid=3;}
}
if($j6>=$deb6){
	if($rid==6){$rid=5;}
}

//每天只能中1次
//
/*
$sql = "select count(id) as ak from qhdh2016_2 where dtime > $yesterday and dtime < $tmpimte and tel = '".$tel."' and award <> 2 and award <> 4 and award <> 6 and award <> 7 and award <> 8";
$data = mysql_query($sql);
$rs2 = mysql_fetch_array($data);
if($rs2['ak']>=1){
	$rid = 1;
}
*/
$res = $prize_arr[$rid-1]; //中奖项 
$min = $res['min']; 
$max = $res['max'];

/*	
	if($res['id']==7){ //七等奖有多个角度所有需要单独判断角度
		$i = mt_rand(0,5); 
		$result['angle'] = mt_rand($min[$i],$max[$i]); 
	}else{ 
		$result['angle'] = mt_rand($min,$max); //随机生成一个角度 
	}
*/
$result['angle'] = mt_rand($min,$max); //随机生成一个角度  
$result['prize'] = $res['prize']; 
$result['id'] = $res['id'];//存储在数据库的奖项id


function GetIP(){
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
	$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
	$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
	$ip = getenv("REMOTE_ADDR");
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
	$ip = $_SERVER['REMOTE_ADDR'];
	else
	$ip = "unknown";
	return($ip);
} 


//第二次进入
/*
if($tel=='' || $username==''){
	$sql3 = "select dtime,name,tel from wsdt where wxid = '".$d_wxopenid."' order by id desc LIMIT 1";

	$data3 = mysql_query($sql3);
	$rs3 = mysql_fetch_assoc($data3);
	$username = $rs3['name'];
	$tel = $rs3['tel'];
}
*/
$sql = "insert into wsdt (name, tel, ip, dtime, award, status, wxid) VALUES ('". $username ."', '". $tel ."', '". GetIP()."', '". time() ."', '". $result['id'] ."', '0','".$d_wxopenid."')";
if(mysql_query($sql)){
	//抽奖流程完毕之后清除cookie,强迫用户去玩第二次,当然可以伪造,不过不考虑
	setcookie("phone", "", time()-3600,"/");
	setcookie("username", "", time()-3600,"/");
	setcookie("sc", "", time()-3600,"/");
	echo json_encode($result); 
}else{
	$result['err']="2";
	echo json_encode($result); 
}



//各种过滤
function guolv($value){
	if (function_exists('htmlspecialchars')) return htmlspecialchars($value);
	return $value;
}
?>