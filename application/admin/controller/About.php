<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/30
 * Time: 11:08
 */

namespace app\admin\controller;


use think\Db;

class About extends Admin
{
    public function index($id=1){

        if(request()->isPost()){
            $result = request()->post();
           $data =  Db::name('about')->where(array('id'=>1))->update($result);
           if($data){
               $this->success('修改成功','index');
           }else{
               $this->error('修改失败','index');
           }

        }
        $result = Db::name('about')->find($id);
        $this->assign('result',$result);
        return $this->fetch();
    }
}