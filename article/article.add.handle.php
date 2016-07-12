<?php
	error_reporting(0);
	require_once('../connect.php');
	//把传递过来的信息入库
	$title=$_POST['title'];
	$content=$_POST['content'];
	$dateline=time();
	$query=mysql_query('select * from article');
	$total=mysql_num_rows($query);
	$find=mysql_query('select * from denglu where login=1');
	$data=mysql_fetch_row($find);
	$author=$data[0];
	$insertsql="insert into article(num,id,title,author,nicheng,content,dateline) values('$total'+1,1,'$title','$author','$author','$content',$dateline)";
	  if(mysql_query($insertsql)){
	  	echo "<script>alert('发布成功');window.location.href='http://localhost:8080/article/wzLiebiao.php';</script>";
	  }else{
	  	echo "<script>alert('发布失败');window.location.href='http://localhost:8080/article/wzLiebiao.php';</script>";
	  }
?>