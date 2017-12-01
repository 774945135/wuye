<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\www\twothink\public/../application/home/view/default/article\lists.html";i:1511923775;s:72:"D:\www\twothink\public/../application/home/view/default/base\common.html";i:1511923587;s:69:"D:\www\twothink\public/../application/home/view/default/base\var.html";i:1496373782;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo config('WEB_SITE_TITLE'); ?></title>
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
	<!-- 头部 -->
	<!-- 导航条
	================================================== -->
<!--	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="navbar-inner">
	        <div class="container">
	            <a class="brand" href="<?php echo url('index/index'); ?>">TwoThink</a>
	            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <div class="nav-collapse collapse">
	                <ul class="nav"> 
		                <?php $__NAV__ = \think\Db::name('Channel')->field(true)->where("status=1")->order("sort")->select();if(is_array($__NAV__) || $__NAV__ instanceof \think\Collection || $__NAV__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;if($nav['pid'] == '0'): ?>
		                        <li>
		                            <a href="<?php echo get_nav_url($nav['url']); ?>" target="<?php if($nav['target'] == '1'): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo $nav['title']; ?></a>
		                        </li>
                        	<?php endif; endforeach; endif; else: echo "" ;endif; ?> 
	                </ul>
	            </div>
	            <div class="nav-collapse collapse pull-right">
	                <?php if(is_login()): ?>
	                    <ul class="nav" style="margin-right:0">
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0"><?php echo get_username(); ?> <b class="caret"></b></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo url('user/user/profile'); ?>">修改密码</a></li>
	                                <li><a href="<?php echo url('user/login/logout'); ?>">退出</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                <?php else: ?>
	                    <ul class="nav" style="margin-right:0">
	                        <li>
	                            <a href="<?php echo url('user/login/index'); ?>">登录</a>
	                        </li>
	                        <li>
	                            <a href="<?php echo url('user/user/register'); ?>" style="padding-left:0;padding-right:0">注册</a>
	                        </li>
	                    </ul>
	                <?php endif; ?>
	            </div>
	        </div>
	    </div>
	</div>

	&lt;!&ndash; /头部 &ndash;&gt;-->
	
	<!-- 主体 -->
	<!--
	<header class="jumbotron subhead" id="overview">
		<div class="container">
			<h2>源自相同起点，演绎不同精彩！</h2>
			<p class="lead"></p>
		</div>
	</header>

	<div id="main-container" class="container">
	    <div class="row">
	        
	        &lt;!&ndash; 左侧 nav
	        ================================================== &ndash;&gt;
	            <div class="span3 bs-docs-sidebar">
	                
	                <ul class="nav nav-list bs-docs-sidenav">
	                   <?php echo widget('Category/lists', array($category['id'], request()->action() == 'index')); ?>
	                </ul>
	            </div>
	        
	        
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
		<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$inform): $mod = ($i % 2 );++$i;?>
		<div class="row noticeList">
			<a href="<?php echo url('service/detail?id='.$inform['id']); ?>">
				<div class="col-xs-2">
					<img style="width: 100px;height: 100px;" class="noticeImg" src="__ROOT__\uploads\<?php echo $inform['path']; ?>" />
				</div>
				<div class="col-xs-10">
					<p class="title"><?php echo $inform['title']; ?></p>
					<p class="intro"><?php echo $inform['content']; ?></p>
					<p class="info">浏览: <?php echo $inform['click']; ?> <span class="pull-right"><?=date('Y-m-d',$inform['create_time'])?></span> </p>
				</div>
			</a>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	    </div>
	</div>-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="__PUBLIC__/home/js/jquery-1.11.2.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="__PUBLIC__/home/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	    $(function(){
	        $(window).resize(function(){
	            $("#main-container").css("min-height", $(window).height() - 343);
	        }).resize();
	    })
	</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
 <!--   <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://www.twothink.cn" target="_blank">TwoThink</a></strong> 强力驱动</p>
      </div>
    </footer>

	<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "__ROOT__", //当前网站地址
		"APP"    : "__APP__", //当前项目地址
		"PUBLIC" : "__PUBLIC__", //项目公共目录地址
		"DEEP"   : "<?php echo config('URL_PATHINFO_DEPR'); ?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo config('URL_MODEL'); ?>", "<?php echo config('URL_CASE_INSENSITIVE'); ?>", "<?php echo config('URL_HTML_SUFFIX'); ?>"],
		"VAR"    : ["<?php echo config('VAR_MODULE'); ?>", "<?php echo config('VAR_CONTROLLER'); ?>", "<?php echo config('VAR_ACTION'); ?>"]
	}
})();
</script>
	 &lt;!&ndash; 用于加载js代码 &ndash;&gt;
	&lt;!&ndash; 页面footer钩子，一般用于加载插件JS文件和JS代码 &ndash;&gt;
	<?php echo hook('pageFooter', 'widget'); ?>
	<div class="hidden">&lt;!&ndash; 用于加载统计代码等隐藏元素 &ndash;&gt;
		
	</div>

	&lt;!&ndash; /底部 &ndash;&gt;-->
</body>
</html>
