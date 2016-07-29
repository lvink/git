<?php
class DBHelper {
	
	private $connection = null;
	private $queryCount = 0;
	private $useCache = false;
	private $cacheTime = 60;
	private $cachePath = 'cache/';
	private $cacheCount = 0;
	
	/**
	 * Connect database.
	 */
	public function connect($_db_config) {
		$_db_config ['host'] = isset ( $_db_config ['port'] ) ? $_db_config ['host'] . ':' . $_db_config ['port'] : $_db_config ['host'];
		$func = $_db_config ['pconnect'] ? 'mysql_pconnect' : 'mysql_connect';
		$this->connection = $func ( $_db_config ['host'], $_db_config ['user'], $_db_config ['pwd'] );
		mysql_select_db ( $_db_config ['database'], $this->connection );
		mysql_query ( "SET NAMES '{$_db_config['char']}'" );
		$this->cachePath = isset ( $_db_config ['cachepath'] ) ? $_db_config ['cachepath'] : 'cache/';
		
		return $this->connection;
	}
	
	/**
	 * Execute update, insert, delete.
	 */
	public function execute($sql) {
		$this->queryCount++;
		if (mysql_query ( $sql )) {
			return true;
		}
		return false;
	}
	
	/**
	 * Execute a query and return an array.
	 */
	public function query($sql, $type = 'all') {
		$rows = null;
		if ($this->useCache) {
			$rows = $this->readCache ($sql);
		}
		if (is_null ( $rows )) {
			$this->queryCount++;		
			$result = mysql_query ( $sql );
			if (is_resource ( $result )) {
				if($type == 'all') {
					$rows = $this->fetch ( $result );
				} else {
					$rows = $this->fetch ( $result, 'one' );
				}
				if ($this->useCache) {
					$this->writeCache ( $sql, $rows );
				}
			}
		}
		return $rows;
	}
	
	/**
	 * Fetch the query result set into an array.
	 */
	public function fetch($result, $type = 'all') {
		if(!$result) return null;
		$rows = array ();
		while ( $row = mysql_fetch_array ( $result ) ) {
			$rows [] = $row;
		}
		if(!$rows) return null;
		if($type == 'one') return $rows[0];
		return $rows;
	}
	
	/**
	 * Add a new record.
	 */
	public function insert($table, $data) {
		$sql = "INSERT INTO `{$table}`";
		$fields = $values = array ();
		$field = $value = '';
		foreach ( $data as $key => $val ) {
			$fields [] = "`{$table}`.`{$key}`";
			$values [] = "'{$val}'";
		}
		$field = join ( ',', $fields );
		$value = join ( ',', $values );
		unset ( $fields, $values );
		$sql .= "({$field}) VALUES({$value})";
		$this->execute ($sql);
		
		return mysql_insert_id ();
	}
	
	/**
	 * Delete records.
	 */
	public function delete($table, $where = '') {		
		$sql = "DELETE FROM `{$table}` " . $where;
		$this->execute ($sql);
		
		return mysql_affected_rows ();
	}
	
	/**
	 * update records.
	 */
	public function update($table, $data, $where = '' ) {
		$sql = "UPDATE `{$table}` SET ";
		$values = array ();
		foreach ( $data as $key => $val ) {
			$val = "'{$val}'";
			$values [] = "`{$table}`.`{$key}` = {$val}";
		}
		$value = join ( ',', $values );
		$sql .= $value . " {$where}";
		$this->execute ($sql);
		
		return mysql_affected_rows ();
	}
	
	// ================================================
	// Cache
	// ================================================
	private function readCache($sql) {
		$this->cacheCount++;
		$file = $this->cachePath . md5($sql) . '.php';
		if (file_exists ( $file )) {
			if ((filemtime ( $file ) + $this->cacheTime) < time ()) {
				@unlink ( $file );
				return null;
			}
			$rows = include $file;
			return $rows;
		}
		return null;
	}
	private function writeCache($sql, $data) {
		$file = $this->cachePath . md5($sql) . '.php';
		$data = '<?php return ' . var_export ( $data, TRUE ) . '; ?>';
		return file_put_contents ( $file, $data );
	}
	public function openCache($cacheTime = 60) {
		$this->cacheTime = $cacheTime;
		$this->useCache = true;
		return $this;
	}
	public function closeCache() {
		$this->useCache = false;
		return $this;
	}
	
	/**
	 * Query count and cache count.
	 */
	public function getQueryCount() {
		return $this->queryCount;
	}
	public function getCacheCount() {
		return $this->cacheCount;
	}
}