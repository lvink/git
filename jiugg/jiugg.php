<?php
header('content-type:text/html;charset=utf-8');
session_start();
$DBuser = "";
$DBpwd = "";
$DBname = "";
$DBip = "127.0.0.1";
$link = mysql_connect($DBip, $DBuser, $DBpwd);
mysql_select_db($DBname ,$link);
mysql_query("set names utf8");
$d_wxopenid = $_SESSION['sdj'];
	//$sql = "select distinct title,id,pphone,idcard,imgurl1,imgurl2,imgurl3,imgurl4,imgurl5 from njrb_icbc_ddsz where id in(select max(id) from njrb_icbc_ddsz group by title)";
	$sql = "select id,name,tel,dtime,award from jiangping where award<>4 and award<>10";
	$res = mysql_query($sql);
	if(mysql_num_rows($res)>0){
   	while($list = mysql_fetch_assoc($res)){
       $arr[] = $list;
   }
 
}

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>数据</title>	
	<style>
	table{text-align: center}
	td{border:1px solid black;}
	tr{border:1px solid black;}
	img{width:70px;height:70px;}
  	</style>


</head>
<body>
	<table width="98%" border="0" cellpadding="1" cellspacing="0" bgcolor="#CFCFCF" align="center">
		 <tr >
			<td   colspan="9">中奖信息 </td>
		</tr>
		<tr>
			<td >姓名</td>
			<td>手机号码</td>
			<td>时间</td>
			<td>中奖</td>
		</tr>
		<?php foreach($arr as $vo){?>
		<?php $date=date('Y-m-d H:i:s',$vo['dtime']);?>
		<tr>
			<td><?=$vo['name']?></td>
			<td><?=$vo['tel']?></td>
			<td><?=$date?></td>
			<td>
			<?php
					 if( $vo['award']=="1"){
						echo "抽中南京都市报";
					}else
					if( $vo['award']=="2"){
						echo "抽中智能手机";
					}else
					if( $vo['award']=="3"){
						echo "抽中智能耳机";
					}else
					if( $vo['award']=="5"){
						echo "抽中畅销书";
					 }else
					if( $vo['award']=="6"){
						echo "抽中图书卡";
					 }else
					if( $vo['award']=="7"){
						echo "抽中移动电源";
					 }else
					if( $vo['award']=="8"){
						echo "抽中智能手环";
					 }else
					if( $vo['award']=="9"){
						echo "抽中智能路由器";
					}else
					if( $vo['award']=="11"){
						echo "抽中智能电子秤";
					 }else
					if( $vo['award']=="12"){
						echo "抽中话费充值卡";
					}else
					if($vo['award']=="2" || $vo['award']=="8"){
						echo "谢谢参与";
					}
			?>
			</td>
		</tr>
		<?php }?>	
	</table>
</body>
</html>
