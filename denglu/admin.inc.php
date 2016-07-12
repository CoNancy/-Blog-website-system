<?php
	function checkAdmin($sql){
		return fetchOne($sql);
	}
	function fetchOne($sql){
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result,$result_type);
		return $row;
	}
	function alertMes($mes,$url){
		echo "<script>alert('{$mes}');</script>";
		echo "<script>window.location='{$url}';</script>";
	}
?>