<?php

namespace app\user\controller;
/**
 * Created by PhpStorm.
 * User: huanghai
 * Date: 2016/10/31
 * Time: 13:29
 */

class User extends \think\Controller {
    public function index(){
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
    }

    public function getList($id,$name){

        return ['id'=>$id,'name'=>$name];

    }


}