<?php
error_reporting(E_ALL || ~E_NOTICE);
include 'session.php';
include("db_conn.php");
mysql_query("set names utf8");

if (isset($_POST[Submit])&&$_REQUEST["name"]!=""){
$name=$_REQUEST["name"];
$sex=$_REQUEST["sex"];
$age=$_REQUEST["age"];
$birth=$_REQUEST["birth"];
$paster=$_REQUEST["paster"];
$pasterdate=$_REQUEST["pasterdate"];

$believedate=$_REQUEST["believedate"];
$pasterplace=$_REQUEST["pasterplace"];
$jiguan=$_REQUEST["jiguan"];
$address=$_REQUEST["address"];
$wenhua=$_REQUEST["wenhua"];
$list=$_REQUEST["list"]; //?
$txt=$_REQUEST["txt"];
$tel=$_REQUEST["tel"];
$job=$_REQUEST["job"];
$deathdate=$_REQUEST["deathdate"] ="未归主";
$introduce=$_REQUEST["introduce"];
$query="insert into  church 
     (name,sex,age,birth,paster,pasterdate,believedate,pasterplace,jiguan,address,wenhua,tel,job,deathdate,introduce,txt) values
     ('{$name}','{$sex}','{$age}','{$birth}','{$paster}','{$pasterdate}','{$believedate}','{$pasterplace}'
      ,'{$jiguan}','{$address}','{$wenhua}','{$tel}','{$job}','{$deathdate}','{$introduce}','{$txt}')" ;
//echo $query;
$result=mysql_query($query);
if($result)
	{
		echo("<script language='javascript'>alert('添加成功！');window.location.href='user_xinxi_select.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('添加失败！');window.location.href='user_xinxi_select.php';</script>");		
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
<script language="javascript" type="text/javascript" src="Date/WdatePicker.js"></script>

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
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                   <td height="22" colspan="7" align="center" class="select_tr STYLE2" style="font-size:16px">教会人员信息录入</td>
                  </tr>
                  <tr bgcolor="#EEEEEE" align="center">
				    <td width="9%" align="center" height="30">姓名：</td>
                    <td width="17%"><input name="name" class="text" id="xh" style="width:150px" size="13" /></td>
					<td width="13%">年           龄</td>
                    <td width="17%"><input name="age" class="text" id="sfzh" style="width:150px" size="19" /></td>
					<td>性别：</td>
					<td align="left"><select name="sex" id="sex">
					  <option>请选择：</option>
                      <option>男</option>
                      <option>女</option>
                                                            </select></td>
					<td><div align="center">地址：</div></td>
					
					</tr>
                  <tr bgcolor="#FFFFFF"  align="center">
				    <td width="9%" height="20"><div align="center">联系电话：</div></td>
                    <td ><input name="tel" class="text" id="username" style="width:150px" size="50" /></td>                                      
                    <td>施洗地点：</td>
                    <td><input name="pasterplace" type="text" value="黄桷垭救主堂" class="text" id="zymc" style="width:150px" size="50" /></td>                   					
                    <td>籍贯：</td>
                    <td><input name="jiguan" class="text" id="csly" style="width:150px" size="50" /></td>
                    <td rowspan="2"><input name="address" class="text" id="csly" style="width:240px;height:45px" size="50" /></td>                </tr>
				  <tr bgcolor="#FFFFFF" align="center">					
					<td>生日：</td>
                    <td><input name="birth" class="Wdate" type="text" onClick="WdatePicker()" style="width:150px" size="50"/></td>
				    <td height="20"><div align="center">信主日期:</div></td>
                    <td ><input name="believedate" class="Wdate" type="text" onClick="WdatePicker()" style="width:150px" size="50"/> </td>					
					
                    <td width="8%">受洗日期：</td>
                    <td width="14%"><input name="pasterdate" class="Wdate" type="text" onClick="WdatePicker()" style="width:150px" size="50"/></td>
                    </tr>
				  <tr bgcolor="#FFFFFF" align="center">
				    <td height="20"><div align="center">工作：</div></td>
                    <td ><input name="job" type="text" class="text" id="bj" style="width:150px" size="50" /></td>
										<td>介绍人：</td>
                    <td><input name="introduce" type="text" class="text" id="tel" style="width:150px" size="50" /></td>					
                    <td>文化：</td>
                    <td align="left"><select name="wenhua" id="xb" >
                      <option>文盲</option>
                      <option>小学</option>
                      <option>初中</option>
                      <option>高中</option>
                      <option>大学</option>
                      <option>硕士</option>
                      <option>博士</option>
                                        </select></td>
                    <td>&nbsp;</td>
				  </tr>
				  <tr bgcolor="#FFFFFF" align="center">
				    <td height="20"><div align="center">施洗牧师:</div></td>
                    <td ><input name="paster" type="text" class="text" id="jg" style="width:150px" size="50" /></td>
                    <td>补充：</td>
                    <td><input name="txt" class="text" id="username" style="width:150px" size="50" /></td>					
					<td>归主：</td>
                    <td><input name="" type="text" class="text" id="addss" style="width:150px" size="100" value="未归主" /></td>

                    <td>&nbsp;</td>
                  </tr>
				  <tr bgcolor="#FFFFFF" align="center">
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
