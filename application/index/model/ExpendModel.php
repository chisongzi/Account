<?php
namespace app\index\model;
use think\Model;
use app\index\model\BaseModel;
use think\DB;
class ExpendModel extends BaseModel{

    //支出记账
    public function expendAccount($expendInfo){
       
        $partnerArray = explode("-",$expendInfo['bussinessPartner']);
        $partner = $partnerArray[0];
        $partnerName = $partnerArray[1];

        $expendAccountArray = explode("-",$expendInfo['expendAccount'] );
        $expendAccount = $expendAccountArray[0];
        $expendAccountName = $expendAccountArray[1];

        $projectArray = explode("-",$expendInfo['project'] );
        $project = $projectArray[0];
        $projectName = $projectArray[2];

        $agentArray = explode("-",$expendInfo['agent'] );
        $agent = $agentArray[0];
        $agentName = $agentArray[1];

        $data = [
            'amount'=>$expendInfo['expendAmount']
            ,'type_str'=>$expendInfo['expendType']
            ,'partner'=>$partner
            ,'partner_str'=>$partnerName
            ,'account'=>$expendAccount
            ,'account_str'=>$expendAccountName
            ,'payment_date_str'=>$expendInfo['paymentDateStr']
            ,'project'=>$project
            ,'project_str'=>$projectName
            ,'agent'=>$agent
            ,'agent_str'=>$agentName
            ,'number'=>$expendInfo['number']
        ];


       $result = DB::name('acc_payable')->insert($data);
       return $result;
    }
    //应付记账列表
    public function payableList(){
       $data = DB::table('acc_payable')
        ->where('is_del',0)
        ->select();
        $result = [
            'code'=>0
            ,'msg'=>"222"
            ,'count'=>count($data)
            ,'data'=>(object)[]
        ];
        $result['data'] = $data;
        return json_encode($result); 
    }
}
