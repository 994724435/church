<?php
//分页类
class page {
	//必须的参数$total总记录数 $pageNum每页显示多少条  $p当前页面
	//一个方法。当我需要分页的时候，那么调用这个方法。输出分页结果
	//$page->show();
	//首页 上一页 12345 下一页 尾页
	public $total = 0;
	public $pageNum = 10;
	public $allPage = 0;
	public $startPage = 0;
	public $currentPage = 1;

	public function __construct($total, $pageNum = 10){
		$this->total = $total;
		$this->pageNum = $pageNum;
		$this->allPage = ceil($total/$pageNum);
		if(isset($_GET['p'])){
			$this->currentPage = $_GET['p'];
		}else{
			$this->currentPage = 1;
		}
		$this->startPage = ($this->currentPage-1)*$pageNum;
	}

	//输出分页的超链接。样式 首页 上一页 12345 下一页 尾页
	public function show(){

		//处理url中原有参数的问题

		$url = $_SERVER['REQUEST_URI'];
		$arr = parse_url($url);
                          // $arr['query']='';
		//arr[path=>0704/select.php , query=>p=1&cid=2&bid=3]
		//$arr['query'] p=1&cid=2&bid=3
		parse_str($arr['query'], $params);
		//echo '<pre>';
		
		unset($params['p']);
		//print_r($params);
		$new_url = '';
		if(count($params) > 0){
			//除了p，还有其他参数
			$new_url = '?'.http_build_query($params).'&';
			
		}else{
			//只有p参数，没有其他参数
			$new_url = '?';
		}
		//echo $new_url;
		//上一页
		$upPage = '';
		if($this->currentPage <= 1){
			$upPage = ' <a href="#">上一页</a>';
		}else{
			$upPage = '<a href="'.$new_url.'p='.($this->currentPage-1).'">上一页</a>';
		}
		
		//下一页
		$downPage = '';
		if($this->currentPage >= $this->allPage){
			$downPage = '<a href="#">下一页</a>';
		}else{
			$downPage = "<a href='".$new_url."p=".($this->currentPage+1)."'>下一页</a> ";
		}
		

		//12345
		$start = $this->currentPage - 2 <= 1 ? 1 : $this->currentPage - 2;
		//$start_max =  $currentPage+2 >= $allPage ? $allPage - 5 : $currentPage + 2;
		//$end = $currentPage + 2 >= $allPage ? $allPage : $currentPage + 2;
		$end_condition = $start + 4 >= $this->allPage ? $this->allPage : $start + 4;
		if($end_condition == $this->allPage){
			$start = $this->allPage - 4;
		}
		$str = '';
		for($i=$start; $i<=$end_condition; $i++){
			$str .= " <a href='".$new_url."p=$i'>$i</a> ";
		}

		//首页、尾页
		$firstPage = "<a href='".$new_url."p=1'>首页</a>";
		$endPage = "<a href='".$new_url."p=".$this->allPage."'>尾页</a>";

		return $firstPage.$upPage.$str.$downPage.$endPage;
	}
}
?>