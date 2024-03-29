<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019-01-10
 * Time: 21:06
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数做检验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if(!$result){
            $e = new ParameterException([
                'msg' => $this->error
            ]);
            throw $e;
        }
        else{
            return true;
        }
    }//参数检验
    protected function isPositiveInteger($value)
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }
        else{
            return false;
            //return $field.'必须是整数';
        }
    } //判整数
    protected function isNotEmpty($value){
        if (empty($value)){
            return false;
        }
        return true;
    }//判空
    protected function isMobile($value){
        $rule = '^1(3|4|5|7|8)[0-9]\d{8}$^';
        $result = preg_match($rule,$value);
        if ($result){
            return true;
        }
        else{
            return false;
        }
    }//判断电话号码

    public function getDataByRule($arrays){
        if (array_key_exists('user_id',$arrays)|
            array_key_exists('uid',$arrays)){
            // 不允许包含user_id 或者uid，防止恶意覆盖user_id外键
            throw new ParameterException([
                'msg'=>'参数中包含有非法的参数名user_id或者uid'
            ]);
        }
        $newArray=[];
        foreach ($this->rule as $key=>$value){

            $newArray[$key] = $arrays[$key];
        }
        return $newArray;
    }//按规则获取数据


}