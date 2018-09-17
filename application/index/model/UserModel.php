<?php
namespace app\index\model;
use think\DB;
use think\Model;
use app\index\model\BaseModel;
class UserModel extends BaseModel{
    //添加用户
    public function addUser($userInfo){
        $name = $userInfo['name'];
        $password= password($userInfo['password']);

        $data = [
            'name'=>$name
            ,'password'=>$password
            ,'create_time'=>time()
        ];

        $result = DB::name('acc_admin')->insert($data);
        return $result;
    }

    //更新用户
    public function updateUser($userInfo){

        $id = $userInfo["id"];
        $name = $userInfo['name'];
        $password = passowrd($userInfo['password']);

        $result = DB::name('acc_admin')
        ->where('id',$id)
        ->update(['name'=>$name,'password'=>$password]);
        return $result;
    }
    //删除用户
    public function deleteUser($id){
       $result = DB::name('acc_admin')
        ->where('id',$id)
        ->update(['is_del'=>'1']);
        return $result;
    }
    //用户列表
    public function userList(){

       $data = DB::table('acc_admin')
        ->field('id,name,create_time')
        ->where('is_del',0)
        ->select();

        if(!empty($data)){
            foreach($data as &$value){
                $value['create_time'] = date('Y-m-d',$value['create_time']);
            }
        }
        unset($value);

        $result=[
            'code'=>0
            ,'msg'=>'222'
            ,'count'=>count($data)
            ,'data'=>(object)[]
        ];

        $result['data'] = $data;

        file_put_contents("log.txt",json_encode($result));
        return json_encode($result);
    }

    //获取用户信息
    public function getUserInfo($id){
        DB::table('acc_admin')
        ;
    }
}