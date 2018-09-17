<?php
namespace app\index\controller;

use think\Controller;

class Setting extends Controller
{

    //用户管理view
    public function user()
    {
        return $this->fetch();
    }
    //添加用户
    public function addUser()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $this->model = model('index/UserModel');
            $result = $this->model->addUser($data);
            return $result;

        }
    }
    //更新用户
    public function updateUser()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $this->model = model('index/UserModel');
            $result = $this->model->updateUser($data);
            return $result;

        }
    }
    //删除用户
    public function deleteUser($id)
    {
        $this->model = model('index/UserModel');
        $result = $this->model->deleteUser($id);
        return $result;

    }
    //用户列表
    public function userList()
    {
        $this->model = model('index/UserModel');
        $result = $this->model->userList();
        echo $result;
    }
    //资金账户view
    public function account()
    {
        return $this->fetch();
    }

    //添加资金账户
    public function addAccount()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $this->model = model('index/AccountModel');
            $result = $this->model->addAccount($data);
            return $result;
        }
    }
    //资金账户列表

    public function accountList()
    {
        $this->model = model('index/AccountModel');
        $data = $this->model->accountList();
        echo $data;
    }

    //生意伙伴view
    public function partner()
    {
        return $this->fetch();
    }

    //添加生意伙伴
    public function addPartner()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $this->model = model("index/PartnerModel");
            $result = $this->model->addPartner($data);
            return $result;
        }
    }

    //生意伙伴列表
    public function partnerList()
    {
        $this->model = model("index/PartnerModel");
        $data = $this->model->partnerList();
        echo $data;
    }

    //经办人view
    public function agent()
    {
        return $this->fetch();
    }

    //添加经办人
    public function addAgent()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $this->model = model("index/AgentModel");
            $result = $this->model->addAgent($data);
            return $result;
        }
    }

    //经办人列表
    public function agentList()
    {
        $this->model = model("index/AgentModel");
        $data = $this->model->agentList();
        echo $data;
    }
}
