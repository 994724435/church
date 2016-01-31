<?php
error_reporting(E_ALL || ~E_NOTICE);
include 'session.php';
include("db_conn.php");
mysql_query("set names utf8");

if (isset($_POST[Submit])&&$_REQUEST["name"]!=""){
$name=$_REQUEST["name"];
$class=$_REQUEST["class"];
$tel=$_REQUEST["tel"];
$storedate=$_REQUEST["storedate"];
$returndate=$_REQUEST["returndate"];
$remark=$_REQUEST["remark"];
$num = 1;
$bookname=$_REQUEST["bookname"];
$query="insert into  book 
     (name,class,tel,storedate,returndate,remark,num,bookname) values
     ('{$name}','{$class}','{$tel}','{$storedate}','{$returndate}','{$remark}','{$num}','{$bookname}' )" ;

$result=mysql_query($query);
if($result)
	{
		echo("<script language='javascript'>alert('借书成功！');window.location.href='book_add.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('借书失败！');window.location.href='book_add.php';</script>");		
		exit();	
	}	
}

?>
<?php
include 'session.php';
include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query);   
    $row = mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="Date/WdatePicker.js"></script>
<title></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "微软雅黑";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "微软雅黑";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "微软雅黑";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "微软雅黑";
	font-size: 14px;
	height: 37px;
}
html { overflow-x: auto; overflow-y: auto; border:0;} 
-->
</style>

<link href="../css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE2 {color: #330000}
-->
</style></head>


<body>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">
            
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="144" align="left"></td>	
		    </tr>
          </table>
		   <table width="428" border="0">
             <tr>
               <td width="41">身份:</td>
               <td width="55"><span class="button"><?php echo($row["list"]);?></span></td>
               <td width="318"><a href="#" onclick="sousuo()"id="navmenu">

 现在的时间：
     <script language="javascript" type="text/javascript" src="time.js"></script>
</a></td>
             </tr>
           </table></td>
        </tr>
    </table></td></tr>

  <table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="7" align="center" class="select_tr STYLE2" style="font-size:16px">图书借阅</td>
                  </tr>
                  <tr bgcolor="#EEEEEE" align="center">
				    <td width="9%" align="center" height="30">借书人：</td>
                    <td width="17%"><input name="name" class="text" id="xh" style="width:150px" size="13" /></td>
					<td width="13%">书名：</td>
                    <td width="17%"><input name="bookname" class="text" id="sfzh" style="width:150px" size="19" /></td>
					<td>类别：</td>
					<td><select name="class" id="sex">
					  <option>请选择：</option>
                      <option>经书</option>
                      <option>其他</option></select></td>
					<td><div align="center">备注：</div></td>
					
					</tr>
                  <tr bgcolor="#FFFFFF" align="center">
				    <td width="9%" height="20"><div align="center">电话：</div></td>
                    <td ><input name="tel" class="text" id="price" style="width:150px" size="50" /></td>
                    <td>借书日期：</td>
                    <td><input name="storedate" style="width:150px" size="50" class="Wdate" type="text" onClick="WdatePicker()">
                    </td>    
                    <td width="8%">归还时间：</td>
                    <td width="14%"><input style="width:150px" size="50" name="returndate" class="Wdate" type="text" onClick="WdatePicker()"></td>
                                                         
                    <td rowspan="1"> <input name="remark" type="text" class="text"  id="addss" style="width:150px;height:30px " size="100" /></td> </tr>
				
				  <tr bgcolor="#FFFFFF">
				    <td height="20" colspan="7"><div align="center">
				      <input name="Submit" type="submit" value="提交" />
				      <input name="Submit2" type="reset" value="重置" />
				    </div></td>
                    </tr>
            </table></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
</body>
</html>
