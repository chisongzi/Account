<?php
namespace app\index\model;
use think\DB;
use think\Model;
use app\index\model\BaseModel;
class AgentModel extends BaseModel{

    //添加经办人
    public function addAgent($agentInfo){
        $data=[
            'name'=>$agentInfo['name']
            ,'phone'=>$agentInfo['phone']
            ,'note'=>$agentInfo['note']
            ,'is_default'=>0
        ];

        $result = DB::name('acc_agent')->insert($data);
        return $result;
    }


    //经办人列表
    public function agentList(){
        $data = DB::table('acc_agent')
        ->field('id,name,phone,note')
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

    //经办人名称列表
    public function agentNameList(){
        $data = DB::table('acc_agent')
        ->field('id,name')
        ->select()
        ;
        return $data;
    }

}