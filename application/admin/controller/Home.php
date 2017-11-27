<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/26
 * Time: 10:38
 */

namespace app\admin\controller;


class Home extends Admin
{


    /**
     * 插件列表
     */
    public function index() {
        $this->assign ( 'repairs', '报修列表' );
        $list = model ( 'Addons' )->getList ();
        $page = input ( 'page', 1 );
        $number = 25; // 每页显示
        $voList = \think\Db::name ( 'repairs' )->paginate ( $number, false, array (
            'page' => $page
        ) ); // 分页查询
        $_page = $voList->render (); // 获取分页显示
        $voList = array_slice ( $list, bcmul ( $number, $page ) - $number, $number );

        // 模板变量赋值
        $this->assign ( '_page', $_page );
        $this->assign ( '_list', $voList );
        // 记录当前列表页的cookie
        Cookie ( '__forward__', $_SERVER ['REQUEST_URI'] );
        return $this->fetch ();
        
    }

}