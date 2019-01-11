<?php
require_once "functions.php";

if( !isset($_POST["name"]) or empty($_POST["name"])){
    die("No name has been entered!");
}
if( !isset($_POST["age"]) or empty($_POST["age"])){
    die("No age has been entered!");
}

$name = $_POST["name"];
$age = intval($_POST["age"]);

$conn = ConnectDb();
mysqli_query($conn,"INSERT INTO users (name, age) VALUES ( '$name', '$age') ");
header("Location:alluser.php");

