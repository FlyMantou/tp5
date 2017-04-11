<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\Member;



class Index extends Controller
{
    public function index()
    {

        /*$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);*/
        return $this->fetch('index', ['name' => 'thinkphp']);
    }


    public function put()
    {
        $member = new Member;
        $member->name = $_POST['name'];
        $member->thumb = $_POST['thumb'];
        $member->selfword = $_POST['selfword'];
        $member->save();
        echo "插入完成";
    }

    public function getList()
    {
        //http://127.0.0.1/tp5/public/Index.php/Index/index/get
        $user = Member::all();
        $arr = array('d' => $user);
        // echo $user->toJson();
        echo json_encode($arr);
    }
}

