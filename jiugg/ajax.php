<?php
date_default_timezone_set('Asia/Shanghai');
    //连接数据库
	
	$DBuser = "springfestival";
	$DBpwd = "springfestival";
	$DBname = "springfestival";
    $DBip = "127.0.0.1";
    $link = mysql_connect($DBip, $DBuser, $DBpwd);
    mysql_select_db($DBname ,$link);
    mysql_query("set names utf8");


    //验证用户输入信息完整性
    $username = guolv($_REQUEST['username']);
    $iphone = guolv($_REQUEST['iphone']);
    $d_wxopenid = guolv($_REQUEST['d_wxopenid']);
	
if(time() > 1434902399){
	$tesd['err']="4";
	echo json_encode($tesd); //数据不完整
	exit;
	}
	
	//验证用户输入信息完整性
if(strlen($iphone) != 11){
	$tesd['err']="0";
	echo json_encode($tesd); //数据不完整
	exit;	
}
if(empty($username) || empty($iphone)){
	$tesd['err']="0";
	echo json_encode($tesd); //数据不完整
	exit;
}
if($username=="" || $iphone==""){
	$tesd['err']="0";
	echo json_encode($tesd); //数据不完整
	exit;
}

if(empty($d_wxopenid) || $d_wxopenid==""){
	$tesd['err']="0";
	echo json_encode($tesd); //数据不完整
	exit;
}

  //计算当天的时间戳跨度
$yesterday = strtotime(date('Y-m-d',time()));//当前day的时间戳转义两次得到0点时间戳
$oneday = 86400;//一天的时间
$tmpimte = $yesterday + $oneday; 
$yesterday = $yesterday;
$tmpimte =  $tmpimte - 1;


$sql = "select * from jiangping where award in (1,2,3,5,6,7,8,9,11,12)  and wxopenid = '".$d_wxopenid."'";
$data1 = mysql_query($sql);
$dos = mysql_affected_rows();
if($dos>=1){
	$tesd['err'] = "3";
	echo json_encode($tesd);//中过奖的不能中了
	exit;
}

$sql = "select count(id) as an from jiangping where dtime > $yesterday and dtime < $tmpimte and wxopenid = '".$d_wxopenid."'";
$data = mysql_query($sql);
$rs = mysql_fetch_array($data);
if($rs['an']>=1){
	$tesd['err']="1";
	echo json_encode($tesd);//每天只允许抽奖1次
	exit;
}

    //prize表示奖项内容，v表示中奖几率(若数组中12个奖项的v的总和为100，如果v的值为1，则代表中奖几率为1%，依此类推)
$prize_arr = array(
            '0' => array('id' => 1, 'prize' => '南京都市报', 'v' => 4),
            '1' => array('id' => 2, 'prize' => '智能手机', 'v' => 0),
            '2' => array('id' => 3, 'prize' => '智能耳机', 'v' => 1),
            '3' => array('id' => 4, 'prize' => '谢谢参与', 'v' => 45),
            '4' => array('id' => 5, 'prize' => '畅销书', 'v' => 1),
            '5' => array('id' => 6, 'prize' => '图书卡', 'v' => 1),
            '6' => array('id' => 7, 'prize' => '移动电源', 'v' => 1),
            '7' => array('id' => 8, 'prize' => '智能手环', 'v' => 1),
            '8' => array('id' => 9, 'prize' => '智能路由器', 'v' => 0),
            '9' => array('id' => 10, 'prize' => '谢谢参与', 'v' => 45),
            '10' => array('id' => 11, 'prize' => '智能电子秤', 'v' => 0),
            '11' => array('id' => 12, 'prize' => '话费充值卡', 'v' => 1),
    );
	 function getRand($proArr) {
        $tesd = '';
        $proSum = array_sum($proArr); //概率数组的总概率精度 

        foreach ($proArr as $k => $v) { //概率数组循环
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $v) {
                $tesd = $k;
                break;
            } else {
                $proSum -= $v;
            }
        }
        unset($proArr);

        return $tesd;
    }
	
   //得到各个商品的几率
	foreach ($prize_arr as $k=>$v) {
		$arr[$v['id']] = $v['v'];
	}

	$j1 = "0";
	$j2 = "0";
	$j3 = "0";
	$j5 = "0";
	$j6 = "0";
	$j7 = "0";
	$j8 = "0";
	$j9 = "0";
	$j11 = "0";
	$j12 = "0";
	
	//这里控制中奖的award 就是中奖的名称
	$sql2 = "select award from jiangping where award <> 4 and award <> 10 ";
	$data = mysql_query($sql2);
	$list = array();
	while($rs = mysql_fetch_array($data)){
		array_push($list,$rs);
	}
foreach($list as $val){
	if($val['award']==1){$j1++;}	//瓣1	南京都市报100张
	else if($val['award']==2){$j2++;}//瓣2	智能手机1	
	else if($val['award']==3){$j3++;}//瓣3	智能耳机3
	else if($val['award']==5){$j5++;}//瓣5	畅销书10本
	else if($val['award']==6){$j6++;}//瓣6	图书卡10
	else if($val['award']==7){$j7++;}//瓣7	移动电源3
	else if($val['award']==8){$j8++;}//瓣8	智能手环3
	else if($val['award']==9){$j9++;}//瓣9	智能路由器3
	else if($val['award']==11){$j11++;}//瓣11	智能电子秤2
	else if($val['award']==12){$j12++;}//瓣12	话费充值卡10
}

$prize_id = getRand($arr); //根据概率获取奖项id 
	
		//奖项统计
	if($j1>=100){					
		if($prize_id==1){$prize_id=4;}		//南京都市报100张
	}
	if($j2>=0){					
		if($prize_id==2){$prize_id=4;}		//智能手机1
	}
	if($j3>=3){					
		if($prize_id==3){$prize_id=4;}		//智能耳机3
	}
	if($j5>=10){					
		if($prize_id==5){$prize_id=4;}		//畅销书10本
	}
	if($j6>=10){						
		if($prize_id==6){$prize_id=4;}		//图书卡10
	}
	if($j7>=3){						
		if($prize_id==7){$prize_id=10;}		//移动电源3
	}
	if($j8>=3){						
		if($prize_id==8){$prize_id=10;}		//智能手环3
	}
	if($j9>=3){						
		if($prize_id==9){$prize_id=10;}	//智能路由器3
	}
	if($j11>=0){						
		if($prize_id==11){$prize_id=10;}	//智能电子秤2
	}
	if($j12>=10){						
		if($prize_id==12){$prize_id=10;}	//话费充值卡10	
	}
        

	foreach($prize_arr as $k=>$v){ //获取前端奖项位置
		if($v['id'] == $prize_id){
		 $prize_site = $k;
		 break;
		}
	}


	$res = $prize_arr[$prize_id - 1]; //中奖项 

	$tesd['prize_name'] = $res['prize'];//奖品名字
	$tesd['prize_site'] = $prize_site;//奖项位置
	$tesd['prize_id'] = $prize_id;//奖品在数组里的id

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


$sqla = "insert into jiangping ( name, tel, ip, dtime, award, status, wxopenid ) VALUES ('". $username ."', '". $iphone ."', '". GetIP()."', '". time() ."', '". $tesd['prize_id'] ."', '0', '".$d_wxopenid."' )";
	if(mysql_query($sqla)){
	echo json_encode($tesd);
}else{
	$tesd['err']="2";
	echo json_encode($tesd); 
}



    //各种过滤
    function guolv($value){
        if (function_exists('htmlspecialchars')) return htmlspecialchars($value);
        return $value;
    }

?>