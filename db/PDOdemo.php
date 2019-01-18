<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/18
 * Time: 9:57
 */
//Step1.链接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
    die("Cannot connect PDO");
}

//Step2.执行query返回一个预处理对象
$stmt = $pdo->query("SELECT * FROM users");
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($arr);

//Step3.解析数据
foreach ($arr as $var){
    echo $var['id']."--".$var['name']."--".$var['age']."<br>";
}
//Step3释放资源
$stmt = null;
$pdo = null;
