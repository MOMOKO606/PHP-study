<?php

require_once "functions.php";

if(!isset($_POST["id"]) || empty($_POST["id"])){
    die("Cannot get id");
}
if(!isset($_POST["name"]) || empty($_POST["name"])){
    die("Cannot get name");
}
if(!isset($_POST["age"]) || empty($_POST["age"])){
    die("Cannot get age");
}
$id = intval($_POST["id"]);
$name = $_POST["name"];
$age = $_POST["age"];

$conn = ConnectDb();
mysqli_query($conn, "UPDATE users SET name = '$name',age = '$age' WHERE users.id = $id ");
header("Location:alluser.php");