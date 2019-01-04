<?php
require_once "functions.php";
if( !isset($_POST["name"]) ){
    die("Cannot get name");
}
if( !isset($_POST["age"]) ){
    die("Cannot get age");
}

$name = $_POST["name"];
if(empty($name)){
    die("name is empty");
}
$age = $_POST["age"];
if(empty($age)){
    die("age is empty");
}
$age = intval($age);
$conn = connectDb();
mysqli_query($conn,"INSERT INTO users(name,age) VALUES ('$name','$age')");
header("Location:allusers.php");