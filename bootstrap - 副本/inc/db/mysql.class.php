<?php
//处理简单的增删改查
class mysql{

	private static $mysql = false;
	private $conf = false;
	private $conn;

	public static function getMysql(){
		if(self::$mysql == false){
			self::$mysql = new mysql();
		}
		return self::$mysql;
	}
	public function __construct(){
		$this->conf = config::getIns();
		$this->conn();
	}

	//链接数据库
	public function conn(){

		$this->conn = mysql_connect($this->conf->host,$this->conf->user,$this->conf->pwd);
		mysql_select_db($this->conf->dbname);
		mysql_query('set names '.$this->conf->charset);
	}

	//查询所有的行
	public function select($sql){
		$result = mysql_query($sql, $this->conn);
		$arr = array();
		while($row = mysql_fetch_assoc($result)){
			$arr[] = $row;
		}
		return $arr;
	}

	//查询一行
	public function selectRow($sql){
		$result = mysql_query($sql, $this->conn);
		return mysql_fetch_assoc($result);
	}

	//执行sql
	public function query($sql){
		return mysql_query($sql, $this->conn);
	}

	//修改、添加
	/*
	* param data[array] 添加或者修改的数据
	*/
	public function autoQuery($data, $table, $type = 'add'){
		$key = array_keys($data);
		$value = array_values($data);
		$sql = '';
		if($type == 'add'){
			//添加操作
			$sql .= 'insert into '.$table.'(';
			$sql .= implode(',', $key);
			$sql .= ')values(';
			$sql .= "'".implode("','", $value)."')";
			return mysql_query($sql);
		}else if($type == 'update'){
			//修改操作
			$id = $data['id'];
			unset($data['id']);

			$sql .= "update " . $table . " set ";

			foreach($data as $key => $value){
				$sql .= $key . "='" . $value . "',";
			}
			$sql = rtrim($sql,',');
			$sql .= " where id = " . $id;
			return mysql_query($sql, $this->conn);
		}
	}
}
?>