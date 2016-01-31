<?php
error_reporting(E_ALL || ~E_NOTICE);
include ("session.php");
include("db_conn.php");
$xh=$_GET["xh"];
$sql="update   book  set  num=0  where bid='{$xh}' ";
mysql_query($sql);
//mysql_query("DELETE FROM chengji WHERE xh = '$_GET[xh]' LIMIT 1;");
if(isset($_GET[xh]))
{
		echo("<script language='javascript'>alert('还书成功！');window.location.href='book_edit.php';</script>");
		exit();
	}
	else
	{
		echo("<script language='javascript'>alert('还书失败！');window.location.href='book_edit.php';</script>");
		exit();	
	}	

?>

