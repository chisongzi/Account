<?php
namespace app\index\model;
use think\DB;
use think\Model;
use app\index\model\BaseModel;
class PartnerModel extends BaseModel{
    

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
     //生意伙伴名称列表
     public function partnerNameList(){
        $data = DB::table('acc_partner')
        ->field('id,name')
         ->where('is_del',0)
         ->select()
         ;
         $nameArray = array();
         foreach($data as $value){
             $nameArray[$value['id']] = $value['name'];
         }
         return $nameArray;
     }
}