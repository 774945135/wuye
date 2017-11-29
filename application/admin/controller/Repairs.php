<?php

namespace app\admin\controller;


use think\Db;

class Repairs extends Admin
{
    public function index(){
        $pid = input('get.pid', 0);
        /* 获取频道列表 */;
        $map  = array('status' => array('gt', -1));
        $list = \think\Db::name('Repairs')->where($map)->order('sort asc,id asc')->paginate();
        $this->assign('list', $list);
        $this->assign('pid', $pid);
        $this->assign('meta_title' , '保修管理');
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $Repairs = model('repairs');
            $post_data=\think\Request::instance()->post();
            //自动验证
            $validate = validate('repairs');
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }
            $post_data['status'] = 0;
            $data = $Repairs->create($post_data);

            if($data){
                $this->success('新增成功', url('index'));
                //记录行为
                action_log('add_repairs', 'repairs', $data->id, UID);
            } else {
                $this->error($Repairs->getError());
            }
        }

            //$this->assign('pid', $pid);
            $this->assign('info',null);
            $this->assign('meta_title', '新增报修');
            return $this->fetch('edit');
        }

    public function edit($id = 0){
        if($this->request->isPost()){
            $postdata = \think\Request::instance()->post();
            $id = input('post.pid');
            $Requirs = \think\Db::name("repairs");
            $data = $Requirs->where(array('id'=>$id))->update($postdata);
            if($data !== false){
                $this->success('编辑成功', url('index'));
            } else {
                $this->error('编辑失败');
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = \think\Db::name('Repairs')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }

            $pid = input('get.pid', 0);

            $this->assign('pid', $pid);
            $this->assign('info', $info);
            $this->meta_title = '编辑保修';
            return $this->fetch();
        }
    }

    public function del(){
        $id = input('id',0);

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }


        if(\think\Db::name('repairs')->where(array('id'=>$id))->delete()){
            //记录行为
            action_log('update_repairs', 'repairs', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

    public function status(){
        $id = input('id',0);
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $query = Db::name('repairs')->where(array('id'=>$id));

        if($query->find()['status'] == 1){
            $this->error('用户已处理!');
        }

        if(Db::name('repairs')->where(array('id'=>$id))->update(['status'=>1])){
            //记录行为
            action_log('update_repairs', 'repairs', $id, UID);
            $this->success('处理成功!');
        } else {
            $this->error('处理失败！');
        }
    }
}