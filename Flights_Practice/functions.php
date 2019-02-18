<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 15:27
 * Contains all the functions used in the Momoko Air project.
 */

//  Require configuration file.
require_once "config.php";

function ConnectDb(){
    //  Connect to the database.
    //  Input: HOST,USERNAME,PASSWORD,DATABASE(global var).
    //  Output: handles $conn if succeed, error message otherwise.
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    if(!$conn){
        die("Cannot connect database.");
    }
    mysqli_select_db($conn,DATABASE);
    return $conn;
}