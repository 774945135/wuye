<?php

namespace app\admin\validate;


use think\Validate;

class Renting extends Validate
{
    public $rule = [
        ['title','require','租售标题不能为空!'],
        ['path','require','图片不能为空!'],
        ['money','require','租售金额不能为空!'],
        ['tel','length:11','请输入正确的电话号码!'],
        ['intro','require','租售简介不能为空!'],
        ['content','require','租售内容不能为空!'],


    ];
}