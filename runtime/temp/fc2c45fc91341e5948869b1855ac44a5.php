<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\www\twothink\public/../application/home/view/default/repairs\index.html";i:1511772063;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>在线报修</title>

    <!-- Bootstrap -->
    <link href="__PUBLIC__/home//bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/home//css/style.css" rel="stylesheet">

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

    <div class="container-fluid">
        <form method="post" action="<?php echo url(); ?>" class="form-horizontal">
            <div class="form-group">
                <label>您的姓名(必填):</label>
                <input name="name" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>你的房号(必填):</label>
                <input name="address" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>您与业主的关系(必填):</label>
                <select name="relation" class="form-control">
                    <option>本人</option>
                    <option>亲属</option>
                    <option>租户</option>
                </select>
            </div>
            <div class="form-group">
                <label>联系电话(必填):</label>
                <input name="tel" type="text" class="form-control" />
            </div>
            <label class="item-label">留言</label>
            <div class="controls">
                <textarea name="content" class="form-control"  cols="30" rows="8"></textarea>
            <div class="form-group">
                <br>
                <button class="btn btn-primary onlineBtn">确认提交</button>
            </div>
        </form>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="__PUBLIC__/home/js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__PUBLIC__/home//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>