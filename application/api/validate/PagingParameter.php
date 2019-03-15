<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-25
 * Time: 10:49
 */

namespace app\api\validate;


class PagingParameter extends BaseValidate
{
    protected $rule =[
        'page' => 'isPositiveInteger',
        'size' => 'isPositiveInteger'
    ];
    protected $message =[
        'page' =>'分页参数必须是正整数',
        'size' =>'分页参数必须是正整数'
    ];
}