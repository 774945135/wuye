<?php

namespace app\admin\validate;


use think\Validate;

class Community extends Validate
{
    public $rule = [
        ['title','require','小区活动标题不能为空!'],
        ['path','require','图片不能为空!'],
        ['start_time','require','开始时间不能为空!'],
        ['end_time','require','结束时间不能为空!'],
        ['content','require','小区活动内容不能为空!'],
    ];
}