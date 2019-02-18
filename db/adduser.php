<?php
require_once "functions.php";

if(!isset($_POST["name"]) || empty($_POST["name"])){
    die("Cannot get name parameter");
}
if(!isset($_POST["age"]) || empty($_POST["age"])){
    die("Cannot get age parameter");
}

$name = $_POST["name"];
$age = $_POST["age"];

$conn = ConnectDb();
mysqli_query($conn,"INSERT INTO users (name,age) VALUES ('$name','$age')");
header("Location:alluser.php");


