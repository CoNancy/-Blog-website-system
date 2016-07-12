<?php
	require_once('../connect.php');
	$num=$_GET['num'];
	$deletesql="delete from article where num=$num";
	if(mysql_query($deletesql)){
		echo "1";
		$query=mysql_query('select * from article');
		$total=mysql_num_rows($query);
		$insertsql="update article set num='$num' where num='$total'+1";
		mysql_query($insertsql);
	}else{
		echo "0";
	}
?>