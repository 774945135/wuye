<?php

namespace app\admin\validate;


use think\Validate;

class Service extends Validate
{
    public $rule = [
        ['title','require','便民服务标题不能为空!'],
        ['content','require','便民服务内容不能为空!'],
    ];
}