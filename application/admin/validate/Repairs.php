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
        ['tel', 'require|length: 4-11|number|', '电话不能为空|请输入正确的号码|请输入正确的号码'],
        ['address', 'require', '地址不能为空'],
        ['content', 'require', '留言不能为空'],
    ];
}