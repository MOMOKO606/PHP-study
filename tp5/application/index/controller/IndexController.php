<?php
namespace app\index\controller;
use think\Request;
use think\Db;
use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
//        $request = Request::instance();
//        echo "当前的域名是:".$request->domain()."<br/>";
//        echo "当前的入口文件是:".$request->baseFile()."<br/>";
        //  赋值给模板变量
//        $name = "今天我的滑板鞋好漂亮";
//        $email = "huabanxie@qq.com";
//        $this -> assign('name',$name);
//        $this -> assign('email',$email);
        return $this -> fetch();


    }

    public function db(){
        // 查询数据
        $result = Db::query("SELECT * FROM users");
        dump($result);
    }
}