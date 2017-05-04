<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    //
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        //执行登陆的验证
        if (!session('admin.admin_id'))
        {
            $this->redirect('admin/Login/login');
        }
    }
}
