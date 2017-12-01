<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\www\twothink\public/../application/home/view/default/shop\ajaxlists.html";i:1512061574;}*/ ?>

    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$inform): $mod = ($i % 2 );++$i;?>
    <div class="row noticeList">
        <a href="<?php echo url('shop/detail?id='.$inform['id']); ?>">
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
    <button class="btn btn-default btn-block get_more" onclick="getLists(<?php echo \think\Request::instance()->get('page')+1; ?>)">获取更多....</button>

