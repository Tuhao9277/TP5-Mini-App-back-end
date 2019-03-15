<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-20
 * Time: 09:49
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule =[
      'code' => 'require|isNotEmpty'
    ];
    protected $message=[
      'code' =>'没有code还想获取Token，做梦哦'

    ];
}