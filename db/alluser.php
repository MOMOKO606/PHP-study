<?php
require_once 'functions.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>所有用户</title>
</head>
<body>
<!-- < a href=”链接的地址”>链接文本</> -->
<a href="adduser.html">添加用户</a>


<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2018/12/26
 * Time: 15:20
 */
// 33行问题：为什么用echo？

$conn = connectDb();
$result = mysqli_query($conn,'SELECT * FROM users');
$rows = mysqli_num_rows($result);

echo "<table style = 'text-align: left;border = '1'>"; // 在php中输出html，所以用echo？
echo "<tr><th>id</th><th>名字</th><th>年龄</th></tr>";

for($i = 0; $i < $rows; $i++){
    $result_arr = mysqli_fetch_assoc($result);

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];

    echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr>";
}

echo "</table>";

?>


</body>
</html>

