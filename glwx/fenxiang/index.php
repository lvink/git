<?php
require_once "jssdk.php";
$n_url = $_SERVER['HTTP_REFERER'];
$jssdk = new JSSDK("ÕËºÅ", "ÃÜÂë", "$n_url");
$signPackage = $jssdk->GetSignPackage();
?>
  wx.config({
 	debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
     	'checkJsApi',
		'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo'
    ]
  });


