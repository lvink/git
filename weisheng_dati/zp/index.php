<?php
session_start();	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>创建国家卫生城市知识有奖竞答</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
<meta name="keywords" content="南京日报,南京日报电子版,南京日报数字报,新闻,南京,南京新闻,国内新闻,国际新闻,金陵晚报,南京社区,南京生活,南京天气,南京媒体圈" />
<meta name="description" content="南报网是南京日报主办的新闻网站，致力于塑造南京区域报网融合新媒体品牌形象，是南京地区城市综合信息门户网站，为南京及南京都市圈人群提供新闻、资讯、社区、阅读、房产、汽车等多种网络服务。" />
<meta name="author" content="南报网" />
<meta name="copyright" content="南报网版权所有" />
<link href="http://wxapp.njdaily.cn/2016/weisheng_dati/zp/css/main.css" rel="stylesheet" type="text/css" />
<link  href="http://wxapp.njdaily.cn/2016/weisheng_dati/zp/css/zhuanpan.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:800px)" href="http://wxapp.njdaily.cn/2016/weisheng_dati/zp/css/css-pc.css">
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script type="text/javascript">

	(function(){
		var phoneWidth = parseInt(window.screen.width),
			phoneScale = phoneWidth/640,
			ua = navigator.userAgent;

		if (/Android (\d+\.\d+)/.test(ua)){
			var version = parseFloat(RegExp.$1);
			// andriod 2.3
			if(version > 2.3){
				document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
			// andriod 2.3以上
			}else{
				document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
			}
			// 其他系统
		} else {
			document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
		}
	})();
	var config = {
		coverUrl:'',
		swipeCur: 0,
		swipeDir:'vertical', // 'vertical' // horizontal
	}
	</script>
<link href="http://wxapp.njdaily.cn/2016/xmt_3/alert/jquery.alerts3.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="images/jquery.js"></script>
<script type="text/javascript" src="images/jQueryRotate.js"></script>
<script type="text/javascript" src="images/jquery_002.js"></script>
<script type="text/javascript" src="http://img.njdaily.cn/jui/plugin/jquery.cookie.js"></script>
<script src="http://wxapp.njdaily.cn/2016/xmt_3/alert/jquery.ui.draggable.js" type="text/javascript"></script>
<script src="http://wxapp.njdaily.cn/2016/xmt_3/alert/jquery.alerts.js"></script>
<?php
	if($_SESSION['nbw']=="" || empty($_SESSION['nbw'])){
			echo '<script type="text/javascript" src="http://wxapp.njdaily.cn/nbw/js/open.js"></script>';
			die;
		}else{

		error_reporting(E_ALL || ~E_NOTICE);
		$tel = $_COOKIE['phone'] ;
		$DBuser = "springfestival";
		$DBpwd = "springfestival";
		$DBname = "springfestival";
		$DBip = "127.0.0.1";
		$link = mysql_connect($DBip, $DBuser, $DBpwd);
		mysql_select_db($DBname ,$link);
		mysql_query("set names utf8");
		$wxid = $_SESSION['nbw'];
		$sql = "select count(sid) as an from plugin_sign_weisheng_dati where wxid = '$wxid' and (score > 50)";
		$data = mysql_query($sql);
		$rs = mysql_fetch_array($data);

		if($rs['an']<1){
			header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect");
			die;
		}
		
	}	

?>
<script type="text/javascript">
	$(function(){
		//分享引导
		$("#share-link").click(function(){
			$(".uploadWrap").show();
		})
		//关闭分享
		$(".uploadWrap").click(function(){
			$(this).hide();
		})

	})
</script>

<style>
	.uploadWrap{ display:none;  width: 100%; height: 100%; position:absolute; left:0; top:0;background-color: RGBA(0,0,0,0.7);  -webkit-transform: translateZ(0);-moz-transform: translateZ(0);
-ms-transform: translateZ(0);transform: translateZ(0);font-size:12px; z-index:999}
	.shareArrow {color: #FFF;position: absolute;right: 20px;top: 0; font-size:34px}
	.uploadStateText{margin-top:220px;font-size:34px;color:#fff;text-align:center}
	.close{position:absolute;left:20px;bottom:20px;color: #FFF;}
	.text {position:absolute;bottom:10px;color:#000000;font-family:微软雅黑;font-size:40px;font-weight:bold;z-index: 10}
</style>
</head>

<body>
<div id="center">
	<div style="height:130px"></div>
	<div class="demo">			
		<div id="disk">
			<img src="./images/disk.png">
		</div>
		<div id="disktop"></div>
		<div id="start"><img style="cursor: default; transform: rotate(1deg);" src="images/start.png" id="startbtn"></div>
	</div>

	
	<a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect" id="rewards-link">再次答题</a>

	<a href="http://wxapp.njdaily.cn/2016/weisheng_dati/rewards1.php" id="intro-link">获奖名单</a>
</div>

<div id="mask"></div>
<div class="uploadWrap">
	<div class="shareArrow">点击这里<img width="60" src="./images/share.png"></div>
	<div class="uploadStateText">
		 <p>点击微信分享按钮,分享到你的朋友圈吧!<p>
	</div>  
</div>
<script type="text/javascript" src="http://wxapp.njdaily.cn/fenxiang/"></script>
<script type="text/javascript">
var text = "创建国家卫生城市知识有奖竞答";
$(function(){
	 $("#disktop").click(function(){
			lottery();
	});

});
function lottery(){
	//checkinfo();
	d_wxopenid = "<?php echo $_SESSION['nbw']?>";
	var urlinfo = 'http://wxapp.njdaily.cn/2016/weisheng_dati/zp/data.php?name=' +  $.cookie('username') + '&tel=' + $.cookie('phone') + '&wx_id=' + d_wxopenid;
	$.ajax({
		type: 'POST',
		url: urlinfo,
		dataType: 'json',
		cache: false,
		error: function(){
			jAlert("抽奖超时,请确保网络畅通", '提示信息');
			return false;
		},
		success:function(json){
			//$("#startbtn").unbind('click').css("cursor","default");
			var a = json.angle;
			var p = json.prize;
			var e = json.err;
			if(e!="" && e=="0"){jAlert('数据异常', '提示信息')}
			else if((e!="" && e=="1")){jAlert('每天只能抽奖1次', '提示信息')}
			else if((e!="" && e=="2")){jAlert('服务器异常', '提示信息')}
			else if((e!="" && e=="3")){jAlert('活动已经结束', '提示信息')}
			else if((e!="" && e=="4")){jAlert('您已中奖', '提示信息')}
			else{
				$("#startbtn").rotate({
					duration:3000,
					angle: 0,
					animateTo:1800 + a,
					easing: $.easing.easeOutSine,
					callback: function(){
						if(p!="x1"){
							if(p=="x2"){
								jAlert("恭喜您，中得50元话费！", '提示信息');
							}
							if(p=="x3"){
								jAlert("恭喜您，中得50元话费！", '提示信息');
							}
							if(p=="x4"){
								jAlert("恭喜您，中得50元话费！", '提示信息');
							}
						}else{
								jAlert("谢谢参与", '提示信息');
						}
					}
				});
			}
		}
	});
}
wx.ready(function () {	
	wx.onMenuShareTimeline({
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareAppMessage({
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		desc: '快来动动手指，长知识的机会来了！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
		type: '', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareQQ({
		title: '创建国家卫生城市知识有奖竞答', // 分享标题
		desc: '快来动动手指，长知识的机会来了！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcab2f745f1a0287c&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2Fnbw%2Ftest4.php&response_type=code&scope=snsapi_base&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2016/weisheng_dati/images/300.jpg', // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
		   // 用户取消分享后执行的回调函数
		}
	});
});
</script>
</body>
</html>