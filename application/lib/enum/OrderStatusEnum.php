<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-23
 * Time: 15:13
 */

namespace app\lib\enum;


class OrderStatusEnum
{   //待支付
    const UNPAID =1;
    //已支付
    const PAID =2;
    //已发货
    const DELIVERED =3;
    //支付但库存不足
    const PAID_BUT_OUT_OF =4;
}