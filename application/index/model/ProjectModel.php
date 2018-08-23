<?php
namespace app\index\model;
use think\Model;
use think\DB;
use app\index\model\BaseModel;
class ProjectModel extends BaseModel{

    //项目信息列表
    public function itemList($status){
        $data = DB::table('acc_item')
        ->field('id,name,start_time_str,type_str,leader')
        ->where('status',$status)
        ->where('is_del',0)
        ->select()
        ;
        $result = [
            'code'=>0,
            'msg'=>'222',
            'count'=>count($data),
            'data'=>(object)[]
        ];

        $result['data'] = $data;
        file_put_contents('log.txt', json_encode($result));
        return json_encode($result);
    }

    //项目名称列表
    public function itemNameList(){

        $data = DB::table('acc_item')
        ->field('name')
        ->where('is_del',0)
        ->select()
        ;
        $result =[
            'code'=>0,
            'msg'=>'',
            'data'=>(object)[]
        ];
        $result['data'] = $data;
   
        return json_encode($result);
    }
    //添加项目
    public function addItem($item){
        $data= [
            'name'=>$item['name'],
            'method'=>$item['method'],
            'method_str'=>'',
            'type'=>$item['type'],
            'type_str'=>'',
            'company'=>$item['company'],
            'address'=>$item['address'],
            'phone'=>$item['phone'],
            'book_build_date_str'=>$item['bookBuildDateStr'],
            'build_unit'=>$item['buildUnit'],
            'design_unit'=>$item['designUnit'],
            'supervisor_unit'=>$item['supervisorUnit'],
            'advisory_body'=>$item['advisoryBody'],
            'start_time_str'=>$item['startTimeStr'],
            'end_time_str'=>$item['endTimeStr'],
            'bond_ratio'=>$item['bondRatio'],
            'bond'=>$item['bond'],
            'estimate_cost'=>$item['estimateCost'],
            'contract_amount'=>$item['contractAmount'],
            'settlement_amount'=>$item['settlementAmount'],
            'leader'=>$item['leader'],
            'note'=>$item['note'],
            'invoice_company'=>$item['invoiceCompany'],
            'duty_paragraph'=>$item['dutyParagraph'],
            'bank_address'=>$item['bankAddress'],
            'bank_name'=>$item['bankName'],
            'bank_number'=>$item['bankNumber']
        ];


        $method = $item['method'];
        if($method == 0){
            $data['method_str'] = "自营项目";
        }else if($method == 1){
            $data['method_str'] = "联营项目";

        }

        $type = $item['type'];
        if($type == 0){
            $data['type_str'] = "签约型";
        }else if($type == 1){
            $data['type_str'] = "流水型";

        }
       
        $result = DB::name('acc_item')->insert($data);
        return $result;
        // return 1;
    }
    //删除项目
    public function deleteItem($id){

    }
    //项目详情信息
    public function itemDetail($id){
        $result = DB::name('acc_item')
        ->where('id',$id)
        ->select()
        ;
        file_put_contents('log.txt',json_encode($result));
       return $result;
    }
}