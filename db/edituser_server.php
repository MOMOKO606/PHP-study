<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/4
 * Time: 18:53
 */
require_once "functions.php";

if( empty($_POST["id"])){
    die("Empty id");
}
if(empty($_POST["name"])){
    die("Empty name");
}
if(empty($_POST["age"])){
    die("Empty age");
}
$id = intval($_POST["id"]);
$name = $_POST["name"];
$age = intval($_POST["age"]);

echo "$age<br>";
$conn = connectDb();
$new = mysqli_query($conn,"UPDATE users SET name = '$name', age = $age WHERE id = $id");
if(mysqli_errno($conn)){
    echo mysqli_errno($conn);
}else {
    header("Location:alluser.php");
}