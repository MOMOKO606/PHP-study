<?php

require_once "functions.php";

if(!isset($_POST["id"]) || empty($_POST["id"])){
    die ("No id information");
}
if(!isset($_POST["name"]) || empty($_POST["name"])){
    die ("No name information");
}
if(!isset($_POST["age"]) || empty($_POST["age"])){
    die ("No age information");
}
$id = intval($_POST["id"]);
$name = $_POST["name"];
$age = $_POST["age"];

$conn = ConnectDb();
mysqli_query($conn,"UPDATE users SET name = '$name', age = '$age' WHERE users.id = $id");
header("Location:alluser.php");