<?php
	include 'init.php';
	$mysql = mysql::getMysql();//实例化对象的时候，自动链接数据库了
	//$currentPage = isset($_GET['p']) ? $_GET['p'] : 1;

	$sql_count = "select count(id) as num from xs_student";
	$count_result = $mysql->query($sql_count);
	$arr = mysql_fetch_assoc($count_result);
	$total = $arr['num'];//取得总记录数

	$page = new page($total,2);
	$show = $page->show();

	$sql = "select * from xs_student order by id asc limit " . $page->startPage . "," . $page->pageNum;
	$arr = $mysql->select($sql);
            // $mysql->autoQuery($data, $table, $type = 'add');
	/*//下面是测试
	$a = $mysql->autoQuery();
	echo '<pre>';
	print_r($arr);*/

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>学生列表</title>
</head>
<body>
	<table border="1" width="500" align="center">
		<tr>
			<td >
				<a href="add.php">添加学员</a>
			</td>
		</tr>
	</table>
	<table border="1" width="500" align="center">
		<tr>
			<th>编号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
		<?php
			foreach($arr as $key => $value){
		?>
		<tr align="center">
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['name'];?></td>
			<td><?php echo $value['sex'];?></td>
			<td><?php echo $value['class'];?></td>
			<td>
				<a href="edit.php?id=<?php echo $value['id'];?>">编辑</a> | 
				<a href="delete.php?id=<?php echo $value['id'];?>">删除</a>
			</td>
		</tr>
		<?php
			}
		?>
		<tr>
			<td colspan="5" align="center">
				<?php echo $show;?>
			</td>
		</tr>		
	</table>
</body>
</html>