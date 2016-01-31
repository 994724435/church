<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	//设置一个项目的路径
	define('ROOT',$_SERVER['DOCUMENT_ROOT'].'bootstrap/inc/');
	
	//用来加载所需的类
	include ROOT.'conf/config.class.php';
	include ROOT.'db/mysql.class.php';

	function __autoload($className){
		require_once ROOT."ext/".$className.'.class.php';
	}

?>