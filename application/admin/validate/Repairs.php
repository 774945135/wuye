<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/11/26
 * Time: 11:32
 */

namespace app\admin\validate;


use think\Validate;

class Repairs extends Validate
{
    protected $rule = [
        ['name', 'require', '业主名不能为空'],
        ['tel', 'require', '电话不能为空'],
        ['address', 'require', '地址不能为空'],
        ['content', 'require', '留言不能为空'],
    ];
}