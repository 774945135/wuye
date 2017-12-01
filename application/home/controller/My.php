<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/29
 * Time: 14:39
 */

namespace app\home\controller;


use think\Db;

class My extends Home
{

    public function index(){
        if(empty(get_username())){
            $this->success('请登陆',  url('User/Login/index'));
        }
        //展示页面
        return $this->fetch();
    }

    public function community($name){

            //根据用户名查询报名活动记录
            $result = Db::name('active')->where(array('name'=>$name))->select();

            foreach ($result as $v){
                $model = Db::name('community')->where(array('status'=>1))->find($v['cid']);
                $results[] = $model;

            }
            //展示页面
            $this->assign('results',$results);
            return $this->fetch();

    }
}