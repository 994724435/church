<?php
//目前只处理单文件上传
class upload {
	//控制大小、文件类型（后缀，mime类型）

	//指定好文件上传后的存放目录，由用户指定，默认upload文件夹
	//良好的错误提示

	public $info = array();//表示上传文件的信息
	public $allowSize = -1;//-1表示不控制
	public $allowExt = array('jpg','gif','png');//默认允许的后缀
	public $allowMime = array('image/jpeg', 'image/gif', 'image/png');//默认允许的mime类型
	public $error = '';//错误信息
	public $savePath = './upload/';//默认存放路径

	//接收的参数是表单的name值，例如例子中的myfile
	public function __construct($formName = null){
		if($formName){
			$this->info = $_FILES[$formName];
		}else{
			$this->error = '请添写name值1233333';
			$this->showError();
		}
	}

	//具体的上传方法
	public function up(){
		//检测
		if(!$this->checkSize()){
			$this->showError('您上传的文件过大');
		}
		if(!$this->checkExt()){
			$this->showError('文件后缀不允许');
		}
		if(!$this->checkMime()){
			$this->showError('MIME错误');
		}
		$this->checkSysError();
		//来生产一个存放上传文件的目录
		$this->savePath = rtrim($this->savePath, '/') . '/';
		if(!is_dir($this->savePath)){
			mkdir($this->savePath);
		}
		//生产一个不重复的文件名
		$new_name = time() . mt_rand(100,999);
		if(move_uploaded_file($this->info['tmp_name'], $this->savePath . $new_name . '.' . $this->getExt())){
			return $new_name . '.' . $this->getExt();
		}else{
			$this->showError('上传失败');
		}
	}

	//检测上传是否发生系统错误
	public function checkSysError(){
		$err = array(
			1 => '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。',
			2 => '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。',
			3 => '文件只有部分被上传。',
			4 => '没有文件被上传。',
			6 => '找不到临时文件夹',
			7 => '文件写入失败。'
			);
		if(array_key_exists($this->info['error'], $err)){
			$this->showError($err[$this->info['error']]);
		}
	}

	//检测大小
	public function checkSize(){
		if($this->allowSize == -1){
			return true;
		}
		if($this->allowSize >= $this->info['size']){
			return true;
		}
		return false;
	}

	//检测后缀
	public function checkExt(){
		if(in_array($this->getExt(), $this->allowExt)){
			return true;
		}
		return false;
	}

	//检测mime
	public function checkMime(){
		if(in_array($this->info['type'], $this->allowMime)){
			return true;
		}
		return false;
	}

	//取得上传文件的后缀
	public function getExt(){
		$arr = explode('.', $this->info['name']);
		return $arr[count($arr)-1];
	}

	//提示错误的方法
	public function showError($msg = ''){
		if($msg){
			exit($msg);
		}
		exit($this->error);
	}

}
?>