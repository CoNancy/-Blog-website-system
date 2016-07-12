<?php
	//error_reporting(E_ALL ^ E_DEPRECATED | E_NOTICE);
	error_reporting(0);
	session_start();
	require_once('../connect.php');
	require_once('./admin.inc.php');

	$sql="select * from denglu where login=1 ";
	$query=mysql_query($sql);
	if($data=mysql_fetch_row($query)){
		mysql_query("update denglu set login=NULL where login=1");
	}

	$username=$_POST['Email'];
	$password=$_POST['Password'];
	$sql="select * from denglu where name='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);
	if($row){
		$_SESSION['adminName']=$row['username'];
		alertMes("登录成功","http://localhost:8080/zhuye/personal%20HomePage.html");
		//echo "success!";

		mysql_query("update denglu set login=1 where name='{$username}' and password='{$password}'");
		
	}else{
		alertMes("登录失败，重新登录","http://localhost:8080/denglu/bloglogin.html");
	}
?>