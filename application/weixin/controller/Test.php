<?php

namespace app\weixin\controller;
use think\Controller;
use app\weixin\model\TestModel;

/**
 * Created by PhpStorm.
 * User: huanghai
 * Date: 2016/10/31
 * Time: 10:30
 */


class Test extends Controller {

    public function index()
    {

        $testModel = new TestModel($_POST);
        $testModel->save();
      //  $testModel->allowField(true)->save();
       // $data = ['name'=>'数据','url'=>'链接地址'];
        // 指定json数据输出
      //  return json(['data'=>$data,'code'=>1,'message'=>'操作完成','params'=>($testModel)]);
       // return $this->fetch('index', ['name' => 'thinkphp']);
        return json(['data'=>'感谢您的青睐，我会及时联系您的哦！']);
    }



}