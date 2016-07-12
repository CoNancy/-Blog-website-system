<?php
$link = mysql_connect('127.0.0.1', 'code1', '') or die('数据库连接失败');
mysql_select_db('code1');
mysql_query("set names 'utf8'");
$result = mysql_query('select * from user limit 1');
$row = mysql_fetch_assoc($result);
print_r($row);