<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-20
 * Time: 10:06
 */

return [
    'app_id'=>'wxa667729a9f28ded7',
    'app_secret'=>'739348b1d5f35ec5922be3234b1cdc97',
    'login_url'=>'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s"
];