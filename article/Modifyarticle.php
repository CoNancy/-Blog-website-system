<?php
  error_reporting(0);
  require_once('../connect.php');
  $sql="select * from denglu where login=1";
  $query=mysql_query($sql);
  $shuju=mysql_fetch_array($query);
  $youxiang=$shuju[0];
  $nicheng=$shuju[2];
  $bName=$shuju[5];
  $qianming=$shuju[6];

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="Blog for 集齐十枚召唤乔布斯">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog for 集齐十枚召唤乔布斯</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="Modifyartical.css" >
  </head>

  <body class="body">
  <div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost:8080/zhuye/personal%20HomePage.html">首页</a></li>
              <li><a href="http://localhost:8080/blog.html">关于我们</a></li>
              <li><a href="#">您已登录</a></li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://localhost:8080/grBoke/grBoke.php">个人博客</a></li>
                  <li><a href="http://localhost:8080/article/wzLiebiao.php">文章列表</a></li>
                  <li><a href="#">账户设置</a></li>
                  <li role="separator" class="divider"></li>
                  <!-- <li class="dropdown-header">Nav header</li> -->
                  <li><a href="#">注销登录</a></li>
                  <!-- <li><a href="#">One more separated link</a></li> -->
                </ul>
              </li>
            </ul> 
          </div><!--/.nav-collapse-->
        </div><!--/.container-fluid -->
      </nav>
    <!-- blog-masthead  -->
    <!-- <div class="blog-masthead masthead-type">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div> -->
    </div>
    <div class="header-type">
        <div class="blog-header">
        <h1 class="blog-title"></h1>
        <!-- <p class="lead blog-description">The official example template of creating a blog.</p> -->
      </div>
      </div>
    <div class="container">

      <!-- <div class="blog-header">
        <h1 class="blog-title">集齐十枚召唤乔布斯</h1>
        <p class="lead blog-description">The official example template of creating a blog.</p>
      </div> -->


      <div class="row row-type">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <div class="add-type">
             
              <form class="" action="article.add.handle.php" method="post">
                <h3>文章题目</h3>
                <textarea name="title" rows="1" cols="40" class="comment input-type"></textarea>
                <h4>文章内容</h4>
                <textarea name="content" rows="1" cols="40" class="comment input-type2"></textarea>
                <input class="" type="submit" value="提交">
              </form>
            </div>
          <!-- <div class="artical">
              <div class="blog-post-title ">
                <table>
                  <tr >
                    <td class="artical-type"><a href="#">一个博客~</a></td>
                    <td class="delete-button">
                      <button>修改</button>
                      <button>删除</button>
                    </td>
                  </tr>
                </table>
                <div class="artical-type"></div>
                <div class="delete-button">
                  
                </div>
              </div>
              <div class="test_wrap atical"></div>
          </div>  -->
          
            


            
          </div><!-- /.blog-post -->

 
          <!-- /.blog-post -->

 
          <!-- /.blog-post -->

    <!--       <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">NextPage</a></li>
            </ul>
          </nav> -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="row row-type">
       
        <div class="Personal-type">
          <!-- <p></p> -->
          
          <h2 class="chichi-type"><?php echo $bName; ?></h2>
      <h4><?php echo $nicheng; ?></h4>
          <div>
            <p class="line-type"></p>
          </div>
          <div>
            <dl class="ul-type">
              <dt class="li-type"><a href="#">账号设置</a></dt>
              <dt class="li-type"><a href="#">密码安全</a></dt>
              <dt class="li-type"><a href="#">注销登陆</a></dt>
            </dl>
          </div>
          <div class="Personaltext-type">  
            <!-- <p><br>注销登陆</p> -->
            <p><br></p>
            <p>注册邮箱：<?php echo $youxiang; ?></p>
            <p>签名：<?php echo $qianming; ?></p>
          </div>
        </div>
      </div class="tuijian"><!-- /.row -->
          <div class="sidebar-module sidebar-module-inset">
            <h4>推荐的文章</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
              <div class="sidebar-module">
            <h4>推荐的个人博客</h4>
            <ol class="list-unstyled">
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=guagua@qq.com" >guagua@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=yueyue@qq.com" >yueyue@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=xuaner@qq.com" >xuaner@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=chichi@qq.com" >chichi@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=nancy@qq.com" >nancy@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=haohao@qq.com" >haohao@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/youqinglianjie.php?ID=bianbian@qq.com" >bianbian@qq.com</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>一些友情链接</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

   <!--  <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
 -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  <script src="index.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script type="text/javascript">
  // console.log("11");
  //     $(function() {
  //     $.ajax({
  //   type:"GET",
  //   url:"http://localhost:8080/zhuye/zhuye.php",
  //   data:{id:"123456"},
  //   dataType:"json",
  //   success:function(msg){
  //   console.log(msg);
  //   for(var i=0;i<msg.length;i++)
  //   $(".test_wrap").append("<div class='test'><p class='title'>"+msg[i].title+"</p><h5 class='author'>"+msg[i].author+"</h5><p class='content'>"+msg[i].content+"</p></div>");
  //   }
  //   });
  //   console.log("22");
  //       var commentInput = $('.comment');
  //       console.log(commentInput);
  //       for (var i = 0; i < commentInput.length; i++) {
          
  //       }
  //     });
    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="ie10-viewport-bug-workaround.js"></script>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <! IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- // <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  
    
  </div>
  </body>
</html>












