<?php
$Host = 'localhost';
$User = 'root';
$Password = '';
$db='air';

$sql_connect = mysql_connect($Host,$User,$Password);
$DB = mysql_select_db($db);
mysql_query("SET NAMES UTF8");