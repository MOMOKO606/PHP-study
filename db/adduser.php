<?php
require_once "functions.php";

if( !isset($_POST["name"]) || empty($_POST["name"]) ){
    die("Empty name,plz enter new user name");
}
if(!isset($_POST["age"]) || empty($_POST["age"])){
    die("Empty age,plz enter new user age");
}
$name = $_POST["name"];
$age = $_POST["age"];

$conn = ConnectDb();
mysqli_query($conn,"INSERT INTO users (name,age) VALUES ('$name','$age')");
header("Location:alluser.php");