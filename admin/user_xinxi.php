<?php
include ("session.php");
include("db_conn.php");
error_reporting(E_ALL || ~E_NOTICE);
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);
   mysql_query("set names utf8");
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
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                     <td height="22" colspan="13" align="center" class="select_tr STYLE2" style="font-size:16px">信息列表</td>
                  </tr>

                  </tr>
				  <tr bgcolor="#FFFFFF" style="text-align:center">
				    <td width="6%" height="20">姓名</td>
				    <td width="6%" >性别</td>
				    <td width="6%" >年龄</td>
				    <td width="7%">电话</td>
                    <td width="9%">籍贯</td>
                    <td width="6%">工作</td>
                    <td width="5%">文化</td>
                    <td width="7%">出生日期</td>
                    <td width="5%">介绍人</td>
                    <td width="15%">家庭住址</td>
                    <td width="7%">受洗时间</td>
                    <td width="7%">信教时间</td>
                     <td width="12%">操作</td>
				  </tr>
<?php
include("db_conn.php");  
/*   if ($_POST['name']){
    $name=$_POST["name"];
    $sql="select * from church where name like '%{$name}%'  ";   
   } 
   elseif ($_POST['wenhua']){
    $wenhua=$_POST['wenhua'];	
   	$sql="select * from church where wenhua = '{$wenhua}'  "; 
   }
  elseif ($_POST['sex']){
    $sex=$_POST['sex'];	
   	$sql="select * from church where sex = '{$sex}'  "; 
   }
  elseif ($_POST['deathdate']){
         
   	$sql="select * from church where deathdate = '{$_POST['deathdate']}' "; 
   }  
  elseif ($_POST['pasterdate']){
    $pasterdate=$_POST["pasterdate"];
    $sql="select * from church where pasterdate like '%{$pasterdate}%' ";   
   }    
	$sql="select * from church where  name like '%{$_POST['name']}%' 
					               or guizhu = '{$_POST['guizhu']}' 
					               or sex = '{$_POST['sex']}' 
					               or wenhua = '{$_POST['wenhua']}' 
					               or pasterdate = '{$_POST['pasterdate']}'   ";   $name=$_REQUEST["name"];*/
$xinxi=array();
$xinxi['name']=$_POST['name'];
$xinxi['sex']=$_POST['sex'];
$xinxi['wenhua']=$_REQUEST['wenhua'];
$xinxi['deathdate']=$_REQUEST['deathdate'];
$xinxi['pasterdate']=$_REQUEST['pasterdate'];
//print_r($xinxi);
$arr=$xinxi;
foreach( $arr as $k=>$v){   //除去数组中的空值
    if( !$v )   
        unset( $arr[$k] );      
}   
 $count=count($arr);   //得到数组长度
 if($count==1){
 	$OneKey =array_keys($arr);
 	$OneValue=array_values($arr);
 	$sql ="select * from church where {$OneKey[0]} like '%{$OneValue[0]}%'  order by Cid desc " ;
 }
 else if($count==2){
 	$OneKey =array_keys($arr);
 	$OneValue=array_values($arr);
 	$sql ="select * from church where {$OneKey[0]} like '%{$OneValue[0]}%'  
 	and {$OneKey[1]} like '%{$OneValue[1]}%'  order by Cid desc " ;
 }
  else if($count==3){
 	$OneKey =array_keys($arr);
 	$OneValue=array_values($arr);
 	$sql ="select * from church where {$OneKey[0]} like '%{$OneValue[0]}%'  and {$OneKey[1]} like '%{$OneValue[1]}%'
 	   and {$OneKey[2]} like '%{$OneValue[2]}%'  order by Cid desc " ;
 }
   else if($count==4){
 	$OneKey =array_keys($arr);
 	$OneValue=array_values($arr);
 	$sql ="select * from church where  {$OneKey[0]} like '%{$OneValue[0]}%'  and {$OneKey[1]} like '%{$OneValue[1]}%'
 	   and {$OneKey[2]} like '%{$OneValue[2]}%' and {$OneKey[3]} like '%{$OneValue[3]}%'  order by Cid desc " ;
 }
   else if($count==5){
 	$OneKey =array_keys($arr);
 	$OneValue=array_values($arr);
 	$sql ="select * from church where {$OneKey[0]} like '%{$OneValue[0]}%'  and {$OneKey[1]} like '%{$OneValue[1]}%'
 	   and {$OneKey[2]} like '%{$OneValue[2]}%' and {$OneKey[3]} like '%{$OneValue[3]}%' and {$OneKey[4]} like '%{$OneValue[4]}%'   order by Cid desc " ;
}
	$result = mysql_query($sql);   
   
   

while ($row = mysql_fetch_assoc($result)) {   
?>  
				  <tr bgcolor="#FFFFFF" style="text-align:center">
				    <td height="20"><?php echo ($row["name"]); ?></td>
				    <td ><?php echo ($row["sex"]); ?></td>
				    <td><?php echo ($row["age"]); ?></td>
                    <td><?php echo ($row["tel"]); ?></td>
                    <td><?php echo ($row["jiguan"]); ?></td>
                    <td><?php echo ($row["job"]); ?></td>
                    <td><?php echo ($row["wenhua"]); ?></td>
                    <td><?php echo ($row["birth"]); ?></td>
                    <td><?php echo ($row["introduce"]); ?></td>
                    <td><?php echo ($row["address"]); ?></td>
                    <td><?php echo ($row["pasterdate"]); ?></td>
                    <td><?php echo ($row["believedate"]); ?></td>
                    <td></td>
                  
<?php
}
?>  </tr>
            </table>
 
        
      </table>
   
</table>
</form>
</body>
</html>
