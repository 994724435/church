<?php
	//读取、添加配置项
	class config {
		private $conf = array();
		private static $ins = false;//
		public $name = 'zhangsan';

		private function __construct(){
			$this->conf	= include ROOT.'conf/config.php';
		}

		//单例模式
		public static function getIns(){
			if(self::$ins == false){
				self::$ins = new config();
			}
			return self::$ins;
		}

		public function __get($key){
			if(array_key_exists($key, $this->conf)){
				return $this->conf[$key];
			}
			return null;
		}

		public function __set($key, $value){
			$this->conf[$Key] = $value;
		}
	}

	//$conf = config::getIns();
	//echo $conf->host;

?>