<?php

namespace app\self\controller;

use think\Controller;

/**
 * Created by PhpStorm.
 * User: huanghai
 * Date: 2016/10/31
 * Time: 10:30
 */
class Index extends Controller
{

    public function index()
    {
        //$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        // return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
        $arr = array('name' => 'huanghai', 'age' => 20, 'sex' => '男', 'birthday' => '1993年2月1日', 'phone' => '18710040239');
        $arr['height'] = '178cm';
        //去除数组中的重复元素
        $arr['name1'] = "huanghai";
        $arr = array_unique($arr);

        //$arr1 = array('huanghai','20','huanghai','30','40');


        //$arr1 = array_unique($arr1);
        //print_r($arr);
        //var_dump($arr);
        // printf('集合的长度是：'.count($arr));

        $str = '1#2#3#4#5';

        $arr1 = explode('#', $str);
        // print_r($arr1);

        $arr2 = array('哈哈', 'a', 'jingji', '9');

        srand((float)microtime() * 1000000);
        shuffle($arr2);


        // print_r($arr2);

        $rand = rand(0, 3);
        $str2 = time();

        // printf($arr2[$rand]);
        //printf($str2);


        $arr3 = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));

        foreach ($arr3 as $key => $value) {
            if ($key == 1) {

            }
            //print_r($value);
        }

        //print_r($arr3);
        //print_r($arr3[1]);

        $arr4 = array('haha', 'hehe', 'oo', 'aa', 'pp');
        $arr5 = array('duangduang', 'hehe', 'ss', 'qq', 'ee');

        $arr6 = array_merge($arr4, $arr5);
        $arr6 = array_unique($arr6);
        $arr6 = array_chunk($arr6, 2);

        for ($a = 0; $a < count($arr6); $a++) {
            print_r(list($name, $value) = each($arr6));
        }


        //print_r($arr6);
        return $this->fetch('index', $arr);
    }

    public function about()
    {

        //$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        // return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
        return $this->fetch('about', ['name' => 'thinkphp']);
    }

    public function getData()
    {

        if ((($_FILES["file"]["type"] == "application/vnd.ms-excel")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/pjpeg"))
            && ($_FILES["file"]["size"] < 20000000))
        {
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "upload/" . $_FILES["file"]["name"]);
                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Stored in: " . $_FILES["file"]["tmp_name"];
            }
        }
        else
        {
            echo "Invalid file";
        }
    }
}