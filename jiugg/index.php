<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>2016"鼓楼微讯"助您新年行大运</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
		<link  href="css/zhuanpan.css" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=640"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" /> 
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script> 
    <script src="alert/jquery.ui.draggable.js" type="text/javascript"></script>
        <script src="alert/jquery.alerts.js"></script>
        <link href="alert/jquery.alerts3.css" rel="stylesheet" type="text/css"/>
<?php session_start();
	if($_SESSION['sdj']=="" || empty($_SESSION['sdj'])){
			echo '<script type="text/javascript" src="http://wxapp.njdaily.cn/cms/statics/jinghua/js/err.js"></script>';
			die;
		}
?>
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
        <link rel="stylesheet" type="text/css" href="css/common.css" />
        <style type="text/css">
            #lottery{width:640px;height:1008px;background:url(images/bj3.jpg) no-repeat;padding:50px 0px;position:relative;left:0px;top:160px;}
            #lottery table td{width:142px;height:142px;vertical-align:middle;font-size:24px;color:#333;font-index:-999}
            #lottery table td a{width:284px;height:284px;line-height:150px;display:block;text-decoration:none;}
            #lottery table td.active{background-color:#ea0000;}
            table{  position: relative;left: 36px;top: 0px;}	
            .uploadWrap{ display:none;  width: 100%; height: 100%; position:absolute; left:0; top:0;background-color: RGBA(0,0,0,0.7);  -webkit-transform: translateZ(0);-moz-transform: translateZ(0);
-ms-transform: translateZ(0);transform: translateZ(0);font-size:12px; z-index:999}
	.shareArrow {color: #FFF;position: absolute;right: 20px;top: 0; font-size:34px}
	.uploadStateText{margin-top:220px;font-size:34px;color:#fff;text-align:center}
	.close{position:absolute;left:20px;bottom:20px;color: #FFF;}
	
	.box {width:640px;height:1250px;margin:0 auto;background:url(images/bj.png) no-repeat;position:relative;}
	.box .baoming {width:406px;height:200px;position:absolute;bottom:-115px;left:6px;padding:624px 192px 40px 2px;}
	.box .baoming div {height:65px;line-height:60px;font-size:28px;color:#ffffff;font-family:微软雅黑;}
	.box .baoming div input {height:40px;width:270px;font-size:24px;margin-left:20px;color:#555555;border:0;padding:3px 10px;}
	.box .baoming #tijiao {width:200px;height:50px;line-height:50px;background:#f3af61;text-align:center;color:#f45524;font-weight:bold;margin:13px auto 0;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius:5px;border-bottom:3px solid #bc5516;left:113px;position:relative;}
	.userdiv{position:relative;margin-top: -160px; left: 113px;;}
	.titlediv{position:relative;margin-top: 6px; left: 113px;}
	.text {position:absolute;bottom:5px;color:black;font-family:微软雅黑;font-size:40px;font-weight:bold;color:green;}
	#popup_message {text-align: left;font-size: 22px;}


        </style>
    </head>
    <body style="overflow:-Scroll;overflow-y:hidden">
    	<div class="box">
	<?php
		$DBuser = "springfestival";
		$DBpwd = "springfestival";
		$DBname = "springfestival";
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

            <div class="center">
                <div id="lottery">
                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <td class="lottery-unit lottery-unit-0"><img src="images/1.png"></td>
                            <td class="lottery-unit lottery-unit-1"><img src="images/12.png"></td>
                            <td class="lottery-unit lottery-unit-2"><img src="images/6.png"></td>
                            <td class="lottery-unit lottery-unit-3"><img src="images/4.png"></td>
                        </tr>
                        <tr>
                            <td class="lottery-unit lottery-unit-11"><img src="images/2.png"></td>
                            <td colspan="2" rowspan="2"><a href="javascript:void(0);"></a></td>
                            <td class="lottery-unit lottery-unit-4"><img src="images/5.png"></td>
                        </tr>
                        <tr>
                            <td class="lottery-unit lottery-unit-10"><img src="images/7.png"></td>
                            <td class="lottery-unit lottery-unit-5"><img src="images/3.png"></td>
                        </tr>
                        <tr>
                            <td class="lottery-unit lottery-unit-9"><img src="images/10.png"></td>
                            <td class="lottery-unit lottery-unit-8"><img src="images/9.png"></td>
                            <td class="lottery-unit lottery-unit-7"><img src="images/8.png"></td>
                            <td class="lottery-unit lottery-unit-6"><img src="images/11.png"></td>
                        </tr>
                    </table>
                </div>
                <?php
                    $sql = "select award from jiangping where wxopenid = \"$d_wxopenid\" and award <> 4 and award <> 10";
                    $data = mysql_query($sql);
                    while($rs = mysql_fetch_array($data)){
                        if($rs['award']=="1"){
                            echo '<div class="text">恭喜您抽中南京都市报。</div>';
                        }
                        if($rs['award']=="2"){
                            echo '<div class="text">恭喜您抽中智能手机。</div>';
                        }
                        if($rs['award']=="3"){
                            echo '<div class="text">恭喜您抽中智能耳机。</div>';
                        }
                        if($rs['award']=="5"){
                            echo '<div class="text">恭喜您抽中畅销书。</div>';
                        }
                        if($rs['award']=="6"){
                            echo '<div class="text">恭喜您抽中图书卡。</div>';
                        }
                        if($rs['award']=="7"){
                            echo '<div class="text">恭喜您抽中移动电源。</div>';
                        }
                        if($rs['award']=="8"){
                            echo '<div class="text">恭喜您抽中智能手环。</div>';
                        }
                        if($rs['award']=="9"){
                            echo '<div class="text">恭喜您抽中智能路由器。</div>';
                        }
                        if($rs['award']=="11"){
                            echo '<div class="text">恭喜您抽中智能电子秤。</div>';
                        }
                        if($rs['award']=="12"){
                            echo '<div class="text">恭喜您抽中话费充值卡。</div>';
                        }
                    }
                
                
                ?>

    </div>
        <script type="text/javascript">
            var lottery = {
                index:-1,   //当前转动到哪个位置，起点位置
                    count:0,    //总共有多少个位置
                    timer:0,    //setTimeout的ID，用clearTimeout清除
                    speed:20,   //初始转动速度
                    times:0,    //转动次数
                    cycle:50,   //转动基本次数：即至少需要转动多少次再进入抽奖环节
                    prize:-1,   //中奖位置
                init: function(id) {
                    if ($("#" + id).find(".lottery-unit").length > 0) {
                        $lottery = $("#" + id);
                        $units = $lottery.find(".lottery-unit");
                        this.obj = $lottery;
                        this.count = $units.length;
                        $lottery.find(".lottery-unit-" + this.index).addClass("active");
                    }
                },
                roll: function() {
                    var index = this.index;
                    var count = this.count;
                    var lottery = this.obj;
                    $(lottery).find(".lottery-unit-" + index).removeClass("active");
                    index += 1;
                    if (index > count - 1) {
                        index = 0;
                    }
                    $(lottery).find(".lottery-unit-" + index).addClass("active");
                    this.index = index;
                    return false;
                },
                stop: function(index) {
                    this.prize = index;
                    return false;
                }
            };

            function roll() {
                lottery.times += 1;
                lottery.roll();
                var prize_site = $("#lottery").attr("prize_site");
                if (lottery.times > lottery.cycle + 10 && lottery.index == prize_site) {
                    var prize_id = $("#lottery").attr("prize_id");
                    var prize_name = $("#lottery").attr("prize_name");
                    if(prize_name=="谢谢参与"){
                        jAlert(prize_name,"数据信息");
                    }else{
                         jAlert("<b>中奖名称："+prize_name+"！</b><br><b>领奖地址：</b>鼓楼区山西路124号鼓楼大厦1507室<br><b>领取时间：</b>工作日上午9点-11点30，下午14-18点<br><b>自中奖之日起7个工作日内领取，过期无效。</b><br>凭参与抽奖的微信名、真实姓名、手机号及中奖截图领取","数据信息");
                    }
                    clearTimeout(lottery.timer);
                    lottery.prize = -1;
                    lottery.times = 0;
                    click = false;

                } else {
                    if (lottery.times < lottery.cycle) {
                        lottery.speed -= 10;
                    } else if (lottery.times == lottery.cycle) {
                        var index = Math.random() * (lottery.count) | 0;
                        lottery.prize = index;
                    } else {
                        if (lottery.times > lottery.cycle + 10 && ((lottery.prize == 0 && lottery.index == 7) || lottery.prize == lottery.index + 1)) {
                            lottery.speed += 110;
                        } else {
                            lottery.speed += 20;
                        }
                    }
                    if (lottery.speed < 40) {
                        lottery.speed = 40;
                    }
                    lottery.timer = setTimeout(roll, lottery.speed);
                }
                return false;
            }

            var click = false;

            $(function() {
            	$("#tijiao").click(function(){
            		//前台判断信息完整
            		name = $("#name").val();
            		tel = $("#tel").val();
            		if(name==""){jAlert("请填写您的姓名","提示信息"); return false}
            		else if(tel==""){jAlert("请填写您的电话","提示信息"); return false}
            		else if(!tel.match(/^1\d{10}$/)){jAlert("电话必须真实有效","提示信息"); return false}
            		
            		$(".baoming").hide();
            		$(".box").hide();
            		$(".center").show();
			})
                lottery.init('lottery');
                $("#lottery a").click(function() {
                     if (click) {
                        return false;
                    } else {
                        name = $("#name").val();
                        tel = $("#tel").val();
                        d_wxopenid = "<?php echo $_SESSION['sdj']?>";
                        $.post("ajax.php", {d_wxopenid:d_wxopenid,iphone:tel,username:name}, function(tesd) { //获取奖品，也可以在这里判断是否登陆状态
                    	   var e = tesd.err;
            		if(e!="" && e=="0"){jAlert('数据异常', '提示信息')}
            			else if((e!="" && e=="1")){jAlert('每天只能抽一次喔，明天再来吧', '提示信息')}
            			else if((e!="" && e=="2")){jAlert('服务器异常', '提示信息')}
            			else if((e!="" && e=="4")){jAlert('抽奖已截止！', '提示信息')}
            			else if((e!="" && e=="3")){jAlert('你已中奖,不可以抽奖了。<br><b>领奖地址：</b>鼓楼区山西路124号鼓楼大厦1507室<br><b>领取时间：</b>工作日上午9点-11点30，下午14-18点<br><b>自中奖之日起7个工作日内领取，过期无效。</b><br>凭参与抽奖的微信名、真实姓名、手机号及中奖截图领取。', '提示信息')}else{
            		lottery.speed = 100;
            		$("#lottery").attr("prize_site", tesd.prize_site);
            		$("#lottery").attr("prize_id", tesd.prize_id);
            		$("#lottery").attr("prize_name", tesd.prize_name);
            		roll();
            		click = false;
            		return false;	
                		  }
                        }, "json")
                    }
                });
            })
        </script>
    </body>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript" src="./fenxiang/"></script>
	
<script>
wx.ready(function () {	
	wx.onMenuShareTimeline({
		title: '2016"鼓楼微讯"助您新年行大运！', // 分享标题
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx10441421739feb0b&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2F2015%2Fjiugg%2Ftest.php&response_type=code&scope=snsapi_userinfo&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/jiugg/images/fx.png', // 分享图标
		success: function () {
		},
		cancel: function () { 
		}
	});
	
	wx.onMenuShareAppMessage({
		title: '2016"鼓楼微讯"助您新年行大运！', // 分享标题
		desc: '2016,新年开门红！为回馈广大微粉长期以来的支持捧场，小微小讯给大家派送大礼包咯！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx10441421739feb0b&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2F2015%2Fjiugg%2Ftest.php&response_type=code&scope=snsapi_userinfo&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/jiugg/images/fx.png', // 分享图标
		type: '', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
		},
		cancel: function () { 
		}
	});
	
	wx.onMenuShareQQ({
		title: '2016"鼓楼微讯"助您新年行大运！', // 分享标题
		desc: '2016,新年开门红！为回馈广大微粉长期以来的支持捧场，小微小讯给大家派送大礼包咯！', // 分享描述
		link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx10441421739feb0b&redirect_uri=http%3A%2F%2Fwxapp.njdaily.cn%2F2015%2Fjiugg%2Ftest.php&response_type=code&scope=snsapi_userinfo&state=122333&connect_redirect=1#wechat_redirect', // 分享链接
		imgUrl: 'http://wxapp.njdaily.cn/2015/jiugg/images/fx.png', // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
		   // 用户取消分享后执行的回调函数
		}
	});
});
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7f32aed534f2da344768184078540b91' type='text/javascript'%3E%3C/script%3E"));
</script>
</html>