<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 10:41
 * Back-end of delete function.
 * Step1.Get the id value from front-end:index.php.
 * Step2.Delete the relative values in database.
 */

require_once "functions.php";

//  Step1.Get the id value from front-end:index.php.
$id = $_GET["id"];
//  Sentinel of id
if(!isset($id) || empty($id)){
    die("Cannot get id.");
}

//  Step2.Delete the relative values in database.
$conn = ConnectDb();
mysqli_query($conn,"DELETE FROM users WHERE users.id=$id");
//  Return to the index page.
header("Location:index.php");



