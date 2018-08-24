<?php
namespace app\index\model;
use think\DB;
use think\Model;
use app\index\model\BaseModel;
class AccountModel extends BaseModel{

    //添加资金账户
    public function addAccount($accountInfo){
        $data=[
            'name'=>$accountInfo['name']
            ,'currency'=>$accountInfo['currency']
            ,'balance'=>$accountInfo['balance']
            ,'note'=>$accountInfo['note']
            ,'is_default'=>0
        ];

        $result = DB::name('acc_account')->insert($data);
        return $result;
    }


    //资金账户列表
    public function accountList(){
        $data = DB::table('acc_account')
        ->field('id,name,balance,currency,note')
        ->select()
        ;
        $result =[
            'code'=>0
            ,'msg'=>''
            ,'count'=>count($data)
            ,'data'=>(object)[]
        ];
        $result['data'] = $data;
        return json_encode($result);
    }
    //资金账户名称列表
    public function accountNameList(){
        $data = DB::table('acc_account')
        ->field('id,name')
        ->select()
        ;
        return $data;
    }

}