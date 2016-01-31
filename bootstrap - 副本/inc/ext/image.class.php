<?php
//图像处理类
//生产验证码、等比例缩略图、加水印
class image {
	/*
	 * 生产验证码
	 * @param mode 1表示只有数字（默认） 2字母 3混合
	 * @param length 验证码字符串的长度（默认4）
	*/
	public function verify($mode = 1, $length = 4, $width = 60, $height = 22){
		session_start();
		$img = imagecreatetruecolor($width, $height);
		//创建颜色
		$bgcolor = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
		//画一个矩形并填充
		imagefilledrectangle($img, 0, 0, $width-1, $height-1, $bgcolor);
		
		//画点
		for($i=0; $i<60; $i++){
			$pointcolor = imagecolorallocate($img,  mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
			imagesetpixel($img, mt_rand(0, $width), mt_rand(0, $height), $pointcolor);
		}

		//画线段
		for($i=0; $i<10; $i++){
			$linecolor = imagecolorallocate($img,  mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
			imageline($img, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height),$linecolor);
		}
		
		//画弧线
		for($i=0; $i<10; $i++){
			$hucolor = imagecolorallocate($img,  mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
			imagearc($img, mt_rand(10,$width-10), mt_rand(10,$height-10), mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,360), mt_rand(0,360), $hucolor);
		}

		//产生一个随机字符串
		$num = '0123456789';
		$zimu = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$str = '';
		switch($mode){
			case 1:
			$str = $num;
			break;
			case 2:
			$str = $zimu;
			break;
			case 3:
			$str = $num . $zimu;
		}
		//将字符串当做数组
		$str2 = '';
		for($i=0; $i<$length; $i++){
			$str2 .= $str[mt_rand(0,strlen($str)-1)];
		}

		//存session中
		$_SESSION['verify'] = md5($str2);

		for($i=0; $i<strlen($str2); $i++){
			//水平的画一个字符串
			$strcolor = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
			//imagestring($img, 5, 0, 0, $str2, $strcolor);
			$x = 10 + (($width - 10*2)/4)*$i;
			imagettftext($img, 15, mt_rand(-10, 10), $x, $height, $strcolor, 'consola.ttf', substr($str2, $i, 1));
		}
		
		//输出并销毁
		$this->putout($img);
	}

	/*
	* 输出图像
	*param img 要输出的图像
	*/
	public function putout($img){
		header('Content-type:image/gif');
		//输出和销毁
		imagegif($img);
		imagedestroy($img);
	}
}

//0-255  数值越小，颜色越深。
//背景、点、线颜色值尽量大点；
//字颜色深点，也就是数值小点

?>