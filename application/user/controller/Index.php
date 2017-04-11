<?php

namespace app\user\controller;
use think\Controller;

/**
 * Created by PhpStorm.
 * User: huanghai
 * Date: 2016/10/31
 * Time: 10:30
 */


class Index extends Controller {

    public function index()
    {

        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
       // return $this->fetch('index', ['name' => 'thinkphp']);
    }



}