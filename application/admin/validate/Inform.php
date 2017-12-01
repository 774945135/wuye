<?php

namespace app\admin\validate;


use think\Validate;

class Inform extends Validate
{
    public $rule = [
        ['title','require','小区通知标题不能为空!'],
        ['path','require','图片不能为空!'],
        ['start_time','require','开始时间不能为空!'],
        ['end_time','require','结束时间不能为空!'],
        ['content','require','小区通知内容不能为空!'],

    ];
}