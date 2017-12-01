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
        $models = Db::name('service')->where(array('status'=>1))->select();
        foreach ($models as $model){
            if(time()>strtotime($model['end_time'])){
                $model['status'] = 0;
                    Db::name('service')->where(array('id'=>$model['id']))->update($model);
            }
        }

        //查询便民服务
        $result = Db::name('service')->where(array('status'=>1))->paginate();
        //展示便民服务
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function detail($id){
        //根据id查看便民服务
        $result = Db::name('service')->find($id);
        /* 更新浏览数 */
        Db::name('service')->where(array('id' => $id))->setInc('click');
        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function ajaxlists($p = 1){

        $list = Db::name('service')->where(array('status'=>1))->paginate();


        /* 模板赋值并渲染模板 */
        $this->assign('list', $list);
        // echo $category['template_lists'];
        return $this->fetch();
    }
}