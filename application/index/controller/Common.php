<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use \think\facade\Cookie;
use \think\facade\Session;

class Common extends Controller
{

    public function login()
    {
        if (Session::has('admin') == false) {
            return $this->fetch();
        } else {
            $this->redirect('index/index/index');
        }

    }
    public function login1()
    {

        //    return $this->fetch();

        if (request()->isPost()) {
            $data = $this->request->post();
            $info = DB::name('acc_admin')->where('name', $data['name'])->find();

            if (empty($info)) {
                return $this->error("用户名不存在");
            } else {
                //验证密码
                $data['password'] = password($data['password']);
                if ($data['password'] != $info['password']) {
                    return $this->error('密码错误');
                } else {
                    //为选择记住账号，或输入取消操作
                    if (Cookie::has('usermember')) {
                        Cookie::delete('usermember');
                    }
                }
                Session::set('admin', $info['id']); //保存新的
                return $this->success('登录成功', 'index/index/index');
            }
        }
    }

    public function logout()
    {
        Session::delete('admin');
        if (Session::has('admin')) {
            return $this->error('退出失败');
        } else {
            return $this->success('正在退出', 'index/common/login');
        }

    }

}
