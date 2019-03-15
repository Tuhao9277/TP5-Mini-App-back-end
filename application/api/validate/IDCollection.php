<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-19
 * Time: 10:38
 */

namespace app\api\validate;

//Theme接口验证
class IDCollection extends BaseValidate
{
    protected $rule =[
        'ids'=> 'require|checkIDs'
    ];
    //检测不通过的提示
    protected  $message =[
        'ids'=>'ids必须是以逗号为隔开的多个正整数'
    ];

    //ids = id1,id2...
    protected function checkIDs($value){
        $values = explode(',',$value); //转换成数组
        if (empty($values)){
            return false;
        }
        //遍历id号，如果不满足返回false
        foreach ($values as $id){
            if (!$this->isPositiveInteger($id)) {
                return false;
            }
        }
        return true;
    }
}
