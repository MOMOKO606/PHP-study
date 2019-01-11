<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/11
 * Time: 23:16
 */
require_once "functions.php";
$id = intval($_GET["id"]);
$conn = ConnectDb();
mysqli_query($conn,"DELETE FROM users WHERE users.id = $id");
header("Location:alluser.php");