<?php
namespace app\index\controller;
use app\index\model\Customer as CustomerModel;
use app\index\model\Customer;
use app\index\validate\Customer as CustomerValidate;
use think\Controller;


class IndexController extends Controller{

    public function index(){
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
        $request = Request::instance();
    }

    public function login(){
        return $this->fetch();
    }

    public function register(){
        return $this->fetch();
    }

    public function add(){
        //  用户注册的方法。
        //  对应前端：
        //      从index/view/register.html传入数据。
        //  Step1.取得输入数据；
        //  对应的数据库table中有6个字段（列），其中id自增，可省略；
        //  用户在前端add.html输入用户名、密码、确认密码；
        //  剩下的create_time,update_time,可通过框架封装好的方法得到。
        //  Step2.更新数据库。

        //  Step1.从前端register.html中取得表单信息。
        $data = input('post.');  //  助手函数，获取前端form中post的数据。
        //  使用验证器类作sentinel。
        $val = new CustomerValidate();
        if (!$val->check($data)) {
            $this->error($val->getError());  //  框架封装好的错误跳转方法,跳转信息是$val决定。
            exit;  //  类似于return。
        }
        //  检查验证码。
        if(!captcha_check($data['code'])){
            $this->error('验证码不正确',"Index/index");
        }

        //  Step2.数据加入模型实例，并插入数据库。
        $user = new CustomerModel($data);
        //  过滤post数组中的非数据表字段,并通过$ret标识查看是否成功。
        $ret = $user->allowField(true)->save();
        if ($ret) {
            $this->success("注册成功。", "Index/index");  //  框架封装好的跳转方法。
        } else {
            $this->error("注册失败。");  //  默认跳转到上一个页面
        }
    }
}
