<?php
	error_reporting(E_ALL ^ E_DEPRECATED | E_NOTICE);
	header("Content-type: text/html; charset=utf-8");
	session_start();
	require_once('I:\PHPdemo\denglu\yonghu\config.php');
	require_once('I:\PHPdemo\mysql.func.php');
	require_once('I:\PHPdemo\denglu\yonghu\admin.inc.php');
?>