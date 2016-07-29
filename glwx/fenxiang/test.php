<?php
require_once("userinfo.php");
require_once "jssdk.php";
$code = $_GET['code'];
if(empty($code)){
	die("403");
}
$jssdk = new JSSDK("wx2ab8eab40995a124", "4c180845f979d7249095fc85a49f1b1c", "XXX");
$Access_Token = $jssdk->getAccessToken();
$AppId = "wx2ab8eab40995a124&secret=4c180845f979d7249095fc85a49f1b1c";
$AppSecret = "4c180845f979d7249095fc85a49f1b1c";

$userinfo = new CHECKUSER($AppId,$AppSecret,$Access_Token,$code);
$s = $userinfo->CheckUser();
print_r($s);