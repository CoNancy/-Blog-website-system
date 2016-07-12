<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	error_reporting(0);
	require_once('../connect.php');
	$query=mysql_query('select * from article');
	$num=mysql_num_rows($query);
	$arr=range(1,$num);
	shuffle($arr);
	for($i=$num/2;$i<$num;$i++){unset($arr[$i]);}
	$arr_2=array();
	$j=0;
	foreach($arr as $values){
		$sql="select * from article where num = $values";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		if($row){
		$arr_2[$j]=$row;
		$j++;
	} 
	}
	echo json_encode($arr_2);
?>