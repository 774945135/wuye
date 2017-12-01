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
        $models = Db::name('inform')->where(array('status'=>1))->select();
        foreach ($models as $model){
            if(time()>strtotime($model['end_time'])){
                $model['status'] = 0;
                Db::name('inform')->where(array('id'=>$model['id']))->update($model);
            }
        }
        //查询小区通知
        $result = Db::name('inform')->where(array('status'=>1))->paginate();
        //展示小区通知

        $this->assign('result',$result);
        return $this->fetch();
    }

    public function detail($id){
        //根据id查看小区通知
        $result = Db::name('inform')->find($id);
        /* 更新浏览数 */
        Db::name('inform')->where(array('id' => $id))->setInc('click');
        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function ajaxlists($p = 1){

        $list = Db::name('inform')->where(array('status'=>1))->paginate();


        /* 模板赋值并渲染模板 */
        $this->assign('list', $list);
        // echo $category['template_lists'];
        return $this->fetch();
    }
}