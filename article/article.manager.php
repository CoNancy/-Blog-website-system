<?php
	error_reporting(0);
	require_once('../connect.php');
	$sql="select * from article order by id desc";
	$query=mysql_query($sql);
	$arr_2=array();
	$j=0;
	if(mysql_num_rows($query)){
		while($row=mysql_fetch_array($query)){
			$arr[$j]=$row;
			$j++;
		}
	}
	echo json_encode($arr);
?>