<?php
	require_once('I:\PHPdemo\denglu\yonghu\config.php');
	//连接数据库
	function connect(){
		$link=mysql_connect(HOST,USERNAME,PASSWORD) or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
		mysql_set_charset("utf8");
		mysql_select_db('yonghu') or die("指定数据库打开失败");
		return $link;
	}
	
	//完成记录插入的操作
	function insert($table,$array){
		$keys=join(",",array_key($array));
		$vals="'".join("','",array_values($array))."'";
		$sql="insert{&table}($key) values({$vals})";
		mysql_query($sql);
		return mysql_insert_id();
	}
	
	//记录的更新操作
	function update($table,$array,$where=null){
		foreach($array as $key=>$val){
			if($str==null){
				$sep="";
			}else{
				$sep=",";
			}
			$str.=$sep.$key.="='".$val."'";
		}
		$sql="update{$table} set {$str}".($where==null?null:"where".$where);
		mysql_query($sql);
		return mysql_affected_rows();
	}
	
	//删除记录
	function delete($table,$where=null){
		$where=$where==null?null:"where".$where;
		$sql="delete from {$table}{$where}";
		mysql_query($sql);
		return mysql_affected_rows();
	}
	
	//得到指定一条记录
	function fetchOne($sql,$result_type=MYSQL_ASSOC){
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result,$result_type);
		return $row;
	}
	
	//得到结果集中的所有记录
	function fetchAll($sql,$result_type=MYSQL_ASSOC){
		$result=mysql_query($sql);
		while(@$row=mysql_fetch_array($result,$result_type)){
			$rows[]=$row;
		}
		return $rows;
	}
	
	//获得结果集中记录的条数
	function getResultNum($sql){
		$result=mysql_query($sql);
		return mysql_num_rows($result);
	}
?>