<?php
	error_reporting(0);
	session_start();
	require_once('../connect.php');
	function alertMes($mes,$url){
		echo "<script>alert('{$mes}');</script>";
		echo "<script>window.location='{$url}';</script>";
	}
	function checkAdmin($sql){
		return fetchOne($sql);
	}
	function fetchOne($sql,$result_type=MYSQL_ASSOC){
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result,$result_type);
		return $row;
	}
	$username=$_POST['Email'];
	$password=$_POST['Password'];
	$againPassword=$_POST['againPassword'];
	if(!$username){
		alertMes("用户名不能为空","http://localhost:8080/zhuce/blog%20register.html");
	}else{
		if(($password)!=($againPassword)){
			alertMes("请输入一致的密码","http://localhost:8080/zhuce/blog%20register.html");
		}else if(strlen($password)<6){
			alertMes("密码长度必须大于等于6位","http://localhost:8080/zhuce/blog%20register.html");
		}else{
			$sql="select * from denglu where name='{$username}' ";
			$row=checkAdmin($sql);
			if($row){
				$_SESSION['adminName']=$row['username'];
				alertMes("用户名已被注册","http://localhost:8080/zhuce/blog%20register.html");
			}else{
				$insertsql="insert into denglu(name,password) values('$username','$password')";
				if(mysql_query($insertsql)){
				echo"<script>alert('注册成功');window.location.href='http://localhost:8080/denglu/bloglogin.html';</script>";
				
				}else{
				echo "<script>alert('注册失败');window.location.href='http://localhost:8080/zhuce/blog%20register.html';</script>";
				}
			}
		}
	}
?>