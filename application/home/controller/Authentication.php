<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/30
 * Time: 16:47
 */

namespace app\home\controller;


use think\Db;

class Authentication extends Home
{
    public function index(){
        $on = Db::name('member')->where(array('nickname'=>get_username(),'owner'=>1))->find();
        if(!empty($on)){
            $this->error('已经认证,请勿重复操作',"{:url{'index/index'}");
        }
        if(request()->isPost()){
            $data = Db::name('member')->where(array('nickname'=>get_username()))->update(['owner'=>1]);
            if ($data){
                $this->success('认证成功','index');
            }
        }

        return $this->fetch();
    }
}