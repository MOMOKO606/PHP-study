<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/19
 * Time: 12:27
 */
namespace app\admin\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model{

    //  当新增用户时，实现对字段的自动完成。
    //  需要自动完成的字段存放在$auto中（），并通过下面的3个函数对其自动赋值。
    //  函数名固定形式：set字段名（首字母大写）Attr
    //  protected表示只读类型。
    protected $auto = ['ip','password','repassword'];

    protected function setIpAttr(){
        return request()->ip();
    }

    //  加密
    protected function setPasswordAttr( $password ){
        return md5( $password );
    }

    protected function setRepasswordAttr( $password ){
        return md5( $password );
    }


    //  软删除
    use SoftDelete;
    //  deleteTime 属性用于定义你的软删除标记字段，
    //  ThinkPHP5 的软删除功能使用时间戳类型（数据表默 认值为 Null ）记录数据的删除时间。
    protected static $deleteTime = 'delete_time';





}