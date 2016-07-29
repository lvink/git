<?php
date_default_timezone_set('Asia/Shanghai');

$DBuser = "";
$DBpwd = "";
$DBname = "";
$DBip = "127.0.0.1";
$link = mysql_connect($DBip, $DBuser, $DBpwd);
mysql_select_db($DBname ,$link);
mysql_query("set names utf8");
//数据库   ID name tel ip dtime award status

$username = guolv($_REQUEST['name']);
$tel = guolv($_REQUEST['tel']);
$d_wxopenid = guolv($_REQUEST['d_wxopenid']);


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

if($tmpimte > 1420041600){
	$result['err']="8";
	echo json_encode($result); //时间到了，不可以抽了
	exit;
}

$sql = "select * from sdj_gulou where award in (1,3,4,5,6,7,9,10,11,12)  and wxopenid = '".$d_wxopenid."'";
$data1 = mysql_query($sql);
$dos = mysql_affected_rows();
if($dos>=1){
	$result['err'] = "3";
	echo json_encode($result);//中过奖的不能中了
	exit;
}

$sql = "select count(id) as an from sdj_gulou where dtime > $yesterday and dtime < $tmpimte and wxopenid = '".$d_wxopenid."'";
$data = mysql_query($sql);
$rs = mysql_fetch_array($data);
if($rs['an']>=1){
	$result['err']="1";
	echo json_encode($result);//每天只允许抽奖1次
	exit;
}


//中奖信息
//多个中奖点的话 用数组的方式实现
/*
$prize_arr = array( 
	//这里的min 和 max是中奖的对应图片的角度  v是中奖率
    '0' => array('id'=>1,'min'=>5,'max'=>50,'prize'=>'x1','v'=>10), 		//瓣一	无奖
    '1' => array('id'=>2,'min'=>70,'max'=>110,'prize'=>'x2','v'=>20), 		//瓣二	大礼包价值199元一张
    '2' => array('id'=>3,'min'=>130,'max'=>170,'prize'=>'x3','v'=>10), 		//瓣三	无奖
    '3' => array('id'=>4,'min'=>190,'max'=>230,'prize'=>'x4','v'=>20),		//瓣四	大礼包价值199元一张
    '4' => array('id'=>5,'min'=>250,'max'=>290,'prize'=>'x5','v'=>20),		//瓣五	无奖
    '5' => array('id'=>6,'min'=>310,'max'=>350,'prize'=>'x6','v'=>20)		//瓣六	行车记录仪价值1000元一张
); 
*/
$prize_arr = array(
	//这里的min 和 max是中奖的对应图片的角度  v是中奖率
	 '0' => array('id'=>1,'min'=>5,'max'=>20,'prize'=>'x1','v'=>3),//南京都市报50
	 '1' => array('id'=>2,'min'=>35,'max'=>50,'prize'=>'x2','v'=>45), //谢谢参与
	 '2' => array('id'=>3,'min'=>65,'max'=>80,'prize'=>'x3','v'=>0), //Kindle电纸书1
	 '3' => array('id'=>4,'min'=>95,'max'=>110,'prize'=>'x4','v'=>0), //智能手机1
	 '4' => array('id'=>5,'min'=>125,'max'=>140,'prize'=>'x5','v'=>1), //保温杯1
	 '5' => array('id'=>6,'min'=>155,'max'=>170,'prize'=>'x6','v'=>1), //50元话费充值10
	 '6' => array('id'=>7,'min'=>185,'max'=>200,'prize'=>'x7','v'=>1), //图书卡5
	 '7' => array('id'=>8,'min'=>215,'max'=>230,'prize'=>'x8','v'=>45), //谢谢参与
	 '8' => array('id'=>9,'min'=>245,'max'=>260,'prize'=>'x9','v'=>1),//智能电子秤2
	 '9' => array('id'=>10,'min'=>275,'max'=>290,'prize'=>'x10','v'=>1), //懒人支架5
	 '10' => array('id'=>11,'min'=>305,'max'=>320,'prize'=>'x11','v'=>1), //蓝牙音箱5
	 '11' => array('id'=>12,'min'=>335,'max'=>350,'prize'=>'x12','v'=>1),  //畅销书10
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
$j3 = "0";
$j4 = "0";
$j5 = "0";
$j6 = "0";
$j7 = "0";
$j9 = "0";
$j10 = "0";
$j11 = "0";
$j12 = "0";

//这里控制中奖的award 就是中奖的名称
$sql2 = "select award from sdj_gulou where award <> 2 and award <> 8 ";
$data = mysql_query($sql2);
$list = array();
while($rs = mysql_fetch_array($data)){
	array_push($list,$rs);
}//全部数据

foreach($list as $val){
	if($val['award']==1){$j1++;}	//瓣1	南京都市报50
	else if($val['award']==3){$j3++;}//瓣3	Kindle电纸书1		
	else if($val['award']==4){$j4++;}//瓣4	智能手机1
	else if($val['award']==5){$j5++;}//瓣5	保温杯1
	else if($val['award']==6){$j6++;}//瓣6	50元话费充值10
	else if($val['award']==7){$j7++;}//瓣7	图书卡5
	else if($val['award']==9){$j9++;}//瓣9	智能电子秤2
	else if($val['award']==10){$j10++;}//瓣10	懒人支架5
	else if($val['award']==11){$j11++;}//瓣11	蓝牙音箱5
	else if($val['award']==12){$j12++;}//瓣12	畅销书10
}

$rid = getRand($arr); //根据概率获取奖项id 


//奖项统计
if($j1>=50){					
	if($rid==1){$rid=2;}		//南京都市报50
}
if($j3>=1){					
	if($rid==3){$rid=2;}		//Kindle电子书1		
}
if($j4>=0){					
	if($rid==4){$rid=2;}		//智能手机1
}
if($j5>=1){					
	if($rid==5){$rid=2;}		//保温杯1
}
if($j6>=8){						
	if($rid==6){$rid=8;}		//50元话费充值10
}
if($j7>=5){						
	if($rid==7){$rid=2;}		//图书卡5
}
if($j9>=2){						
	if($rid==9){$rid=8;}		//智能电子秤2
}
if($j10>=5){						
	if($rid==10){$rid=2;}	//懒人支架5
}
if($j11>=5){						
	if($rid==11){$rid=8;}	//蓝牙音箱5
}
if($j12>=10){						
	if($rid==12){$rid=8;}	//畅销书10
}
/*
//每天只能中1次
$sql = "select count(id) as ak from sdj where wxopenid = '".$d_wxopenid."'";
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


$sqla = "insert into sdj_gulou ( name, tel, ip, dtime, award, status, wxopenid ) VALUES ('". $username ."', '". $tel ."', '". GetIP()."', '". time() ."', '". $result['id'] ."', '0', '".$d_wxopenid."' )";

if(mysql_query($sqla)){
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