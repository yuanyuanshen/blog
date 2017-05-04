<?php
/**
 * Created by PhpStorm.
 * User: shenyuanyuan
 * Date: 2017/5/2
 * Time: 下午4:23
 */
namespace app\admin\validate;

use think\Validate;
error_reporting(0);

class Admin extends Validate
{
    protected $rule = [
        'admin_username'=>'require',
        'admin_password'=>'require',
        'code'=>'require|captcha'
    ];
    protected $message = [
        'admin_username.require' => '请输入用户名',
        'admin_password.require' => '请输入密码',
        'code.require' => '请输入验证码',
        'code.captcha' => '验证码错误'
    ];


}
