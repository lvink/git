
<?

$leenMsgIndex = 0;

/**
 * $action = 'start' | 'stop'
 * return String
 */
function leenEfficiency($action = 'start') {
	static $timeStart;
	if($action == 'start') {
		$timeStart = microtime();
		return;
	}
	$timeEnd = microtime();
	list($m0, $s0) = explode(" ", $timeStart);
	list($m1, $s1) = explode(" ", $timeEnd);
	return sprintf("%.6f ms", ($s1 + $m1 - $s0 - $m0) * 1000);
}

/**
 * $msg
 * return
 */
function leenMsg($msg) {
	global $leenMsgIndex;
	$leenMsgIndex++;
	if($msg === true) $msg = '[true]';
	if($msg === false) $msg = '[false]';
	if(is_null($msg)) $msg = '[null]'; 
	echo '<div class="-util-debug-leenmsg">' . '<span class="-util-debug-leenmsg-index">' . $leenMsgIndex . ' - [ ' . date("H:i:s", time()) . ' ]</span>' . $msg . '</div>';
}


?>