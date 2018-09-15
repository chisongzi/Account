<?php
namespace app\index\model;
use think\Model;
use think\DB;
use app\index\model\BaseModel;
class IncomeModel extends BaseModel{

    //收入记账
    public function incomeAccount($incomeInfo){
        $partnerArray = explode("-",$incomeInfo['bussinessPartner']);
        $partner = $partnerArray[0];
        $partnerName = $partnerArray[1];

        $incomeAccountArray = explode("-",$incomeInfo['incomeAccount'] );
        $incomeAccount = $incomeAccountArray[0];
        $incomeAccountName = $incomeAccountArray[1];

        $projectArray = explode("-",$incomeInfo['project'] );
        $project = $projectArray[0];
        $projectName = $projectArray[2];

        $agentArray = explode("-",$incomeInfo['agent'] );
        $agent = $agentArray[0];
        $agentName = $agentArray[1];

        $data = [
            'amount'=>$incomeInfo['incomeAmount']
            ,'type_str'=>$incomeInfo['incomeType']
            ,'partner'=>$partner
            ,'partner_str'=>$partnerName
            ,'account'=>$incomeAccount
            ,'account_str'=>$incomeAccountName
            ,'income_date_str'=>$incomeInfo['incomeDateStr']
            ,'project'=>$project
            ,'project_str'=>$projectName
            ,'agent'=>$agent
            ,'agent_str'=>$agentName
            ,'number'=>$incomeInfo['number']
        ];


       $result = DB::name('acc_receivable')->insert($data);
       return $result;
    }
    //应收记账列表
    public function receivableList(){
        $data = DB::table('acc_receivable')
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