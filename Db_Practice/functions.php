<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/17
 * Time: 15:01
 * Contains all the functions used in the project.
 */

//  Require configuration file.
require_once "config.php";

function ConnectDb(){
    //  Connect to the database.
    //  Input: HOST,USERNAME,PASSWORD,DATABASE(global var).
    //  Output: handles $conn if succeed, error message otherwise.

    $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    if( !$conn ){
        die("Cannot connect to server!");
    }
    mysqli_select_db($conn,DATABASE);
    return $conn;
}