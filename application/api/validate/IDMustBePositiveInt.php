<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-10
 * Time: 20:15
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule=[
        'id'=>'require|isPositiveInteger'
    ];
    protected $message=[
        'id'=>'id必须是正整数'
    ];

}
