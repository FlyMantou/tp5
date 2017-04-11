<?php
namespace app\unity\controller;

use think\Controller;
use think\Db;
use app\index\model\Member;



class Index extends Controller
{
    public function index()
    {

        $data = [['ip'=>'192.168.0.102','name'=>'1区 恕瑞玛','count'=>138],['ip'=>'192.168.0.102','name'=>'2区 弗雷尔','people'=>168]];
        // 指定json数据输出*/
        //return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
        return json($data);
        //return $this->fetch('index', ['name' => 'thinkphp']);
    }
}

