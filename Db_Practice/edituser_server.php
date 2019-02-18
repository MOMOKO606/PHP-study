<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 9:33
 * Back-end associated with the front-end: edituser.php.
 * Step1.Receive the edited user's value from front-end: edituser.php.
 * Step2.Change the user's data in database.
 */

require_once "functions.php";

//  Step1.Get and check the values from edituser.php.
//  Sentinel of id, name & age.
if( !isset($_POST["id"]) || empty($_POST["id"])){
    die("No id has been entered.");
}
if( !isset($_POST["name"]) || empty($_POST["name"])){
    die("No name has been entered.");
}
if( !isset($_POST["age"]) || empty($_POST["age"])) {
    die("No age has been entered.");
}
$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];

//  Step2.Updated the database.
$conn = ConnectDb();
mysqli_query($conn,"UPDATE users SET name = '$name',age = '$age' WHERE users.id = $id");
//  Return to the index page.
header("Location:index.php");
