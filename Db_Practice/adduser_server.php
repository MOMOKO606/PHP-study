<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/17
 * Time: 17:01
 * The back end associated with the front end-adduser.html.
 */
require_once "functions.php";

//  Get and check the values from adduser.html.

$name = $_POST["name"];
//  Sentinel of $name.
if( !isset($name) || empty($name)){
    die("No name has been entered.");
}
$age = $_POST["age"];
//  Sentinel of $age.
if( !isset($age) || empty($age)){
    die("No age has been entered.");
}

//  Updated the database.
$conn = ConnectDb();
mysqli_query($conn,"INSERT INTO users (name,age) VALUES ('$name','$age')  ");
//  Return to the index page.
header("Location:index.php");