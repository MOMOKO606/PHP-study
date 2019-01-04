<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2018/12/26
 * Time: 18:03
 */
require_once 'functions.php';

if( !isset( $_POST['name']) ){
    die('user name not define');
}
if ( !isset( $_POST['age']) ){
    die('user age not define');
}

$name = $_POST['name'];
$age = $_POST['age'];

if( empty( $name )){
    die('user name is empty');
}
if( empty( $age )){
    die('user age is empty');
}
$age = intval($age);

$conn = connectDb();
mysqli_query($conn, "INSERT INTO users(name,age) VALUES ('$name','$age')");

if(mysqli_errno($conn)){
    echo mysqli_errno($conn);
}else{
    header("Location:alluser.php");
}





