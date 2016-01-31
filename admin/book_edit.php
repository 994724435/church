<?php
error_reporting(E_ALL || ~E_NOTICE);
include ("session.php");
include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

 现在时间：
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
                    	<td height="22" colspan="13" align="center" class="select_tr STYLE2" style="font-size:16px">图书修改</td>
                  </tr> 
				  <tr bgcolor="#FFFFFF" style="text-align:center ;" >				   
				   <td width="7%" >借书人</td>
				    <td width="9%" >图书名称</td>
				    <td width="7%" >电话</td>				    
				    <td width="7%">类别</td>
                    <td width="10%">借书日期</td>
                    <td width="10%">还书日期</td>
                    <td width="10%">备注</td>
                    <td width="10%">操作</td>                 
				  </tr>
	<?php
	include("db_conn.php");
	$sql="select * from book where num = 1";    
	$query=mysql_query($sql);
	while ($row = mysql_fetch_array($query)) {   										
	?>  
	
	        
	
			  <tr bgcolor="#FFFFFF" style="text-align:center">
				    <td ><?php echo ($row["name"]); ?></td>
				    <td  ><?php echo ($row["bookname"]); ?></td>
				    <td  ><?php echo ($row["tel"]); ?></td>
				    <td  ><?php echo ($row["class"]); ?></td>
				    <td  ><?php echo ($row["storedate"]); ?></td>
                    <td ><?php echo ($row["returndate"]); ?></td>
                    <td ><?php echo ($row["remark"]); ?></td> 
                    <td><a href="book_change.php?xh=<?php echo ($row["bid"]); ?>">修改</a>
<a href="book_del.php?xh=<?php echo ($row["bid"]); ?>"  onclick="return confirm('你确定要还书吗？');">归还</a></td>               
				  </tr>                 
<?php
}
?>  </tr>
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
