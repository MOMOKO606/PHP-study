<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/24
 * Time: 11:57
 */
require_once "config.php";

function ConnectDb(){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    if(!$conn){
        die("Cannot connect Database");
    }
    mysqli_select_db($conn,"py2db");
    return $conn;
}


