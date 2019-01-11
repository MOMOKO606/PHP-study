<?php
require_once "functions.php";

if(!isset($_POST['id']) or empty($_POST['id'])){
    die("Empty id!");
}else{
    $id = intval($_POST["id"]);
}
if(!isset($_POST['name']) or empty($_POST['name'])){
    die("Empty name!");
}else{
    $name = $_POST["name"];
}
if(!isset($_POST['age']) or empty($_POST['age'])){
    die("Empty age!");
}else{
    $age = intval($_POST["age"]);
}

$conn = ConnectDb();
mysqli_query($conn,"UPDATE users SET id = '$id', name = '$name', age = '$age' WHERE users.id = $id ");

header("Location:alluser.php");

