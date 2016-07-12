<?php
	//error_reporting(0);
	require_once('../connect.php');
	$num=$_POST['num'];
	$sql="select * from article where num=$num";
	$query=mysql_query($sql);
	$title=$_POST['Title'];
	$content=$_POST['Content'];
	$updatesql="update article set title='$title' where num='$num'";
	$updatesq2="update article set content='$content' where num='$num'";
	if(mysql_query($updatesql)&&mysql_query($updatesq2)){
		echo"<script>alert('修改成功');</script>";
	}else{
		echo"<script>alert('修改失败');</script>";
	}
?>
