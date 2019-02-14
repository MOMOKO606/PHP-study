<?php
require_once "config.php";

function ConnectDb(){
    $conn = mysqli_connect(HOST,USER,PASSWORD);
    if( !$conn ){
        die("Cannot connect database");
    }
    mysqli_select_db($conn,"test");
    return $conn;
}
