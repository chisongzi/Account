<?php
namespace app\index\controller;

use think\Controller;

class Project extends Controller
{
    //新建项目view
    public function add()
    {
        return $this->fetch();
    }
    //进行中项目view
    public function underway()
    {
        return $this->fetch();
    }
    //已归档的项目view
    public function archived()
    {
        return $this->fetch();
    }

    //新建项目
    public function addItem(){
       
        if(request()->isPost()){
            $param = input('post.');
            $this->model = model('index/ProjectModel');
            $result = $this->model->addItem($param);
            return $result;
        }
    }
    //项目列表 0 进行中项目 1 已归档项目
    public function itemList($status){
        $this->model = model('index/ProjectModel');
        $data = $this->model->itemList($status);
        echo $data;
    }
}
 