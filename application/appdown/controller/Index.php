<?php
namespace app\appdown\controller;

use think\Controller;




class Index extends Controller
{
    public function index()
    {

        /*$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);*/
        return $this->fetch('index', ['name' => 'thinkphp']);
    }
}

