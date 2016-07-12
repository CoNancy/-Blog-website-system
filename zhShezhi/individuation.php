<?php
	error_reporting(0);
	require_once('../connect.php');
	//require_once('../denglu.php');
	$sql="select * from denglu where login=1 ";
	$query=mysql_query($sql);
	$data=mysql_fetch_row($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Individuation</title>
	<link rel="stylesheet" type="text/css" href="personal data.css">
</head>
<body style="background-color: #eeeeee; color: #666666;">
	<form method="post" action="gexingshezhi.php">
	<div class="daohanglan">
		<ul style="list-style-type: none; margin: 0px; padding: 0px;">
			<li style="display: inline-block; font-size: 20px;height: 51px"><a href="#" class="link yangshi">Blog</a></li>
			<li style="display: inline-block; font-size: 15px;height: 51px"><a href="http://localhost:8080/zhuye/personal%20HomePage.html" class="link yangshi">首页</a></li>
			<li style="display: inline-block; font-size: 15px;height: 51px"><a href="http://localhost:8080/blog.html" class="link yangshi">关于我们</a></li>
			<li style="display: inline-block; font-size: 15px;height: 51px"><a href="#" class="link yangshi">您已登录</a></li>
			<div class="dropdown" style="float: right; margin-right: 20px;">
  				<button class="dropbtn" style="color: #777777;">个人中心</button>
  				<div class="dropdown-content">
    				<a href="http://localhost:8080/grBoke/grBoke.php">个人博客</a>
   					<a href="http://localhost:8080/article/wzLiebiao.php" style="border-bottom: 1px solid #ccc;">文章列表</a>
    				<a href="http://localhost:8080/home/home.html" style="margin-top: 10px;">退出登录</a>
  				</div>
			</div>
		</ul>
	</div>
	<div class="background-image"></div>
	<div class="float size-l">
	<table class="size-table">
		<tr class="size-tr">
			<td class="bk"><a href="./personal%20data.php" class="link">个人资料</a></td>
		</tr>
		<tr class="size-tr">
			<td class="bk" style="border-left: 6px solid #ae1322;text-indent: -6px;"><a href="./individuation.php" class="link">个性设置</a></td>
		</tr>
		<tr class="size-tr">
			<td class="bk"><a href="./account%20security.php" class="link">账户安全</a></td>
		</tr>
	</table>
	</div>
	<div class="float size-r" style="font-size: 25px;">
		<div class="float size-rl">
			我的博客：<input type="text" name="Bokename" placeholder="请输入博客名称" value="<?php echo $data[5]?>" style="width: 200px; height: 25px; font-size:14px; color: #666666;"></input>
			<div class="size-in">
				<p>个性签名：</p>
				<div class="size-in">
					<textarea name="Qianming"  style="width: 325px; height: 200px; font-size: 14px;color:#666666;"><?php echo $data[6]?></textarea>
					<div class="size-aj" style="margin-bottom: 70px;">
  						<input type="submit" value="确认修改" style="width: 90px; height: 30px;line-height: 30px!important">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>