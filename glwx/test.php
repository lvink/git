<?php
session_start();
require_once("userinfo.php");
$code = $_GET['code'];
if(empty($code)){
	die("403");
}
$AppId = "";
$AppSecret = "";
$userinfo = new CHECKUSER($AppId,$AppSecret,$code);
$userinfo->CheckUser();
header("Location: ");
?>