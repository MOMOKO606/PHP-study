<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/20
 * Time: 18:03
 */

namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;

class IndexController extends Controller{

    public function login(){
        //  用户登陆首页，对应前端 view/index/login.html。
        return $this->fetch();
    }

    public function logout(){
        //  用户退出登陆。
        //  清空session。
        session(null);
        $this->success("用户退出成功","Index/login");
    }

    public function check(){
        //  检查数据库中是否有前端输入的用户信息。

        //  从前端login.html中，取得用户输入信息。
        $data = input('post.');

        //  创建User模型实例，自动连接到数据库中的table。
        $user = new User();
        //  find（查询）前端login.html输入的用户名（$data['name']）
        //  与user实例对应的table中name相同的项，结果返回给$result。
        $result = $user -> where('name',$data['name'])->find();
        //  如果$result有值，说明用户名合法；
        //  下一步核对密码。
        if( $result ){
            if($result['password'] === md5($data['password'])){
                //  用户名与密码都合法，使用session助手函数设定session。
                session('name',$data['name']);
            }else{
                $this->error('密码不正确');
            }
        }else{
            $this->error('用户名不存在');
            exit;
        }
        //  用户名和密码合法，检查验证码。
        if(captcha_check($data['code'])){
            $this->success('验证码正确，登陆成功','User/index');
        }else{
            $this->error('验证码不正确');
        }
        return $this->fetch();
    }
}