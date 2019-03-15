<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-15
 * Time: 10:17
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code =404;
    public $msg ='请求的Banner不存在';
    public $errorCode=40000;

}