<?php
	error_reporting(0);
	require_once('../connect.php');
	//require_once('../denglu.php');
	$nicheng=$_POST['Nicheng'];
	$sql="select * from denglu where login=1 ";
	$query=mysql_query($sql);
	$data=mysql_fetch_row($query);
	$yhname=$data[0];
	$updatesql="update denglu set nicheng='$nicheng' where name='$yhname' and login=1";
	if(mysql_query($updatesql)){
		echo"<script>alert('修改成功');window.location.href='http://localhost:8080/zhShezhi/personal%20data.php';</script>";
	}else{
		echo"<script>alert('修改失败');window.location.href='http://localhost:8080/zhShezhi/personal%20data.php';</script>";
	}
?>