<?php
session_start();
require_once("userinfo.php");
$code = $_GET['code'];
if(empty($code)){
	die("403");
}
$AppId = "wx10441421739feb0b";
$AppSecret = "6d05c60b7179daef1feb37dd60a9029f";
$userinfo = new CHECKUSER($AppId,$AppSecret,$code);
$userinfo->CheckUser();
header("Location: http://wxapp.njdaily.cn/2015/jiugg");
?>