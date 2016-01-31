<?php
include ("session.php");
include("db_conn.php");
$xh=$_GET["xh"];
$sql="select * from church where Cid=$xh";
$query= mysql_query($sql);
error_reporting(E_ALL || ~E_NOTICE);
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
$tel=$_REQUEST["tel"];
$job=$_REQUEST["job"];
$txt=$_REQUEST["txt"];
$deathdate=$_REQUEST["deathdate"];
$introduce=$_REQUEST["introduce"];
mysql_query("set names utf8 ");
$query=" update   church  set 
     name='{$name}',sex='{$sex}',age='{$age}',birth='{$birth}',paster='{$paster}',pasterdate='{$pasterdate}'
     ,believedate='{$believedate}',pasterplace='{$pasterplace}',jiguan='{$jiguan}',address='{$address}'
     ,wenhua='{$wenhua}',tel='{$tel}',job='{$job}',deathdate='{$deathdate}',introduce='{$introduce}',txt='{$txt}'
       where Cid='{$xh}' " ;
$result=mysql_query($query);
if($result)
	{
		echo("<script language='javascript'>alert('修改成功！');window.location.href='user_xinxi_select.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('修改失败！');window.location.href='user_xinxi_select.php';</script>");		
		exit();	
	}	
}    

while ($row=mysql_fetch_array($query)){

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
</style>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
<table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#464646">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="7" align="center" class="select_tr STYLE2" style="font-size:16px ">教会人员信息修改</td>
                  </tr>
                  <tr bgcolor="#EEEEEE">
				    <td width="9%" align="center" height="30">姓名：</td>
                    <td width="17%"><input name="name" class="text" id="xh" style="width:150px" size="13" value="<?php echo $row['name'];?>"/></td>
					<td width="13%">年           龄</td>
                    <td width="17%"><input name="age" class="text" id="sfzh" style="width:150px" size="19" value="<?php echo $row['age'];?>"/></td>
					<td>性别：</td>
					<td><select name="sex" id="sex" value="<?php echo $row['sex'];?>">
                      <option>男</option>
                      <option>女</option>
                                                            </select></td>
					<td><div align="center">地址：</div></td>
					
					</tr>
                  <tr bgcolor="#FFFFFF">
				    <td width="9%" height="20"><div align="center">电话：</div></td>
                    <td ><input name="tel" class="text" id="username" style="width:150px" size="50" value="<?php echo $row['tel'];?>"/></td>
					<td>生日：</td>
                    <td><input name="birth" class="text" id="csly" style="width:150px" size="50" value="<?php echo $row['birth'];?>"/></td>
                    <td>籍贯：</td>
                    <td><input name="jiguan" class="text" id="csly" style="width:150px" size="50" value="<?php echo $row['jiguan'];?>"/></td>
                    <td rowspan="2"><input name="address" class="text" id="csly" style="width:240px;height:45px" size="50" value="<?php echo $row['address'];?>"/></td>                </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">信教时间:</div></td>
                    <td ><input name="believedate" type="text" class="text" id="pwd" style="width:150px" size="50" value="<?php echo $row['believedate'];?>"/></td>
					<td>入会地点：</td>
                    <td><input name="pasterplace" type="text" class="text" id="zymc" style="width:150px" size="50" value="<?php echo $row['pasterplace'];?>"/></td>
                    <td width="8%">受洗时间：</td>
                    <td width="14%"><input name="pasterdate" type="text" class="text" id="zymc" style="width:150px" size="50" value="<?php echo $row['pasterdate'];?>"/></td>
                    </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">工作：</div></td>
                    <td ><input name="job" type="text" class="text" id="bj" style="width:150px" size="50" value="<?php echo $row['job'];?>"/></td>
					<td>离世时间：</td>
                    <td><input name="deathdate" type="text" class="text" id="addss" style="width:150px" size="100" value="<?php echo $row['deathdate'];?>"/></td>
                    <td>文化：</td>
                    <td><select name="wenhua" id="xb" value="<?php echo $row['wenhua'];?>">
                      <option>文盲</option>
                      <option>小学</option>
                      <option>初中</option>
                      <option>高中</option>
                      <option>大学</option>
                      <option>硕士</option>
                      <option>博士</option>
                                        </select></td>
                     <td >归主：<select name="deathdate" id="xb" value="<?php $row['deathdate'];?>">
			                      <option>未归主</option>
			                      <option>已归主</option>
                                </select>
                     </td>
				  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">牧师:</div></td>
                    <td ><input name="paster" type="text" class="text" id="jg" style="width:150px" size="50" value="<?php echo $row['paster'];?>"/></td>
					<td>介绍人：</td>
                    <td><input name="introduce" type="text" class="text" id="tel" style="width:150px" size="50" value="<?php echo $row['introduce'];?>"/></td>
                    <td>补充：</td>
                    <td><input name="txt" class="text" id="username" style="width:150px" size="50" value="<?php echo $row['txt'];?>"/></td>
                    <td>&nbsp;</td>
                  </tr>
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

<?php }?>
</form>
</head>
</html>