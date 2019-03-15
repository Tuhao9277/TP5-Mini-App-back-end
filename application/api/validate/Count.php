<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-19
 * Time: 13:33
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule=[
      'count' => 'isPositiveInteger|between:1,15'
    ];

}