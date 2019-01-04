<?php
require_once "config.php";

function connectDb(){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    if( !$conn ){
        die("Cannot open Database");
    }
    mysqli_select_db($conn,"test");
    return $conn;
}
?>