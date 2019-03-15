<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-21
 * Time: 10:49
 */

namespace app\api\validate;


class AddressNew extends BaseValidate
{
    protected $rule=[
        'name' => 'require|isNotEmpty',
        'mobile' => 'require|isMobile',
        'province' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'country' => 'require|isNotEmpty',
        'detail' => 'require|isNotEmpty'
    ];

}