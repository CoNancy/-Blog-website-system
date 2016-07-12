<?php
  error_reporting(0);
  require_once('../connect.php');
  // $author=$_POST['author'];
  $author=$_GET['ID'];
  
  $sql="select * from denglu where name='$author'";
  $query=mysql_query($sql);
  $shuju=mysql_fetch_array($query);
  $nameNow=$shuju[0];
  $nicheng=$shuju[2];
  $bName=$shuju[5];
  $qianming=$shuju[6];

  // $sql2="select * from article where author='$author'";
  // $query2=mysql_query($sql2);
  // $shuju2=mysql_fetch_array($query2);
  // $nicheng=$shuju2[2];
  // $bName=$shuju2[5];
  // $qianming=$shuju2[6];
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
    <link rel="stylesheet" type="text/css" href="grBoke.css" >
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
              <li class="active"><a href="http://localhost:8080/home/home.html">首页</a></li>
              <li><a href="http://localhost:8080/blog.html">关于我们</a></li>
              <li><a href="#">您未登录</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="http://localhost:8080/denglu/bloglogin.html">登录 >> <span class="sr-only">(current)</span></a></li>
              <li><a href="http://localhost:8080/zhuce/blog%20register.html">注册 >></a></li>
              <!-- <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
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
            <!-- <div class="add-type">
              <h2>请添加文章：</h2>
              <form class="" action="index.html" method="post">
                <textarea name="name" rows="1" cols="40" class="comment input-type"></textarea>
                <input class="" type="submit" value="submit">
              </form>
            </div> -->
          <div class="artical">
              <div class="blog-post-title ">
                <table>
                  <tr >
                    <td class="artical-type"></td>
                    <!-- <td class="delete-button">
                      <button>修改</button>
                      <button>删除</button>
                    </td> -->
                  </tr>
                </table>
                <!-- <div class="artical-type"></div>
                <div class="delete-button">
                  
                </div> -->
              </div>
              <!-- <div class="test_wrap atical"></div> -->
          </div>
          
            


            
          </div><!-- /.blog-post -->

 
          <!-- /.blog-post -->

 
          <!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">NextPage</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="row row-type">
       
        <div class="Personal-type">
          <!-- <p></p> -->
          
          <h2 class="chichi-type"><?php echo $bName; ?></h2>
      <h4 style="margin-bottom:30px;"><?php echo $nicheng; ?></h4>


          <div class="Personaltext-type">  
            <!-- <p><br>注销登陆</p> -->
            <!-- <p>注册邮箱：903430068@qq.com</p> -->
            <p>个人签名: <?php echo $qianming; ?></p>
          </div>
      <hr>
        </div>
      </div class="tuijian"><!-- /.row -->
          <div class="sidebar-module sidebar-module-inset">
            <h4>推荐的文章</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
         <div class="sidebar-module">
            <h4>推荐的个人博客</h4>
            <ol class="list-unstyled">
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=guagua@qq.com" >guagua@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=yueyue@qq.com" >yueyue@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=xuaner@qq.com" >xuaner@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=chichi@qq.com" >chichi@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=nancy@qq.com" >nancy@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=haohao@qq.com" >haohao@qq.com</a></li>
              <li><a href="http://localhost:8080/grBoke/unlogin.php?ID=bianbian@qq.com" >bianbian@qq.com</a></li>
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
  console.log("11");
      $(function() {
      $.ajax({
    type:"GET",
    url:"http://localhost:8080/grBoke/lianjie.php",
    data:{ID:'<?php echo $author; ?>'},
    dataType:"json",
    success:function(msg){
    console.log(msg);
    for(var i=0;i<msg.length;i++)
    $(".artical-type").append("<div class='test'><p class='title'>"+msg[i].title+"</p><h5 class='author'>"
    +msg[i].author+"</h5><p class='content'>"+msg[i].content+
    "</p><div class='open' onclick='openl()'>∨展开</div></div>");
    }
    });
    console.log("22");
        var commentInput = $('.comment');
        console.log(commentInput);
        for (var i = 0; i < commentInput.length; i++) {
          
        }
      });
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












