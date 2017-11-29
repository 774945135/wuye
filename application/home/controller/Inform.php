<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/27
 * Time: 11:21
 */

namespace app\home\controller;


use think\Db;

class Inform extends Home
{
    public function index(){
        //查询小区通知
        $result = Db::name('inform')->where(array('status'=>0))->paginate();
        //展示小区通知
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function detail($id){
        //根据id查看小区通知
        $result = Db::name('inform')->find($id);

        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }
}