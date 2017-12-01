<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/29
 * Time: 14:18
 */

namespace app\home\controller;



use think\Db;
use think\Request;

class Community extends Home
{
    public function index(){
        $models = Db::name('community')->where(array('status'=>1))->select();
        foreach ($models as $model){
            if(time()>strtotime($model['end_time'])){
                $model['status'] = 0;
                Db::name('community')->where(array('id'=>$model['id']))->update($model);
            }
        }
        //查询小区活动
        $result = Db::name('community')->where(array('status'=>1))->paginate();
        //展示小区活动

        $this->assign('result',$result);
        return $this->fetch();
    }

    public function detail($id){
        //根据id查看小区活动
        $result = Db::name('community')->find($id);
        /* 更新浏览数 */
        Db::name('community')->where(array('id' => $id))->setInc('click');
        //展示页面
        $this->assign('result',$result);
        return $this->fetch();
    }

    public function active(){
        if(empty(get_username())){
            return 'yes';
        }
        $id = request()->get('id');
        if($id){
            $model = Db::name('active')->where(array('name'=>get_username(),'cid'=>$id))->find();
            if($model){
                return '你已经参加了该活动,不能重复报名!';
            }
            $result['cid'] = $id;
            $result['name'] = get_username();
            $data = model('active')->create($result);
            if($data){
                return 'success';
            }else{
                return '参加活动失败!';
            }

        }
    }

    public function ajaxlists($p = 1){

        $list = Db::name('community')->where(array('status'=>1))->paginate();


        /* 模板赋值并渲染模板 */
        $this->assign('list', $list);
        // echo $category['template_lists'];
        return $this->fetch();
    }
}