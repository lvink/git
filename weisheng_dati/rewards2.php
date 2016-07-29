
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>绿色建筑</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="keywords" content="南京日报,南京日报电子版,南京日报数字报,新闻,南京,南京新闻,国内新闻,国际新闻,金陵晚报,南京社区,南京生活,南京天气,南京媒体圈" />
<meta name="description" content="南报网是南京日报主办的新闻网站，致力于塑造南京区域报网融合新媒体品牌形象，是南京地区城市综合信息门户网站，为南京及南京都市圈人群提供新闻、资讯、社区、阅读、房产、汽车等多种网络服务。" />
<meta name="author" content="南报网" />
<meta name="copyright" content="南报网版权所有" />
<link href="images/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen and (min-width:800px)" href="images/css-pc.css">
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="images/css-pc.css">
<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--
<script type="text/javascript" src="http://img.njdaily.cn/jui/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://img.njdaily.cn/jui/plugin/jquery.cookie.js"></script>
<script type="text/javascript" src="images/rewards.js"></script>
-->
<style type="text/css">
#section-rewards .title{padding:24px 0 12px;}
#section-rewards .title h3{font-size:24px;color:#AE020E;padding-left:18px;}
#section-rewards .title a{display:block;height:40px;color:#AE020E;font-size:16px;line-height:40px;padding:0 20px;font-weight:bold;}
#section-rewards .title a:hover{text-decoration:none;color:#ff6d6d;}
#section-rewards .label{border-top:1px solid #AE020E;padding:14px;margin-top:20px;text-align:center;font-size:20px;}
#section-rewards ul{padding:12px 20px;}
#section-rewards ul li{padding:4px 12px;font-size:14px;color:#999;border-bottom:1px dotted #ccc;}
#section-rewards .des{padding:0 20px;color:#AE020E;}
</style>
</head>
<body class="f-ff1">

<div class="wrap">
<div class="main">
	<div id="section-banner"></div>
	
	<!-- -------- 排行榜 -------- -->
	<div id="section-rewards">
		<div class="title f-cb">
			<h3 class="f-fl">获奖名单</h3>
			<a href="index.html" class="f-fr">返回首页</a>
		</div>
		<div class="des"><p><?php echo date("m月d日",time());?></p></div>
		<?php
		function hidtel($phone){
			$IsWhat = preg_match('/(0[0-9]{2,3}[\-]?[2-9][0-9]{6,7}[\-]?[0-9]?)/i',$phone); //固定电话
			if($IsWhat == 1){
				return preg_replace('/(0[0-9]{2,3}[\-]?[2-9])[0-9]{3,4}([0-9]{3}[\-]?[0-9]?)/i','$1****$2',$phone);
			}else{
				return  preg_replace('/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i','$1****$2',$phone);
			}
		}
		date_default_timezone_set('Asia/Shanghai');
		$DBuser = "springfestival";
		$DBpwd = "springfestival";
		$DBname = "springfestival";
		$DBip = "127.0.0.1";
		$link = mysql_connect($DBip, $DBuser, $DBpwd);
		mysql_select_db($DBname ,$link);
		mysql_query("set names utf8");
		$yesterday = strtotime(date('Y-m-d',time()));//当前day的时间戳转义两次得到0点时间戳
		$oneday = 86400;//一天的时间
		$tmpimte = $yesterday + $oneday; 
		$yesterday = $yesterday - 1;
		$tmpimte =  $tmpimte + 1;
		$sql = "select * from lsjz where award in (2,4,6) and dtime > $yesterday and dtime < $tmpimte";
		$rs = mysql_query($sql);
		$list = array();
		while($data = mysql_fetch_array($rs)){
			$data['4'] = date("Y-m-d", $data['4']);
			array_push($list,$data);
			
		}
		for($i=0;$i<count($list);$i++){
			if($list[$i]['award']=="2"){$yours = "中200元";}
			else if($list[$i]['award']=="4"){$yours = "中50元电话卡";}
			else if($list[$i]['award']=="6"){$yours = "中400元";}
			
			
			echo "<ul><li class=\"f-cb\"><div class=\"f-fl\">".$list[$i]['name']."</div><div style=\" margin-left:10px\" class=\"f-fl\">".$list[$i]['tel']."</div><div class=\"f-fr\">".$yours."</div></li></ul>";
		}
	?>
		
		
	</div>
	
	
	
</div>
<div class="footer">
<p>南报网 版权所有</p>
<p>苏ICP备11047051号 苏新网备2012056号</p>
</div>
</div>
</body>
</html>