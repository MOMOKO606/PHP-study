<?php
require_once "functions.php";

$id = $_GET["id"];
$conn = ConnectDb();
mysqli_query($conn,"DELETE  FROM users WHERE users.id = '$id'");
header("Location:alluser.php");