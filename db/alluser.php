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
    <title>Document</title>
</head>
<body>
<a href = "adduser.html">添加用户</a>
<table style = 'text-align: left;' border = '1' >
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>年龄</th>
    </tr>
<?php
$conn = connectDb();
$result = mysqli_query($conn,"SELECT * FROM users ORDER BY id DESC");
$rows = mysqli_num_rows($result);

for($i=0; $i<$rows; $i++){
    $result_arr = mysqli_fetch_assoc($result);
    $id = $result_arr["id"];
    $name = $result_arr["name"];
    $age = $result_arr["age"];
    echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr>";
}
?>
</table>
</body>
</html>