<?php
namespace app\index\controller;

use app\index\controller\Base;
use think\Controller;

class Book extends Base
{

    public function initialize()
    {
        parent::initialize();
        $this->accountModel = model('index/AccountModel');
        $this->agentModel = model('index/AgentModel');
        $this->partnerModel = model('index/PartnerModel');
        $this->projectModel = model('index/ProjectModel');
    }

    //支出记账view
    public function expend()
    {
        $projectNameList = $this->projectModel->itemNameList();
        $accountNameList = $this->accountModel->accountNameList();
        $agentNameList = $this->agentModel->agentNameList();
        $partnerNameList = $this->partnerModel->partnerNameList();
        
        return view('expend', array('projectNameList' => $projectNameList, 'accountNameList' => $accountNameList, 'agentNameList' => $agentNameList, 'partnerNameList' => $partnerNameList));
    }

    //支出记账
    public function expendAccount()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $this->model = model('index/ExpendModel');
           $result = $this->model->expendAccount($data);
           return $result;
        }
    }
    //应付记账view
    public function payable(){
        return $this->fetch();
    }
    //应付记账列表
    public function payableList(){
        $this->model = model('index/ExpendModel');
        $data = $this->model->payableList();
        echo $data;
    }

     //应收记账view
     public function receivable(){
        return $this->fetch();
    }
    //收入记账view
    public function income(){
        $projectNameList = $this->projectModel->itemNameList();
        $accountNameList = $this->accountModel->accountNameList();
        $agentNameList = $this->agentModel->agentNameList();
        $partnerNameList = $this->partnerModel->partnerNameList();
        
        return view('income', array('projectNameList' => $projectNameList, 'accountNameList' => $accountNameList, 'agentNameList' => $agentNameList, 'partnerNameList' => $partnerNameList));
    }
    //收入记账

    public function incomeAccount(){
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $this->model = model('index/IncomeModel');
           $result = $this->model->incomeAccount($data);
           return $result;
        }
    }
    //应收记账列表
    public function receivableList(){
        $this->model = model('index/IncomeModel');
        $data = $this->model->receivableList();
        echo $data;
    }
}
