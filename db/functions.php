<?php

require_once "config.php";

function ConnectDb(){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    if( !$conn ){
        die("Cannot connect the database!");
    }
    mysqli_select_db($conn, "test");
    return $conn;
}