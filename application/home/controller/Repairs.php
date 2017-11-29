<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/27
 * Time: 11:14
 */

namespace app\home\controller;


use think\Request;
use think\Validate;

class Repairs extends Home
{
    public function index(){
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
}