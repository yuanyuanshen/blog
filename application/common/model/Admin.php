<?php

namespace app\common\model;

use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{
    //设置当前模型对应的主键
    protected $pk = 'admin_id';
    //设置当前模型对应的完整数据表名称
    protected $table = 'blog_admin';

    //登陆
    public function login($data)
    {
        //halt($data);
        //1.执行验证
        $validate = Loader::validate('Admin');
        //如果验证不通过
        if (!$validate->check($data))
        {
            return ['validate'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());
        }
        //2.比对用户名和密码是否正确
        $userInfo = $this->where('admin_username',$data['admin_username'])->where('admin_password',$data['admin_password'])->find();

        if (!$userInfo)
        {
            //说明在数据库中没有查到用户信息
            return ['validate'=>0,'msg'=>'用户名或者密码不正确'];
        }
        //3.将用户信息存入到session中
        session('admin.admin_id',$userInfo['admin_id']);
        session('admin.admin_username',$userInfo['admin_username']);
        return ['validate'=>1,'msg'=>'登陆成功'];
    }

    public function pass($data)
    {
        //1.执行验证
        $validate = new Validate([
            'admin_password' => 'require',
            'new_password' => 'require',
            'confirm_password' => 'require|confirm:new_password'
        ],[
            'admin_password.require' => '请输入原始密码',
            'new_password.require' => '请输入新密码',
            'confirm_password.require' => '请输入确认密码',
            'confirm_password.confirm' => '确认密码与新密码不一致'
        ]);

        if (!$validate->check($data)){
            return ['validate'=>0,'message'=>$validate->getError()];exit;
        }
        //2.原始密码是否正确
        $userInfo = $this->where('admin_id',session('admin.admin_id'))->where('admin_password',$data['admin_password'])->find();
        if (!$userInfo)
        {
            return ['validate'=>0,'message'=>'原始密码错误'];exit;
        }
        //3.修改密码
        $ref = $this->save([
            'admin_password' => $data['new_password']
        ],[
            $this->pk => session('admin.admin_id')
        ]);
        if ($ref)
        {
            return ['validate'=>1,'message'=>'密码修改成功'];exit;
        }else{
            return ['validate'=>0,'message'=>'密码修改失败'];exit;
        }
    }

}
