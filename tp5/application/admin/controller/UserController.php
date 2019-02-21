<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/19
 * Time: 10:02
 * 管理员用户的控制器类，
 * 对应 view/user/*.html 和 model/User.php。
 */
namespace app\admin\controller;
use app\admin\controller\BaseController;
use app\admin\model\User as UserModel;
use app\admin\validate\User as UserValidate;

class UserController extends BaseController
{
    public function index()
    {
        //  对应 view/user/index.html
        return $this->fetch();
    }

    public function list()
    {
        //  对应 view/user/list.html。
        //  Step1.从数据库把数据查询出来；
        //  Step2.渲染到view中的html模板文件。

        //  方法1.利用模型封装方法，分页显示数据库数据。
        $data = UserModel::paginate(3);  // 每页显示3条。
        //  获得当前页码数。
        $page = $data->render();

        //  方法2.利用模型封装方法得到数据库数据。
        // $data = UserModel::all();

        //  数据连接到html。
        $this->assign('data', $data);
        $this->assign('page', $page);
        //  commit.
        return $this->fetch();
    }

    public function add()
    {
        //  显示前端:view/user/add.html。
        return $this->fetch();
    }

    public function insert()
    {
        //  新增管理员的方法。
        //  对应前端：
        //      从view/user/传入数据。
        //  Step1.取得数据；
        //  对应的数据库table中有9个字段（列），其中id自增，可省略；
        //  用户在前端add.html输入用户名、密码、确认密码、邮箱；
        //  剩下的create_time,update_time,delete_time,ip可通过框架封装好的方法得到。
        //  Step2.更新数据库。

        //  Step1.从前端add.html中取得表单信息。
        $data = input('post.');  //  助手函数，获取前端form中post的数据。
        //  使用验证器类作sentinel。
        $val = new UserValidate();
        if (!$val->check($data)) {
            $this->error($val->getError());  //  框架封装好的错误跳转方法,跳转信息是$val决定。
            exit;  //  类似于return。
        }

        //  Step2.数据加入模型实例，并插入数据库。
        $user = new UserModel($data);
        //  过滤post数组中的非数据表字段,并通过$ret标识查看是否成功。
        $ret = $user->allowField(true)->save();
        if ($ret) {
            $this->success("新增管理员成功。", "User/list");  //  框架封装好的跳转方法。
        } else {
            $this->error("新增管理员失败。");  //  默认跳转到上一个页面
        }
    }

    public function edit()
    {
        //  取得将要修改的用户信息default值，并在前端显示。
        //  对应前端：
        //      从view/user/list.html传入数据，
        //      传出数据到view/user/edit.html。
        //  Step1.从前端list.html获取id；
        //  Step2.取得数据库中对应的数据；
        //  Step3.将数据发送到前端edit.html。

        //  Step1.从list.html取得id。
        //  通过助手函数取得前端GET方法传回的id。
        $id = input("get.id");
        //  Step2.通过类方法取得对应该id的所有数据。
        $data = UserModel::get($id);
        //  Step3.渲染数据到edit.html。
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function update()
    {
        //  将前端edit.html传回的数据（即修改后的用户信息）更新数据库。
        //  对应前端：view/user/list.html。
        //  Step1.从前端获得id和修改后的数据；
        //  Step2.Sentinel并更新数据库；
        //  Step3.跳转到前端list.html。

        $id = input('post.id');  //  助手函数读入id。
        $data = input('post.');  //  助手函数读入post值。

        //  使用验证器类作sentinel。
        $val = new UserValidate();
        if (!$val->check($data)) {
            $this->error($val->getError());  //  框架封装好的错误跳转方法,跳转信息是$val决定。
            exit;  //  类似于return。
        }

        //  对用户修改后的密码做加密处理。
        $data['password'] = md5($data['password'] );
        $data['repassword'] = md5($data['repassword'] );

        //  数据加入模型实例，并更新数据库。
        $user = new UserModel($data);
        //  更新数据表中的字段,并通过$ret标识查看是否成功。
        $ret = $user->where("id",$id)->update($data);
        echo($user);
        if ($ret) {
            $this->success("修改用户信息成功。", "User/list");  //  框架封装好的跳转方法。
        } else {
            $this->error("修改用户信息成功。");  //  默认跳转到上一个页面
        }
    }

    public function delete(){
        //  删除用户信息。
        $id = input('get.id');

        //  软删除，数据库中不会真的删除。
//        $ret = UserModel::destory($id);
//        if($ret){
//            $this->success("删除用户成功","User/list");
//        }else{
//            $this->error("删除用户失败");
//        }

        //  物理（真实）删除，数据库中删除。
        $id = input("get.id");
        $ret = UserModel::destroy($id,true);
        if($ret){
            $this->success("删除用户成功","User/list");
        }else{
            $this->error("删除用户失败");
        }
    }

}