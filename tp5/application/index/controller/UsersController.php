<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/11
 * Time: 13:59
 */

namespace app\index\controller;
use think\Controller;
use app\index\model\Users;

class UsersController extends Controller
{
    //
    public function add()
   {
       $user = Users::get(1);
       echo $user -> id."<br />";
       echo $user -> name."<br />";
       echo $user -> age."<br />";
    }
}