<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>大转盘</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link  href="css/zhuanpan.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript" src="images/jquery.js"></script>
<script type="text/javascript" src="images/jQueryRotate.js"></script>
<script type="text/javascript" src="images/jquery_002.js"></script>
<script type="text/javascript" src="http://img.njdaily.cn/jui/plugin/jquery.cookie.js"></script>
<script src="alert/jquery.ui.draggable.js" type="text/javascript"></script>
        <script src="alert/jquery.alerts.js"></script>
        <link href="alert/jquery.alerts3.css" rel="stylesheet" type="text/css"/>

<style>
	.uploadWrap{ display:none;  width: 100%; height: 100%; position:absolute; left:0; top:0;background-color: RGBA(0,0,0,0.7);  -webkit-transform: translateZ(0);-moz-transform: translateZ(0);
-ms-transform: translateZ(0);transform: translateZ(0);font-size:12px; z-index:999}
	.shareArrow {color: #FFF;position: absolute;right: 20px;top: 0; font-size:34px}
	.uploadStateText{margin-top:220px;font-size:34px;color:#fff;text-align:center}
	.close{position:absolute;left:20px;bottom:20px;color: #FFF;}
	
	.box {width:640px;height:1008px;margin:0 auto;background:url(images/bj.png) no-repeat;position:relative;}
	.box .baoming {width:406px;height:200px;background:url(images/bm1.png) no-repeat;position:absolute;bottom:140px;left:6px;padding:624px 192px 40px 2px;}
	.box .baoming div {height:65px;line-height:60px;font-size:28px;color:#ffffff;font-family:微软雅黑;}
	.box .baoming div input {height:40px;width:270px;font-size:24px;margin-left:20px;color:#555555;border:0;padding:3px 10px;}
	.box .baoming #tijiao {width:200px;height:50px;line-height:50px;background:red;text-align:center;color:#f45524;font-weight:bold;margin:13px auto 0;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius:5px;border-bottom:3px solid #bc5516;left:113px;position:relative;}
	.userdiv{position:relative;margin-top: -160px; left: 113px;;}
	.titlediv{position:relative;margin-top: 6px; left: 113px;}
	.text {position:absolute;bottom:-50px;color:black;font-family:微软雅黑;font-size:40px;font-weight:bold;}
	#popup_message {text-align: left;font-size: 22px;}
</style>

</head>
<?php session_start();

	if($_SESSION['sdj']=="" || empty($_SESSION['sdj'])){
			echo '<script type="text/javascript" src="http://wxapp.njdaily.cn/cms/statics/jinghua/js/err.js"></script>';
			 die;
		}
?>

<body>
<div class="box">
	<?php
		$DBuser = "";
		$DBpwd = "";
		$DBname = "";
		$DBip = "127.0.0.1";
		$link = mysql_connect($DBip, $DBuser, $DBpwd);
		mysql_select_db($DBname ,$link);
		mysql_query("set names utf8");
		$d_wxopenid = $_SESSION['sdj'];		
	?>

	<div class="baoming">
		<div class="userdiv"><span style="color: #ffffff;font-weight:bold;">姓名：</span><input type="text" id="name" style="BACKGROUND-COLOR: #ffffff;" /></div>
		<div class="titlediv"><span style="color: #ffffff;font-weight:bold;">电话：</span><input type="text" id="tel" style="BACKGROUND-COLOR: #ffffff;" /></div>
		<div id="tijiao"><span style="color:white">提&nbsp;&nbsp;&nbsp;交</span></div>
	</div>
</div>
<div id="center" style="display:none">
	<audio id="myaudio" src="images/2278.wav" preload="preload" hidden="true"></audio>
	<audio id="myaudio1" src="images/4864.wav" preload="preload" hidden="true"></audio>
	<audio id="myaudio2" src="images/smzy_200911115164668.mp3" preload="preload" hidden="true"></audio>
	<div class="demo">
		<div id="disk"></div>
		<div id="disktop"></div>
		<div id="start"><img style="cursor: default; transform: rotate(0deg);" src="images/start1.png" id="startbtn"></div>

		<?php
		$sql = "select award from sdj_gulou where wxopenid = \"$d_wxopenid\" and award <> 2 and award <> 8";
		$data = mysql_query($sql);
		while($rs = mysql_fetch_array($data)){
			if($rs['award']=="1"){
				echo '<div class="text">恭喜您抽中南京都市报。</div>';
			}
			if($rs['award']=="3"){
				echo '<div class="text">恭喜您抽中Kindle电子书。</div>';
			}
			if($rs['award']=="4"){
				echo '<div class="text">恭喜您抽中智能手机。</div>';
			}
			if($rs['award']=="5"){
				echo '<div class="text">恭喜您抽中保温杯。</div>';
			}
			if($rs['award']=="6"){
				echo '<div class="text">恭喜您抽中50元话费。</div>';
			}
			if($rs['award']=="7"){
				echo '<div class="text">恭喜您抽中图书卡。</div>';
			}
			if($rs['award']=="9"){
				echo '<div class="text">恭喜您抽中智能电子秤。</div>';
			}
			if($rs['award']=="10"){
				echo '<div class="text">恭喜您抽中懒人支架。</div>';
			}
			if($rs['award']=="11"){
				echo '<div class="text">恭喜您抽中蓝牙音箱。</div>';
			}
			if($rs['award']=="12"){
				echo '<div class="text">恭喜您抽中畅销书。</div>';
			}
		}
		
		
		?>
		
	</div>
	
	

</div>

<div id="mask"></div>
<script type="text/javascript">
	document.getElementById('myaudio').pause();
	document.getElementById('myaudio').currentTime = 1;
	document.getElementById('myaudio').play();
</script>
<script type="text/javascript">

$(function(){

	$("#tijiao").click(function(){
		//前台判断信息完整
		name = $("#name").val();
		tel = $("#tel").val();
		if(name==""){jAlert("请填写您的姓名","提示信息"); return false}
		else if(tel==""){jAlert("请填写您的电话","提示信息"); return false}
		else if(!tel.match(/^1\d{10}$/)){jAlert("电话必须真实有效","提示信息"); return false}
		
		$(".baoming").hide();
		$(".box").hide();
		$("#center").show();
	})
	 $("#disktop").click(function(){
			lottery();
	});

});

function lottery(){
	
		var urlinfo = './data.php?name=' +  $('#name').val() + '&tel=' + $('#tel').val() + '&d_wxopenid=' + "<?php echo $_SESSION['sdj']?>"; 
		//alert(urlinfo);
		$.ajax({
			type: 'get',
			url: urlinfo,
			dataType:'json',
			cache: false,
			error: function(){
				jAlert("抽奖超时,请确保网络畅通", '提示信息');
				return false;
			},
			success:function(json){
			//alert(json.angle);return false;
				$("#startbtn").unbind('click').css("cursor","default");
				var a = json.angle;
				var p = json.prize;
				var e = json.err;
				if(e!="" && e=="0"){jAlert('数据异常', '提示信息')}
				else if((e!="" && e=="8")){jAlert('抽奖活动已结束', '提示信息')}
				else if((e!="" && e=="1")){jAlert('每天只能抽一次喔，明天再来吧', '提示信息')}
				else if((e!="" && e=="9")){jAlert('谢谢参与', '提示信息')}
				else if((e!="" && e=="2")){jAlert('服务器异常', '提示信息')}
				else if((e!="" && e=="3")){jAlert('你已中奖', '提示信息')}
				else{
					$("#startbtn").rotate({
						duration:3000,
						angle: 0,
						animateTo:1800 + a,
						easing: $.easing.easeOutSine,
						callback: function(){
								if(p=="x1"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖。", '提示信息');									
								}
								else  if(p=="x3"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x4"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x5"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x6"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x7"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x9"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x10"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x11"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else  if(p=="x12"){
									document.getElementById('myaudio1').pause();
									document.getElementById('myaudio1').currentTime = 1;
									document.getElementById('myaudio1').play();
									jAlert("你已中奖", '提示信息');
								}
								else {
									document.getElementById('myaudio2').pause();
									document.getElementById('myaudio2').currentTime = 1;
									document.getElementById('myaudio2').play();
									jAlert("谢谢参与", '提示信息');
								}
						}
					});
				}
			}
		});
}
wx.ready(function () {

});
</script>

<script type="text/javascript" src="http://wxapp.njdaily.cn/fenxiang/"></script>
<script>
wx.ready(function () {	
	wx.onMenuShareTimeline({
		title: '大转盘', // 分享标题
		link: '', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/glwx/images/fx.png', // 分享图标
		success: function () {
		},
		cancel: function () { 
		}
	});
	
	wx.onMenuShareAppMessage({
		title: '大转盘', // 分享标题
		desc: '大转盘', // 分享描述
		link: '', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/glwx/images/fx.png', // 分享图标
		type: '', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
		},
		cancel: function () { 
		}
	});
	
	wx.onMenuShareQQ({
		title: '大转盘', // 分享标题
		desc: '大转盘', // 分享描述
		link: '', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/glwx/images/fx.png', // 分享图标
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