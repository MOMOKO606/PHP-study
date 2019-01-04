<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2018/12/26
 * Time: 15:29
 */

require_once 'config.php';

function connectDb(){
    $conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PW);
    if( !$conn ){
        die( "can not connect");
    }
    mysqli_select_db($conn,'test');
    return  $conn;
}