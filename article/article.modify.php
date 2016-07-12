<?php
	require_once('../connect.php');
	$id=$_GET['id'];
	$query=mysql_query("select *from article where id=$id");
	$data=mysql_fetch_assoc($query);
?>