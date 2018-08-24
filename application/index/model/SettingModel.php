<?php
namespace app\index\model;
use think\DB;
use think\Model;
use app\index\model\BaseModel;
class SettingModel extends BaseModel{

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

    

    //添加生意伙伴
    public function addPartner($partnerInfo){
        $data =[
            'name'=>$partnerInfo['name']
            ,'phone'=>$partnerInfo['phone']
            ,'note'=>$partnerInfo['note']
            ,'is_default'=>0
        ];

        // $isDefault = $partnerInfo['isDefault'];
        // if($isDefault == "on"){
        //     $data['is_default'] = 1;
        // }else{
        //     $data['is_default'] = 0;
        // }
        $result = DB::name('acc_partner')->insert($data);
        return $result;
    }
    //生意伙伴列表
    public function partnerList(){
       $data = DB::table('acc_partner')
       ->field('id,name,phone,note,is_default')
        ->where('is_del',0)
        ->select()
        ;
        $result = [
            'code'=>0
            ,'msg'=>""
            ,'count'=>count($data)
            ,'data'=>(object)[]
        ];
        $result["data"] = $data;
        return json_encode($result);
    }
}