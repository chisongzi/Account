<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Base;

class Book extends Base{

    function initialize(){
        parent::initialize();
        $this->accountModel = model('index/AccountModel');
        $this->agentModel = model('index/AgentModel');
        $this->partnerModel = model('index/PartnerModel');
        $this->projectModel = model('index/ProjectModel');
    }
   

    //支出记账view
    public function expend(){
        $projectNameList = $this->projectModel->itemNameList();
        // $projectNameList = array(0,1);
        $accountNameList = $this->accountModel->accountNameList();
        $agentNameList = $this->agentModel->agentNameList();
        $partnerNameList = $this->partnerModel->partnerNameList();
        // file_put_contents("log.txt",json_encode($projectNameList));
        return view('expend',array('projectNameList'=>$projectNameList,'accountNameList'=>$accountNameList,'agentNameList'=>$agentNameList,'partnerNameList'=>$partnerNameList));
    }

    //支出记账
    public function expendAccount(){
        
    }
}

?>