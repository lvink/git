<?
function leen_getClientIP() {
	if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], '0.0.0.0' ))
		$ip = $_SERVER ['REMOTE_ADDR'];
	else if (getenv ( 'REMOTE_ADDR' ) && strcasecmp ( getenv ( 'REMOTE_ADDR' ), '0.0.0.0' ))
		$ip = getenv ( 'REMOTE_ADDR' );
	else if (getenv ( 'HTTP_X_FORWARDED_FOR' ) && strcasecmp ( getenv ( 'HTTP_X_FORWARDED_FOR' ), '0.0.0.0' ))
		$ip = getenv ( 'HTTP_X_FORWARDED_FOR' );
	else if (getenv ( 'HTTP_CLIENT_IP' ) && strcasecmp ( getenv ( 'HTTP_CLIENT_IP' ), '0.0.0.0' ))
		$ip = getenv ( 'HTTP_CLIENT_IP' );
	else
		$ip = '0.0.0.0';
	return ($ip);
}
	
function leen_getParameter($_param) {
	$param = ($_POST && isset($_POST[$_param])) ? $_POST[$_param] : '';
	$param = ($_GET && isset($_GET[$_param])) ? $_GET[$_param] : $param;
	return $param;
}

// +----------------------------------------------------------------------
// | ¹ýÂËÊäÈë£¬·ÀÖ¹SQL×¢Èë
// +----------------------------------------------------------------------
function leen_sql_escape($str) {
	return mysql_real_escape_string($str);
}