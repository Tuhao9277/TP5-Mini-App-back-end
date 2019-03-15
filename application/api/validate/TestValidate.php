<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-10
 * Time: 19:38
 */

namespace app\api\validate;


use think\Validate;
//验证器  封装性好
class TestValidate extends Validate
{
    protected $rule=[
        'id' => '',
        'name'=>'require|max:10',
        'email'=>'email'
    ];
}