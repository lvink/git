<?php
date_default_timezone_set('Asia/Shanghai');
$_db_config = array();
$_db_config ['host'] 		= '127.0.0.1';
$_db_config ['user'] 		= 'springfestival';
$_db_config ['pwd'] 		= 'springfestival';
$_db_config ['port'] 		= 3306;
$_db_config ['database'] 	= 'springfestival';
$_db_config ['char'] 		= 'utf8';
$_db_config ['pconnect'] 	= FALSE;
$_db_config ['cachepath'] 	= 'cache/';

$_db_tbprefix = 'pk_';

require_once 'db.helper.php';
$db = new DBHelper ();
$db->connect ( $_db_config );