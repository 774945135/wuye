<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/27
 * Time: 11:14
 */

namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;

class Repairs extends Home
{
    public function index(){
        if(empty(get_username())){
            $this->success('请登陆',  url('User/Login/index'));
        }
        $on = Db::name('member')->where(array('nickname'=>get_username(),'owner'=>1))->find();
        if(empty($on)){
            $this->error('您还没有认证,请先认证!','{:url(authentication/index)}');
        }
        if(request()->isPost()){
            $model = model('repairs');
            //接收表单数据
            $result = Request::instance()->post();
            //验证
            $validate = validate('repairs');
            if($validate->check($result)){
                return $this->error($validate->getError());
            }
            //保存
            $result['member'] = get_username();
            $data = $model->create($result);
            if($data){
                $this->success('提交成功','index/index');
                //添加日志
                action_log('add_repairs','repairs',$data->id,UID);
            }else{
                $this->error('提交失败','index');
            }
        }

        //展示页面
        return $this->fetch();
    }

    public function detail($name){
        //根据用户名查询报修记录
        $result = Db::name('repairs')->where(array('member'=>$name))->select();

        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }
}