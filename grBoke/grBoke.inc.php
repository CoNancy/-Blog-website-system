<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<?php
	error_reporting(0);
	require_once('../connect.php');
	$sql="select * from denglu where login=1";
	$query=mysql_query($sql);
	$shuju=mysql_fetch_array($query);
	$nameNow=$shuju[0];
	$sql="select * from article where author='{$nameNow}' order by id desc";
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

