<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/27
 * Time: 14:14
 */

namespace app\admin\controller;


use think\Db;
use think\Request;

class Inform extends Admin
{
    public function index(){
        //查询数据
        $list = Db::name('inform')->paginate();
        //分配数据
        $this->assign('list',$list);
        //展示首页
        return $this->fetch();

    }

    public function add(){
        if(request()->isPost()){
            $models = model('inform');
            //接收表单数据
            $result = Request::instance()->post();
var_dump($result);die;
            // 获取表单上传文件
            $file = request()->file('path');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $result['path'] = $info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            //验证
            $validate = validate('inform');
            if(!$validate->check($result)){
                return $this->error($validate->getError());
            }
            //保存
            $result['admin'] = session('user_auth.username');
            $data = $models->create($result);
            //展示表单
            if($data){
                $this->success('添加成功','index');
                //添加日志
                action_log('add_inform','inform',$data->id,UID);
            }else{
                $this->error('添加失败','index');
            }
        }
        $field['name'] = 'content';
        $this->assign('field',$field);
        return $this->fetch('edit');
    }

    public function edit($id){

        if(request()->isPost()){
            $models = model('inform');
            //接收表单数据
            $result = Request::instance()->post();
            // 获取表单上传文件
            $file = request()->file('path');

            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $result['path'] = $info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            //验证
            $validate = validate('inform');
            if(!$validate->check($result)){
                return $this->error($validate->getError());
            }
            //保存
            $data = $models->update($result);
            //展示表单
            if($data){
                $this->success('修改成功','index');
                //添加日志
                action_log('update_inform','inform',$data->id,UID);
            }else{
                $this->error('修改失败','index');
            }
        }
        $info = Db::name('inform')->find($id);
        //展示表单
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function del(){
        $id = input('id',0);
        if(empty($id)){
            return $this->error('请选择要操作的数据!');
        }

        if(Db::name('inform')->where(array('id'=>$id))->delete()){
            $this->success('删除成功','index');
            //添加日志
            action_log('del_inform','inform',$id,UID);
        }else{
            $this->error('删除失败','index');
        }
    }

    public function status($id){
        $model = Db::name('inform')->find($id);

        if($model['status'] == 0){
            $model['status'] = 1;
        }else{
            $model['status'] = 0;
        }

        $data = Db::name('inform')->where(array('id'=>$id))->update($model);
        if($data){
            $this->success('修改成功','index');
            //添加日志
            action_log('update_inform','inform',$data->id,UID);
        }else{
            $this->error('修改失败','index');
        }

    }
}