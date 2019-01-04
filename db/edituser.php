<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/4
 * Time: 18:13
 */
require_once "functions.php";

//  取得ID
if(empty ($_GET["id"])){
    die("id is empty");
}
$id = $_GET["id"];
$id = intval($id);


// 根据id在数据库中得到相应的信息
$conn = connectDb();
$result = mysqli_query($conn,"SELECT * FROM users WHERE id = $id ");
$arr = mysqli_fetch_assoc($result);

$name = $arr["name"];
$age = $arr["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改数据</title>
</head>
<body>
<form action = "edituser_server.php" method="post">
    <div>修改id
        <input type = "text" name = "id" value = <?php echo "$id";?>>
    </div>
    <div>修改姓名
        <input type = "text" name = "name" value = <?php echo "$name";?>>
    </div>
    <div>修改年龄
        <input type = "text" name = "age" value = <?php echo "$age";?>>
    </div>
    <input type = "submit",value = "提交">
</form>
</html>