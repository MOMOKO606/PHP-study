<?php
require_once "functions.php";

$id = intval($_GET["id"]);
$conn = ConnectDb();
$result = mysqli_query($conn,"SELECT * FROM users WHERE id = $id");
$arr = mysqli_fetch_assoc($result);

$name = $arr["name"];
$age = $arr["age"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改用户信息</title>
</head>
<body>
    <form action="edituser_server.php" method="post">
        <div>修改ID
            <input type="text" name="id" value=<?php echo "$id"; ?>>
        </div>
        <div>修改姓名
            <input type="text" name="name" value=<?php echo "$name"; ?>>
        </div>
        <div>修改姓名
            <input type="text" name="age" value=<?php echo "$age"; ?>>
        </div>
        <input type="submit" value="提交">
    </form>
</body>
</html>

