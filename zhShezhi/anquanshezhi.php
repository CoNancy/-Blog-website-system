<?php
	error_reporting(0);
	require_once('../connect.php');
	$question=$_POST['Question'];
	$answer=$_POST['Answer'];
	$sql="select * from denglu where login=1 ";
	$query=mysql_query($sql);
	$data=mysql_fetch_row($query);
	$yhname=$data[0];
	$updatesql1="update denglu set mibao='$question' where name='$yhname' and login=1";
	$updatesql2="update denglu set mibaodaan='$answer' where name='$yhname' and login=1";
	if(mysql_query($updatesql1)&&mysql_query($updatesql2)){
		echo"<script>alert('修改成功');window.location.href='http://localhost:8080/zhShezhi/account%20security.php';</script>";
	}else{
		echo"<script>alert('修改失败');window.location.href='http://localhost:8080/zhShezhi/account%20security.php';</script>";
	}
?>