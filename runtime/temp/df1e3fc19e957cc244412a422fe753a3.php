<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\www\twothink\public/../application/home/view/default/service\index.html";i:1512061103;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>便民服务</title>

    <!-- Bootstrap -->
    <link href="__PUBLIC__/home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/home/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .main{margin-bottom: 60px;}
        .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
    </style>
</head>
<body>
<div class="main">
    <!--导航部分-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid text-center">
            <div class="col-xs-3">
                <p class="navbar-text"><a href="<?php echo url('index/index'); ?>" class="navbar-link">首页</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">服务</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">发现</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">我的</a></p>
            </div>
        </div>
    </nav>
    <!--导航结束-->

    <!--<div class="container-fluid">
        <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$service): $mod = ($i % 2 );++$i;?>
        <div class="row noticeList">
            <a href="<?php echo url('service/detail?id='.$service['id']); ?>">
                <div class="col-xs-2">
                    <img style="width: 100px;height: 100px;" class="noticeImg" src="__ROOT__\uploads\<?php echo $service['path']; ?>" />
                </div>
                <div class="col-xs-10">
                    <p class="title"><?php echo $service['title']; ?></p>
                    <p class="intro"><?php echo $service['content']; ?></p>
                    <p class="info">浏览: <?php echo $service['click']; ?> <span class="pull-right"><?=date('Y-m-d',$service['create_time'])?></span> </p>
                </div>
            </a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>-->
    <div id="article_list">

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__PUBLIC__/home/js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__PUBLIC__/home/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            getLists(1);
        })
        var getLists = function (page) {
            $(".get_more").remove();
            $.get("<?php echo url('service/ajaxlists'); ?>?page="+page,function (data) {
                $("#article_list").append(data);
            })
        }
    </script>
</body>
</html>