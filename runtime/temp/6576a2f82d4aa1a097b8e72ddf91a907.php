<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\www\twothink\public/../application/home/view/default/services\detail.html";i:1512030498;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

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
                <p class="navbar-text"><a href="index.html" class="navbar-link">首页</a></p>
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
        <div class="blank"></div>
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
            <ul id="myTabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">小区通知</a></li>
                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">便民服务</a></li>
                <li role="presentation"><a href="#info" role="tab" id="info-tab" data-toggle="tab" aria-controls="info">小区活动</a></li>
            </ul>


            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <p class="text-danger">小区通知</p>
                    <div class="row">
                    <?php if(is_array($inform) || $inform instanceof \think\Collection || $inform instanceof \think\Paginator): $i = 0; $__LIST__ = $inform;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="col-xs-6 col-md-4">
                        <div class="thumbnail">
                            <img src="__ROOT__\uploads\<?php echo $v['path']; ?>" alt="...">
                            <div class="caption">
                                <h4>标题:<?php echo $v['title']; ?></h4>
                                <p class="zushouInfo">发布人:<?php echo $v['admin']; ?></p>
                                <p class="text-danger">发布时间:<?=date('Y-m-d',$v['carate_time'])?></p>
                                <p><a href="<?php echo url('renting/detail?id='.$v['id']); ?>" class="btn btn-danger zushouBtn">详细信息</a> </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>


            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        <p class="text-danger">便民服务</p>
                        <div class="row">

                            <?php if(is_array($service) || $service instanceof \think\Collection || $service instanceof \think\Paginator): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <div class="col-xs-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="__ROOT__\uploads\<?php echo $v['path']; ?>" alt="...">
                                    <div class="caption">
                                        <h4>标题:<?php echo $v['title']; ?></h4>
                                        <p class="zushouInfo">发布人:<?php echo $v['admin']; ?></p>
                                        <p class="text-danger">发布时间:<?=date('Y-m-d',$v['carate_time'])?></p>
                                        <p><a href="<?php echo url('renting/detail?id='.$v['id']); ?>" class="btn btn-danger zushouBtn">详细信息</a> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>


                    <div role="info" class="tab-pane fade" id="info" aria-labelledby="profile-tab">
                            <p class="text-danger">小区活动</p>
                            <div class="row">

                                <?php if(is_array($conmmunity) || $conmmunity instanceof \think\Collection || $conmmunity instanceof \think\Paginator): $i = 0; $__LIST__ = $conmmunity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <div class="col-xs-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="__ROOT__\uploads\<?php echo $v['path']; ?>" alt="...">
                                        <div class="caption">
                                            <h4>标题:<?php echo $v['title']; ?></h4>
                                            <p class="zushouInfo">发布人:<?php echo $v['admin']; ?></p>
                                            <p class="text-danger">发布时间:<?=date('Y-m-d',$v['carate_time'])?></p>
                                            <p><a href="<?php echo url('renting/detail?id='.$v['id']); ?>" class="btn btn-danger zushouBtn">详细信息</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__PUBLIC__/home/js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__PUBLIC__/home/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>