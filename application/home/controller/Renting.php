<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/30
 * Time: 11:58
 */

namespace app\Home\controller;


use think\Db;

class Renting extends Home
{
    public function index(){
        //查询数据
        $rent = Db::name('renting')->where(array('type'=>0,'status'=>1))->select();
        $sell = Db::name('renting')->where(array('type'=>1,'status'=>1))->select();

        $this->assign('rent',$rent);
        $this->assign('sell',$sell);
        return $this->fetch();
    }

    public function detail($id){
        $result = Db::name('renting')->find($id);
        /* 更新浏览数 */
        Db::name('renting')->where(array('id' => $id))->setInc('click');
        $this->assign('result',$result);
        return $this->fetch();
    }
}