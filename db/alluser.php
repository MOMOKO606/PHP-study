<?php
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>展示数据库</title>
</head>
<body>
<a href="adduser.html">添加数据</a>
<table border="1">
    <tr>
        <th>id</th><th>姓名</th><th>年龄</th><th>修改</th><th>删除</th>
    </tr>
    <?php
    $conn = ConnectDb();
    $result = mysqli_query($conn,"SELECT * FROM users");
    $rows = mysqli_num_rows($result);
    for($i=0; $i<$rows; $i++){
        $arr = mysqli_fetch_assoc($result);
        $id = $arr["id"];
        $name = $arr["name"];
        $age = intval($arr["age"]);
        echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a> </td>
               <td><a href='deluser.php?id=$id'>删除</a> </td></tr>";
    }
    ?>
</table>
</body>
</html>




