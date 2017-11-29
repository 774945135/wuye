<?php

namespace app\admin\validate;


use think\Validate;

class Inform extends Validate
{
    public $rule = [
        ['title','require','小区通知标题不能为空!'],
        ['content','require','小区通知内容不能为空!'],
    ];
}