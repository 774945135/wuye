<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/30
 * Time: 17:53
 */

namespace app\home\controller;


use think\Db;

class About extends Home
{
        public function index(){
            $result = Db::name('about')->find(1);
            $this->assign('result',$result);
            return $this->fetch();
        }

}