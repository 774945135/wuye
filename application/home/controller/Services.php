<?php

namespace app\home\controller;


use think\Db;

class Services extends Home
{
    public function index(){
        //展示页面
        return $this->fetch();
    }

    public function detail(){
        $inform = Db::name('inform')->where(array('status'=>1))->select();
        $service = Db::name('service')->where(array('status'=>1))->select();
        $community = Db::name('community')->where(array('status'=>1))->select();

        $this->assign('inform',$inform);
        $this->assign('service',$service);
        $this->assign('community',$community);
        return $this->fetch();
    }
}