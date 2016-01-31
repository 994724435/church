<?php
$lnk = mysql_connect('localhost', 'root', '') or die ('Not connected : ' . mysql_error());
mysql_select_db('church', $lnk) or die ('Can\'t use zhangmeng_db : ' . 
mysql_error());
mysql_query("SET NAMES utf8");
?>