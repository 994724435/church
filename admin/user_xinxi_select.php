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
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="13" align="center" class="select_tr STYLE2" style="font-size:16px">信息查询</td>
                  </tr>
               <form method="post" action="user_xinxi.php"> 
	                  <tr class="CTitle" >
		                     <td height="22" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px">
		                                                             姓名： <input name="name" class="text" id="xh" style="width:80px" size="13" />
		                     </td>
		                      <td height="22" colspan="2" align="center" class="select_tr STYLE2" style="font-size:16px">
		                                                             文化： <select name="wenhua" id="xb">
		                                  <option></option>                            
					                      <option>文盲</option>
					                      <option>小学</option>
					                      <option>初中</option>
					                      <option>高中</option>
					                      <option>大学</option>
					                      <option>硕士</option>
					                      <option>博士</option>
                                        </select></td>
		                     </td>
		                      <td height="22" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px">
		                                                             姓别：
		                              <select name="sex" id="xb">
		                                  <option></option>                            
					                      <option>男</option>
					                      <option>女</option>
                                        </select>                                
		                     </td>
		                      <td height="22" colspan="2" align="center" class="select_tr STYLE2" style="font-size:16px">
		                                                             归主：
		                              <select name="deathdate" id="xb">
		                                  <option></option>                            
					                      <option>已归主</option>
                                        </select> 		                                                             
		                     </td>                     
		                      <td height="22" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px">
		                                                             受洗时间： <input name="pasterdate" class="text" id="xh" style="width:80px" size="13" />
		                             <input type="submit" value="查询"/>                                 
		                     </td>                   
	                  </tr>  
                   </form>  
				  <tr bgcolor="#FFFFFF" style="text-align:center">
				    <td width="4%" height="20">姓名</td>
				    <td width="4%" >性别</td>
				    <td width="4%" >年龄</td>
				    <td width="5%">电话</td>
                    <td width="5%">籍贯</td>
                     <td width="7%">施洗地点</td>                   
                    <td width="6%">工作</td>
                    <td width="5%">文化</td>
                    <td width="5%">介绍人</td>                    
                    <td width="6%">出生日期</td>

                    
                    <td width="5%">受洗时间</td>
                    <td width="6%">信教时间</td>
                   <td width="15%">家庭住址</td>
				  </tr>
	<?php
	include("db_conn.php");
	$sql="select * from church where deathdate='' or deathdate='未归主' order by Cid desc ";  
	  
	$query=mysql_query($sql);

	$count=mysql_num_rows($query);       // 获得 结果集中的记录数
	// 2 指定每页显示多少条记录 ,计算总
	$pageSize=17;
	$totalPage=ceil($count/$pageSize);  //总页数
	 //3 计算当前页
	 if($_GET["page"]){   //通过 有没有得到 page 参数 来判断 有没有点击过超链接
		$page = $_GET["page"];		
		if($page>=$totalPage){ $page = $totalPage ;} //如果当前页 》 总页数，当前页一直最后一页
	}else{
		//刷开页面的时候 没有点击过超链接
		$page = 1;
	}
	$start = ($page-1)*$pageSize;
	//列出数据库中所有数据
	$sql="select * from church where deathdate='' or deathdate='未归主' order by Cid desc ";  
	$sql_0="select * from church where deathdate='' or deathdate='未归主'  order by Cid desc limit {$start},{$pageSize}";	 
	$result = mysql_query($sql_0);
	
	while ($row = mysql_fetch_assoc($result)) {   
	?>  
				  <tr bgcolor="#FFFFFF" style="text-align:center">
				    <td height="20" ><?php echo ($row["name"]); ?></td>
				    <td ><?php echo ($row["sex"]); ?></td>
				    <td><?php echo ($row["age"]); ?></td>
                    <td><?php echo ($row["tel"]); ?></td>
                    <td><?php echo ($row["jiguan"]); ?></td>
                    <td><?php echo ($row["pasterplace"]); ?></td>                    
                    
                    <td><?php echo ($row["job"]); ?></td>
                    <td><?php echo ($row["wenhua"]); ?></td>
                    <td><?php echo ($row["introduce"]); ?></td>                    
                    <td><?php echo ($row["birth"]); ?></td>                   
                    <td><?php echo ($row["pasterdate"]); ?></td>
                    <td><?php echo ($row["believedate"]); ?></td>
                   <td><?php echo ($row["address"]); ?></td>
                  
<?php
}
?>  </tr>
            </table></td>
        </tr>
      </table>
      <br>
     <tr class="bg_tr" align="center" bgcolor="#FFFFFF">
		  <td colspan="13">
		  	<a href="user_xinxi_select.php?page=1">首页</a>
			|
			<a href="user_xinxi_select.php?page=<?php echo $page-1;?>">上一页</a>
			|
			<a href="user_xinxi_select.php?page=<?php echo $page+1;?>">下一页</a>
			|
			<a href="user_xinxi_select.php?page=<?php echo $totalPage;?>">尾页</a>
		  </td>
    </tr> 
  </tr>
</table>
</form>
</body>
</html>
