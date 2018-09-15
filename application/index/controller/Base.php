<?php
namespace app\index\controller;

use think\Controller;
use \think\facade\Session;

class Base extends Controller
{
    protected function initialize()
    {
        if (!Session::has('admin')) {
            $this->redirect('index/common/login');
        }
    }
}
