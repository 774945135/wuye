<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/27
 * Time: 11:21
 */

namespace app\home\controller;


use think\Db;

class Service extends Home
{
    public function index(){
        //查询便民服务
        $result = Db::name('service')->where(array('status'=>0))->paginate();
        //展示便民服务
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function detail($id){
        //根据id查看便民服务
        $result = Db::name('service')->find($id);

        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }
}