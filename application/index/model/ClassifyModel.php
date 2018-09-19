<?php
namespace app\index\model;

use app\index\model\BaseModel;
use think\Model;

class ClassifyModel extends BaseModel
{
    /**
     * @param $arr 数组
     * @param $id   id
     * @param $level  层级
     * @return array
     */
    public function classifyList($arr, $id, $level)
    {

        $list = array();
        foreach ($arr as $k => $v) {
            if ($v['pid'] == $id) {
                $v['level'] = $level;
                $v['children'] = $this->classifyList($arr, $v['id'], $level + 1);
                $list[] = $v;
            }
        }
        file_put_contents("log.txt",json_encode($list));
        return $list;
    }

}
