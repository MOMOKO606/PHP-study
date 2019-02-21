<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/21
 * Time: 13:43
 */
namespace app\index\validate;
use think\Validate;

class Customer extends Validate{
    //  前台用户注册、登录的输入sentinel。
    //  定义规则
    protected $rule = [
        //require属性表示用户名不能为空,min:3属性表示用户名最小长度为3。
        'name|用户名' => 'require|min:3',
        'password|密码' => 'require|min:6|confirm:repassword',
    ];

    //  定义警告信息
    protected $message = [
        //  require属性失败时的提示信息。
        'name.require' => '用户名不能为空',
        'name.min'=> '用户名长度不能少于3位',
        'password.require' => '密码不能为空',
        'password.min' => '密码长度不能少于6位',
        'password.confirm'  => '两次密码不一致',
    ];

}