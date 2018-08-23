<?php
namespace app\index\controller;
use think\Controller;

class Account extends Controller{

    //支出记账view
    public function expend(){
        return $this->fetch();
    }

    //支出记账
    public function expendAccount(){
        
    }
}

?>