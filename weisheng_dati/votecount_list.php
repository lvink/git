<?php

require_once 'db.config.php';

$aid = ($_GET && $_GET['aid']) ? $_GET['aid'] : $_POST['aid'];
$aid = (isset($aid) && is_numeric($aid) && ($aid > 0)) ? $aid : 0;

if($aid == 0) exit;

$sql = "SELECT `vote_count` FROM `{$_db_tbprefix}archives` WHERE `id`='{$aid}' limit 1";
$item = $db->query($sql, 'one');
if(!$item) exit;
$count = $item['vote_count'] ? $item['vote_count'] : 0;

echo "document.write('" . $count . "');\r\n";

?>